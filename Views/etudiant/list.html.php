<?php
    $sql="SELECT * FROM etudiant";
    $users = mysqli_query($connexion,$sql);


?>
<div class="container">
    <a class="btn btn-success mt-5" href="?action=addUser">Nouveau</a>
    <table class="table table-bordered mt-5">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">email</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($users)){ ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nom'] ?></td>
                <td><?= $row['prenom'] ?></td>
                <td><?= $row['email'] ?></td>
                <td>
                    <button class="btn btn-primary">Modifier</button>
                    <a class="btn btn-danger" href="?action=deleteUser&&id=<?= $row['id'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
</div>