<?php
require_once 'connec.php';

$pdo = new \PDO(DSN, USER, PASS);

if (!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['content'])) {

    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $content = trim($_POST['content']);
    echo "<h2>titre : $title | autheur : $author | content : $content </h2>";

    $query = 'INSERT INTO story (title, content, author) VALUES (:title, :content, :author)';
    $statement = $pdo->prepare($query);

    $statement->bindValue(':title', $title, \PDO::PARAM_STR);
    $statement->bindValue(':content', $content, \PDO::PARAM_STR);
    $statement->bindValue(':author', $author, \PDO::PARAM_STR);
    $statement->execute();
}

$query = "SELECT * FROM story";
$statement = $pdo->query($query);
$stories = $statement->fetchAll();

?>
<style>
    table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    table td, table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    table tr:nth-child(even){background-color: #f2f2f2;}

    table tr:hover {background-color: #ddd;}

    table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>
<table>
    <tr>
    <th>Titre</th>
    <th>Auteur</th>
    <th>Histoire</th>
    </tr>
    <?php
    foreach ($stories as $key){
        echo "<tr><td>".$key['title']."</td><td>".$key['author']."</td><td>".$key['content']."</td></tr>";
    }
   ?>
</table>
