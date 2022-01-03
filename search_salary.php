<?php
	require_once 'controllers/SalaryController.php';
	$key = $_GET["key"];
	$salary = searchSalary($key);

	if(count($salary) > 0){
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
    <!-- <th>Password</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Joining Date</th>
    <th>Gender </th> -->
    <!-- <th>Role</th> -->
    <th>Salary</th>
    <!-- <th>Address</th> -->
    <th>Action</th>
  </thead>
  <tbody>
    <?php
      $i=1;
      foreach ($salary as $s) {
        // $id =$e["id"];
        list($year,$month,$day) = (explode("-",$s["joining_date"]));
        $joining_date = $day.'-'.$month.'-'.$year;
        echo "<tr>";
          echo "<td>$i</td>";
          echo "<td><img width='80px' height='100px' src='".$s["image"]."'></td>";
          echo "<td>".$s["f_name"]."</td>";
          echo "<td>".$s["l_name"]."</td>";
          echo "<td>".$s["username"]."</td>";
          // echo "<td>".$e["password"]."</td>";
          // echo "<td>".$e["email"]."</td>";
          // echo "<td>".$e["phone"]."</td>";
          // echo "<td>".$joining_date."</td>";
          // echo "<td>".$e["gender"]."</td>";
          // echo "<td>".$e["role"]."</td>";
          echo "<td>".$s["salary"]."</td>";
          // echo "<td>".$e["address"]."</td>";
          echo'<td> <a href="paying_salary.php?id='.$s["id"].'">Pay</a></td>';
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
