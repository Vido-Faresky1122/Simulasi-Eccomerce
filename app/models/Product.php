<?php
namespace App\Models;
require_once '../app/core/Database.php';

use App\Core\Database;

class product extends Database
{
    protected $table = 'products';
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

    public function insert(array $data)
    {
        session_start();

        if (!isset($_SESSION['image'])) {
            die('Image belum diupload');
        }

        $image = $_SESSION['image'];
        $name = htmlspecialchars($data['name']);
        $description = htmlspecialchars($data['description']);

        $query = "INSERT INTO {$this->table} (image, name, description) VALUES (?, ?, ?)";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("sss", $image, $name, $description);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            unset($_SESSION['image']);
            header('Location: /admin/profile');
            exit();
        } else {
            die('Error to store product : ' . $stmt->error);
        }
    }

    public function destroy($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }

    public function getAll()
    {
        $query = "SELECT * FROM {$this->table}";
        $result = $this->connection->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>