<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<body>
<table>
  <caption font-align="center">USER DETAILS<br></caption>
<tbody>
<?php

include "config.php"; // Using database connection file here

$records = mysqli_query($link,"select * from blood_train"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <th scope="col"><?php echo $data['COL 1']; ?></th>
    <th scope="col"><?php echo $data['COL 2']; ?></th>
    <th scope="col"><?php echo $data['COL 3']; ?></th>
    <th scope="col"><?php echo $data['COL 4']; ?></th>
    <th scope="col"><?php echo $data['COL 5']; ?></th>
    <th scope="col"><?php echo $data['COL 6']; ?></th>
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($link); // Close connection ?>

</body>
</html>
