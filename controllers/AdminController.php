<?php
require_once 'models/db_config.php';

  $fname="";
  $err_fname="";
  $lname="";
  $err_lname="";
  $uname="";
  $err_uname="";
  $pass="";
  $err_pass="";
  $email="";
  $err_email="";
  $street="";
  $err_street="";

  $u_image="";
  $err_u_image="";
  // $city="";
  // $err_city="";
  //
  // $state="";
  // $err_state="";
  //
  // $postal="";
  // $err_postal="";

  $address="";
  $err_address="";

  $phone_num="";
  $err_phone_num="";

  $gender="";
  $err_gender="";

  $role="";
  $err_role="";

  $salary="";
  $err_salary="";

  $month="";
  $err_month="";
  $months = array("January","February","March","April","May","June","July","August","September","October","November","December");

  $day="";
  $err_day="";

  $year="";
  $err_year="";
  $err_admin_cannot_delete="";
  $err_db="";

  $hasError=false;
  $roles = array("Admin");

  if(isset($_POST["add_admin"]))
  {
    if(empty($_POST["fname"])){
			$hasError=true;
			$err_fname="&nbsp;&nbsp;*First name required";
		}
		elseif (strlen($_POST["fname"]) <3){
			$hasError = true;
			$err_fname = "&nbsp;&nbsp;*First name must be greater than 2 characters";
		}
    elseif (is_numeric($_POST["fname"])){
      $hasError = true;
      $err_fname = "&nbsp;&nbsp;*First name must be characters";
        }
		else
		{
			$fname = htmlspecialchars($_POST["fname"]);
		}

    if(empty($_POST["lname"])){
			$hasError=true;
			$err_lname="&nbsp;&nbsp;*Last name required";
		}
		elseif (strlen($_POST["fname"]) <3){
			$hasError = true;
			$err_lname = "&nbsp;&nbsp;*Last  name must be greater than 2 characters";
		}
    elseif (is_numeric($_POST["lname"])){
      $hasError = true;
      $err_lname = "&nbsp;&nbsp;*Last  name must be characters";
        }
		else
		{
			$lname = htmlspecialchars($_POST["lname"]);
		}

    if(empty($_POST["username"])){
      $hasError=true;
      $err_uname= "&nbsp;&nbsp;*Username Required";
    }
    elseif (strlen($_POST["username"]) < 5){
      $hasError = true;
      $err_uname = "&nbsp;&nbsp;*Username must be greater than 4 characters";
    }
  elseif(strpos($_POST["username"]," "))
      {
        $hasError = true;
        $err_uname = "&nbsp;&nbsp;*Space is not allowed.";
      }
  else
    {
      $uname = htmlspecialchars($_POST["username"]);

    }

    if(empty($_POST["password"])){
			$hasError=true;
			$err_pass="&nbsp;&nbsp;*Password Required";
		}
		elseif (strlen($_POST["password"]) < 5){
			$hasError = true;
			$err_pass = "&nbsp;&nbsp;*Password must be greater than 4 characters";
		}
    else if(ctype_upper($_POST["password"]) || ctype_lower($_POST["password"]) ){
      $hasError = true;
      $err_pass="&nbsp;&nbsp;*Password should combination of uppercase and lowercase alphabet";
        }
		elseif (!strpos($_POST["password"],"#") && !strpos($_POST["password"],"?") ){
			$hasError = true;
			$err_pass = "&nbsp;&nbsp;*Password should have atleast 1 special character ";
		}


    elseif (is_numeric($_POST["password"])){
    $hasError = true;
    $err_pass = "&nbsp;&nbsp;*Password should have uppercase and lowercase alphabe ";
    	}

    else
  	{
      $l=0;
  		$arr_1=str_split($_POST["password"]);

  		for ($i=0; $i < count($arr_1) ; $i++)
       {
         if (is_numeric($arr_1[$i]))
        {
  				$l++;
          break;

  			}
  		 }
       if ($l==0) {
         $hasError = true;
         $err_pass = "&nbsp;&nbsp;*Password should have atleast 1 number ";
       }
       else
       {
         $pass = htmlspecialchars($_POST["password"]);
       }
    	}


    if(empty($_POST["email"])){
      $hasError=true;
      $err_email="&nbsp;&nbsp;*Email Required";
    }
    elseif (!strpos($_POST["email"],"@") ){
      $hasError = true;
      $err_email = "&nbsp;&nbsp;*Email must have '@' symbol";
    }
    else
    {
      $dot=strpos($_POST["email"],"@");
      if(!strpos($_POST["email"],".",$dot+1))
      {
        $hasError = true;
        $err_email = "&nbsp;&nbsp;*Email must have '.' after @ symbol";
      }
      else {
        $email = htmlspecialchars($_POST["email"]);
      }

    }


    if(!isset($_POST["gender"])){
      $hasError = true;
      $err_gender = "&nbsp;&nbsp;*Gender Required";
    }
    else{
      $gender = $_POST["gender"];
    }

    if(!isset($_POST["role"])){
      $hasError = true;
      $err_role= "&nbsp;&nbsp;*Role Required";
    }
    else{
      $role = $_POST["role"];
    }

    if(!isset($_POST["month"])){
      $hasError = true;
      $err_month= "&nbsp;&nbsp;*Month Required";
    }
    else{
      $month = $_POST["month"];
    }

    if(!isset($_POST["day"])){
      $hasError = true;
      $err_day= "&nbsp;&nbsp;*Day Required";
    }
    else{
      $day = $_POST["day"];
    }

    if(!isset($_POST["year"])){
      $hasError = true;
      $err_year= "&nbsp;&nbsp;*Year Required";
    }
    else{
      $year = $_POST["year"];
    }





		if(empty($_POST["phone_num"])){
			$hasError=true;
			$err_phone_num="&nbsp;&nbsp;*Number Required";
		}
		elseif (!is_numeric($_POST["phone_num"])){
			$hasError=true;
			$err_phone_num="&nbsp;&nbsp;*Only number allowed";
		}
		else
		{
			$phone_num = htmlspecialchars($_POST["phone_num"]);
		}

    // if(empty($_POST["salary"])){
    //   $hasError = true;
    //   $err_salary = "Salary Required";
    // }
    // elseif (!is_numeric($_POST["salary"])){
    //   $hasError=true;
    //   $err_salary="&nbsp;&nbsp;*Salary must be number";
    // }
    // else{
    //   $salary= $_POST["salary"];
    // }



		// if(empty($_POST["street"])){
		// 	$hasError=true;
		// 	$err_street="&nbsp;&nbsp;*Street Required";
		// }
    //
		// else
		// {
		// 	$street = htmlspecialchars($_POST["street"]);
		// }
    //
		// if(empty($_POST["city"])){
		// 	$hasError=true;
		// 	$err_city="&nbsp;&nbsp;*City Required";
		// }
    //
		// else
		// {
		// 	$city = htmlspecialchars($_POST["city"]);
		// }
    //
		// if(empty($_POST["state"])){
		// 	$hasError=true;
		// 	$err_state="&nbsp;&nbsp;*State Required";
		// }
    //
		// else
		// {
		// 	$state = htmlspecialchars($_POST["state"]);
		// }
    //
		// if(empty($_POST["postal"])){
		// 	$hasError=true;
		// 	$err_postal="&nbsp;&nbsp;*Postal Required";
		// }
    //
		// else
		// {
		// 	$postal = htmlspecialchars($_POST["postal"]);
		// }

    if(empty($_POST["address"])){
			$hasError=true;
			$err_address="&nbsp;&nbsp;*Address Required";
		}

		else
		{
			$address = htmlspecialchars($_POST["address"]);
		}


    // $name = basename($_FILES["u_image"]["name"]);
    // $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
    // $myfilename=uniqid().".$ext"
    // $target ="storage/user_images/$myfilename";
    // $tmp_path = $_FILES["u_image"]["tmp_name"];
    // move_uploaded_file($tmp_path,$target);


    if($_FILES["u_image"]["name"]==""){
      echo "string";
			$hasError=true;
			$err_u_image="&nbsp;&nbsp;*Image Required";
		}

		else
		{
      $fileType = strtolower(pathinfo(basename($_FILES["u_image"]["name"]),PATHINFO_EXTENSION));
      $u_image = "storage/user_images/".uniqid().".$fileType";
      move_uploaded_file($_FILES["u_image"]["tmp_name"],$u_image);

		}


    if(!$hasError){

      $joining_date= $year.'-'.$month.'-'.$day;

      $rs=insertAdmin($fname,$lname,$uname,$pass,$email,$phone_num,$joining_date,$gender,$role,$address,$u_image);
      if ($rs === true) {

        header("Location: all_admin.php");
      }
      $err_db = $rs;
      }
  }


elseif(isset($_POST["edit_admin"]))
{
  if(empty($_POST["fname"])){
    $hasError=true;
    $err_fname="&nbsp;&nbsp;*First name required";
  }
  elseif (strlen($_POST["fname"]) <3){
    $hasError = true;
    $err_fname = "&nbsp;&nbsp;*First name must be greater than 2 characters";
  }
  elseif (is_numeric($_POST["fname"])){
    $hasError = true;
    $err_fname = "&nbsp;&nbsp;*First name must be characters";
      }
  else
  {
    $fname = htmlspecialchars($_POST["fname"]);
  }

  if(empty($_POST["lname"])){
    $hasError=true;
    $err_lname="&nbsp;&nbsp;*Last name required";
  }
  elseif (strlen($_POST["fname"]) <3){
    $hasError = true;
    $err_lname = "&nbsp;&nbsp;*Last  name must be greater than 2 characters";
  }
  elseif (is_numeric($_POST["lname"])){
    $hasError = true;
    $err_lname = "&nbsp;&nbsp;*Last  name must be characters";
      }
  else
  {
    $lname = htmlspecialchars($_POST["lname"]);
  }

  if(empty($_POST["username"])){
    $hasError=true;
    $err_uname= "&nbsp;&nbsp;*Username Required";
  }
  elseif (strlen($_POST["username"]) < 5){
    $hasError = true;
    $err_uname = "&nbsp;&nbsp;*Username must be greater than 4 characters";
  }
elseif(strpos($_POST["username"]," "))
    {
      $hasError = true;
      $err_uname = "&nbsp;&nbsp;*Space is not allowed.";
    }
else
  {
    $uname = htmlspecialchars($_POST["username"]);

  }

  if(empty($_POST["password"])){
    $hasError=true;
    $err_pass="&nbsp;&nbsp;*Password Required";
  }
  elseif (strlen($_POST["password"]) < 5){
    $hasError = true;
    $err_pass = "&nbsp;&nbsp;*Password must be greater than 4 characters";
  }
  else if(ctype_upper($_POST["password"]) || ctype_lower($_POST["password"]) ){
    $hasError = true;
    $err_pass="&nbsp;&nbsp;*Password should combination of uppercase and lowercase alphabet";
      }
  elseif (!strpos($_POST["password"],"#") && !strpos($_POST["password"],"?") ){
    $hasError = true;
    $err_pass = "&nbsp;&nbsp;*Password should have atleast 1 special character ";
  }


elseif (is_numeric($_POST["password"])){
$hasError = true;
$err_pass = "&nbsp;&nbsp;*Password should have uppercase and lowercase alphabe ";
}

else
{
  $l=0;
  $arr_1=str_split($_POST["password"]);

  for ($i=0; $i < count($arr_1) ; $i++)
   {
     if (is_numeric($arr_1[$i]))
    {
      $l++;
      break;

    }
   }
   if ($l==0) {
     $hasError = true;
     $err_pass = "&nbsp;&nbsp;*Password should have atleast 1 number ";
   }
   else
   {
     $pass = htmlspecialchars($_POST["password"]);
   }
  }




  if(empty($_POST["email"])){
    $hasError=true;
    $err_email="&nbsp;&nbsp;*Email Required";
  }
  elseif (!strpos($_POST["email"],"@") ){
    $hasError = true;
    $err_email = "&nbsp;&nbsp;*Email must have '@' symbol";
  }
  else
  {
    $dot=strpos($_POST["email"],"@");
    if(!strpos($_POST["email"],".",$dot+1))
    {
      $hasError = true;
      $err_email = "&nbsp;&nbsp;*Email must have '.' after @ symbol";
    }
    else {
      $email = htmlspecialchars($_POST["email"]);
    }

  }


  if(!isset($_POST["gender"])){
    $hasError = true;
    $err_gender = "&nbsp;&nbsp;*Gender Required";
  }
  else{
    $gender = $_POST["gender"];
  }

  if(!isset($_POST["role"])){
    $hasError = true;
    $err_role= "&nbsp;&nbsp;*Role Required";
  }
  else{
    $role = $_POST["role"];
  }

  if(!isset($_POST["month"])){
    $hasError = true;
    $err_month= "&nbsp;&nbsp;*Month Required";
  }
  else{
    $month = $_POST["month"];
  }

  if(!isset($_POST["day"])){
    $hasError = true;
    $err_day= "&nbsp;&nbsp;*Day Required";
  }
  else{
    $day = $_POST["day"];
  }

  if(!isset($_POST["year"])){
    $hasError = true;
    $err_year= "&nbsp;&nbsp;*Year Required";
  }
  else{
    $year = $_POST["year"];
  }





  if(empty($_POST["phone_num"])){
    $hasError=true;
    $err_phone_num="&nbsp;&nbsp;*Number Required";
  }
  elseif (!is_numeric($_POST["phone_num"])){
    $hasError=true;
    $err_phone_num="&nbsp;&nbsp;*Only number allowed";
  }
  else
  {
    $phone_num = htmlspecialchars($_POST["phone_num"]);
  }




  if(empty($_POST["address"])){
    $hasError=true;
    $err_address="&nbsp;&nbsp;*Address Required";
  }

  else
  {
    $address = htmlspecialchars($_POST["address"]);
  }

 $old_image=$_POST["old_image"];
 if($_FILES["u_image"]["name"]!=""){

   // $update_image=$_FILES["u_image"]["name"];
   $fileType = strtolower(pathinfo(basename($_FILES["u_image"]["name"]),PATHINFO_EXTENSION));
   $u_image = "storage/user_images/".uniqid().".$fileType";
   move_uploaded_file($_FILES["u_image"]["tmp_name"],$u_image);

   }
   else
   {
     $u_image=$old_image;
   }

  if(!$hasError){
    $joining_date= $year.'-'.$month.'-'.$day;

    $rs=updateAdmin($fname,$lname,$uname,$pass,$email,$phone_num,$joining_date,$gender,$role,$address,$u_image,$_POST["id"]);
    if ($rs === true) {
      header("Location: all_admin.php");
      // header("Location: controllers/LoginController.php");
    }
    $err_db = $rs;

    }

}

else if (isset($_POST["delete_admin"])){
  // $id=$_GET["id"];
  // $c=checkAdmin($_SESSION["loggeduname"],$_SESSION["loggedpassword"])
  //
  // if ($c == $_POST["id"]) {
  //   echo "Admin can not delete himself";
  // }
  // else {
  //   $rs = deleteAdmin($_POST["id"]);
  //   if($rs === true){
  //     header("Location: all_admin.php");
  //     // header("Location: controllers/LoginController.php");
  //   }
  //   $err_db = $rs;
  // }
  if(empty($_POST["fname"])){
    $hasError=true;
    $err_fname="&nbsp;&nbsp;*First name required";
  }
  elseif (strlen($_POST["fname"]) <3){
    $hasError = true;
    $err_fname = "&nbsp;&nbsp;*First name must be greater than 2 characters";
  }
  elseif (is_numeric($_POST["fname"])){
    $hasError = true;
    $err_fname = "&nbsp;&nbsp;*First name must be characters";
      }
  else
  {
    $fname = htmlspecialchars($_POST["fname"]);
  }

  if(empty($_POST["lname"])){
    $hasError=true;
    $err_lname="&nbsp;&nbsp;*Last name required";
  }
  elseif (strlen($_POST["fname"]) <3){
    $hasError = true;
    $err_lname = "&nbsp;&nbsp;*Last  name must be greater than 2 characters";
  }
  elseif (is_numeric($_POST["lname"])){
    $hasError = true;
    $err_lname = "&nbsp;&nbsp;*Last  name must be characters";
      }
  else
  {
    $lname = htmlspecialchars($_POST["lname"]);
  }

  if(empty($_POST["username"])){
    $hasError=true;
    $err_uname= "&nbsp;&nbsp;*Username Required";
  }
  elseif (strlen($_POST["username"]) < 5){
    $hasError = true;
    $err_uname = "&nbsp;&nbsp;*Username must be greater than 4 characters";
  }
elseif(strpos($_POST["username"]," "))
    {
      $hasError = true;
      $err_uname = "&nbsp;&nbsp;*Space is not allowed.";
    }
else
  {
    $uname = htmlspecialchars($_POST["username"]);

  }

  if(empty($_POST["password"])){
    $hasError=true;
    $err_pass="&nbsp;&nbsp;*Password Required";
  }
  elseif (strlen($_POST["password"]) < 5){
    $hasError = true;
    $err_pass = "&nbsp;&nbsp;*Password must be greater than 4 characters";
  }
  else if(ctype_upper($_POST["password"]) || ctype_lower($_POST["password"]) ){
    $hasError = true;
    $err_pass="&nbsp;&nbsp;*Password should combination of uppercase and lowercase alphabet";
      }
  elseif (!strpos($_POST["password"],"#") && !strpos($_POST["password"],"?") ){
    $hasError = true;
    $err_pass = "&nbsp;&nbsp;*Password should have atleast 1 special character ";
  }


elseif (is_numeric($_POST["password"])){
$hasError = true;
$err_pass = "&nbsp;&nbsp;*Password should have uppercase and lowercase alphabe ";
}

else
{
  $l=0;
  $arr_1=str_split($_POST["password"]);

  for ($i=0; $i < count($arr_1) ; $i++)
   {
     if (is_numeric($arr_1[$i]))
    {
      $l++;
      break;

    }
   }
   if ($l==0) {
     $hasError = true;
     $err_pass = "&nbsp;&nbsp;*Password should have atleast 1 number ";
   }
   else
   {
     $pass = htmlspecialchars($_POST["password"]);
   }
  }




  if(empty($_POST["email"])){
    $hasError=true;
    $err_email="&nbsp;&nbsp;*Email Required";
  }
  elseif (!strpos($_POST["email"],"@") ){
    $hasError = true;
    $err_email = "&nbsp;&nbsp;*Email must have '@' symbol";
  }
  else
  {
    $dot=strpos($_POST["email"],"@");
    if(!strpos($_POST["email"],".",$dot+1))
    {
      $hasError = true;
      $err_email = "&nbsp;&nbsp;*Email must have '.' after @ symbol";
    }
    else {
      $email = htmlspecialchars($_POST["email"]);
    }

  }


  if(!isset($_POST["gender"])){
    $hasError = true;
    $err_gender = "&nbsp;&nbsp;*Gender Required";
  }
  else{
    $gender = $_POST["gender"];
  }

  if(!isset($_POST["role"])){
    $hasError = true;
    $err_role= "&nbsp;&nbsp;*Role Required";
  }
  else{
    $role = $_POST["role"];
  }

  if(!isset($_POST["month"])){
    $hasError = true;
    $err_month= "&nbsp;&nbsp;*Month Required";
  }
  else{
    $month = $_POST["month"];
  }

  if(!isset($_POST["day"])){
    $hasError = true;
    $err_day= "&nbsp;&nbsp;*Day Required";
  }
  else{
    $day = $_POST["day"];
  }

  if(!isset($_POST["year"])){
    $hasError = true;
    $err_year= "&nbsp;&nbsp;*Year Required";
  }
  else{
    $year = $_POST["year"];
  }





  if(empty($_POST["phone_num"])){
    $hasError=true;
    $err_phone_num="&nbsp;&nbsp;*Number Required";
  }
  elseif (!is_numeric($_POST["phone_num"])){
    $hasError=true;
    $err_phone_num="&nbsp;&nbsp;*Only number allowed";
  }
  else
  {
    $phone_num = htmlspecialchars($_POST["phone_num"]);
  }




  if(empty($_POST["address"])){
    $hasError=true;
    $err_address="&nbsp;&nbsp;*Address Required";
  }

  else
  {
    $address = htmlspecialchars($_POST["address"]);
  }

 $old_image=$_POST["old_image"];
 if($_FILES["u_image"]["name"]!=""){

   // $update_image=$_FILES["u_image"]["name"];
   $fileType = strtolower(pathinfo(basename($_FILES["u_image"]["name"]),PATHINFO_EXTENSION));
   $u_image = "storage/user_images/".uniqid().".$fileType";
   move_uploaded_file($_FILES["u_image"]["tmp_name"],$u_image);

   }
   else
   {
     $u_image=$old_image;
   }

   if(!$hasError){
     if ($_SESSION["loggeduname"] == $uname && $_SESSION["loggedpassword"] ==  $pass ) {
       $err_admin_cannot_delete="&nbsp;&nbsp;*Admin can not delete himself.";

     }
     else {
       $rs = deleteAdmin($_POST["id"]);
       if($rs === true){
         header("Location: all_admin.php");
         // header("Location: controllers/LoginController.php");
       }
       $err_db = $rs;
     }

}


}

// function insertLogin($fname,$lname,$uname,$pass,$role){
//   $query="insert into login values (NULL,'$fname','$lname','$uname','$pass','$role')";
//
//   return execute($query);
//
// }
function insertAdmin($fname,$lname,$uname,$pass,$email,$phone_num,$joining_date,$gender,$role,$address,$img){
  $query="insert into admin values (NULL,'$fname','$lname','$uname','$pass','$email',$phone_num,'$joining_date','$gender','$role','$address','$img')";

  return execute($query);

}
// function getLogin($uname){
//   $query="select id from login where username = $uname";
//   $rs=get($query);
//   return $rs[0];
// }

function getAllAdmin(){
  $query="select * from admin where role='Admin'";
  $rs=get($query);
  return $rs;
}

function getAdmin($id){
  $query="select * from admin where id=$id";
  $rs=get($query);
  return $rs[0];
}

function checkAdmin($uname,$pass){
  $query="select id from admin where username='$uname' and password='$pass'";
  $rs=get($query);
  return $rs[0];
}

function updateAdmin($fname,$lname,$uname,$pass,$email,$phone_num,$joining_date,$gender,$role,$address,$img,$id){

  $query="update admin set f_name='$fname',l_name='$lname',username='$uname',password='$pass',email='$email',phone=$phone_num,joining_date='$joining_date',gender='$gender',role='$role',address='$address',image='$img'  where id = $id";

  return execute($query);
}

function deleteAdmin($id)
	{
		$query="delete from admin where id=$id";
		return execute($query);
	}

  function searchAdmin($key){
  $query = "select * from admin where username like '%$key%'";
  // $query = "select * from admin where f_name like '%$key%' or l_name like '%$key%' or username like '%$key%'";
  $rs = get($query);
  return $rs;
}

function checkAdminUname($uname){
  $query="select username from admin where username='$uname'";
  $rs=get($query);
  if(count($rs)>0){
    return true;
  }
  return false;
}
 ?>
