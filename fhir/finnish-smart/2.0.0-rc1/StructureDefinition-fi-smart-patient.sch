<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile FiBasePatient
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Patient</sch:title>
    <sch:rule context="f:Patient">
      <sch:assert test="count(f:extension[@url = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/municipality-code']) &lt;= 1">extension with URL = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/municipality-code': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/patient-interpreterRequired']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/patient-interpreterRequired': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/patient-profession']) &lt;= 1">extension with URL = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/patient-profession': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
