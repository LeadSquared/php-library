<?php
class Leadsquared_Api{
	var $name;
	var $accessKey;
	var $secretKey;

	 public function __construct() {
		$this->name = LSQ_NAME;
		$this->accessKey = LSQ_ACCESSKEY;
		$this->secretKey = LSQ_SECRETKEY;
	}
	
	public function create_lead($data){
		$url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
		$url = $url_base. '/Lead.Create?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$array = json_decode($data);
		$lead_details = array();
		foreach($array as $key => $value){
			$lead_details[] = '{"Attribute":"'.$key.'", "Value": "'.$value.'"}';
		}
		$json_data ='['.implode(",",$lead_details).']';
		$name = $this->name;
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	
	public function update_lead($data,$leadId){
		$url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
		$url = $url_base. '/Lead.Update?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey. '&leadId=' . $leadId;
		$array = json_decode($data);
		$lead_details = array();
		foreach($array as $key => $value){
			$lead_details[] = '{"Attribute":"'.$key.'", "Value": "'.$value.'"}';
		}
		$json_data ='['.implode(",",$lead_details).']';
		$name = $this->name;
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	
	public function create_update_lead($data){
		$url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
		$url = $url_base. '/Lead.CreateOrUpdate?postUpdatedLead=false&accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$array = json_decode($data);
		$lead_details = array();
		foreach($array as $key => $value){
			$lead_details[] = '{"Attribute":"'.$key.'", "Value": "'.$value.'"}';
		}
		$json_data ='['.implode(",",$lead_details).']';
		$name = $this->name;
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	
	public function convert_visitor($data,$leadId){
		$url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
		$url = $url_base. '/Lead.Convert?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey. '&leadId=' . $leadId . '&postUpdatedLead=true';
		$array = json_decode($data);
		$lead_details = array();
		foreach($array as $key => $value){
			$lead_details[] = '{"Attribute":"'.$key.'", "Value": "'.$value.'"}';
		}
		$json_data ='['.implode(",",$lead_details).']';
		$name = $this->name;
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	public function get_meta_data(){
		$url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
		$url = $url_base. '/LeadsMetaData.Get?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function get_lead_by_email($email){
		$url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
		$url = $url_base. '/Leads.GetByEmailaddress?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey . '&emailaddress=' . $email ;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function quick_search($key){
		$url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
		$url = $url_base. '/Leads.GetByQuickSearch?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey . '&key=' . $key ;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function get_activity_types(){
		$url_base = 'https://api.leadsquared.com/v2/ProspectActivity.svc';
		$url = $url_base. '/ActivityTypes.Get?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function post_activity($json_data){
		$url_base = 'https://api.leadsquared.com/v2/ProspectActivity.svc';
		$url = $url_base. '/Create?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	
	public function create_activity_type($json_data){
		$url_base = 'https://api.leadsquared.com/v2/ProspectActivity.svc';
		$url = $url_base. '/CreateType?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	public function get_activities_of_lead($leadId , $json_data = null){
		 if (null === $json_data) {
			$json_data = "{}";
		}
		$url_base = 'https://api.leadsquared.com/v2/ProspectActivity.svc';
		$url = $url_base. '/Retrieve?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey . '&leadId=' . $leadId;
		$name = $this->name;
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	
	public function create_product($json_data){
		$url_base = 'https://api.leadsquared.com/v2/SalesActivity.svc';
		$url = $url_base. '/CreateProduct?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	
	public function update_product($json_data){
		$url_base = 'https://api.leadsquared.com/v2/SalesActivity.svc';
		$url = $url_base. '/UpdateProduct?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	
	public function retrieve_products($json_data){
		$url_base = 'https://api.leadsquared.com/v2/SalesActivity.svc';
		$url = $url_base. '/RetrieveProducts?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	
	public function  add_sales_activity($json_data){
		$url_base = 'https://api.leadsquared.com/v2/SalesActivity.svc';
		$url = $url_base. '/Create?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	
	public function  update_sales_activity($json_data){
		$url_base = 'https://api.leadsquared.com/v2/SalesActivity.svc';
		$url = $url_base. '/Update?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	
	public function delete_product($product_id){
		$url_base = 'https://api.leadsquared.com/v2/SalesActivity.svc';
		$url = $url_base. '/DeleteProduct?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey . '&id=' . $product_id;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function retrieve_sales_activity($activity_id){
		$url_base = 'https://api.leadsquared.com/v2/SalesActivity.svc';
		$url = $url_base. '/RetrieveActivity?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey . '&activityId=' . $activity_id;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function sales_activity_settings(){
		$url_base = 'https://api.leadsquared.com/v2/SalesActivity.svc';
		$url = $url_base. '/RetrieveSetting?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function get_lists(){
		$url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
		$url = $url_base. '/Lists.Get?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function leads_in_lists($listId){
		$url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
		$url = $url_base. '/Lists.Get?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey . '&listId=' . $listId;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function count_in_lists($listId){
		$url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
		$url = $url_base. '/List/Retrieve/MemberCount?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey . '&listId=' . $listId;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function check_lead_in_lists($listId,$leadId){
		$url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
		$url = $url_base. '/List.CheckLead?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey . '&listId=' . $listId . '&leadId='. $leadId;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function add_lead_to_static_list($listId,$leadId){
		$url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
		$url = $url_base. '/AddLeadToStaticList?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey . '&listId=' . $listId . '&leadId='. $leadId;
		$name = $this->name;
		$json_data = '';
		return Leadsquared_Api::lsqcurl($url,$json_data,$name);
	}
	
	public function get_users(){
		$url_base = 'https://api.leadsquared.com/v2/UserManagement.svc';
		$url = $url_base. '/Users.Get?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function get_user_by_id($UserId){
		$url_base = 'https://api.leadsquared.com/v2/UserManagement.svc';
		$url = $url_base. '/User/Retrieve/ByUserId?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey . '&UserId=' . $UserId;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function get_user_by_email($email){
		$url_base = 'https://api.leadsquared.com/v2/UserManagement.svc';
		$url = $url_base. '/User/Retrieve/ByEmailAddress?accessKey=' . $this->accessKey . '&secretKey=' . $this->secretKey . '&emailAddress=' . $email;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function user_authentication($akey,$skey){
		$url_base = 'https://api.leadsquared.com/v2/UserManagement.svc';
		$url = $url_base. '/User/Retrieve/ByEmailAddress?accessKey=' . $akey . '&secretKey=' . $skey;
		$name = $this->name;
		return Leadsquared_Api::lsqcurlget($url,$name);
	}
	
	public function lsqcurl($url,$json_data,$name)
	{
		$log = Leadsquared_Api::leadsquared_log($name);
		$log->info($url); 
		$log->info($json_data); 
		try{
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_HEADER, 0);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_HTTPHEADER, array(
														'Content-Type:application/json',
														'Content-Length:'.strlen($json_data)
														));
			$response = curl_exec($curl);
			$array = json_decode($response,true);
			if(is_null($array))
			{
				$array = array();
			}
			if(	array_key_exists("Status",$array))
			{
				if( json_decode($response,true)['Status'] == 'Success' )
				{
					$log->info($response);
				}
				else
				{
					$log->error($response);
				}
			}
			else
			{
				$log->info($response);
			}
			
			return $response;
			curl_close($curl);
		} catch (Exception $ex) { 
			curl_close($curl);
		}
	}
	
	public function lsqcurlget($url,$name){
		$log = Leadsquared_Api::leadsquared_log($name);
		$log->info($url); 
		try{
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_HEADER, 0);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

			$response = curl_exec($curl);
			
			$array = json_decode($response,true);
			if(is_null($array))
			{
				$array = array();
			}
			if(	array_key_exists("Status",$array))
			{
				if( json_decode($response,true)['Status'] == 'Error' )
					{
						$log->error($response);
					}
					else
					{
						$log->info($response);
					}
			}
			else
			{
				$log->info($response);
			}
			return $response;
			curl_close($curl);
		} catch (Exception $ex) { 
			curl_close($curl);
		}
	}
	public function leadsquared_log($name){
		include('log4php/Logger.php');
		Logger::configure(array(
		'appenders' => array(
			'default' => array(
				'class' => 'LoggerAppenderRollingFile',
				'layout' => array(
					'class' => 'LoggerLayoutPattern',
					'params' => array(
						'conversionPattern' => '%date{l jS \of F Y h:i:s A} %logger %-5level %msg%n'
					)
				),
				'params' => array(
					'file' => dirname(__FILE__).'/log/'.$name.'/log.log',
					'maxFileSize' => '1mb',
					'maxBackupIndex' => 5,
				),
			),
		),
		'rootLogger' => array(
			'appenders' => array('default'),
		),
	));

	$log = Logger::getLogger($name); 
	return $log;
	}
}