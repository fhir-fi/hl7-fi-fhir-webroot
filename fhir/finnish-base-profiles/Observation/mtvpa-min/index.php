<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Observation-mtvpa-min.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Observation-mtvpa-min.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Observation-mtvpa-min.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Observation-mtvpa-min.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Observation-mtvpa-min.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Observation-mtvpa-min.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Observation-mtvpa-min.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
