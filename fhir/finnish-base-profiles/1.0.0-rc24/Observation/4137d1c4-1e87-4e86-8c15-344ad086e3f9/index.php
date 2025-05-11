<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/Observation-4137d1c4-1e87-4e86-8c15-344ad086e3f9.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/Observation-4137d1c4-1e87-4e86-8c15-344ad086e3f9.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/Observation-4137d1c4-1e87-4e86-8c15-344ad086e3f9.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/Observation-4137d1c4-1e87-4e86-8c15-344ad086e3f9.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/Observation-4137d1c4-1e87-4e86-8c15-344ad086e3f9.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/Observation-4137d1c4-1e87-4e86-8c15-344ad086e3f9.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/Observation-4137d1c4-1e87-4e86-8c15-344ad086e3f9.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
