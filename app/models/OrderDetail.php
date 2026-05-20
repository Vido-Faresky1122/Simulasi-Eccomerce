<?php
namespace App\Models;
require_once '../app/core/Database.php';
use App\Core\Database;

class OrderDetail extends Database
{
    protected $table = "order_details";
    public function insert(array $data)
    {
        $order_id = htmlspecialchars($data['order_id']);
        $product_id = htmlspecialchars($data['product_id']);
        $quantity = htmlspecialchars($data['quantity']);
        $query = "INSERT INTO {$this->table} (product_id, order_id, quantity, created_at) VALUES (?, ?, ?, NOW())";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("iii", $product_id, $order_id, $quantity);
        $stmt->execute();
        
        if ($stmt->affected_rows <= 0) {
            die('Error insert order detail : ' . $stmt->error);
        }
    }
}