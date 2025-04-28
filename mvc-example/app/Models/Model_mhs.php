<?php

     /**
     * Model mahasiswa berfungsi untuk menjalankan query
     * Sebelum menggunakan query, load dulu library database
     */

namespace Models;
use Libraries\Database;

class Model_mhs
{
    public function __construct()
    {
        $db = new Database();
        $this->dbh = $db->getInstance();
    }

    function simpanData($nim, $nama)
    {
        $rs = $this->dbh->prepare("INSERT INTO mahasiswa (nim, nama, created_at) VALUES (?, ?, NOW())");
        $rs->execute([$nim, $nama]);
    }

    function lihatData()
    {
    
        $rs = $this->dbh->query("SELECT * FROM mahasiswa WHERE deleted_at IS NULL");
        return $rs;
    }

    function lihatDataDetail($id)
    {
        $rs = $this->dbh->prepare("SELECT * FROM mahasiswa WHERE deleted_at IS NULL AND id=?");
        $rs->execute([$id]);
        return $rs->fetch();
    }

    public function softDeleteMahasiswa($id)
    {
        $rs = $this->dbh->prepare("UPDATE mahasiswa SET deleted_at = NOW() WHERE id = ?");
        return $rs->execute([$id]);
    }
}
