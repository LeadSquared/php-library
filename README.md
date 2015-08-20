<snippet>
  <content><![CDATA[
# ${1:LeadSquared PHP library}

This library provides an API to Create, Edit and find leads, Post activities on leads, and do Task management.

The folder leadsquared contents leadsquared.php and log4php

leadsquared.php has the functions that communicates with the LeadSquared

log4php is used for logging
	Log the request data  before API is called
	Log the response – whether exception or success

	To know more about log4php vist
	http://logging.apache.org/log4php/

	
## Configuration
<div class="highlight highlight-php"><pre>
include('leadsquared/leadsquared.php');

define('LSQ_NAME', '<-- Name Of your Project -->');

define('LSQ_ACCESSKEY', '<-- LeadSquared Access Key -->');

define('LSQ_SECRETKEY', '<-- LeadSquared Secret Key -->');

$leadsquared = new Leadsquared_Api();
</pre></div>

## Usage

### Basic Operations

<div class="highlight highlight-php"><pre>

  // Get Meta data
 $leadsquared->get_meta_data();

 // Get Lead by EmailAddress
 $leadsquared->get_lead_by_email($email);
	Example $email = "john.smith@acmeconsulting.co"
	
 // Search Lead with keyword
 $leadsquared->quick_search($key);
	Example $key = "John"
 
 //Create Lead 
 $leadsquared->create_lead($data);
	Example $date = '{ 
						"FirstName":"John",
						"LastName":"Smith",
						"EmailAddress":"john.smith@acmeconsulting.co",
						"Phone":"99999999999"
					 }'; 
					 
  //Update Lead				 
 $leadsquared->update_lead($data,$leadId);
	Example $date = '{ 
						"FirstName":"John",
						"LastName":"Smith",
						"EmailAddress":"john.smith@acmeconsulting.co",
						"Phone":"99999999999"
					 }'; 
					 
  //Create or Update Lead	< This  will update the lead if it exists, else will create a new one >
 $leadsquared->create_update_lead($data);
	Example $date = '{ 
						"FirstName":"John",
						"LastName":"Smith",
						"EmailAddress":"john.smith@acmeconsulting.co",
						"Phone":"99999999999",
						"SearchBy":"EmailAddress"
					 }'; 
					 
  // Convert website visitor to lead
  
 $leadsquared->convert_visitor($data,$leadId);
	Example $date = '{ 
						"FirstName":"John",
						"LastName":"Smith",
						"EmailAddress":"john.smith@acmeconsulting.co",
						"Phone":"99999999999"
					 }'; 
					 
</pre></div>
</content>
  <tabTrigger>readme</tabTrigger>
</snippet>
