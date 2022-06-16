<?php
 include '../dbconfig.php';
//Checking for Email Already exit 
if (isset($_POST['checkemail']) && isset($_POST['stuemail'])) {

	$stuemail=$_POST['stuemail'];
	$sql="SELECT stu_email FROM student WHERE stu_email='".$stuemail."'";
	$result=mysql_fetch_assoc($con,$sql);
	if ($row=mysql_num_rows($result)) {
		echo json_encode($row);
		# code...
	}
}

// Insert Student
if(isset($_POST['stusignup']) && isset($_POST['stuname']) &&isset($_POST['stuemail'])&&isset($_POST['stupass'])):
	$stuname=$_POST['stuname'];
	$stuemail=$_POST['stuemail'];
	$stupass=$_POST['stupass'];
     $sql="insert into student(stu_name,stu_email,stu_pass) values('$stuname','$stuemail','$stupass')";

     if (mysql_query($conn,$sql)) :
     	echo json_encode("OK");
     
     else:
          	echo json_encode("Faild");
          endif;

    

endif;

?>