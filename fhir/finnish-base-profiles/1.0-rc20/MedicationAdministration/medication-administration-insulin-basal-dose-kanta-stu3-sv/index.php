<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/MedicationAdministration-medication-administration-insulin-basal-dose-kanta-stu3-sv.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/MedicationAdministration-medication-administration-insulin-basal-dose-kanta-stu3-sv.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/MedicationAdministration-medication-administration-insulin-basal-dose-kanta-stu3-sv.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/MedicationAdministration-medication-administration-insulin-basal-dose-kanta-stu3-sv.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/MedicationAdministration-medication-administration-insulin-basal-dose-kanta-stu3-sv.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/MedicationAdministration-medication-administration-insulin-basal-dose-kanta-stu3-sv.html');
else 
  Redirect('https://hl7.fi/fhir/finnish-base-profiles/1.0-rc20/MedicationAdministration-medication-administration-insulin-basal-dose-kanta-stu3-sv.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
