<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc1/Appointment-appointment-status-extension-05.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc1/Appointment-appointment-status-extension-05.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc1/Appointment-appointment-status-extension-05.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc1/Appointment-appointment-status-extension-05.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc1/Appointment-appointment-status-extension-05.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc1/Appointment-appointment-status-extension-05.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc1/Appointment-appointment-status-extension-05.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
