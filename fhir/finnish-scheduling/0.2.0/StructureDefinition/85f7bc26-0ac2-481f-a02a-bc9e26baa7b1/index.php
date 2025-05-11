<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-85f7bc26-0ac2-481f-a02a-bc9e26baa7b1.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-85f7bc26-0ac2-481f-a02a-bc9e26baa7b1.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-85f7bc26-0ac2-481f-a02a-bc9e26baa7b1.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-85f7bc26-0ac2-481f-a02a-bc9e26baa7b1.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-85f7bc26-0ac2-481f-a02a-bc9e26baa7b1.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-85f7bc26-0ac2-481f-a02a-bc9e26baa7b1.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-85f7bc26-0ac2-481f-a02a-bc9e26baa7b1.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
