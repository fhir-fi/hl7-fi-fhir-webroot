<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.3.1/StructureDefinition-fi-scheduling-location.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.3.1/StructureDefinition-fi-scheduling-location.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.3.1/StructureDefinition-fi-scheduling-location.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.3.1/StructureDefinition-fi-scheduling-location.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.3.1/StructureDefinition-fi-scheduling-location.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.3.1/StructureDefinition-fi-scheduling-location.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.3.1/StructureDefinition-fi-scheduling-location.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
