<?php

include('leadsquared.php');

define('LSQ_NAME', '<-- Name Of your Project -->');

define('LSQ_ACCESSKEY', '<-- LeadSquared Access Key -->');

define('LSQ_SECRETKEY', '<-- LeadSquared Secret Key -->');

$leadsquared = new Leadsquared_Api();

/**

 Example:
 
 $data & $json_data = Json Value.
 $leadId = Lead Id /Prospect Id.
 $email = Email Address / Email Id.
 $key  = search phrase.
 $product_id = Product Id.
 $activity_id = Activity Id.
 $listId = List Id;
 $UserId =  User Id / Owner Id;
 
 
 $leadsquared->get_users();  < Get the List of Users in your Account >
 
 $leadsquared->get_user_by_id($UserId);
	Example $UserId = <User Id in LeadSquared >;
	
 $leadsquared->get_user_by_email($email);
	Example $email = <Email Id/Address user in LeadSquared >;
	
 $leadsquared->user_authentication($akey,$skey);	<Authentication using user own AccessKey and SecretKey>
	Example $akey = <AccessKey>;
			$skey = <SecretKey>;
*/