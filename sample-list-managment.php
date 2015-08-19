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
 
 
  $leadsquared->get_lists(); < This  will return a JSON array returning all lists accessible to the user >
  
  $leadsquared->leads_in_lists($listId);
	Example $listId = <List Id >;
	
  $leadsquared->count_in_lists($listId);;
	Example $listId = <List Id >;

   
 $leadsquared->check_lead_in_lists($listId,$leadId);
 	Example $listId = <List Id >;
			$leadId = <Lead Id>;

 $leadsquared->add_lead_to_static_list($listId,$leadId);
 	Example $listId = <List Id >;
			$leadId = <Lead Id>;			
*/