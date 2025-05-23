<?php
require_once 'model/Klub.php';

class KlubViewModel {
    private $klub;
    private $data = [];

    public function __construct() {
        $this->klub = new Klub();
    }

    public function bindInput($data) {
        $this->data = [
            'nama_klub' => htmlspecialchars($data['nama_klub']),
            'benua_klub' => htmlspecialchars($data['benua_klub'])
        ];
    }

    public function getKlubList() {
        return $this->klub->getAll();
    }

    public function getKlubById($id) {
        return $this->klub->getById($id);
    }

    public function getKlub() {
        return $this->klub->getAll();
    }

    public function addKlub() {
        return $this->klub->create(
            $this->data['nama_klub'],
            $this->data['benua_klub']
        );
    }

    public function updateKlub($id) {
        return $this->klub->update(
            $id,
            $this->data['nama_klub'],
            $this->data['benua_klub']
        );
    }

    public function deleteKlub($id) {
        return $this->klub->delete($id);
    }
}

?>