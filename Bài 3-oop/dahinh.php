<?php 
//interface k phải là class cho lên nó sẽ k có thuộc tính và 
//class bình thường nhưng nó sẽ có phương thức trùy tươngj như abstract class
// interface {
// function di() ; // định nghĩa phương thức như thế này là nó tự hiểu là phương thức trìu tương
// }
//  class concho implements dichuyen{
//     public function di(){
//         echo "con cho di bang 4 chan"
//     }
//  }

//  class connguoi implements dichuyen{
//     public function di(){
//         echo "con cho di bang 2 chan"
//     }
//  }

//  class oto implements dichuyen{
//     public function di(){
//         echo "con cho di bang 4 bánh"
//     }
//  }

 // xây dựng class ConChom và 1 class máy bay 
 // xác định phương thức trìu tượng và interface phù hợp cho 2 class trên 

 interface dichuyen {
    function di();
    function bay();
    function an();
 }

 class maybay implements dichuyen {
    public function di(){
        echo "di bang 4 bánh ";
    }
    public function bay(){
        echo "bay bang động cơ cánh";
    }
 }
 class conchim implements dichuyen {
    public function di(){
        echo "di bang 2 chân ";
    }
    public function bay(){
        echo "bay bang 2 cánh";
    }
 }