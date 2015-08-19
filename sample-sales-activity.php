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
 
 
 $leadsquared->sales_activity_settings();
  
 $leadsquared->create_product($json_data);
	Example $json_data = '{
							"ProductSku": "Your product's unique SKU/ID",
							"Name": "Name of your product",
							"Description": "Description/Notes"	
							}';
 
 $leadsquared->update_product($json_data);
	Example $json_data = '{
							"ProductId ": "ID of the product",
							"ProductSku": "Product#01",
							"Name": "API Product",
							"Description": "API Product"	
							}';
 
 $leadsquared->delete_product($product_id);
	Example $product_id = "Id of product in leadsquared";
	
 $leadsquared->retrieve_products($json_data);
	First, you could retrieve by search text, where you can search through product SKU, name or description:
	Example $json_data = '{
							"Parameter": {
									"SearchText": "Product"
								},
								"Sorting": {
									"ColumnName": "ModifiedOn",
									"Direction": "1"
								},
								"Paging": {
									"PageIndex": 1,
									"PageSize": 10
								}	
							}';
							
	Or, you could search by specific parameter – Id, ProductSku or Name:
	
	Example	 $json_data = '{
						  "Parameter": {
									"Id": ""
								},
								"Sorting": {
									"ColumnName": "ModifiedOn",
									"Direction": "1"
								},
								"Paging": {
									"PageIndex": 1,
									"PageSize": 10
								}	
							}';
							
 $leadsquared->add_sales_activity($json_data);
	Example	 $json_data = '{
								"ProspectId": "ID of the lead on which this activity is to be posted",
								"ProductId": "ID of the product which was sold",
								"Revenue": Revenue as number,
								"SalesOwner": "who sold the deal? ID of the user",
								"SalesDate": "date of sale in yyyy-MM-dd HH:mm:ss format"
							}';
 
 $leadsquared->update_sales_activity($json_data);
	Example	 $json_data = '{
								"Id": "Id of the Sales Activity",
								"ProspectId": "ProspectId",
								"ProductId": "ProductId",
								"Revenue": Revenue Number,
								"SalesOwner": "SalesOwnerUserId",
								"SalesDate": "Date of Sale"
							}';
 
 $leadsquared->retrieve_sales_activity($activity_id);
	Example $activity_id = " $activityId is ProspectActivityId which you can get by using $leadsquared->get_activities_of_lead($leadId , $json_data = null); "

*/