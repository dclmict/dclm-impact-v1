<?php
// (A) DATABASE SETTINGS - CHANGE THESE TO YOUR OWN!
define('DB_HOST', 'localhost');
define('DB_NAME', 'dclmhub_retreats');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'dclmhub_retreats');
define('DB_PASSWORD', 'retreats@1.com');

// (B) ATTEMPT DATABASE CONNECTION
try {
  $connect = new PDO(
    "mysql:host=". DB_HOST .";dbname=". DB_NAME .";charset=". DB_CHARSET,
    DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }

  session_start(); 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
<?php
$main = $_SESSION['username'];
$query = "SELECT * FROM impact_reg
LEFT JOIN oldgroup2 ON impact_reg.oldgroup_id = oldgroup2.oldgroup_id  where group_id = 0 and district_id = 0 and oldgroup2.oldgroup_name = '$main'";

$statement = $connect->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }

 echo json_encode($data);
}

?>
