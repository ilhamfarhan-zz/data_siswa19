<?php 
    error_reporting(0);
    include 'koneksi.php';
?>
<html lang="en">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data siswa</title>
</head>
<body>
<div class="container">
    <br>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="caridata.php">Cari Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data.php">Data Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <h3>Cari data siswa</h3>

    <form action="" method="POST">
        <label>Cari :</label>
        <input type="text" name="query" size="40" placeholder="Masukan NIS/Nama....">
        <input type="submit" name="cari" value="SEARCH">       
    </form>
    <form action="" method="POST">
            <table class="table">
            <thead class="table-light">
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat dan tanggal lahir</th>
        </theadtr>
        <?php
        $no = 1 ;
            $query = $_POST['query'];
            if($query != ''){
                $select = mysqli_query($koneksi,"SELECT * FROM dbsiswa WHERE nama like '".$query."' OR nis like '".$query."' ");
            }else{
                $select = mysqli_query($koneksi,"SELECT * FROM dbsiswa");
                }
            if(mysqli_num_rows($select)){
                while($data = mysqli_fetch_array($select)){
        ?>
                    <tbody>
                        <td><?= $no ++ ?></td>
                        <td><?= $data['nis'];?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['tgl'];?></td>
                    </tbody>

                <?php }}else{
                    echo '<tr><td colspan="5">Tidak ada data</td></tr>';
                    } ?>
    </table>
</div>    
</body>
</html>