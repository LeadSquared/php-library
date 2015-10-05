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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$FirstName = test_input($_POST["name"]);
	$EmailAddress = test_input($_POST["email"]);
	$Phone = test_input($_POST["phone"]);
	$leadId = test_input($_POST["ProspectID"]);
	
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
   <input type="hidden" name="ProspectID" id="ProspectID" value="" />
   <input type="submit" name="submit" value="Submit"> 
</form>

<script type="text/javascript" src="https://web.mxradon.com/t/Tracker.js"></script>
<script type="text/javascript">
	pidTracker('');
</script>	
<script>			
	function SetProspectID(){
		if (typeof(MXCProspectId) !== "undefined")
		 jQuery('input[name="ProspectID"]').attr('value',MXCProspectId);
	 }
	window.onload = function()  
	{
		setTimeout (SetProspectID , 2000);
	 };				
</script>
</body>
</html>