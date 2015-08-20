<?php

include('leadsquared.php');

define('LSQ_NAME', '<-- Name Of your Project -->');

define('LSQ_ACCESSKEY', '<-- LeadSquared Access Key -->');

define('LSQ_SECRETKEY', '<-- LeadSquared Secret Key -->');

$leadsquared = new Leadsquared_Api();

/**
For Create Lead,Update Lead ,Create Or Update Lead and Convert Vistor to lead Json has to be changed from 
[
    {
        "Attribute": "EmailAddress",
        "Value": "john.smith@acmeconsulting.co"
    },
    {
        "Attribute": "FirstName",
        "Value": " John"
    },
    {
        "Attribute": "LastName",
        "Value": " Smith"
    },
	{
		"Attribute": "Phone",
        "Value": "99999999999"
	}
]

To

{ 
	"FirstName":"John",
	"LastName":"Smith",
	"EmailAddress":"john.smith@acmeconsulting.co",
	"Phone":"99999999999"
 }

 Example:
 
 $data & $json_data = Json Value.
 $leadId = Lead Id /Prospect Id.
 $email = Email Address / Email Id.
 $key  = search phrase.
 $product_id = Product Id.
 $activity_id = Activity Id.
 $listId = List Id;
 $UserId =  User Id / Owner Id;
 
 
 $leadsquared->get_meta_data();
 
 $leadsquared->get_lead_by_email($email);
	Example $email = "john.smith@acmeconsulting.co"
 $leadsquared->quick_search($key);
	Example $key = "John"
 
 $leadsquared->create_lead($data);
	Example $date = '{ 
						"FirstName":"John",
						"LastName":"Smith",
						"EmailAddress":"john.smith@acmeconsulting.co",
						"Phone":"99999999999"
					 }'; 
					 
 $leadsquared->update_lead($data,$leadId);
	Example $date = '{ 
						"FirstName":"John",
						"LastName":"Smith",
						"EmailAddress":"john.smith@acmeconsulting.co",
						"Phone":"99999999999"
					 }'; 
					 
 $leadsquared->create_update_lead($data);
	Example $date = '{ 
						"FirstName":"John",
						"LastName":"Smith",
						"EmailAddress":"john.smith@acmeconsulting.co",
						"Phone":"99999999999",
						"SearchBy":"EmailAddress"
					 }'; 
					 
 $leadsquared->convert_visitor($data,$leadId);
	Example $date = '{ 
						"FirstName":"John",
						"LastName":"Smith",
						"EmailAddress":"john.smith@acmeconsulting.co",
						"Phone":"99999999999"
					 }'; 
					 

*/