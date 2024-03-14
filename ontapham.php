<?php
// hàm dùng để đóng gói các chức năng giuwps làm gọn code và tái sử dugnj
function ktsochan($n)// những gì viết trong ngoặc được gọi là  tham số
// chúng ta có thể khai báo nhiều tham sso phân cách bằng dấu phẩy 
{
    if($n % 2 == 0){ 
        echo " day la so chan";
    }else {
        echo " day la số lẻ";
    }
}

// echo ktsochan(5);
// khàm không chả về là hàm không có chữ return 
//đối với hàm không trả về thì đầu ra sẽ tự sử lý

function tinhDT($cd,$cr){
    $kq=$cd*$cr;
    echo "kết quả=".$kq; 
}

$a=5;
$b=6;
tinhDT($a,$b);  
// xây dựng 1 hàm không trả về chuyền vào những tham số sau 
// tên năm sinh địa chỉ e mail
// hàm này sẽ xử lý hiển thị ra thông tim tuổi địa chỉ cộng emai
function thongtin($a,$b,$c,$d){
    $nam=date('y')-$b;
    echo $a."-".$nam."-".$c."-".$d;
}
thongtin("Hoàng Đào Kỳ Anh",2000,"CaoPhong","kianhdz123@gmail.com");