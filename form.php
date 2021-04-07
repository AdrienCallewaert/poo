<?php

class Form{


// garder en memoire
    private $data;

    public $surround = 'p';

//creation constructeur
    public function __construct($data= array()) {

        $this->data=$data;

    }

    private function surround($html){

        return "<{$this->surround}>{$html}</{$this->surround}>";
    } 


    private function getValue($index){

        return $this->data[index];
    }


    public function input($name){
        return $this->surround (
            '<input type="text" name="' . $name . '" value="' .$this->getValue($name). '">'
        );


    }

    public function submit(){

       return $this->surround ( '<button type="submit">envoyer</button>');

    }
}


?>