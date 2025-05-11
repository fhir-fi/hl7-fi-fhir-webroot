<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-3893dc5d-c30c-4781-b6ce-2af953c9ce8d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-3893dc5d-c30c-4781-b6ce-2af953c9ce8d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-3893dc5d-c30c-4781-b6ce-2af953c9ce8d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-3893dc5d-c30c-4781-b6ce-2af953c9ce8d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-3893dc5d-c30c-4781-b6ce-2af953c9ce8d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-3893dc5d-c30c-4781-b6ce-2af953c9ce8d.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-scheduling/0.2.0/StructureDefinition-3893dc5d-c30c-4781-b6ce-2af953c9ce8d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
