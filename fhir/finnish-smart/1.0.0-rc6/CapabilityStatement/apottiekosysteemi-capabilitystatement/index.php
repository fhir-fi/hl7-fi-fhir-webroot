<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-smart/1.0.0-rc6/CapabilityStatement-apottiekosysteemi-capabilitystatement.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-smart/1.0.0-rc6/CapabilityStatement-apottiekosysteemi-capabilitystatement.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-smart/1.0.0-rc6/CapabilityStatement-apottiekosysteemi-capabilitystatement.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-smart/1.0.0-rc6/CapabilityStatement-apottiekosysteemi-capabilitystatement.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-smart/1.0.0-rc6/CapabilityStatement-apottiekosysteemi-capabilitystatement.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-smart/1.0.0-rc6/CapabilityStatement-apottiekosysteemi-capabilitystatement.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-smart/1.0.0-rc6/CapabilityStatement-apottiekosysteemi-capabilitystatement.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
