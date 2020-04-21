<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello, world!</title>
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

    <form action="landing.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="imageUpload">Upload a profile image</label>
            <input type="file" id="upload_file" name="avatar[]" multiple="multiple" id="imageUpload" required/>
        </div>
        <div class="form-group">
            <input type="submit" value="Upload images"/>
        </div>
    </form>
    <p>Uploaded images</p>
        <?php
        $it = new FilesystemIterator(dirname('uploads/.'));

        echo"<div class='row'>";
        $iteration = 0;
        foreach ($it as $fileinfo) {
            $pathname = $fileinfo->getPathname();

            echo "<div class='col-4'>";
            echo "<img src='$pathname'>";
            echo "<figcaption>$pathname</figcaption>";
            echo"</div>";
            $iteration++;
            if (($iteration % 3 == 0) && ($iteration>0)){
                echo "<div class='row'>";
            }
        }
        ?>

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
