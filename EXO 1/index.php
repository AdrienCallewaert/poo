  
<?php
    require 'form.php';

    $formulaire = new Form();
    $country = array("Belgium","France","Deutsh","Danemark");
    $food = array("Ananas","cerise","salade","Pommes");
    $junkfood = array("Burger","chips","monster","fritte");
    $formulaire->create('index.php');
    $formulaire->input('lastName','text','name');
    $formulaire->input('firstName','text','name');
    $formulaire->select('country','country',$country);
    $formulaire->radio("radio",$food);
    $formulaire->checkbox("checkbox",$junkfood);
    $formulaire->submit('modifier');
    $formulaire->end();
?>