<?php 
namespace Controllers;
use Models\Model_mhs;

class Mahasiswa
{
    public function __construct()
    {
        $this->mhs = new Model_mhs();
    }

    public function index()
    {
        require_once 'app/Views/index.php';
    }

    function show_data()
    {
        if (!isset($_GET['i'])) {
            // Menampilkan hanya data yang belum dihapus
            $rs = $this->mhs->lihatData();
            require_once('app/Views/mhsList.php');
        } else {
            // Menampilkan detail mahasiswa
            $rs = $this->mhs->lihatDataDetail($_GET['i']);
            require_once('app/Views/mhsDetail.php');
        }
    }

    function save()
    {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];

        // Simpan data
        $this->mhs->simpanData($nim, $nama);
        header("Location: /mvc-example/index.php?act=tampil-data");
        exit();
    }

    // Fungsi soft delete mahasiswa
    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->mhs->softDeleteMahasiswa($id);
        }
        header("Location: /mvc-example/index.php?act=tampil-data");
        exit();
    }
}
