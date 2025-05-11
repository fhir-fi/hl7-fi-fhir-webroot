<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/StructureDefinition-fi-base-practitioner-role.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/StructureDefinition-fi-base-practitioner-role.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/StructureDefinition-fi-base-practitioner-role.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/StructureDefinition-fi-base-practitioner-role.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/StructureDefinition-fi-base-practitioner-role.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/StructureDefinition-fi-base-practitioner-role.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/StructureDefinition-fi-base-practitioner-role.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
