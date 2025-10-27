# FI SMART PractitionerRole - Finnish Implementation Guide for SMART App Launch v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FI SMART PractitionerRole**

## Resource Profile: FI SMART PractitionerRole 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.fi/fhir/finnish-smart/StructureDefinition/fi-smart-practitioner-role | *Version*:2.0.0 |
| Active as of 2025-10-26 | *Computable Name*:FiSMARTPractitionerRole |

 
This is the Finnish patient facing profile for the PractitionerRole resource. 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.fi.smart|current/StructureDefinition/fi-smart-practitioner-role)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fi-smart-practitioner-role.csv), [Excel](StructureDefinition-fi-smart-practitioner-role.xlsx), [Schematron](StructureDefinition-fi-smart-practitioner-role.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fi-smart-practitioner-role",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ipa/StructureDefinition/ipa-practitionerrole|1.1.0"
    }
  ],
  "url" : "https://hl7.fi/fhir/finnish-smart/StructureDefinition/fi-smart-practitioner-role",
  "version" : "2.0.0",
  "name" : "FiSMARTPractitionerRole",
  "title" : "FI SMART PractitionerRole",
  "status" : "active",
  "date" : "2025-10-26T13:22:16+02:00",
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
  "description" : "This is the Finnish patient facing profile for the PractitionerRole resource.",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "PractitionerRole",
  "baseDefinition" : "https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/fi-base-practitioner-role",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "PractitionerRole",
        "path" : "PractitionerRole"
      }
    ]
  }
}

```
