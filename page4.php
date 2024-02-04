<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "web_mavens");
$same = $_POST['same'];

if(isset($_POST["sum"])){

    
    foreach ($same as $item) {
        echo $item;
        $sql = "INSERT INTO info(val) value('$item')";
        $result = mysqli_query($conn, $sql);
}

if ($result) {
    $_SESSION['status'] = '<div class="alert alert-primary" role="alert">'."successfully inserted". '</div>'    ;
    header("location: index.php"); 
} else {
    $_SESSION['status'] = '<div class="alert alert-warning" role="alert">'."Something went wrong".'</div>';
    header("location: index.php");
}


}

?>