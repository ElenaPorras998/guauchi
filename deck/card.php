<?php

class card{
    public $color=null;
    public $value=null;
    public $type=null;
    // public $ty=null;
    
    public function __construct($value, $type){
        if ($type=='heart' || $type=='diamond')
        {
            $this->color='red';
        }
        else
        {
            $this->color='black';            
        }
        $this->value=$value;
        $this->type=$type;
    }    

    // public function addCenter($type)
    // {
    //     if ($this->value=='J' || $this->type=='Q' || $this->type=='K')
    //     {
    //         if ($this->value=='J')
    //         {
    //             $ty='jack';
    //         }
    //         if ($this->value=='Q')
    //         {
    //             $ty='queen';
    //         }
    //         if ($this->value=='K')
    //         {
    //             $ty='king';
    //         }
    //         echo '<div class="center"><img class="face" src="faces-suits/face-'.$this->ty.'-heart.png"></div>';
    //     } 
    // }    

    public function __toString()
    {
        return '<div class="card" data-type="'.$this->type.'" data-value="'.$this->value.'">
        <div class="small upper '.$this->color.'"><p> '.$this->value.' </p><img class="icon" src="faces-suits/'.$this->type.'s.png"></div>
        <div class="small lower '.$this->color.'"><p> '.$this->value.' </p><img class="icon" src="faces-suits/'.$this->type.'s.png"></div>
        </div>';
    }
} 
?>
