<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../index.php?url=post-product" method="post" enctype="multipart/form-data" >
        <h1>Add Khách HÀng</h1>
        <label for="">ID Khách Hàng </label><br><br>
        <input type="text" name="id" disabled value="Auto..." ><br>
        <label for="">Tên Khách Hàng</label><br><br>
        <input type="text" name="ten" placeholder="Tên khách hàng"><br><br>
        <label for="">Tuổi Khách Hàng</label><br><br>
    <input type="text" name="tuoi_kh" placeholder="Tuổi khách hàng"><br><br>
    <input type="submit" name="btn_kh" value="Thêm khách hàng"><br>
    </form>
    
</body>
</html>