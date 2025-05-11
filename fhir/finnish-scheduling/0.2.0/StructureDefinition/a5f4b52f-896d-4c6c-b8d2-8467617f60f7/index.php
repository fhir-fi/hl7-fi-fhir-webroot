<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-a5f4b52f-896d-4c6c-b8d2-8467617f60f7.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-a5f4b52f-896d-4c6c-b8d2-8467617f60f7.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-a5f4b52f-896d-4c6c-b8d2-8467617f60f7.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-a5f4b52f-896d-4c6c-b8d2-8467617f60f7.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-a5f4b52f-896d-4c6c-b8d2-8467617f60f7.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-a5f4b52f-896d-4c6c-b8d2-8467617f60f7.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-a5f4b52f-896d-4c6c-b8d2-8467617f60f7.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
