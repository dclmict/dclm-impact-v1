<?php

$connect = new PDO("mysql:host=localhost;dbname=dclmhub_retreats", "dclmhub_retreats", "retreats@1.com");

if(isset($_POST["type"]))
{
 if($_POST["type"] == "category_data")
 {
  $query = "
  SELECT * FROM states 
  ORDER BY state_name ASC
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $data = $statement->fetchAll();
  foreach($data as $row)
  {
   $output[] = array(
    'id'  => $row["states_id"],
    'name'  => $row["state_name"]
   );
  }
  echo json_encode($output);
 }
 else
 {
  $query = "
  SELECT * FROM oldgroup2 
  WHERE states_id = '".$_POST["category_id"]."' 
  ORDER BY oldgroup_name ASC
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $data = $statement->fetchAll();
  foreach($data as $row)
  {
   $output[] = array(
    'id'  => $row["oldgroup_id"],
    'name'  => $row["oldgroup_name"]
   );
  }
  echo json_encode($output);
 }
}

?>
