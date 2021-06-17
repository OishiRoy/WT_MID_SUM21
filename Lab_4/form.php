<?php
     $name="";
	 $err_name="";
	 $uname="";
	 $err_uname="";
	 $pass="";
     $err_pass="";
     $email="";
     $err_email="";
     $confirm_pass="";
     $err_confirm_pass="";
     $code="";
     $number="";
     $err_phone="";
     $addr="";
     $err_addr="";
     $city="";
     $state="";
     $err_region="";
     $zip="";
     $err_zip="";
     $gender="";
     $err_gender="";
     $checks=[];
	 $err_checks="";
	 $bio="";
	 $err_bio="";
     $day="";
     $month="";
     $year="";
     $err="";

     $hasError=false;

     $Days= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
     $Months= array("January","February","March","April","May","June","July","Agust","September","Octobor","November","December");
     $Years= array("2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010");

     if ($_SERVER["REQUEST_METHOD"] == "POST") 
     {
     	if(empty($_POST["name"]))
     	{
			$err_name="Name Required";
			$hasError = true;
		}

		else
		{
			$name=$_POST["name"];
		}

		if(empty($_POST["username"]))
     	{
			$err_uname="Username Required";
			$hasError = true;
		}

		else
		{
			$uname=$_POST["username"];
		}

		if(empty($_POST["password"]))
     	{
			$err_pass="Password Required";
			$hasError = true;
		}

		else
		{
			$pass=$_POST["password"];
		}

		if(empty($_POST["confirm_password"]))
     	{
			$err_confirm_pass="Confirm Password Required";
			$hasError = true;
		}

		else
		{
			$confirm_pass=$_POST["confirm_password"];
		}

		if(empty($_POST["email"]))
     	{
			$err_email="Confirm Email";
			$hasError = true;
		}

		else
		{
			$email=$_POST["email"];
		}

		if(empty($_POST["code"]) && empty($_POST["number"]))
     	{
			$err_phone="Confirm Code & Number";
			$hasError = true;
		}

		elseif (empty($_POST["code"])) 
		{
			$err_phone="Confirm Code";
			$hasError = true;
		}

		elseif (empty($_POST["number"])) 
		{
			$err_phone="Confirm Number";
			$hasError = true;
		}

		else
		{
			$code=$_POST["code"];
			$number=$_POST["number"];
		}

		if(empty($_POST["city"]) && empty($_POST["state"]))
     	{
			$err_region="Confirm City & State";
			$hasError = true;
		}

		elseif (empty($_POST["city"])) 
		{
			$err_region="Confirm City";
			$hasError = true;
		}

		elseif (empty($_POST["state"])) 
		{
			$err_region="Confirm State";
			$hasError = true;
		}

		else
		{
			$city=$_POST["city"];
			$state=$_POST["state"];
		}

		if(empty($_POST["zip"]))
     	{
			$err_zip="Name Required";
			$hasError = true;
		}

		else
		{
			$zip=$_POST["zip"];
		}

		if(empty($_POST["address"]))
     	{
			$err_addr="Address Required";
			$hasError = true;
		}

		else
		{
			$addr=$_POST["address"];
		}

		if(!isset($_POST["Gender"]))
		{
			$err_gender="Gender Required";
			$hasError = true;
		}
		else
		{
			$gender = $_POST["Gender"];
		}

		if(!isset($_POST["checks"]))
		{
			$err_checks="Required";
			$hasError = true;
		}
		else
		{
			$checks = $_POST["checks"];
		}

		if(empty($_POST["bio"]))
		{
			$err_bio="Bio Required";
			$hasError = true;
		}
		else
		{
			$bio = $_POST["bio"];
		}

		if (!isset($_POST["Day"]) && !isset($_POST["Month"]) && !isset($_POST["Year"])) 
		{
			$err= "Day, Month & Year Required";
			$hasError = true;
		}

		else if(isset($_POST["Day"]))
		{
			$err = "Month & Year Required";
			$hasError = true;
		}

		else if(isset($_POST["Month"]))
		{
			$err = "Day & Year Required";
			$hasError = true;
		}

		else if(isset($_POST["Year"]))
		{
			$err = "Day & Month Required";
			$hasError = true;
		}

		else if (!isset($_POST["Day"]) && !isset($_POST["Month"])) 
		{
			$err= "Year Required";
			$hasError = true;
		}

		else if (!isset($_POST["Day"]) && !isset($_POST["Year"])) 
		{
			$err= "Month Required";
			$hasError = true;
		}

		else if (!isset($_POST["Year"]) && !isset($_POST["Month"])) 
		{
			$err= "Day Required";
			$hasError = true;
		}

		else
		{
			$day = $_POST["Day"];
			$month = $_POST["Month"];
			$year = $_POST["Year"];

		}

     }

     function CheckBox($check)
     {
		global $checks;
		foreach($checks as $c)
		{
			if($c == $check)
			{
				return true;
			}
		}
		return false;
	}
?>


<html>
<head>
	
	<title>Php Form Validation</title>
</head>
<body>
     <fieldset>
      <h1 align="center">Club Member Registration</h1>

      <form method="Post">
      	    <table>
      	    	   <tr align="right">
      	    	   	   <td>
      	    	   	   	   Name:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="name" value="<?php echo $name;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_name;?>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr align="right">
      	    	   	   <td>
      	    	   	   	   Username:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="username" value="<?php echo $uname;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_uname;?>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr align="right">
      	    	   	   <td>
      	    	   	   	   Password:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="Password" name="password" value="<?php echo $pass;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_pass;?>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr align="right">
      	    	   	   <td>
      	    	   	   	   Confirm Password:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="Password" name="confirm_password" value="<?php echo $confirm_pass;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_confirm_pass;?>
      	    	   	   </td>

      	    	   <tr align="right">
      	    	   	   <td>
      	    	   	   	   Email:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="email" value="<?php echo $email;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_email;?>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr align="right">
      	    	   	   <td>
      	    	   	   	   Phone:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="code" placeholder="code" value="<?php echo $code;?>"> -
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="number" placeholder="Number" value="<?php echo $number;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_phone;?>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr align="right">
      	    	   	   <td>
      	    	   	   	   Address:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="address" placeholder="Select Address" value="<?php echo $addr;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_addr;?>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr align="right">
      	    	   	   <td>
      	    	   	   	    
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="city" placeholder="City" value="<?php echo $city;?>"> -
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="state" placeholder="State" value="<?php echo $state;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_region;?>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr align="right">
      	    	   	   <td>
      	    	   	   	    
      	    	   	   </td>
      	    	   	   
      	    	   	   <td>
      	    	   	   	   <input type="text" name="zip" placeholder="Postal/Zip Code" value="<?php echo $zip;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_zip;?>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr align="right">
      	    	   	   <td>
      	    	   	   	   Birth Date:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <select name="Day">
      	    	   	   	   	       <option selected="Day" disabled="Day">Day</option>

      	    	   	   	   	       <?php
                                        foreach ($Days as $dy) 
                                        {
                                        	if ($day==$dy) 
                                        	{
                                        		echo "<option selected>$dy</option>";
                                        	}
                                        	else
											   echo "<option>$dy</option>";
                                        }
      	    	   	   	   	       ?>
      	    	   	   	   	       echo $day;
      	    	   	   	   </select>

      	    	   	   	   <select name="Month">
      	    	   	   	   	       <option selected="Month" disabled="Month">Month</option>

      	    	   	   	   	       <?php
                                        foreach ($Months as $my) 
                                        {
                                        	if ($month==$my) 
                                        	{
                                        		echo "<option selected>$my</option>";
                                        	}
                                        	else
											   echo "<option>$my</option>";
                                        }
      	    	   	   	   	       ?>
      	    	   	   	   </select>

      	    	   	   	   <select name="Year">
      	    	   	   	   	       <option selected="Year" disabled="Year">Year</option>

      	    	   	   	   	       <?php
                                        foreach ($Years as $yy) 
                                        {
                                        	if ($year==$yy) 
                                        	{
                                        		echo "<option selected>$yy</option>";
                                        	}
                                        	else
											   echo "<option>$yy</option>";
                                        }
      	    	   	   	   	       ?>
      	    	   	   	   </select>
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   		<?php echo $err;?>	
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr align="right">
      	    	   	   <td>
      	    	   	   	   Gender:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="Gender"> Male <input type="radio" value="Female" <?php if($gender == "Female") echo "checked";?> name="Gender"> Female
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   		<?php echo $err_gender;?>	
      	    	   	   </td>
      	            </tr>

      	    	   <tr align="right">
				   
				      <td>
      	    	   	   	   Where did you hear<br> about us?
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input align="center" type="checkbox" name="checks[]" value="1" <?php if(CheckBox(1)) echo "checked";?>> A Friend or College<br>
      	    	   	   	   <input align="center" type="checkbox" name="checks[]checks[]checks[]" value="2" <?php if(CheckBox(2)) echo "checked";?>> Google<br>
      	    	   	   	   <input align="center" type="checkbox" name="checks[]checks[]" value="3"  <?php if(CheckBox(3)) echo "checked";?>> Blog Post<br>
      	    	   	   	   <input align="center" type="checkbox" name="checks[]" value="4"   <?php if(CheckBox(4)) echo "checked";?>> News Article
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_checks;?>
      	    	   	   </td>

      	    	   </tr>

				 

      	    	   <tr align="right">
      	    	   	   <td>
      	    	   	   	   Bio:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <textarea cols="30" rows="6" name="bio"><?php echo $bio;?></textarea>
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_bio;?>
      	    	   	   </td>
      	    	   </tr>

      	    	   <td align="Center">
                       <td>
                       	   <input type="submit" value="register">
                       </td>
      	    	   	    
      	    	   </tr>
      	    	 
      	    </table>
      </form>
	  </fieldset>
</body>
</html>
