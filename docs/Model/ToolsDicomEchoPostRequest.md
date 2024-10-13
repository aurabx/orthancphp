# # ToolsDicomEchoPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aET** | **string** | AET of the remote DICOM modality | [optional]
**checkFind** | **bool** | Issue a dummy C-FIND command after the C-GET SCU, in order to check whether the remote modality knows about Orthanc. This field defaults to the value of the &#x60;DicomEchoChecksFind&#x60; configuration option. New in Orthanc 1.8.1. | [optional]
**host** | **string** | Host address of the remote DICOM modality (typically, an IP address) | [optional]
**localAet** | **string** | Whether to override the default DicomAet in the SCU connection initiated by Orthanc to this modality | [optional]
**manufacturer** | **string** | Manufacturer of the remote DICOM modality (check configuration option &#x60;DicomModalities&#x60; for possible values | [optional]
**port** | **float** | TCP port of the remote DICOM modality | [optional]
**timeout** | **float** | Whether to override the default DicomScuTimeout in the SCU connection initiated by Orthanc to this modality | [optional]
**useDicomTls** | **bool** | Whether to use DICOM TLS in the SCU connection initiated by Orthanc (new in Orthanc 1.9.0) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
