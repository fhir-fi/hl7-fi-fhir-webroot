<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Organization-1.2.246.10.31045308.10002.0.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Organization-1.2.246.10.31045308.10002.0.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Organization-1.2.246.10.31045308.10002.0.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Organization-1.2.246.10.31045308.10002.0.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Organization-1.2.246.10.31045308.10002.0.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Organization-1.2.246.10.31045308.10002.0.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Organization-1.2.246.10.31045308.10002.0.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
