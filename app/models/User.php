<?php
namespace App\Models;
require_once '../app/core/Database.php';

use App\Core\Database;

class user extends Database
{
    protected $table = 'users';

    public function getUsers()
    {
        $users = [];

        $query = "SELECT * from {$this->table}";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();

        while ($user = $result->fetch_assoc()) {
            $users[] = $user;
        }

        return $users;
    }

    public function getUser(int $id)
    {
        $query = "SELECT * from {$this->table} where id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        return $user;
    }

    public function insert(array $data)
    {
        $nis = htmlspecialchars($data['nis']);
        $name = htmlspecialchars($data['name']);
        $class = htmlspecialchars($data['class']);
        $phoneNumber = htmlspecialchars($data['phone_number']);

        $query = "INSERT INTO {$this->table} (nis, name, class, phone_number) VALUES (?, ?, ?, ?)";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("ssss", $nis, $name, $class, $phoneNumber);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: /users');
            exit();
        } else {
            die('Error to store users : ' . $stmt->error);
        }
    }

    public function update(int $id, array $data)
    {
        $name = htmlspecialchars($data['name']);
        $nis = htmlspecialchars($data['nis']);
        $class = htmlspecialchars($data['class']);
        $phoneNumber = htmlspecialchars($data['phone_number']);
        $id = htmlspecialchars($id);

        $query = "UPDATE {$this->table} SET name=?, nis=?, class=?, phone_number=? WHERE id=?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("ssssi", $name, $nis, $class, $phoneNumber, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: /users');
            exit();
        } else {
            die('Error to store users : ' . $stmt->error);
        }
    }

    public function delete(int $id)
    {
        $id = htmlspecialchars($id);

        $query = "DELETE FROM {$this->table} WHERE id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: /users');
            exit();
        } else {
            die('Error to store users : ' . $stmt->error);
        }
    }
}
?>