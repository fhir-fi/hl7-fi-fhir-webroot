<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/MedicationAdministration-a4d97476-39fa-46c6-bf2e-1fb153a7bbe2.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/MedicationAdministration-a4d97476-39fa-46c6-bf2e-1fb153a7bbe2.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/MedicationAdministration-a4d97476-39fa-46c6-bf2e-1fb153a7bbe2.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/MedicationAdministration-a4d97476-39fa-46c6-bf2e-1fb153a7bbe2.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/MedicationAdministration-a4d97476-39fa-46c6-bf2e-1fb153a7bbe2.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/MedicationAdministration-a4d97476-39fa-46c6-bf2e-1fb153a7bbe2.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0.0-rc24/MedicationAdministration-a4d97476-39fa-46c6-bf2e-1fb153a7bbe2.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
