<?php 

    require_once("../database/connection.php");

    $id = $_GET['id'];

    mysqli_query($dbc, "DELETE FROM tblsubjects WHERE subject_id='$id'");
    header("Location: ../index.php");

?>