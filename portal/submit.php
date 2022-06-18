
<?php
// Turn off error reporting
error_reporting(0);

define('HOSTNAME','localhost');
define('DB_USERNAME','dclmhub_retreats');
define('DB_PASSWORD','retreats@1.com');
define('DB_NAME', 'dclmhub_retreats');

//global $con;
$db = mysqli_connect(HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("error");
// Check connection
if(mysqli_connect_errno($db))	echo "Failed to connect MySQL: " .mysqli_connect_error();




if (isset($_POST['submit'])){

	$section_id = $_POST['section_id'];
	$sname = $_POST['sname'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$category = $_POST['category'];
	$age = $_POST['age'];
	$states_id = $_POST['states_id'];
	$oldgroup_id = $_POST['oldgroup_id'];
	$outreaches = $_POST['outreaches'];
	$month = $_POST['month'];


	$query1 = $db->query("select * from impact_reg where phone = '$phone' and sname = '$sname' ")or die(mysqli_error());
$count = mysqli_num_rows($query1);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>

<?php
}else{

	$db->query("INSERT INTO impact_reg (sname,name,address,phone,email,gender,category,age,section_id,states_id,oldgroup_id,outreaches,month,date) values('$sname','$name','$address','$phone','$email','$gender','$category','$age','$section_id','$states_id','$oldgroup_id','$outreaches','$month',NOW())")or die(mysqli_error());
	

	?>
	<script>
		alert('Participant/s registered successfully!');
	window.location = "index.php";
</script>
	</script>
	<?php
}};

?>

