<?php
require_once 'model/Klub.php';
require_once 'model/Pemain.php';
require_once 'model/Posisi.php';

class PemainViewModel {
    private $pemain;
    private $posisi;
    private $klub;
    private $data = [];

    public function __construct() {
        $this->pemain = new Pemain();
        $this->posisi = new Posisi();
        $this->klub = new Klub();
    }

      public function bindInput($input) {
          $this->data = $input;
      }

    public function getPemainList() {
        return $this->pemain->getAll();
    }

    public function getPemainById($id) {
        return $this->pemain->getById($id);
    }

    public function getPosisi() {
        return $this->posisi->getAll();
    }

    public function getKlub() {
        return $this->klub->getAll();
    }

    public function addPemain() {
        return $this->pemain->create(
            $this->data['nama_pemain'],
            $this->data['asal_negara'],
            $this->data['usia'],
            $this->data['id_posisi'],
            $this->data['id_klub'],
            $this->data['harga_pasar']
        );
    }

    public function updatePemain($id) {
        return $this->pemain->update(
            $id,
            $this->data['nama_pemain'],
            $this->data['asal_negara'],
            $this->data['usia'],
            $this->data['id_posisi'],
            $this->data['id_klub'],
            $this->data['harga_pasar']
        );
    }

    public function deletePemain($id) {
        return $this->pemain->delete($id);
    }
}
?>
