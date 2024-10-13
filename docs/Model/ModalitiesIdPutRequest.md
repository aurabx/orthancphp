# # ModalitiesIdPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aET** | **string** | AET of the remote DICOM modality | [optional]
**allowEcho** | **bool** | Whether to accept C-ECHO SCU commands issued by the remote modality | [optional]
**allowFind** | **bool** | Whether to accept C-FIND SCU commands issued by the remote modality | [optional]
**allowFindWorklist** | **bool** | Whether to accept C-FIND SCU commands for worklists issued by the remote modality | [optional]
**allowGet** | **bool** | Whether to accept C-GET SCU commands issued by the remote modality | [optional]
**allowMove** | **bool** | Whether to accept C-MOVE SCU commands issued by the remote modality | [optional]
**allowStorageCommitment** | **bool** | Whether to accept storage commitment requests issued by the remote modality | [optional]
**allowStore** | **bool** | Whether to accept C-STORE SCU commands issued by the remote modality | [optional]
**allowTranscoding** | **bool** | Whether to allow transcoding for operations initiated by this modality. This option applies to Orthanc C-GET SCP and to Orthanc C-STORE SCU. It only has an effect if the global option &#x60;EnableTranscoding&#x60; is set to &#x60;true&#x60;. | [optional]
**host** | **string** | Host address of the remote DICOM modality (typically, an IP address) | [optional]
**localAet** | **string** | Whether to override the default DicomAet in the SCU connection initiated by Orthanc to this modality | [optional]
**manufacturer** | **string** | Manufacturer of the remote DICOM modality (check configuration option &#x60;DicomModalities&#x60; for possible values | [optional]
**port** | **float** | TCP port of the remote DICOM modality | [optional]
**timeout** | **float** | Whether to override the default DicomScuTimeout in the SCU connection initiated by Orthanc to this modality | [optional]
**useDicomTls** | **bool** | Whether to use DICOM TLS in the SCU connection initiated by Orthanc (new in Orthanc 1.9.0) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
