<?php
class Mahasiswa
{
    // List of properties
    public $nim;
    public $nama;
    public $programStudi;

    // Method untuk mengatur data mahasiswa
    function setData($nim, $nama, $programStudi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->programStudi = $programStudi;
    }

   
    function getData()
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'programStudi' => $this->programStudi
        ];
    }

    function tampilkanData()
    {
        echo "<p>Data Mahasiswa:</p>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Program Studi: " . $this->programStudi . "<br><br>";
    }
}
