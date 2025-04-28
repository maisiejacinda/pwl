<html>
<head>
    <title>Native MVC Example</title>
    <link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
    <script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">&nbsp;</div>
            <div class="col-md-4">
                <h3>Data Mahasiswa</h3>
                <table class="table table-responsive table-bordered table-striped">
                    <tr>
                        <td>No</td>
                        <td>NIM</td>
                        <td>Nama</td>
                        <td>Created At</td>
                        <td>Aksi</td>
                    </tr>
                    <?php 
                        foreach ($rs as $mahasiswa => $list) {
                            echo '<tr id="row-'.$list['id'].'">
                                <td><a href="?act=tampil-data&i='.$list['id'].'">'.$list['id'].'</a></td>
                                <td>'.$list['nim'].'</td>
                                <td>'.$list['nama'].'</td>
                                <td>'.$list['created_at'].'</td>
                                <td><a href="#" onclick="hapusMahasiswa('.$list['id'].'); return false;">Delete</a></td>
                            </tr>';
                        }
                    ?>
                </table>
            </div>
            <div class="col-md-4">&nbsp;</div>
        </div>
    </div>

    <script>
    function hapusMahasiswa(id) {
        if (confirm("Yakin ingin menghapus?")) {
            fetch("?act=delete&id=" + id, { method: "GET" })
            .then(response => {
                if (response.ok) {
                    document.getElementById("row-" + id).remove();
                }
            });
        }
    }
    </script>
</body>
</html>
