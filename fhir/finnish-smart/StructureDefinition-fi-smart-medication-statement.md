# FI SMART MedicationStatement - Finnish Implementation Guide for SMART App Launch v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FI SMART MedicationStatement**

## Resource Profile: FI SMART MedicationStatement 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.fi/fhir/finnish-smart/StructureDefinition/fi-smart-medication-statement | *Version*:2.0.0 |
| Active as of 2025-10-26 | *Computable Name*:FiSMARTMedicationStatement |

 
This is the Finnish patient facing profile for the MedicationStatement resource. 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.fi.smart|current/StructureDefinition/fi-smart-medication-statement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fi-smart-medication-statement.csv), [Excel](StructureDefinition-fi-smart-medication-statement.xlsx), [Schematron](StructureDefinition-fi-smart-medication-statement.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fi-smart-medication-statement",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ipa/StructureDefinition/ipa-medicationstatement|1.1.0"
    }
  ],
  "url" : "https://hl7.fi/fhir/finnish-smart/StructureDefinition/fi-smart-medication-statement",
  "version" : "2.0.0",
  "name" : "FiSMARTMedicationStatement",
  "title" : "FI SMART MedicationStatement",
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
  "description" : "This is the Finnish patient facing profile for the MedicationStatement resource.",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
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
  "type" : "MedicationStatement",
  "baseDefinition" : "https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/fi-base-medication-statement",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationStatement",
        "path" : "MedicationStatement"
      }
    ]
  }
}

```
