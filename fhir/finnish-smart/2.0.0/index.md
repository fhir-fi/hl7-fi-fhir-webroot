# Home - Finnish Implementation Guide for SMART App Launch v2.0.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:https://hl7.fi/fhir/finnish-smart/ImplementationGuide/hl7.fhir.fi.smart | *Version*:2.0.0 |
| Active as of 2025-10-26 | *Computable Name*:FinnishSmart |

### Welcome to the Finnish SMART App Launch Specification

This is the Finnish implementation guide for the SMART App Launch mechanism.

This is an official HL7 Finland standard, with the oid `1.2.246.777.11.2025.5`.

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (hl7.fhir.fi.smart.r4)](package.r4.tgz) and [R4B (hl7.fhir.fi.smart.r4b)](package.r4b.tgz) are available.

It builds on top of both the HL7 [SMART App Launch](https://hl7.org/fhir/smart-app-launch/) and the HL7 [International Patient Access](https://build.fhir.org/ig/HL7/fhir-ipa/) specifications.

SMART App Launch is the mechanism through which third-party apps can be integrated with Electronic Health Record (EHR) systems. It specifies how apps gain knowledge of which practitioner or patient wants to access which patient's information, and how the app obtains the access token that can then be used to access further information.

You can think of it as a single-sign-on (SSO) mechanism, but it is actually a bit more and extends to communicating the context too.

When launched, the third party apps can either stand on their own or be embedded into the views of the EHR or a patient portal.

The SMART specification is suitable for both web based apps and native apps. It makes a distinction between [public and confidential apps](https://hl7.org/fhir/smart-app-launch/app-launch.html#support-for-public-and-confidential-apps).

In addition to launching apps, the main SMART specification defines a [profile for backend services](https://hl7.org/fhir/smart-app-launch/backend-services.html).

#### Companion Specifications

There is a separate implementation guide for [Finnish Base Profiles](https://hl7.fi/fhir/finnish-base-profiles/) that defines the Finnish base profiles for some of the key FHIR resources.

### Why Do We Need to Profile the SMART Specification?

The SMART App Launch specification is already a globally applicable specification. The International Patient Access specification adds some more constraints and details to it. Do we really need something more?

We have found out that there are still some places in both of these specifications that allow some implementation feedom but may be tricky for app developers to support. In this implementation guide, we aim to provide clarity on topics like how an app best learns the organization or organization unit the practitioner launching the app works for (when launching the app).

We believe we can get some of these details sorted out more efficiently in the local Finnish context. We still aim to feed our learnings and developments with the wider SMART community and help get parts of them adopted to the SMART and IPA specifications.

### Notable SMART Implementations in Finland

Both HL7 FHIR and the SMART App Launch mechanism are used in Finland by many implementations.

[Apotti](https://www.apotti.fi/) is a sizeable Epic installation in Finland. [Epic](https://www.epic.com) is one of the biggest electronic health record system vendors globally. SMART App Launch is the primary mechanism through which third-party apps SHOULD be integrated with Apotti. See also the [Apotti Ecosystem](https://www.apotti.fi/en/the-apotti-ecosystem/).

The [Esko APTJ](https://eskosystems.fi/tuoteperhe/integraatiot/) by Esko Systems is one of the prominent Finnish electronic health record systems. It uses both HL7 FHIR APIs and the SMART specification for internal communication between the components of the system. Esko also offers a SMART App Launch method to interact with third party systems.

The [Kanta PHR](https://www.kanta.fi/phr) is a personal health record platform for storing and exchanging health and wellbeing data produced and governed by citizens. It uses a security mechanism that is pretty close to SMART App Launch, but with some subtle differences.

[Health Village](http://healthvillage.fi) is a publicly funded group of services. It has built in HL7 [SMART App Launch](https://www.hl7.org/fhir/smart-app-launch/) capability for interacting with third party apps.

[InterSystems Finland](https://www.intersystems.com/fi/) has built an adapter through which existing CCOW based systems can launch SMART apps. The adapter has been used at least by [Vitec Acute](https://www.vitec-acute.com/) and [Lifecare](https://www.tietoevry.com/en/care/healthcare/) EHRs.

Furthermore, both the [FHIR Demo 2022](https://fhir.fi/en/demo2022/index.html) and the [FHIR Demo 2023](https://fhir.fi/en/demo2023/index.html) showcases presented numerous integrations implemented between FHIR servers and apps, all based on HL7 FHIR and most utilizing the SMART specification.

Even those showcases did not cover the full extent to which the HL7 FHIR and the SMART App Launch specifications are being used in Finland. There's a lot going on!

To learn about the current status, please contact [HL7 Finland](https://www.hl7.fi/). We're happy to give you an overview.

### Profiling Approach

The base FHIR specification works on a global scope. It is hard to achieve consensus on many things globally. However, smaller regions and jurisdictions are in a better position to agree on tighter constraints. We take benefit of this and move faster with things that we can agree on on a local level.

We are also committed to sharing our learnings with the wider FHIR community and get parts of the definitions adopted in the international main specifications.

We hope that publishing examples gives new implementers a glance of how systems exchange information. However, implementers are **strongly encouraged** to read the main SMART specification and the relevant parts of the IPA specification. This implementation guide should not be used as a comprehensive specification on which to build implementations.

### Governance

The profiling work is performed in a project driven by [HL7 Finland](https://www.hl7.fi). See the [announcement](https://www.hl7.fi/hl7-fhir-profilointityo-kaynnistyy-tule-mukaan-vaikuttamaan-kansalliseen-tekemiseen/) (in Finnish), the [running memo](https://docs.google.com/document/d/1yNq6XMLhWJqi6OELQtWC1DFwdtD9CQulzVOfz-zZCko/edit#), and [some more details](https://fhir.fi). We warmly welcome new participants to the project. You may even be compensated for your efforts.

The team involved in creating the first version of the implementation guide includes

* Arto Huusko, CGI Oyj
* Janne Heikkinen, BCB Medical Oy
* Jari Kariniemi, Kymenlaakson hyvinvointialue
* Jari Vuonos, Apotti Oy
* Joni Hirviniemi, Fujitsu
* Jyrki Soikkeli, Apotti Oy
* Kalle Moilanen, Esko Systems Oy
* Marko Kaukonen, BCB Medical Oy
* Markus Lind, Buddy Healthcare Oy
* Markus Suonpää, CGI Finland Oyj
* Mika Jylhä, Esko Systems Oy
* Mika Lentovaara, HUS
* Mika Tuomainen, Kela
* Mikael Rinnetmäki, Sensotrend Oy
* Tero Pekkola, Esko Systems Oy

Each published major version of this implementation guide goes through the ballot and voting processes of HL7 Finland.

### Collaboration

We want this implementation guide to be useful for you.

If you are implementing SMART App launch in a system or application that is meant to be used in Finland and are thinking of some implementation details, you are probably in the right place and this implementation guide should help you with those questions. If this implementation guide in any way fails to give you the answers you are looking for, we'd love to hear about it so we can make it better. Please do be in touch in one of the ways listed below.

#### Open an Issue in GitHub

The source code of this implementation guide is maintained in a [publicly accessible repository](https://github.com/fhir-fi/finnish-base-profiles) in GitHub. Issues opened in that GitHub repo are very welcome. They help the team pick up any proposed changes or additions and to discuss them publicly.

#### Open a Pull Request in GitHub

Pull requests are even better. If you are in a position to suggest how exactly your proposal should be implemented in the specification, do it! It helps the team maintaining the implementation guide a great deal.

#### Participate in IG Development and Maintenance

Please also consider joining the development effort. This is the best way to affect the outcome of the profiling work. You may even be compensated for your efforts. Please be in touch with HL7 Finland to discuss options, if this even remotely interesting for you.

The best implementation guide is the one that reflects the views and the consensus of the whole FHIR community!

### Safety Considerations

This implementation guide defines data elements, resources, formats, and methods for exchanging healthcare data between different participants in the healthcare process. As such, clinical safety is a key concern. Additional guidance regarding safety for the specification’s many and various implementations is available at [https://www.hl7.org/FHIR/safety.html](https://www.hl7.org/FHIR/safety.html).

Although the present specification does give users the opportunity to observe data protection and data security regulations, its use does not guarantee compliance with these regulations. Effective compliance must be ensured by appropriate measures during implementation projects and in daily operations. The corresponding implementation measures are explained in the standard. In addition, the present specification can only influence compliance with the security regulations in the technical area of standardisation. It cannot influence organisational and contractual matters.

### License and Legal Terms

This document is licensed under Creative Commons [CC0 1.0 Universal](https://creativecommons.org/publicdomain/zero/1.0/) Public Domain Dedication.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

See also [http://hl7.org/fhir/license.html](http://hl7.org/fhir/license.html).

#### Other Intellectual Property Statements

This publication includes IP covered under the following statements.

* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [CapabilityStatementExampleApotti](CapabilityStatement-apotti-eko01.md), [FiSMARTAllergyIntolerance](StructureDefinition-fi-smart-allergy-intolerance.md)...Show 13 more,[FiSMARTCondition](StructureDefinition-fi-smart-condition.md),[FiSMARTImmunization](StructureDefinition-fi-smart-immunization.md),[FiSMARTMedication](StructureDefinition-fi-smart-medication.md),[FiSMARTMedicationRequest](StructureDefinition-fi-smart-medication-request.md),[FiSMARTMedicationStatement](StructureDefinition-fi-smart-medication-statement.md),[FiSMARTObservation](StructureDefinition-fi-smart-observation.md),[FiSMARTPatient](StructureDefinition-fi-smart-patient.md),[FiSMARTPractitioner](StructureDefinition-fi-smart-practitioner.md),[FiSMARTPractitionerRole](StructureDefinition-fi-smart-practitioner-role.md),[FiSMARTProblemListItem](StructureDefinition-fi-smart-problem-list-item.md),[FiSmartServer](CapabilityStatement-fi-smart-server.md),[FiSmartServerProfile](StructureDefinition-fi-smart-server-profile.md)and[FinnishSmart](index.md)


* These codes are excerpted from Digital Imaging and Communications in Medicine (DICOM) Standard, Part 16: Content Mapping Resource, Copyright © 2011 by the National Electrical Manufacturers Association.

* [DICOM Controlled Terminology Definitions](http://hl7.org/fhir/R4/codesystem-dicom-dcim.html): [AuditEvent/apotti-ehr-launch-by-practitioner](AuditEvent-apotti-ehr-launch-by-practitioner.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [Audit Event Source Type](http://terminology.hl7.org/6.5.0/CodeSystem-security-source-type.html): [AuditEvent/apotti-ehr-launch-by-practitioner](AuditEvent-apotti-ehr-launch-by-practitioner.md)




## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "hl7.fhir.fi.smart",
  "url" : "https://hl7.fi/fhir/finnish-smart/ImplementationGuide/hl7.fhir.fi.smart",
  "version" : "2.0.0",
  "name" : "FinnishSmart",
  "title" : "Finnish Implementation Guide for SMART App Launch",
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
  "description" : "Guidelines for using the SMART App Launch mechanism in Finland.",
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
  "packageId" : "hl7.fhir.fi.smart",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7tx",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
        }
      ],
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "6.5.0"
    },
    {
      "id" : "hl7ext",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
        }
      ],
      "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
      "packageId" : "hl7.fhir.uv.extensions.r4",
      "version" : "5.2.0"
    },
    {
      "id" : "hl7_fhir_fi_base",
      "uri" : "https://hl7.fi/fhir/finnish-base-profiles/ImplementationGuide/hl7.fhir.fi.base",
      "packageId" : "hl7.fhir.fi.base",
      "version" : "2.0.0"
    },
    {
      "id" : "hl7_fhir_uv_ipa",
      "uri" : "http://hl7.org/fhir/uv/ipa/ImplementationGuide/hl7.fhir.uv.ipa",
      "packageId" : "hl7.fhir.uv.ipa",
      "version" : "1.1.0"
    },
    {
      "id" : "hl7_fhir_uv_smart_app_launch",
      "uri" : "http://hl7.org/fhir/smart-app-launch/ImplementationGuide/hl7.fhir.uv.smart-app-launch",
      "packageId" : "hl7.fhir.uv.smart-app-launch",
      "version" : "2.2.0"
    }
  ],
  "definition" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2022+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "release"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "ipa-comparison"
          },
          {
            "url" : "value",
            "valueString" : "{last}"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "suppressed-ids"
          },
          {
            "url" : "value",
            "valueString" : "apotti-eko01"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "https://hl7.fi/fhir/finnish-smart/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
        "valueCode" : "hl7.fhir.uv.tools.r4#0.8.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2022+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "release"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "ipa-comparison"
          },
          {
            "url" : "value",
            "valueString" : "{last}"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "suppressed-ids"
          },
          {
            "url" : "value",
            "valueString" : "apotti-eko01"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "https://hl7.fi/fhir/finnish-smart/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      }
    ],
    "resource" : [
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/apotti-eko01"
        },
        "name" : "CapabilityStatementExampleApotti",
        "description" : "An example CapabilityStatement captured from Apotti Ekosysteemi.",
        "exampleCanonical" : "https://hl7.fi/fhir/finnish-smart/StructureDefinition/fi-smart-server-profile"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/fi-smart-allergy-intolerance"
        },
        "name" : "FI SMART AllergyIntolerance",
        "description" : "This is the Finnish patient facing profile for the AllergyIntolerance resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/fi-smart-condition"
        },
        "name" : "FI SMART Condition",
        "description" : "This is the Finnish patient facing profile for the Condition resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/fi-smart-immunization"
        },
        "name" : "FI SMART Immunization",
        "description" : "This is the Finnish patient facing profile for the Immunization resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/fi-smart-medication"
        },
        "name" : "FI SMART Medication",
        "description" : "This is the Finnish base profile for the Medication resource for patient access use case.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/fi-smart-medication-request"
        },
        "name" : "FI SMART Medication Request",
        "description" : "This is the Finnish base profile for the MedicationRequest resource for patient access use case.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/fi-smart-medication-statement"
        },
        "name" : "FI SMART MedicationStatement",
        "description" : "This is the Finnish patient facing profile for the MedicationStatement resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/fi-smart-observation"
        },
        "name" : "FI SMART Observation",
        "description" : "This is the Finnish patient facing profile for the Observation resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/fi-smart-patient"
        },
        "name" : "FI SMART Patient",
        "description" : "This is the Finnish patient facing profile for the Patient resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/fi-smart-practitioner"
        },
        "name" : "FI SMART Practitioner",
        "description" : "This is the Finnish patient facing profile for the Practitioner resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/fi-smart-practitioner-role"
        },
        "name" : "FI SMART PractitionerRole",
        "description" : "This is the Finnish patient facing profile for the PractitionerRole resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/fi-smart-problem-list-item"
        },
        "name" : "FI SMART Problem List Item",
        "description" : "This is the Finnish patient facing profile for the Condition resource for problem list items.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/fi-smart-server"
        },
        "name" : "Finnish SMART Server Capability Statement",
        "description" : "This CapabilityStatement describes the basic rules for a server actor providing SMART App Launch in Finland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/fi-smart-server-profile"
        },
        "name" : "Finnish SMART Server Capability Statement Profile",
        "description" : "This CapabilityStatement profile describes the basic rules for a server actor providing SMART App Launch in Finland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AuditEvent"
          }
        ],
        "reference" : {
          "reference" : "AuditEvent/apotti-ehr-launch-by-practitioner"
        },
        "name" : "SMARTExampleApottiPractitionerEHR",
        "description" : "A data flow example of a SMART App Launch from Apotti Ekosysteemi, performed by a practitioner.",
        "exampleBoolean" : true
      }
    ],
    "page" : {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "toc.html"
        }
      ],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "index.html"
            }
          ],
          "nameUrl" : "index.html",
          "title" : "Home",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "conformance.html"
            }
          ],
          "nameUrl" : "conformance.html",
          "title" : "Conformance",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "examples.html"
            }
          ],
          "nameUrl" : "examples.html",
          "title" : "Examples",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "downloads.html"
            }
          ],
          "nameUrl" : "downloads.html",
          "title" : "Downloads",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "versions.html"
            }
          ],
          "nameUrl" : "versions.html",
          "title" : "Version History",
          "generation" : "markdown"
        }
      ]
    },
    "parameter" : [
      {
        "code" : "path-resource",
        "value" : "input/capabilities"
      },
      {
        "code" : "path-resource",
        "value" : "input/examples"
      },
      {
        "code" : "path-resource",
        "value" : "input/extensions"
      },
      {
        "code" : "path-resource",
        "value" : "input/models"
      },
      {
        "code" : "path-resource",
        "value" : "input/operations"
      },
      {
        "code" : "path-resource",
        "value" : "input/profiles"
      },
      {
        "code" : "path-resource",
        "value" : "input/resources"
      },
      {
        "code" : "path-resource",
        "value" : "input/vocabulary"
      },
      {
        "code" : "path-resource",
        "value" : "input/maps"
      },
      {
        "code" : "path-resource",
        "value" : "input/testing"
      },
      {
        "code" : "path-resource",
        "value" : "input/history"
      },
      {
        "code" : "path-resource",
        "value" : "fsh-generated/resources"
      },
      {
        "code" : "path-pages",
        "value" : "template/config"
      },
      {
        "code" : "path-pages",
        "value" : "input/images"
      },
      {
        "code" : "path-tx-cache",
        "value" : "input-cache/txcache"
      }
    ]
  }
}

```
