<?php
require_once 'connec.php';

$pdo = new \PDO(DSN, USER, PASS);
?>


<h3>Quelle est votre histoire ?</h3>
<form action="index.php" method="post">
    <label for="title">Titre : </label>
    <input type="text" name="title" required>
    <label for="author">Auteur :</label>
    <input type="text" name="author" required>
    <label for="content">Votre histoire :</label>
    <textarea name="content" required></textarea>
    <button type="submit">Envoyez votre histoire !</button>
</form>

<?php
