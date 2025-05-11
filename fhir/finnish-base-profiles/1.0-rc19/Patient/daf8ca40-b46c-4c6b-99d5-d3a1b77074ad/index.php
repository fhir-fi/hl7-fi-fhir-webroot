<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc19/Patient-daf8ca40-b46c-4c6b-99d5-d3a1b77074ad.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc19/Patient-daf8ca40-b46c-4c6b-99d5-d3a1b77074ad.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc19/Patient-daf8ca40-b46c-4c6b-99d5-d3a1b77074ad.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc19/Patient-daf8ca40-b46c-4c6b-99d5-d3a1b77074ad.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc19/Patient-daf8ca40-b46c-4c6b-99d5-d3a1b77074ad.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc19/Patient-daf8ca40-b46c-4c6b-99d5-d3a1b77074ad.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc19/Patient-daf8ca40-b46c-4c6b-99d5-d3a1b77074ad.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
