# # InstancesIdReconstructPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limitToThisLevelMainDicomTags** | **bool** | Only reconstruct this level MainDicomTags by re-reading them from a random child instance of the resource. This option is much faster than a full reconstruct and is usefull e.g. if you have modified the &#39;ExtraMainDicomTags&#39; at the Study level to optimize the speed of some C-Find. &#39;false&#39; by default. (New in Orthanc 1.12.4) | [optional]
**reconstructFiles** | **bool** | Also reconstruct the files of the resources (e.g: apply IngestTranscoding, StorageCompression). &#39;false&#39; by default. (New in Orthanc 1.11.0) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
