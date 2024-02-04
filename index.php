<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Page 1</title>
    <style>
        *{
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION['status'])) {
        echo  $_SESSION['status'] ;
        unset($_SESSION['status']);
    }
    ?>
    <form action="page2.php" method="post">
        <label for="num">Enter A Number</label> <input type="text" name="num" id="num" pattern="[0-9]+" required>
        <button>Submit</button>
    </form>
</body>

</html>