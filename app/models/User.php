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
        $name = htmlspecialchars($data['name']);
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);
        $passwordConfirmation = $data['confirm'];
        $birthDate = $data['birth_date'];
        $gender = htmlspecialchars($data['gender']);

        if ($password != $passwordConfirmation) {
            echo "
                <script>
                    alert('Password and Password Confirmation are not match');
                    window.location.href = '/register   ';
                </script>
            ";
            exit;
        }

        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO {$this->table} (name, email, password, birth_date, gender) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("sssss", $name, $email, $passwordHashed, $birthDate, $gender);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: /');
            exit();
        } else {
            die('Error to store users : ' . $stmt->error);
        }
    }

    public function select(array $data)
    {
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);

        $query = "SELECT * FROM users where email = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $user = $stmt->get_result()->fetch_assoc();

        if (isset($user)) {
            $isPasswordMatch = password_verify($password, $user['password']);

            if ($isPasswordMatch) {
                session_regenerate_id(true);
                $_SESSION['user'] = $user;
                header('Location: /');
                exit;
            } else {
                echo "
                    <script>
                        alert('Email or Password wrong');
                        window.location.href = '/login';
                    </script>
                ";
            }
        } else {
            echo "
                <script>
                    alert('Email or Password wrong');
                    window.location.href = '/login'
                </script>
            ";
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