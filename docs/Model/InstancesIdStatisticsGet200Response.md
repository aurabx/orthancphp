# # InstancesIdStatisticsGet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dicomDiskSize** | **string** | Size on the disk of the DICOM instances associated with the instance, expressed in bytes | [optional]
**dicomDiskSizeMB** | **float** | Size on the disk of the DICOM instances associated with the instance, expressed in megabytes (MB) | [optional]
**dicomUncompressedSize** | **string** | Size on the disk of the uncompressed DICOM instances associated with the instance, expressed in bytes | [optional]
**dicomUncompressedSizeMB** | **float** | Size on the disk of the uncompressed DICOM instances associated with the instance, expressed in megabytes (MB) | [optional]
**diskSize** | **string** | Size of the instance on the disk in bytes, expressed as a string for 64bit compatibility with JSON | [optional]
**diskSizeMB** | **float** | Size of the instance on the disk, expressed in megabytes (MB) | [optional]
**uncompressedSize** | **string** | Size of the instance after decompression in bytes, expressed as a string for 64bit compatibility with JSON | [optional]
**uncompressedSizeMB** | **float** | Size of the instance after decompression, expressed in megabytes (MB). This is different from &#x60;DiskSizeMB&#x60; iff &#x60;StorageCompression&#x60; is &#x60;true&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
