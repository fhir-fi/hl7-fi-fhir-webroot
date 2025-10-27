# FI SMART Medication Request - Finnish Implementation Guide for SMART App Launch v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FI SMART Medication Request**

## Resource Profile: FI SMART Medication Request 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.fi/fhir/finnish-smart/StructureDefinition/fi-smart-medication-request | *Version*:2.0.0 |
| Active as of 2025-10-26 | *Computable Name*:FiSMARTMedicationRequest |

 
This is the Finnish base profile for the MedicationRequest resource for patient access use case. 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.fi.smart|current/StructureDefinition/fi-smart-medication-request)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fi-smart-medication-request.csv), [Excel](StructureDefinition-fi-smart-medication-request.xlsx), [Schematron](StructureDefinition-fi-smart-medication-request.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fi-smart-medication-request",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ipa/StructureDefinition/ipa-medicationrequest|1.1.0"
    }
  ],
  "url" : "https://hl7.fi/fhir/finnish-smart/StructureDefinition/fi-smart-medication-request",
  "version" : "2.0.0",
  "name" : "FiSMARTMedicationRequest",
  "title" : "FI SMART Medication Request",
  "status" : "active",
  "date" : "2025-10-26T13:24:16+02:00",
  "publisher" : "HL7 Finland ry",
  "contact" : [
    {
      "name" : "HL7 Finland ry",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.fi/"
        },
        {
          "system" : "email",
          "value" : "mikael@sensotrend.com"
        }
      ]
    }
  ],
  "description" : "This is the Finnish base profile for the MedicationRequest resource for patient access use case.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "FI",
          "display" : "Finland"
        }
      ]
    }
  ],
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "script10.6",
      "uri" : "http://ncpdp.org/SCRIPT10_6",
      "name" : "Mapping to NCPDP SCRIPT 10.6"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Medication",
  "baseDefinition" : "https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/fi-base-medication",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Medication",
        "path" : "Medication"
      }
    ]
  }
}

```
