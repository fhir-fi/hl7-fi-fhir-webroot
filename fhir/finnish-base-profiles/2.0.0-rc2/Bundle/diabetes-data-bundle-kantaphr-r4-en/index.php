<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Bundle-diabetes-data-bundle-kantaphr-r4-en.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Bundle-diabetes-data-bundle-kantaphr-r4-en.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Bundle-diabetes-data-bundle-kantaphr-r4-en.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Bundle-diabetes-data-bundle-kantaphr-r4-en.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Bundle-diabetes-data-bundle-kantaphr-r4-en.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Bundle-diabetes-data-bundle-kantaphr-r4-en.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/2.0.0-rc2/Bundle-diabetes-data-bundle-kantaphr-r4-en.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
