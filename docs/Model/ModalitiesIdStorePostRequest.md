# # ModalitiesIdStorePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asynchronous** | **bool** | If &#x60;true&#x60;, run the job in asynchronous mode, which means that the REST API call will immediately return, reporting the identifier of a job. Prefer this flavor wherever possible. | [optional]
**calledAet** | **string** | Called AET that is used for this commands, defaults to &#x60;AET&#x60; configuration option. Allows you to overwrite the destination AET for a specific operation. | [optional]
**host** | **string** | Host that is used for this commands, defaults to &#x60;Host&#x60; configuration option. Allows you to overwrite the destination host for a specific operation. | [optional]
**localAet** | **string** | Local AET that is used for this commands, defaults to &#x60;DicomAet&#x60; configuration option. Ignored if &#x60;DicomModalities&#x60; already sets &#x60;LocalAet&#x60; for this modality. | [optional]
**moveOriginatorAet** | **string** | Move originator AET that is used for this commands, in order to fake a C-MOVE SCU | [optional]
**moveOriginatorID** | **float** | Move originator ID that is used for this commands, in order to fake a C-MOVE SCU | [optional]
**permissive** | **bool** | If &#x60;true&#x60;, ignore errors during the individual steps of the job. | [optional]
**port** | **float** | Port that is used for this command, defaults to &#x60;Port&#x60; configuration option. Allows you to overwrite the destination port for a specific operation. | [optional]
**priority** | **float** | In asynchronous mode, the priority of the job. The lower the value, the higher the priority. | [optional]
**resources** | **string[]** | List of the Orthanc identifiers of all the DICOM resources to be sent | [optional]
**storageCommitment** | **bool** | Whether to chain C-STORE with DICOM storage commitment to validate the success of the transmission: https://orthanc.uclouvain.be/book/users/storage-commitment.html#chaining-c-store-with-storage-commitment | [optional]
**synchronous** | **bool** | If &#x60;true&#x60;, run the job in synchronous mode, which means that the HTTP answer will directly contain the result of the job. This is the default, easy behavior, but it is *not* desirable for long jobs, as it might lead to network timeouts. | [optional]
**timeout** | **float** | Timeout for the C-STORE command, in seconds | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
