<?php
	require_once 'controllers/EmployeesController.php';
	$key = $_GET["key"];
	$employees = searchEmployees($key);

	if(count($employees) > 0){
		// foreach($employees as $e){
			// echo "<a href='edit_admin.php?id=".$e["id"]."'>".$e["f_name"].$e["username"]."</a><br>";
?>
<table class="content-table">
  <thead>
    <th>Sl#</th>
    <th>Image</th>
    <th>First name</th>
    <th>Last name</th>
    <th>Username</th>
    <th>Password</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Joining Date</th>
    <th>Gender </th>
    <th>Role</th>
    <th>Salary</th>
    <th>Address</th>
    <th>Action</th>
  </thead>
  <tbody>
    <?php
      $i=1;
      foreach ($employees as $e) {
        // $id =$e["id"];
        list($year,$month,$day) = (explode("-",$e["joining_date"]));
        $joining_date = $day.'-'.$month.'-'.$year;
        echo "<tr>";
          echo "<td>$i</td>";
          echo "<td><img width='80px' height='100px' src='".$e["image"]."'></td>";
          echo "<td>".$e["f_name"]."</td>";
          echo "<td>".$e["l_name"]."</td>";
          echo "<td>".$e["username"]."</td>";
          echo "<td>".$e["password"]."</td>";
          echo "<td>".$e["email"]."</td>";
          echo "<td>".$e["phone"]."</td>";
          echo "<td>".$joining_date."</td>";
          echo "<td>".$e["gender"]."</td>";
          echo "<td>".$e["role"]."</td>";
          echo "<td>".$e["salary"]."</td>";
          echo "<td>".$e["address"]."</td>";
          echo'<td> <a href="edit_employees.php?id='.$e["id"].'">Edit</a>';
          echo'<a href="delete_employees.php?id='.$e["id"].'">Delete</a></td>';
          // echo' <a href="">Delete</a> </td>';
        echo "</tr>";
        $i++;
      }
      // echo "<pre>";
      // print_r($students);
      // echo "</pre>";
      // echo $dept_id;
    }
     ?>

  </tbody>
</table>
