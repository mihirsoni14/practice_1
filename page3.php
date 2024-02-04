<form action="page4.php" method="post">
    <?php
    session_start();
    $num = $_SESSION['num'];

    for ($i = 0; $i < $num; $i++) {
        $get = $_GET[$i];
        echo "<input name='same[]' id='uniq' type='checkbox' value='$get'>" . $get . "<br/>";
    }
    ?>
    <button type="submit" name='sum'>Submit</button>
</form>