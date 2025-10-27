# Artifacts Summary - Finnish Implementation Guide for SMART App Launch v2.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Behavior: Capability Statements 

The following artifacts define the specific capabilities that different types of systems are expected to have in order to comply with this implementation guide. Systems conforming to this implementation guide are expected to declare conformance to one or more of the following capability statements.

| | |
| :--- | :--- |
| [Finnish SMART Server Capability Statement](CapabilityStatement-fi-smart-server.md) | This CapabilityStatement describes the basic rules for a server actor providing SMART App Launch in Finland. |

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [FI SMART AllergyIntolerance](StructureDefinition-fi-smart-allergy-intolerance.md) | This is the Finnish patient facing profile for the AllergyIntolerance resource. |
| [FI SMART Condition](StructureDefinition-fi-smart-condition.md) | This is the Finnish patient facing profile for the Condition resource. |
| [FI SMART Immunization](StructureDefinition-fi-smart-immunization.md) | This is the Finnish patient facing profile for the Immunization resource. |
| [FI SMART Medication](StructureDefinition-fi-smart-medication.md) | This is the Finnish base profile for the Medication resource for patient access use case. |
| [FI SMART Medication Request](StructureDefinition-fi-smart-medication-request.md) | This is the Finnish base profile for the MedicationRequest resource for patient access use case. |
| [FI SMART MedicationStatement](StructureDefinition-fi-smart-medication-statement.md) | This is the Finnish patient facing profile for the MedicationStatement resource. |
| [FI SMART Observation](StructureDefinition-fi-smart-observation.md) | This is the Finnish patient facing profile for the Observation resource. |
| [FI SMART Patient](StructureDefinition-fi-smart-patient.md) | This is the Finnish patient facing profile for the Patient resource. |
| [FI SMART Practitioner](StructureDefinition-fi-smart-practitioner.md) | This is the Finnish patient facing profile for the Practitioner resource. |
| [FI SMART PractitionerRole](StructureDefinition-fi-smart-practitioner-role.md) | This is the Finnish patient facing profile for the PractitionerRole resource. |
| [FI SMART Problem List Item](StructureDefinition-fi-smart-problem-list-item.md) | This is the Finnish patient facing profile for the Condition resource for problem list items. |
| [Finnish SMART Server Capability Statement Profile](StructureDefinition-fi-smart-server-profile.md) | This CapabilityStatement profile describes the basic rules for a server actor providing SMART App Launch in Finland. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [CapabilityStatementExampleApotti](CapabilityStatement-apotti-eko01.md) | An example CapabilityStatement captured from Apotti Ekosysteemi. |
| [SMARTExampleApottiPractitionerEHR](AuditEvent-apotti-ehr-launch-by-practitioner.md) | A data flow example of a SMART App Launch from Apotti Ekosysteemi, performed by a practitioner. |

