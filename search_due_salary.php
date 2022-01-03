<?php
	require_once 'controllers/SalaryController.php';
	$key = $_GET["key"];
	$dueSalary = searchDueSalary($key);

	if(count($dueSalary) > 0){
		// foreach($dueSalary as $d){
			// echo "<a href='paying_due.php?id=".$d["id"]."'>".$d["username"]."</a><br>";
?>
      <table class="content-table">
        <thead>
          <th>Reference Id</th>
          <th>Username</th>
          <th>Salary</th>
          <th>Paid amount</th>
          <th>Due</th>
          <th>Action</th>
        </thead>
        <tbody>

          <?php
            $i=1;
            foreach ($dueSalary as $d) {

              echo "<tr>";
                echo "<td>".$d["id"]."</td>";
                echo "<td>".$d["username"]."</td>";
                echo "<td>".$d["salary"]."</td>";
                echo "<td>".$d["paid"]."</td>";
                echo "<td>".$d["due"]."</td>";
                if ($d["due"] == 0) {
                  echo'<td> Already paid </td>';
                }
                else {
                  echo'<td> <a href="paying_due.php?id='.$d["id"].'">Pay due</a></td>';
                }
                // echo' <a href="">Delete</a> </td>';
              echo "</tr>";
              $i++;

    }
  }
?>
 </tbody>
</table>
