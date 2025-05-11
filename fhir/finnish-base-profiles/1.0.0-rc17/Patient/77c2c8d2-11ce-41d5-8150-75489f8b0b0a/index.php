<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/Patient-77c2c8d2-11ce-41d5-8150-75489f8b0b0a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/Patient-77c2c8d2-11ce-41d5-8150-75489f8b0b0a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/Patient-77c2c8d2-11ce-41d5-8150-75489f8b0b0a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/Patient-77c2c8d2-11ce-41d5-8150-75489f8b0b0a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/Patient-77c2c8d2-11ce-41d5-8150-75489f8b0b0a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/Patient-77c2c8d2-11ce-41d5-8150-75489f8b0b0a.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc17/Patient-77c2c8d2-11ce-41d5-8150-75489f8b0b0a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
