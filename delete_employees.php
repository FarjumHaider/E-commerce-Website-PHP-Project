
<?php

require_once 'admin_header.php';
require_once 'controllers/EmployeesController.php';

$id=$_GET["id"];
$e=getEmploye($id);

?>


    <script src="js/alert_massage.js"></script>
<div class="form">
      <h1 align="center">Delete Employees</h1>
      <hr>
      <br>
      <form action="" method="post" enctype="multipart/form-data">
        <h5><?php echo $err_db; ?></h5>
        <div class="">
          <input name="id" value="<?php echo $e["id"];?>" type="hidden">
        </div>

        <table align="center">
          <tr>
            <td>First name</td>
            <td>: <?php echo $e["f_name"];?><br>
          </tr>

          <tr>
            <td>Last name</td>
            <td>: <?php echo $e["l_name"];?><br>

          </tr>

          <tr>
            <td>Username</td>
            <td>: <?php echo $e["username"];?><br>
            <span style="color:red;"><?php echo $err_uname;?></span></td>
          </tr>

          <tr>
            <td>Password</td>
            <td>:  <?php echo $e["password"];?>
						<br><span style="color:red;"><?php echo $err_pass;?></span></td>
          </tr>

          <tr>
            <td> Email</td>
            <td>
              :  <?php echo $e["email"];?><br>

            </td>
          </tr>


          <tr>
            <td > Phone </td>
            <td>: <?php echo $e["phone"];?></td>
          </tr>


          <tr>
            <?php
              list($year,$month,$day) = (explode("-",$e["joining_date"]));
              $joining_date = $day.'-'.$month.'-'.$year;
            ?>
						<td>Joining Date</td>
						 <td>: <?php echo $joining_date?></td>
          </tr>



          <tr>
            <td>Gender </td>
            <td>: <?php echo $e["gender"];?><br>
          </tr>

          <tr>
            <td>Role</td>
            <td>: <?php echo $e["role"];?><br>
            </td>
          </tr>

          <tr>
            <td>Salary</td>
            <td>: <?php echo $e["salary"];?><br>
          </tr>


          <tr>
  					<td >Address</td>
  					<td>: <?php echo $e["address"];?></textarea>
  					</td>
  				</tr>

          <tr>
            <td>Image &nbsp;&nbsp</td>
            <td> :<img width='80px' height='100px' src="<?php echo $e["image"];?>"></img></td>
          </tr>


          <tr>
             <td colspan="2" align="center"><input type="submit" onclick="delete_alert()" name="delete_employees" value="Confirm delete" ></td>
          </tr>

        </table>


      </form>
</div>
<?php require_once 'admin_footer.php';?>
