<?php
require_once 'model/Posisi.php';

class PosisiViewModel {
    private $posisi;
    private $data = [];

    public function __construct() {
        $this->posisi = new Posisi();
    }

    public function bindInput($data) {
        $this->data = [
            'nama_posisi' => htmlspecialchars($data['nama_posisi'])
        ];
    }

    public function getPosisiList() {
        return $this->posisi->getAll();
    }

    public function getPosisiById($id) {
        return $this->posisi->getById($id);
    }

    public function getPosisi() {
        return $this->posisi->getAll();
    }

    public function addPosisi() {
        return $this->posisi->create($this->data['nama_posisi']);
    }

    public function updatePosisi($id) {
        return $this->posisi->update($id, $this->data['nama_posisi']);
    }

    public function deletePosisi($id) {
        return $this->posisi->delete($id);
    }
}

?>