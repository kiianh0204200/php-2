<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: auto;
        }
        .container{
            width: 980px;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <table border = 1>  
            <tr >
           <td>
               id khang hàng
           </td>
           <td>
               Tên Khánh Hàng
           </td>
           <td> Tuổi</td>
           <td> Thêm</td>
           <td> SỬa</td>
           <td>Xóa</td>
       </tr>

       <?php foreach ($product as $key => $value){

        ?>
       <tr >
        <td>
            <?php echo $value['kh_id']; ?>
        </td>
        <td>
        <?php echo $value['tenkh']; ?>
        </td>
        <td> <?php echo $value['tuoikh']; ?></td>
        <td> <a href="views/them.php">Thêm</a></td>
        <td> <a href="index.php?url=edit-product&id=<?=$value['kh_id'] ?>">sửa</a></td>
        <td> <a href="index.php?url=delete-product&id=<?=$value['kh_id'] ?>">Xóa</a></td>
    </tr>
    <?php
       }
    ?>
    </table>
    </div>
   
 
</body>
</html>