<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <div class="alert" role="alert">
            <?php
            if (!empty($_SESSION["VALIDATE_MESSAGE"])) {
                echo $_SESSION["VALIDATE_MESSAGE"];
            }
            // session_destroy();
            ?>
        </div>
        <form action="controller.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input name="tittle" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</body>

</html>