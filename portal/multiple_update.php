<?php
include 'db.php';

if(isset($_POST['hidden_id']))
{
 $name = $_POST['name'];
 $address = $_POST['address'];
 
 $phone = $_POST['phone'];
 $na = $_POST['na'];
 $group_id = $_POST['group_id'];
 $district_id = $_POST['district_id'];
 
 
 
 
 $id = $_POST['hidden_id'];
 for($count = 0; $count < count($id); $count++)
 {
  $data = array(
   ':name'   => $name[$count],
   ':address'  => $address[$count],
   ':phone'  => $phone[$count],
   ':na' => $na[$count],
   ':group_id'   => $group_id[$count],
   ':district_id'   => $district_id[$count],
   ':id'   => $id[$count]
  );
  $query = "
  UPDATE impact_reg 
  SET name = :name, address = :address, phone = :phone, na = :na, group_id = :group_id, admins_id = :group_id, district_id = :district_id, dist_id = :district_id  
  WHERE converts_id = :id
  ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
 }
}

?>
