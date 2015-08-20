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
 
 
 $leadsquared->get_activity_types();
  
 $leadsquared->post_activity($json_data);
	Example $json_data = '{
							"RelatedProspectId": "00727844-51aa-11e2-9e64-12314004ac6b{ Lead Id }",
							"ActivityEvent": 102,
							"ActivityNote": "Your Activity Note",
							"ActivityDateTime": "yyyy-mm-dd hh:mm:ss"
							}';
	Or You can Post Activity with Lead Email Address, If lead is not present then lead will be created.
	
	Example $json_data = '{
							EmailAddress": "john.smith@acmeconsulting.co",
							"ActivityEvent": 112,
							"ActivityNote": "Note for the activity",
							"ActivityDateTime": "yyyy-mm-dd hh:mm:ss",
							"FirstName": "John",
							"LastName" : "Smith",
							"Phone"            : "+919845098450",
							"Score": 10
							}';
	
 
  $leadsquared->create_activity_type($json_data);
	Example $json_data = '{
							"ActivityEventName": "",
							"Score": 10,
							"Description": "",
							"Direction": 1
							}';
 $leadsquared->get_activities_of_lead($leadId , $json_data = null);
	Example $leadid = <Lead Id of the lead>;
	
			Optionally, post this data on this API to refine results:
			
			$json_data = '{
							"Parameter": {"ActivityEvent": }
							"Paging": {"Offset": "","RowCount": ""}
							}';
 

*/