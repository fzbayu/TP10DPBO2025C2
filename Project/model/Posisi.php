<?php
require_once 'config/Database.php';

class Posisi {
    private $conn;
    private $table = 'posisi';

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
        $query = "SELECT * FROM " . $this->table . " WHERE id_posisi = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama_posisi) {
        $query = "INSERT INTO " . $this->table . " (nama_posisi) VALUES (:nama_posisi)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_posisi', $nama_posisi);
        return $stmt->execute();
    }

    public function update($id, $nama_posisi) {
        $query = "UPDATE " . $this->table . " SET nama_posisi = :nama_posisi WHERE id_posisi = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_posisi', $nama_posisi);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id_posisi = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>