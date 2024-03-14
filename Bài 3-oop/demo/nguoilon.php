<?php
class connguoi{
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function an(){
        echo "an bang mon<br>";
    }
    public function settay($settay){
        $this->tay=$settay;
    }
    public function setchan($setchan){
        $this->chan=$setchan;
    }
}
class nguoilon extends connguoi{
  
    public $long;
    public function di(){
        echo "Người Lớn đi bằng:".$this->chan."Chan";
    }
   
    public function noi(){
        
    }
}

class trecon extends connguoi{
   

    public function bo(){
        echo "Trẻ Con Bò Bằng:".$this->tay."tay".$this->chan."chan";
    }
 
    
}
function nguoilon(){
    $nl = new nguoilon();
    $nl ->setchan(2);
    $nl ->di();
}
function trecon()  {
    $tc = new trecon();
    $tc->an();
    $tc->setchan(18);
    $tc->settay(5);
    $tc->bo();
}



 trecon();
echo "<br><br><br>";
 nguoilon();