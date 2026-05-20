<?php
namespace App\Controller;
require_once '../app/core/Controller.php';
require_once '../app/models/Product.php';
require_once '../app/models/User.php';

use App\Core\Controller;

use PDO;
class CartController extends Controller
{

    public function cart()
    {
        session_start();
        $this->auth();

        $db = new PDO("mysql:host=localhost;dbname=sch_eccomerce", "root", "");

        $user_id = $_SESSION['user']['id'];

        $stmt = $db->prepare(" SELECT ci.id, ci.product_id, ci.quantity, p.name, p.image, p.description FROM cart_items ci JOIN products p ON p.id = ci.product_id WHERE ci.user_id = ?");
        $stmt->execute([$user_id]);
        $cartItems = $stmt->fetchAll();

        $this->view('cart', ['cartItems' => $cartItems]);
    }

    public function add()
    {
        session_start();

        $user_id = $_SESSION['user']['id'];
        $product_id = $_POST['product_id'];
        $quantity = $_POST['quantity'] ?? 1;

        $db = new PDO("mysql:host=localhost;dbname=sch_eccomerce", "root", "");

        $stmt = $db->prepare("SELECT * FROM cart_items WHERE user_id = ? AND product_id = ?");
        $stmt->execute([$user_id, $product_id]);
        $cart = $stmt->fetch();

        if ($cart) {
            $stmt = $db->prepare("UPDATE cart_items SET quantity = quantity + ? WHERE id = ?");
            $stmt->execute([$quantity, $cart['id']]);
        } else {
            $stmt = $db->prepare("INSERT INTO cart_items (user_id, product_id, quantity) VALUES (?, ?, ?)");
            $stmt->execute([$user_id, $product_id, $quantity]);
        }

        header("Location: /cart");
        exit;
    }

    public function delete()
    {
        session_start();
        $db = new PDO("mysql:host=localhost;dbname=sch_eccomerce", "root", "");
        $id = $_POST['id'];
        $user_id = $_SESSION['user']['id'];
        $stmt = $db->prepare("
        DELETE FROM cart_items
        WHERE id = ? AND user_id = ?
    ");
        $stmt->execute([$id, $user_id]);
        header("Location: /cart");
        exit;
    }
}


?>