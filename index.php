
<?php

require 'form.php';

$form = new Form(array(
    'username' => 'salut roger'
));

echo $form->input ('username');
echo $form->input ('password');
echo $form->submit ();





?>
