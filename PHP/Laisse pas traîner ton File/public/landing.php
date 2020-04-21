<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Landing</title>

    <style>
        img{
            width:50%;
            height: auto;
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
<h1>Files uploaded :</h1>
<?php

if (isset($_FILES['avatar'])) {
    $errors = array();
    $maxsize = 1000000;
    $acceptable = array(
        'image/jpg',
        'image/gif',
        'image/png',
        'image/jpeg',
    );

    $files = [];

    $i = 0;
    foreach ($_FILES['avatar']['name'] as $key) {
        array_push($files, array('name' => $_FILES[avatar][name][$i], 'size' => $_FILES[avatar][size][$i], 'type' => $_FILES[avatar][type][$i], 'tmp_name' => $_FILES[avatar][tmp_name][$i], 'error' => $_FILES[avatar][error][$i]));
        $i++;
    }


    foreach ($files as $key) {
        echo "<hr>";
        if ($files['error']){
            echo "<p><span style='color:red;'>Error uploading</span> file".$key['name'];
        }
        if (($key['size'] >= $maxsize) || ($key['size'] == 0)) {
            $errors[] = '\'' . $key['name'] . '\' <span style="color:dodgerblue;">(' .$key['size'] . ') is too large</span>. File must be less than 1 megabyte.';
            var_dump($key);
            echo '<p>\'' . $key['name'] . '\' <span style="color:dodgerblue;">(' .$key['size'] . ') is too large</span>. File must be less than '.$maxsize/1000/1000 .' megabyte.</p>';
        }


        if ((!in_array($key['type'], $acceptable)) && (!empty($key['type']))) {
            $errors[] = $key['name']. ' has invalid file type <span style="color:red;">' . $key['type'] . '</span> Only JPG, GIF and PNG types are accepted.';
            echo "<p>".$key['name']. ' has invalid file type <span style="color:red;">' . $key['type'] . '</span> Only JPG, GIF and PNG types are accepted.</p>';
        }

        if (count($errors) === 0) {
            // get only the extension (without the dot)
            $extension = pathinfo($key['name'], PATHINFO_EXTENSION);

            //A unique name is concatenated with a dot and the $extention avec l'extension récupérée
            $filename = uniqid() . '.' . $extension;

            // chemin vers un dossier sur le serveur qui va recevoir les fichiers uploadés (attention ce dossier doit être accessible en écriture)
            $uploadDir = 'uploads/';

            // le nom de fichier sur le serveur est ici généré à partir du nom de fichier sur le poste du client (mais d'autre stratégies de nommage sont possibles)
            $uploadFile = $uploadDir . $filename;

            // on déplace le fichier temporaire vers le nouvel emplacement sur le serveur. Ca y est, le fichier est uploadé
            move_uploaded_file($key['tmp_name'], $uploadFile);

            echo "<p style='color:green;'>image ". $key['name']." mise en ligne !</p>";
            echo '<img src="'.$uploadFile.'">';
        } else {
//            foreach ($errors as $error) {
//                echo '<p>' . $error . '</p>';
//            }
            //die(); //Ensure no more processing is done
        }
    }
}else{
    echo "<h4>Array \$_FILES is undefined</h4>";
}
?>
<hr>
<a href="upload.php">Retour</a>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>
</html>