<form action="page3.php">
    <?php
    session_start();
    $num = $_POST["num"];
    $_SESSION['num']= $num;

    for ($a = 0; $a < $num; $a++) {
        echo " <label>Enter A Number</label> <input type='text' name='$a' required> <br>";
    }
    ?>
    <button type="submit">Submit</button>
    
</form>