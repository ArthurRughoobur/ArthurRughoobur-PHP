<?php
if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse'])
    && !empty($_POST['ville']) && !empty($_POST['cp'])) {
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_SPECIAL_CHARS);
    $adresse = filter_var($_POST['adresse'], FILTER_SANITIZE_SPECIAL_CHARS);
    $ville = filter_var($_POST['ville'], FILTER_SANITIZE_SPECIAL_CHARS);
    $cp = filter_var($_POST['cp'], FILTER_SANITIZE_NUMBER_INT,FILTER_VALIDATE_INT);
    ?>
<table border="15">
    <thead>
    <tr>
        <th>Nom : </th>
        <th>Prenom : </th>
        <th>Adresse : </th>
        <th>Ville : </th>
        <th>Code Postal : </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $nom ?></td>
        <td><?= $prenom ?></td>
        <td><?= $adresse ?></td>
        <td><?= $ville ?></td>
        <td><?= $cp ?></td>
    </tr>
    </tbody>
</table>
<?php
    }else{
    echo "<script>alert(\"Veuillez remplir tous les champs\")</script>";
}
    ?>