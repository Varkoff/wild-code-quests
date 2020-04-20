<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Landing</title>
</head>
<body>
<h1>Files uploaded :</h1>
<?php
if(isset($_FILES['avatar'])) {
    $errors     = array();
    $maxsize    = 1048576;
    $acceptable = array(
        'image/jpg',
        'image/gif',
        'image/png'
    );

    if(($_FILES['avatar']['size'] >= $maxsize) || ($_FILES["avatar"]["size"] == 0)) {
        $errors[] = 'File '.'\''.$_FILES['avatar']['name'].'\' = ' .$_FILES['avatar']['size'].'. It is too large. File must be less than 1 megabyte.';
    }

    if((!in_array($_FILES['avatar']['type'], $acceptable)) && (!empty($_FILES["avatar"]["type"]))) {
        $errors[] = 'Invalid file type '.$_FILES['avatar']['type'].' Only wJPG, GIF and PNG types are accepted.';
    }

    if(count($errors) === 0) {
//        move_uploaded_file($_FILES['avatar']['tmpname'], '/store/to/location.file');
        echo "<p style='color:green;'>déplacement possible</p>";
    } else {
        foreach($errors as $error) {
            echo '<p style="color:red;">'.$error.'</p>';
        }

        //die(); //Ensure no more processing is done
    }
}

var_dump($_FILES);











//echo '\''.$_FILES['avatar']['name'].'\'';

//foreach ($_FILES['avatar']['name'] as $key){
//    echo "$key<br>";
//}
//$fileFormat = mime_content_type($_FILES['avatar']['tmp_name']);
//if ( (mime_content_type($_FILES['avatar']['tmp_name'])) == 'image/gif' || (mime_content_type($_FILES['avatar']['tmp_name'])) == 'image/png' || (mime_content_type($_FILES['avatar']['tmp_name'])) =='image/jpeg' || (mime_content_type($_FILES['avatar']['tmp_name'])) == 'image/bmp' || (mime_content_type($_FILES['avatar']['tmp_name'])) =='image/webp'){
//    echo"<h3>C'est un fichier image ! : $fileFormat\n";
//}else{
//    echo"<h3>Ce n'est pas un fichier image : $fileFormat\n";
//}
//
//
//
//// get only the extension (without the dot)
//$extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
//
//echo "$extension\n";
//// A unique name is concatenated with a dot and the $extention avec l'extension récupérée
//$filename = uniqid() . '.' .$extension;
//echo "$filename\n";
//
//// chemin vers un dossier sur le serveur qui va recevoir les fichiers uploadés (attention ce dossier doit être accessible en écriture)
//$uploadDir = 'uploads/';
//// le nom de fichier sur le serveur est ici généré à partir du nom de fichier sur le poste du client (mais d'autre stratégies de nommage sont possibles)
//$uploadFile = $uploadDir . $filename;//basename($_FILES['avatar']['name']);
//
//// on déplace le fichier temporaire vers le nouvel emplacement sur le serveur. Ca y est, le fichier est uploadé
//move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadFile);
?>
<a href="upload.php"><hr>Retour</a>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>