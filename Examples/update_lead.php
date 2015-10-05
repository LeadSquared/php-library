<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 
<?php
include('leadsquared/leadsquared.php');

define('LSQ_NAME', '<-- Name Of your Project -->');

define('LSQ_ACCESSKEY', '<-- LeadSquared Access Key -->');

define('LSQ_SECRETKEY', '<-- LeadSquared Secret Key -->');

$leadsquared = new Leadsquared_Api();
$leadId = '<Lead Id>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$FirstName = test_input($_POST["name"]);
	$EmailAddress = test_input($_POST["email"]);
	$Phone = test_input($_POST["phone"]);
	
	$data = '{ 
			"FirstName":"'.$FirstName.'",
			"EmailAddress":"'.$EmailAddress.'",
			"Phone":"'.$Phone.'"
			 }';
			 
	$leadsquared->update_lead($data,$leadId);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name" value="">
   <br><br>
   E-mail: <input type="email" name="email" value="">
   <br><br>
   Phone: <input type="number" name="phone" value="">
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

</body>
</html>