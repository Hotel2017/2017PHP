
<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo "<form method=\"post\" action=\"upload/do_upload\"  enctype=\"multipart/form-data\">";
?>

<input type="file" name="userfile" size="20" />
<input type="hidden" name="room_img1" value="21">
<input type="hidden" name="room_img2" value="4_1">
<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>