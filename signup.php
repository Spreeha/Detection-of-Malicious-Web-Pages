<?php
session_start();
$_SESSION['message']='';
$mysq=new mysqli('localhost','root','mypass123','accounts');

if($_SERVER['REQUEST_METHOD']=='POST')
{
	//two passwords are matching or not
	if($_POST['password']==$_POST['confirmpassword'])
	{
		//print_r($_FILES);die;
		
		$username = $mysq->real_escape_string($_POST['username']);
		$email = $mysq->real_escape_string($_POST['email']);
		$password=md5($_POST['password']);
		//$avatar_path=$mysqli->real_escap_string('image/'.$_FILES['avatar']['name']);
		
		//echo $username;
		//to make sure file type is image
		//if(preg_match("image!",$_FILES['avatar']['type']))
		$_SESSION['username']=$username;
	    //$_SESSION['avatar']=$avatar_path;
		
		$result= "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
if (mysqli_query($mysq, $result))
         {
        echo "New record successfully";
		echo $username;
		$_SESSION['message']="Registration Successful! Added $username to the database.";
		header("location: valid.php");
         }
        else
         {
        echo "Error: " . $result . "<br>" . mysqli_error($mysq);
         }


		
		
		//$sql=mysqli_query($mysq,"insert into users(username,email,password) values('$username','$email','$password'))";
		
		//$row = mysqli_fetch_array($sql);
		
		if($mysq)
			echo "Connected!";

//if the query is successful redirect to welcome.php page
		/*if($mysq->query($sql)===true)
		{
         $_SESSION['message']="Registration Successful! Added $username to the database.";
         header("location: welcome.php");
		}	
		else
		{
			$_SESSION['message']="User could not be added to the database!";
		}*/
	}	
	else
	{
	$_SESSION['message']="Two passwords do not match!";	
	}
	
	
		
		
	}

?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="style1.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Sign In</h1>
    <form class="form" action="valid.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <!--<div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>-->
      <input type="submit" value="Sign Up" name="register" class="btn btn-block btn-primary" />
	  <!--<input type="submit" value="Sign Up" name="register" class="btn btn-block btn-primary" formaction="valid.php" />-->
    </form>
  </div>
</div>