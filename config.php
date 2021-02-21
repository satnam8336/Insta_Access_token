<?php 
// Instagram API configuration 
define('INSTAGRAM_CLIENT_ID', 'Instagram_Client_Id'); 
define('INSTAGRAM_CLIENT_SECRET', 'Instagram_Client_Secret'); 
define('INSTAGRAM_REDIRECT_URI', 'Callback_URL'); 
 
// Start session 
if(!session_id()){ 
    session_start(); 
} 
 
/* 
 * For the internal purposes only  
 * changes not required 
 */ 
 
// Include Instagram OAuth library 
require_once 'function.php'; 
 
// Initiate Instagram Auth class 
$instagram = new InstagramAuth(array( 
    'client_id' => INSTAGRAM_CLIENT_ID, 
    'client_secret' => INSTAGRAM_CLIENT_SECRET, 
    'redirect_url' => INSTAGRAM_REDIRECT_URI 
)); 