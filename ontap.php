<?php 
$a = 5;// đây là số nguyên
$b = 5.5;// đây là số thực
$c = "Fpoly";// đây là Dữ liệu String
$d = false;// đây là duwx lieeuj boolean
// echo $a." ".$c;
// Mảng 
// cách 1
// $mang = array(5,64,4,6); 
// echo $mang[2];
// cánh 2 danh cho php ohieen bản 7.0 trở lên
$mang =[5,6,7,8];
// echo $mang[2];
// echo $mang[3];
// duyệt mảng là lấy tất cả các phần tử trong mảng ra
// for($i = 0; $i <count($mang); $i++){
//     echo $mang[$i];
// }
// foreach($mang as $key => $as){
//     echo "vi tri".$key."gia tri".$as."<br>";
// }
//mảng liên hơp 
$mangcolor=["red"=>"màu Đỏ","blue"=>"màu Xanh","green"=>"Xanh Dương"];
// $manglh = ["A"=>5,"B"=>6,"C"=>7,"D"=>0];
// echo $manglh["B"];

?>

<style>
    tr{
        color:red;
    }
</style>
<html>
    <table border="1">
    <tr>
    <td>vi tri</td>
    <td>gia tri</td> 
    </tr>
    <?php
    foreach ($mangcolor as $key =>$value)
    {
    ?>
     
    <tr bgcolor="<?php echo $key ?>";>
    <td><?php echo$key?></td>
    <td><?php echo$value?></td> 
    </tr>

    <?php
    }
?>
    </table>
 
</html>