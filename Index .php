<?php
    // Data biodata (bisa juga diambil dari database jika diinginkan)
    $nama = "Liana";
    $npm = "22313007";
    $prodi = "Teknologi Informasi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h1>Biodata</h1>
    <p>Nama: <?php echo $nama; ?></p>
    <p>NPM: <?php echo $npm; ?></p>
    <p>Prodi: <?php echo $prodi; ?></p>
</body>
</html>
