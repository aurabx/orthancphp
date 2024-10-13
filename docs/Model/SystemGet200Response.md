# # SystemGet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiVersion** | **float** | Version of the REST API | [optional]
**checkRevisions** | **bool** | Whether Orthanc handle revisions of metadata and attachments to deal with multiple writers (new in Orthanc 1.9.2) | [optional]
**databaseBackendPlugin** | **string** | Information about the installed database index plugin (&#x60;null&#x60; if no such plugin is installed) | [optional]
**databaseServerIdentifier** | **string** | ID of the server in the database (when running multiple Orthanc on the same DB) | [optional]
**databaseVersion** | **float** | Version of the database: https://orthanc.uclouvain.be/book/developers/db-versioning.html | [optional]
**dicomAet** | **string** | The DICOM AET of Orthanc | [optional]
**dicomPort** | **float** | The port to the DICOM server of Orthanc | [optional]
**hasLabels** | **bool** | Whether the database back-end supports labels (new in Orthanc 1.12.0) | [optional]
**httpPort** | **float** | The port to the HTTP server of Orthanc | [optional]
**ingestTranscoding** | **string** | Whether instances are transcoded when ingested into Orthanc (&#x60;&#x60; if no transcoding is performed) (new in Orthanc 1.11.0) | [optional]
**isHttpServerSecure** | **bool** | Whether the REST API is properly secured (assuming no reverse proxy is in use): https://orthanc.uclouvain.be/book/faq/security.html#securing-the-http-server | [optional]
**mainDicomTags** | **object** | The list of MainDicomTags saved in DB for each resource level (new in Orthanc 1.11.0) | [optional]
**maximumPatientCount** | **float** | The configured MaximumPatientCount (new in Orthanc 1.12.4) | [optional]
**maximumStorageMode** | **string** | The configured MaximumStorageMode (new in Orthanc 1.11.3) | [optional]
**maximumStorageSize** | **float** | The configured MaximumStorageSize in MB (new in Orthanc 1.11.3) | [optional]
**name** | **string** | The name of the Orthanc server, cf. the &#x60;Name&#x60; configuration option | [optional]
**overwriteInstances** | **bool** | Whether instances are overwritten when re-ingested (new in Orthanc 1.11.0) | [optional]
**pluginsEnabled** | **bool** | Whether Orthanc was built with support for plugins | [optional]
**storageAreaPlugin** | **string** | Information about the installed storage area plugin (&#x60;null&#x60; if no such plugin is installed) | [optional]
**storageCompression** | **bool** | Whether storage compression is enabled (new in Orthanc 1.11.0) | [optional]
**userMetadata** | **object** | The configured UserMetadata (new in Orthanc 1.12.0) | [optional]
**version** | **string** | Version of Orthanc | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
