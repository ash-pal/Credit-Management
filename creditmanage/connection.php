<?php
$con = mysqli_connect('localhost', 'root', '', 'credit');
if ($con) {
/*?>
<script >
	alert('Connection Successful');
</script>
<?php*/
}
else{
	die("No Connection".mysqli_connect_error());
}
?>
