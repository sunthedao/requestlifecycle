<?php

class bike {
    // $Wheels  ;
    public $color;
    public $wheels;
    // public $hands ;
    public function __construct($color, $wheels)
    {   
        $this->color = $color;
        $this->Wheels = $wheels;
        // $this->hands = $hands;

        // $this->move();
    }

    public function move(){
        return "this bike are moving".'<br>';
    }
  
}

class Wheels{
    public $Wheels = [];

    public function __construct($wheels)
    {
        $this->Wheels = $wheels;
    }

    public function rotates(){
     
        foreach($this->Wheels as $wh){
           $wh->rotate().'<br>';
        }
    }

      
    public function countWheels(){
        echo count($this->Wheels);
    }
  
}

class Wheel{
    public $color;
    public $name;


    public function __construct($color , $name)
    {
            $this->color = $color;
            $this->name = $name;
    }


    public function rotate(){
       echo $this->name." rotate".'<br>';
    }


    

}


?>