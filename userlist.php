<?php
  
  //Get data from json file
	$file     = file_get_contents('config.json', true);
	$userInfo = json_decode($file);
  
  require('layout/header.php');
?>
  <h2>User Info</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Degree</th>
      <th>Number</th>
      <th>Location</th>
      <th>Gender</th>
      <th>DOB</th>
    </tr>
    <tr>
      <td><?php echo $userInfo->name; ?></td>
      <td><?php echo $userInfo->email; ?></td>
      <td><?php echo $userInfo->degree; ?></td>
      <td><?php echo $userInfo->number; ?></td>
      <td><?php echo $userInfo->location; ?></td>
      <td><?php echo $userInfo->gender; ?></td>
      <td><?php echo $userInfo->age; ?></td>
    </tr>
  </table>
<?php
  require('layout/footer.php');
?>