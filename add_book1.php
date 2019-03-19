<?php
	include 'connection.php';

	if($_POST['image_selector']=="cover")
	{
	 $bookCategory =$_POST['book_category'];
	 $dstfileName = "upload/".$_FILES['coverImage']['name'];
     $tmpfileName = $_FILES['coverImage']['tmp_name'];
	 $sql = "INSERT INTO add_book (book_name, author, download_page, category, detail, image)
VALUES ('$_POST[book_name]', '$_POST[author_name]', '$_POST[link]', '$bookCategory', '$_POST[detail]', '$dstfileName')";

	}
	else if($_POST['image_selector']=="carosel")
	{
		$dstfileName = "carosel/".$_FILES['coverImage']['name'];
		$tmpfileName = $_FILES['coverImage']['tmp_name'];
		$sql = "INSERT INTO carosel (image_name) VALUES ('$dstfileName')";
		
	}


if (mysqli_query($conn, $sql)) {
	move_uploaded_file($tmpfileName, $dstfileName);
}
else{
	echo '<script>alert("Error Occured");</script>';
}

header("Location: admin_panel.php");
//return;
?>