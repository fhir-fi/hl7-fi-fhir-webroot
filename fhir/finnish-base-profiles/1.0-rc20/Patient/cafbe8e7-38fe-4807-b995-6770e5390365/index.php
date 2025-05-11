<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/Patient-cafbe8e7-38fe-4807-b995-6770e5390365.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/Patient-cafbe8e7-38fe-4807-b995-6770e5390365.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/Patient-cafbe8e7-38fe-4807-b995-6770e5390365.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/Patient-cafbe8e7-38fe-4807-b995-6770e5390365.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/Patient-cafbe8e7-38fe-4807-b995-6770e5390365.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/Patient-cafbe8e7-38fe-4807-b995-6770e5390365.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/Patient-cafbe8e7-38fe-4807-b995-6770e5390365.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
