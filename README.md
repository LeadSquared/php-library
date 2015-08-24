<snippet>
  <content>
# LeadSquared PHP library

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

Lead Management 
https://github.com/LeadSquared/php-library/wiki/Lead-Management

Activity-Management
https://github.com/LeadSquared/php-library/wiki/Activity-Management

Sales-Activity
https://github.com/LeadSquared/php-library/wiki/Sales-Activity
</snippet>
