<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Patient-f1fa0b52-eccf-44af-96c7-84a3251bb22c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Patient-f1fa0b52-eccf-44af-96c7-84a3251bb22c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Patient-f1fa0b52-eccf-44af-96c7-84a3251bb22c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Patient-f1fa0b52-eccf-44af-96c7-84a3251bb22c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Patient-f1fa0b52-eccf-44af-96c7-84a3251bb22c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Patient-f1fa0b52-eccf-44af-96c7-84a3251bb22c.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc1/Patient-f1fa0b52-eccf-44af-96c7-84a3251bb22c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
