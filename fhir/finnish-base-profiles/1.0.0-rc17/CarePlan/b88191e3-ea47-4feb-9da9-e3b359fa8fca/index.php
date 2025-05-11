<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/CarePlan-b88191e3-ea47-4feb-9da9-e3b359fa8fca.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/CarePlan-b88191e3-ea47-4feb-9da9-e3b359fa8fca.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/CarePlan-b88191e3-ea47-4feb-9da9-e3b359fa8fca.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/CarePlan-b88191e3-ea47-4feb-9da9-e3b359fa8fca.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/CarePlan-b88191e3-ea47-4feb-9da9-e3b359fa8fca.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/CarePlan-b88191e3-ea47-4feb-9da9-e3b359fa8fca.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/CarePlan-b88191e3-ea47-4feb-9da9-e3b359fa8fca.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
