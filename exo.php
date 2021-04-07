<form action="<?php echo $action; ?>" method="POST">
    <input name="nom" value="<?php echo $nom ?>" >
    <input name="prenom" value="<?php echo $prenom ?>" >
    <input type="submit" value="Modifier" >
</form>


<?php

echo $form = new Form();
echo $form->create($action); // créer le début du formulaire
echo $form->text('nom',$nom); // créer un input de type texte avec comme valeur par défaut $nom
echo $form->text('prenom',$prenom); // créer un input de type texte avec comme valeur par défaut $prenom
echo $form->submit('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier
echo $form->end(); //fermer le formulaire

?>