# Finnish SMART Server Capability Statement Profile - Finnish Implementation Guide for SMART App Launch v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Finnish SMART Server Capability Statement Profile**

## Resource Profile: Finnish SMART Server Capability Statement Profile 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.fi/fhir/finnish-smart/StructureDefinition/fi-smart-server-profile | *Version*:2.0.0 |
| Active as of 2025-10-26 | *Computable Name*:FiSmartServerProfile |

 
This CapabilityStatement profile describes the basic rules for a server actor providing SMART App Launch in Finland. 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.fi.smart|current/StructureDefinition/fi-smart-server-profile)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fi-smart-server-profile.csv), [Excel](StructureDefinition-fi-smart-server-profile.xlsx), [Schematron](StructureDefinition-fi-smart-server-profile.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fi-smart-server-profile",
  "url" : "https://hl7.fi/fhir/finnish-smart/StructureDefinition/fi-smart-server-profile",
  "version" : "2.0.0",
  "name" : "FiSmartServerProfile",
  "title" : "Finnish SMART Server Capability Statement Profile",
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
  "description" : "This CapabilityStatement profile describes the basic rules for a server actor providing SMART App Launch in Finland.",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "objimpl",
      "uri" : "http://hl7.org/fhir/object-implementation",
      "name" : "Object Implementation Information"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "CapabilityStatement",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/CapabilityStatement",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "CapabilityStatement",
        "path" : "CapabilityStatement"
      },
      {
        "id" : "CapabilityStatement.format",
        "path" : "CapabilityStatement.format",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "description" : "Slice by value of format.",
          "rules" : "open"
        },
        "short" : "JSON is mandatory",
        "definition" : "Support for JSON is required, support for XML is recommended."
      },
      {
        "id" : "CapabilityStatement.format:json",
        "path" : "CapabilityStatement.format",
        "sliceName" : "json",
        "min" : 1,
        "max" : "*"
      },
      {
        "id" : "CapabilityStatement.format:json.value",
        "path" : "CapabilityStatement.format.value",
        "patternString" : "json"
      },
      {
        "id" : "CapabilityStatement.implementationGuide",
        "path" : "CapabilityStatement.implementationGuide",
        "patternCanonical" : "http://hl7.org/fhir/smart-app-launch/ImplementationGuide/hl7.fhir.uv.smart-app-launch"
      },
      {
        "id" : "CapabilityStatement.rest.mode",
        "path" : "CapabilityStatement.rest.mode",
        "patternCode" : "server"
      }
    ]
  }
}

```
