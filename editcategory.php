<?php
require_once 'admin_header.php';
require_once 'controllers/CategoryController.php';
$id=$_GET["id"];
$c=getCategory($id);

 ?>
 <div class="form">
         <h1>Edit categories</h1><hr>
         <br><br><br>
    <form class="" action="" method="post">

      <h5><?php echo $err_db; ?></h5>
      <tr>
        <td >Name</td>
        <td>
           <input name="id" value="<?php echo $c["id"];?>" type="hidden">
        </td>
        <td>
          :  <input name="name" value="<?php echo $c["name"];?>" type="text"><br>
        </td>
      </tr>
        <tr>
          <td align="center"><input class="btn_edit" type="submit" name="edit_category" value="Edit category" ></td>
        </tr>

        <tr>
    </form>
  </div>
<?php require_once 'admin_footer.php';?>
