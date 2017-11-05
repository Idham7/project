<html>
<head>
	<title>malasngoding.com</title>
</head>
<body>
	<center><h1>Membuat Upload File Dengan CodeIgniter | MalasNgoding.com</h1></center>
	<?php echo $error;?>

	<?php echo form_open_multipart('upload/action_upload/1');?>

	<input type="file" name="saya" />

	<br /><br />

	<input type="submit" value="upload" />

</form>

	<?php echo form_open_multipart('upload/action_upload/2');?>

	<input type="file" name="berkas" />

	<br /><br />

	<input type="submit" value="upload" />

</form>

</body>
</html>
