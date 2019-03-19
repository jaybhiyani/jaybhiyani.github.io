<?php
	include("connection.php");
    $sql = "DELETE from add_book where book_name='".$_POST['book_name']."'";

    mysqli_query($conn, $sql);

    header('Location: admin_panel.php');
    mysqli_close($conn);
?>