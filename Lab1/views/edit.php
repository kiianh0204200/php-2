<!-- edit.php -->

<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Khách Hàng</title>
</head>
<body>
    <form action="index.php?url=update-product" method="post">
        <h1>Edit Khách Hàng</h1>
        <label for="">ID Khách Hàng</label><br>


        <input type="text" name="id_khachhang" value="<?php echo $customer['kh_id']?>" > <br>
        <label for="">Tên Khách Hàng</label><br>
        <input type="text" name="ten" value="<?php echo $customer['tenkh']; ?>"><br>
        <label for="">Tuổi Khách Hàng</label><br>
        <input type="text" name="tuoi_kh" value="<?=$customer['tuoikh']; ?>"><br>
        <input type="submit" name="btn_kh" value="Update Khách Hàng">
    </form>
</body>
</html>
