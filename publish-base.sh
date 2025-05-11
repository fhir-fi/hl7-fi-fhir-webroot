rm -rf temp/
java -jar input-cache/publisher.jar -go-publish -source $(pwd)/../finnish-base-profiles -web fhir -registry $(pwd)/../ig-registry/fhir-ig-list.json -history $(pwd)/../fhir-ig-history-template/ -templates $(pwd)/../history-template-fhir-fi -temp $(pwd)/temp -zips ig-build-zips
