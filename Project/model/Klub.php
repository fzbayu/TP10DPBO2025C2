<?php
require_once 'config/Database.php';

class Klub {
    private $conn;
    private $table = 'klub';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id_klub = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama_klub, $benua_klub) {
        $query = "INSERT INTO " . $this->table . " (nama_klub, benua_klub) VALUES (:nama_klub, :benua_klub)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_klub', $nama_klub);
        $stmt->bindParam(':benua_klub', $benua_klub);
        return $stmt->execute();
    }

    public function update($id, $nama_klub, $benua_klub) {
        $query = "UPDATE " . $this->table . " SET nama_klub = :nama_klub, benua_klub = :benua_klub WHERE id_klub = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_klub', $nama_klub);
        $stmt->bindParam(':benua_klub', $benua_klub);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id_klub = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>