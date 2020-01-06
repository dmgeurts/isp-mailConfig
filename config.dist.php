<?php
// Panel connection
define('SOAP_USER', 'REMOTE_USER');
define('SOAP_PASS', 'REMOTE_PASS');
define('SOAP_URI', 'https://SERVER.TLD:8080/remote/');
define('SOAP_LOCATION', SOAP_URI.'index.php');

// About your service
define('SERVICE_NAME', 'My Mail Service');
define('SERVICE_ADDR', true ); // Add the client email to the Service name? (true/false)
define('SERVICE_SHORT', 'MyMail');
//define('SERVER_FQDN', 'mail.SERVER.TLD'); // Uncomment to use, autodetects the server name otherwise.
?>
