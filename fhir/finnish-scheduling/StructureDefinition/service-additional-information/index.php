<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc2/StructureDefinition-service-additional-information.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc2/StructureDefinition-service-additional-information.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc2/StructureDefinition-service-additional-information.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc2/StructureDefinition-service-additional-information.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc2/StructureDefinition-service-additional-information.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc2/StructureDefinition-service-additional-information.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-scheduling/2.0.0-rc2/StructureDefinition-service-additional-information.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
