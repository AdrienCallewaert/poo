
<?php

require 'form.php';

$form = new Form(array(
    'username' => 'roger'
));

echo $form->input ('username');
echo $form->input ('password');
echo $form->submit ();







$form = new Form();

echo $form->input ('salut');
echo $form->input ('tu');
echo $form->input ('vas');
echo $form->input ('bien');
echo $form->submit ();





?>
