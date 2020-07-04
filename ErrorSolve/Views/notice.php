<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR LOG</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>ERROR LOG</h1>
        <div class="alert alert-primary" role="alert">
            <h3>DETAIL</h3>
            <?php echo $msg; ?>
        </div>
    </div>

</body>

</html>