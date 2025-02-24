<?php

    if(!empty($_POST)){
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $statut = $_POST['email'];
        $sql="INSERT INTO etudiant (id,nom,prenom,email) values ('$id','$nom','$prenom','$email)";
        mysqli_query($connexion,$sql);
        header('location:index.php');
    }


?>

<div class="container">
    <form action="#" method="POST">
        <label for="">id</label>
        <input type="text" name="id" class="form-control">
        <label for="">nom</label>
        <input type="text" name="nom" class="form-control">
        <label for="">prenomt</label>
        <input type="text" name="prenom" class="form-control">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control">
        <div class="mt-5">
            <button type="submit" class="btn btn-success">Valider</button>
            <button type="reset" class="btn btn-danger">Annuler</button>
        </div>
    </form>
</div>
