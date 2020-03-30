<?php
require_once 'connec.php';

$pdo = new \PDO(DSN, USER, PASS);

if (!empty($_POST['firstname']) && !empty($_POST['lastname'])) {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);

    $query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';
    $statement = $pdo->prepare($query);

    $statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
    $statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
    $statement->execute();
}

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll();

?>

<?php
foreach ($friends as $key) {

    echo '<li>' . $key['firstname'] . ' ' . $key['lastname'] . '</li>';
}
?>
<form action="index.php" method="post">
    <label for="firstname">Nom : </label>
    <input type="text" name="firstname" required>
    <label for="lastname">Prénom : </label>
    <input type="text" name="lastname" required>
    <input type="submit">
</form>
<?php
$_POST['firstname'] ="";
$_POST['lastname'] ="";

