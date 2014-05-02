<?php
require_once('lib/nusoap.php');
include_once('util.php');
// Create the server instance
$server = new soap_server();
// Initialize WSDL support
$server->configureWSDL('hellowsdl', 'urn:hellowsdl');
// Register the method to expose
$server->register('getUsuario',                // method name
    array('email' => 'xsd:string'),        // input parameters
    array('return' => 'xsd:string'),      // output parameters
    'urn:hellowsdl',                      // namespace
    'urn:hellowsdl#getUsuario',                // soapaction
    'rpc',                                // style
    'encoded',                            // use
    'Says hello to the caller'            // documentation
);

// Define the method as a PHP function
function hello($name) {
        echo 'Hello, ' . $name;
}

function getUsuario($email){
	$mysql=connect();
	
	$query="SELECT nombre FROM usuarios WHERE email='".$email."'";
	$res=$mysql->query($query);
	$res=mysqli_fetch_array($res);
	$res1=$res[0];

	return $res1;
}


// Use the request to (try to) invoke the service.
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);

exit();
?>
