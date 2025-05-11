<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile IPACondition
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Condition</sch:title>
    <sch:rule context="f:Condition">
      <sch:assert test="count(f:extension[@url = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-primary']) &lt;= 1">extension with URL = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-primary': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-permanence']) &lt;= 1">extension with URL = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-permanence': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-physical-excercise']) &lt;= 1">extension with URL = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-physical-excercise': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-endocrinological-disorder']) &lt;= 1">extension with URL = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-endocrinological-disorder': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-caused-by-medication']) &lt;= 1">extension with URL = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-caused-by-medication': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-external-cause']) &lt;= 1">extension with URL = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-external-cause': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-categorization-of-accident']) &lt;= 1">extension with URL = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-categorization-of-accident': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-cause-of-adverse-effect']) &lt;= 1">extension with URL = 'https://hl7.fi/fhir/finnish-base-profiles/StructureDefinition/condition-cause-of-adverse-effect': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
