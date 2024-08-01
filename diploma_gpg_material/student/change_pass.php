<?php
	session_start();
    if(!isset($_SESSION['log']))
    {
        include 'header.php';
    }
    else
    {
      include 'header1.php';
    }
?>
<div class="inner_page_agile"></div>
<!-- short-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>| |</span>
				</li>
				<li>Set Password</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>Set Password</span>
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="login-form">
				<form action="#" method="post">
					<div class="">
						<p>Current Password</p>
						<input type="password" placeholder="Enter New Password" name="pass" required>
					</div>
					<div class="">
						<p>Enter New Password</p>
						<input type="password" placeholder="Enter New Password" name="pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					</div>
					<div class="">
						<p>Confirm New Password</p>
						<input type="password" placeholder="Enter New Password" name="pass2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					</div>
					<!-- <div class="">
						<p>Password</p>
						<input type="password" class="password" name="pass" required="" />
					</div> -->
					<!-- <label class="anim">
						<input type="checkbox" class="checkbox">
						<span> Remember me ?</span>
					</label> -->
					<!-- <div class="login-agileits-bottom wthree">
						<h6>
							<a href="forget.php">Forgot password?</a>
						</h6>
					</div> -->
					<input type="submit" name="submit" value="Save ">
					<!-- <div class="register-forming">
						<p>To Register New Account --
							<a href="register.html">Click Here</a>
						</p>
					</div> -->
				</form>
			</div>

		</div>
	</div>
<?php
	include 'footer.php';
  	if(isset($_POST['submit']))
  	{
    
       $pass=$_POST['pass']; 
        $pass1=$_POST['pass1'];
        $pass2=$_POST['pass2'];
        if($l_pass==$pass)
        {
          if($pass1==$pass2)
          {
            $qry1="UPDATE tbl_login SET l_pass='$pass2' WHERE l_id='$id'";
            $run1=mysqli_query($con,$qry1);
            if($run1)
            {
              echo "<script> alert('Password Changed'); </script>";
              echo "<script> location.replace('index.php'); </script>";  
            }
          }
          else
          {
            echo "<script> alert('Both the Passwords are Different'); </script>";
            echo "<script> location.replace('change_pass.php'); </script>";
          }
        }
        else
        {
          echo "<script> alert('Incorrect Old Password'); </script>";
          echo "<script> location.replace('change_pass.php'); </script>";
        }

	}	
?>