<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0/Patient-bb13623e-2673-4b3e-85d6-5c42f5333cde.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0/Patient-bb13623e-2673-4b3e-85d6-5c42f5333cde.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0/Patient-bb13623e-2673-4b3e-85d6-5c42f5333cde.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0/Patient-bb13623e-2673-4b3e-85d6-5c42f5333cde.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0/Patient-bb13623e-2673-4b3e-85d6-5c42f5333cde.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0/Patient-bb13623e-2673-4b3e-85d6-5c42f5333cde.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0/Patient-bb13623e-2673-4b3e-85d6-5c42f5333cde.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
