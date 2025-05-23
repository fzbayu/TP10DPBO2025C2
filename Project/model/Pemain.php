<?php
require_once 'config/Database.php';

class Pemain {
    private $conn;
    private $table = 'pemain';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT p.*, ps.nama_posisi, k.nama_klub, k.benua_klub 
                  FROM " . $this->table . " p
                  LEFT JOIN posisi ps ON p.id_posisi = ps.id_posisi
                  LEFT JOIN klub k ON p.id_klub = k.id_klub";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT p.*, ps.nama_posisi, k.nama_klub, k.benua_klub 
                  FROM " . $this->table . " p
                  LEFT JOIN posisi ps ON p.id_posisi = ps.id_posisi
                  LEFT JOIN klub k ON p.id_klub = k.id_klub
                  WHERE p.id_pemain = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama_pemain, $asal_negara, $usia, $id_posisi, $id_klub, $harga_pasar) {
        $query = "INSERT INTO " . $this->table . " 
                  (nama_pemain, asal_negara, usia, id_posisi, id_klub, harga_pasar)
                  VALUES (:nama_pemain, :asal_negara, :usia, :id_posisi, :id_klub, :harga_pasar)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_pemain', $nama_pemain);
        $stmt->bindParam(':asal_negara', $asal_negara);
        $stmt->bindParam(':usia', $usia);
        $stmt->bindParam(':id_posisi', $id_posisi);
        $stmt->bindParam(':id_klub', $id_klub);
        $stmt->bindParam(':harga_pasar', $harga_pasar);
        return $stmt->execute();
    }

    public function update($id, $nama_pemain, $asal_negara, $usia, $id_posisi, $id_klub, $harga_pasar) {
        $query = "UPDATE " . $this->table . " SET
                  nama_pemain = :nama_pemain,
                  asal_negara = :asal_negara,
                  usia = :usia,
                  id_posisi = :id_posisi,
                  id_klub = :id_klub,
                  harga_pasar = :harga_pasar
                  WHERE id_pemain = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_pemain', $nama_pemain);
        $stmt->bindParam(':asal_negara', $asal_negara);
        $stmt->bindParam(':usia', $usia);
        $stmt->bindParam(':id_posisi', $id_posisi);
        $stmt->bindParam(':id_klub', $id_klub);
        $stmt->bindParam(':harga_pasar', $harga_pasar);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id_pemain = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>
