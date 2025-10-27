# Finnish SMART Server Capability Statement - Finnish Implementation Guide for SMART App Launch v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Finnish SMART Server Capability Statement**

## CapabilityStatement: Finnish SMART Server Capability Statement 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.fi/fhir/finnish-smart/CapabilityStatement/fi-smart-server | *Version*:2.0.0 |
| Active as of 2023-11-09 | *Computable Name*:FiSmartServer |

 
This CapabilityStatement describes the basic rules for a server actor providing SMART App Launch in Finland. 

 [Raw OpenAPI-Swagger Definition file](fi-smart-server.openapi.json) | [Download](fi-smart-server.openapi.json) 

## Finnish SMART Server Capability Statement

* Implementation Guide Version: 2.0.0 
* FHIR Version: 4.0.1 
* Supported Formats: **SHALL** support `json`, **SHOULD** support `xml`
* Supported Patch Formats: **SHOULD** support `application/json-patch+json`
* Published on: 2023-11-09 
* Published by: HL7 Finland ry 

> **Note to Implementers: FHIR Capabilities**Any FHIR capability may be 'allowed' by the system unless explicitly marked as 'SHALL NOT'. A few items are marked as MAY in the Implementation Guide to highlight their potential relevance to the use case.

### SHALL Support the Following Implementation Guides

* [http://hl7.org/fhir/smart-app-launch/ImplementationGuide/hl7.fhir.uv.smart-app-launch|2.2.0](http://hl7.org/fhir/smart-app-launch/STU2.2/index.html)

### SHOULD Support the Following Implementation Guides

* [http://hl7.org/fhir/uv/ipa/ImplementationGuide/hl7.fhir.uv.ipa|1.1.0](http://hl7.org/fhir/uv/ipa/STU1.1/index.html)

## FHIR RESTful Capabilities

### Mode: server

The server **SHALL**:

1. Implement the RESTful behavior according to the FHIR specification.
1. Support JSON source formats for all interactions.
1. Declare a CapabilityStatement identifying the list of profiles, operations, and search parameters supported.

The server **SHOULD**:

1. Support XML source formats for all interactions.
1. Implement the International Patient Access (IPA) specification.

**Security**

> 

This implementation guide relies heavily on the widely adopted SMART App Launch mechanism. This implementation guide does not define any new security mechanisms. Please familiarize yourself with the securty concepts infroduced in the SMART App Launch specification, and the underlying OpenID Connect and OAuth2 specifications the SMART App Launch specification build on.

1. See the Best Practices outlined in the SMART App Launch specification.
1. See the[FHIR Security](https://www.hl7.org/fhir/security.html)section of the FHIR specification for requirements and recommendations.
1. A server**SHALL**reject any unauthorized requests by returning an HTTP`401 Unauthorized`,`403 Forbidden`, or`404 Not Found`response code.




## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "fi-smart-server",
  "url" : "https://hl7.fi/fhir/finnish-smart/CapabilityStatement/fi-smart-server",
  "version" : "2.0.0",
  "name" : "FiSmartServer",
  "title" : "Finnish SMART Server Capability Statement",
  "status" : "active",
  "date" : "2023-11-09",
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
  "description" : "This CapabilityStatement describes the basic rules for a server actor providing SMART App Launch in Finland.",
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
  "kind" : "requirements",
  "fhirVersion" : "4.0.1",
  "format" : ["json", "xml"],
  "_format" : [
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/capabilitystatement-expectation",
          "valueCode" : "SHALL"
        }
      ]
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/capabilitystatement-expectation",
          "valueCode" : "SHOULD"
        }
      ]
    }
  ],
  "patchFormat" : ["application/json-patch+json"],
  "_patchFormat" : [
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/capabilitystatement-expectation",
          "valueCode" : "SHOULD"
        }
      ]
    }
  ],
  "implementationGuide" : [
    "http://hl7.org/fhir/smart-app-launch/ImplementationGuide/hl7.fhir.uv.smart-app-launch|2.2.0",
    "http://hl7.org/fhir/uv/ipa/ImplementationGuide/hl7.fhir.uv.ipa|1.1.0"
  ],
  "_implementationGuide" : [
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/capabilitystatement-expectation",
          "valueCode" : "SHALL"
        }
      ]
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/capabilitystatement-expectation",
          "valueCode" : "SHOULD"
        }
      ]
    }
  ],
  "rest" : [
    {
      "mode" : "server",
      "documentation" : "The server **SHALL**:\n1. Implement the RESTful behavior according to the FHIR specification.\n1. Support JSON source formats for all interactions.\n1. Declare a CapabilityStatement identifying the list of profiles, operations, and search parameters supported.\n\nThe server **SHOULD**:\n1. Support XML source formats for all interactions.\n1. Implement the International Patient Access (IPA) specification.",
      "security" : {
        "description" : "This implementation guide relies heavily on the widely adopted SMART App Launch mechanism. This implementation guide does not define any new security mechanisms. Please familiarize yourself with the securty concepts infroduced in the SMART App Launch specification, and the underlying OpenID Connect and OAuth2 specifications the SMART App Launch specification build on.\n1. See the Best Practices outlined in the SMART App Launch specification.\n1. See the [FHIR Security](https://www.hl7.org/fhir/security.html) section of the FHIR specification for requirements and recommendations.\n1. A server **SHALL** reject any unauthorized requests by returning an HTTP `401 Unauthorized`, `403 Forbidden`, or `404 Not Found` response code."
      }
    }
  ]
}

```
