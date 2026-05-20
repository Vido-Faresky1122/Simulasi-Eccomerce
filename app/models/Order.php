<?php
namespace App\Models;
require_once '../app/core/Database.php';

use App\Core\Database;

class Order extends Database
{
    protected $table = "orders";
    public function insert(array $data)
    {
        $user_id = htmlspecialchars($data['user_id']);
        $status = htmlspecialchars($data['status']);
        $query = "INSERT INTO {$this->table} (user_id, status, created_at) VALUES (?, ?, NOW())";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("is", $user_id, $status);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return $this->connection->insert_id;
        } else {
            die('Error insert order : ' . $stmt->error);
        }
    }
}