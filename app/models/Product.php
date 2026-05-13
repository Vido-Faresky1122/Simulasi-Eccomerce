<?php
namespace App\Models;
require_once '../app/core/Database.php';

use App\Core\Database;

class product extends Database
{
    public function getProduct($id)
    {
        $query = "SELECT * FROM products WHERE id = ?";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function getProducts()
    {
        $query = "SELECT * FROM products";
        $result = $this->connection->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>