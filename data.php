<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
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
                        <a class="nav-link disabled" href="data.php" tabindex="-1" aria-disabled="true">Data Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <h1 style="text-align:center;">Data Siswa</h1>
    <br>
        <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi,"SELECT * FROM dbsiswa");
        ?>
        <form action="" method="post">
            <table class="table">
                <thead class="table-light">
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tempat dan tanggal lahir</th>
                </thead>
                <?php if(mysqli_num_rows($query)>0){ ?>
                <?php
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tbody>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["nis"];?></td>
                    <td><?php echo $data["nama"];?></td>
                    <td><?php echo $data["tgl"];?></td>
                </tbody>
                <?php $no++; } ?>
                <?php } ?>
            </table>
        </form>
</div>
</body>
</html>
