<?php
    $conn = mysqli_connect("172.21.0.2", "root", "password", "Trucorp");
    if(!$conn)
    {
        echo "Database error";
    }
    $rows = [];
    $res = $conn->query("SELECT * FROM users");
    while($row = mysqli_fetch_assoc($res))
    {
        $rows[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
        </tr>
        <?php $i=0?>
        <?php foreach($rows as $row): ?>
        <tr>
            <td><?php echo $row["ID"] ?></td>
            <td><?php echo $row["Nama"] ?></td>
            <td><?php echo $row["Alamat"] ?></td>
            <td><?php echo $row["Jabatan"] ?></td>
            <?php $i+=1?>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php echo "Total jumlah user: " . $i;?>
</body>
</html>