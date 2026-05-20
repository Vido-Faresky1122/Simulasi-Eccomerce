<?php

namespace App\Controller;

require_once '../app/core/Controller.php';
require_once '../app/models/Order.php';
require_once '../app/models/OrderDetail.php';

use App\Core\Controller;
use App\Models\Order;
use App\Models\OrderDetail;

class CheckoutController extends Controller
{

    public function checkout()
    {
        $this->auth();

        $db = new \mysqli("localhost", "root", "", "sch_eccomerce");

        $user_id = $_SESSION['user']['id'];

        $query = "SELECT cart_items.*, products.name, products.image FROM cart_items JOIN products ON products.id = cart_items.product_id WHERE cart_items.user_id = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $checkoutItems = $result->fetch_all(MYSQLI_ASSOC);

        $this->view('checkout', [
            'checkoutItems' => $checkoutItems
        ]);
    }

    public function checkoutPost()
    {
        session_start();
        $db = new \mysqli("localhost", "root", "", "sch_eccomerce");
        $user_id = $_SESSION['user']['id'];
        $query = "SELECT * FROM cart_items WHERE user_id = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $cartItems = $result->fetch_all(MYSQLI_ASSOC);
        if (empty($cartItems)) {
            die("cart kosong");
        }
        $orderModel = new Order();
        $order_id = $orderModel->insert([
            'user_id' => $user_id,
            'status' => 'pending'
        ]);
        if (!$order_id) {
            die("order gagal");
        }
        $orderDetailModel = new OrderDetail();
        foreach ($cartItems as $item) {
            $orderDetailModel->insert([
                'order_id' => $order_id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity']
            ]);

        }
        $delete = $db->prepare("DELETE FROM cart_items WHERE user_id = ?");
        $delete->bind_param("i", $user_id);
        if (!$delete->execute()) {
            die($delete->error);
        }
        header("Location: /cart");
        exit();
    }
}