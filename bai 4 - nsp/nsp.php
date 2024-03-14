<?php
include "nsp1.php";
include "nsp2.php";
use nsp1 as ns1; // đổi tên namespace;
$sv = new ns1\sinhvien("huy",1996);
$sv ->hienthithongtin();

$sv2 = new ns1\sinhvien("kanh",1996);
$sv2 ->hienthithongtin();
// name space luôn luôn được đặt ở đầu file php 
// name space đóng vai trò là không gian tên đại diện cho class/function / biến đó và giải quyết 