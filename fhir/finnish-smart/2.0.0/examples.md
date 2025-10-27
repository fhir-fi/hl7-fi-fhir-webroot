# Examples - Finnish Implementation Guide for SMART App Launch v2.0.0

* [**Table of Contents**](toc.md)
* **Examples**

## Examples

### CapabilityStatement

* [Apotti CapabilityStatement](CapabilityStatement-apotti-eko01.md), an example capability statement captured from Apotti's ecosystem environment.

### Launch Sequence

* [Apotti EHR Launch by a Practitioner](AuditEvent-apotti-ehr-launch-by-practitioner.md), an example data flow when an app is launched from an EHR system. Note that the AuditEvent resource instance has minimal content. Most of the content of the example is in the human readable introductory part of the example page.

**Please do not implement the SMART App Launch mechanism based on examples!** Examples in this implementation guide are meant to offer additional clarity on how the SMART App Launch mechanism works in certain circumstances. However, to appreciate all the details of the security mechanisms involved, all implementers of the SMART App Launch mechanism really need to study and understand the main [SMART App Launch specification](http://hl7.org/fhir/smart-app-launch/), and the underlying [OAuth2](https://oauth.net/2/) and [OpenID Connect](https://openid.net/connect/) specifications. Do give information security the attention it deserves! 

