<?php

namespace App;

class comment{

    public $users;
    public $cmt;
    public $Array; 
    function __construct($usr,$comt){
        //echo 'run '.'<br>';
        $this->users = $usr;
        //echo 'run1';
        $date1 = new \DateTime('NOW');
        
        //$this->cmt = $comt;
        //var_dump($this->cmt);
        $name = $this->users->getName();
        foreach ($comt as $i)
        {
            $this->Array[$name][$i] = $date1->format('d-m-Y');
            $date1->modify("+1 days");
            //var_dump($this->Array[$name][$i]).'<br>';
        }                      
        //var_export($this->Array);
    }

    public function get() : void{
        echo $this->users->getEmail();
    }

    public function getMess($time) : void{
        //var_dump($time);
        echo $this->users->getName().': <br>';
        foreach ($this->Array as $key => $value){
            foreach ($value as $k=>$v){
                //echo "<br> $key => $k => $v <br>";                
                if (strtotime($v)>strtotime($time)) 
                    echo "<br> $k - $v <br>";
            }
        }
        echo '<br>';

    }
}