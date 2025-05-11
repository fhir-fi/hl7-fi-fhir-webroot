<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-d8e721a0-0a93-4bba-9ddd-0a9aca0c8e33.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-d8e721a0-0a93-4bba-9ddd-0a9aca0c8e33.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-d8e721a0-0a93-4bba-9ddd-0a9aca0c8e33.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-d8e721a0-0a93-4bba-9ddd-0a9aca0c8e33.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-d8e721a0-0a93-4bba-9ddd-0a9aca0c8e33.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-d8e721a0-0a93-4bba-9ddd-0a9aca0c8e33.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-d8e721a0-0a93-4bba-9ddd-0a9aca0c8e33.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
