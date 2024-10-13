# Aurabx\OrthancPHP\InstancesApi

All URIs are relative to https://orthanc.uclouvain.be/demo, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**instancesGet()**](InstancesApi.md#instancesGet) | **GET** /instances | List the available instances |
| [**instancesIdAnonymizePost()**](InstancesApi.md#instancesIdAnonymizePost) | **POST** /instances/{id}/anonymize | Anonymize instance |
| [**instancesIdAttachmentsGet()**](InstancesApi.md#instancesIdAttachmentsGet) | **GET** /instances/{id}/attachments | List attachments |
| [**instancesIdAttachmentsNameCompressPost()**](InstancesApi.md#instancesIdAttachmentsNameCompressPost) | **POST** /instances/{id}/attachments/{name}/compress | Compress attachment |
| [**instancesIdAttachmentsNameCompressedDataGet()**](InstancesApi.md#instancesIdAttachmentsNameCompressedDataGet) | **GET** /instances/{id}/attachments/{name}/compressed-data | Get attachment (no decompression) |
| [**instancesIdAttachmentsNameCompressedMd5Get()**](InstancesApi.md#instancesIdAttachmentsNameCompressedMd5Get) | **GET** /instances/{id}/attachments/{name}/compressed-md5 | Get MD5 of attachment on disk |
| [**instancesIdAttachmentsNameCompressedSizeGet()**](InstancesApi.md#instancesIdAttachmentsNameCompressedSizeGet) | **GET** /instances/{id}/attachments/{name}/compressed-size | Get size of attachment on disk |
| [**instancesIdAttachmentsNameDataGet()**](InstancesApi.md#instancesIdAttachmentsNameDataGet) | **GET** /instances/{id}/attachments/{name}/data | Get attachment |
| [**instancesIdAttachmentsNameDelete()**](InstancesApi.md#instancesIdAttachmentsNameDelete) | **DELETE** /instances/{id}/attachments/{name} | Delete attachment |
| [**instancesIdAttachmentsNameInfoGet()**](InstancesApi.md#instancesIdAttachmentsNameInfoGet) | **GET** /instances/{id}/attachments/{name}/info | Get info about the attachment |
| [**instancesIdAttachmentsNameIsCompressedGet()**](InstancesApi.md#instancesIdAttachmentsNameIsCompressedGet) | **GET** /instances/{id}/attachments/{name}/is-compressed | Is attachment compressed? |
| [**instancesIdAttachmentsNameMd5Get()**](InstancesApi.md#instancesIdAttachmentsNameMd5Get) | **GET** /instances/{id}/attachments/{name}/md5 | Get MD5 of attachment |
| [**instancesIdAttachmentsNamePut()**](InstancesApi.md#instancesIdAttachmentsNamePut) | **PUT** /instances/{id}/attachments/{name} | Set attachment |
| [**instancesIdAttachmentsNameSizeGet()**](InstancesApi.md#instancesIdAttachmentsNameSizeGet) | **GET** /instances/{id}/attachments/{name}/size | Get size of attachment |
| [**instancesIdAttachmentsNameUncompressPost()**](InstancesApi.md#instancesIdAttachmentsNameUncompressPost) | **POST** /instances/{id}/attachments/{name}/uncompress | Uncompress attachment |
| [**instancesIdAttachmentsNameVerifyMd5Post()**](InstancesApi.md#instancesIdAttachmentsNameVerifyMd5Post) | **POST** /instances/{id}/attachments/{name}/verify-md5 | Verify attachment |
| [**instancesIdContentPathGet()**](InstancesApi.md#instancesIdContentPathGet) | **GET** /instances/{id}/content/{path} | Get raw tag |
| [**instancesIdDelete()**](InstancesApi.md#instancesIdDelete) | **DELETE** /instances/{id} | Delete some instance |
| [**instancesIdExportPost()**](InstancesApi.md#instancesIdExportPost) | **POST** /instances/{id}/export | Write DICOM onto filesystem |
| [**instancesIdFileGet()**](InstancesApi.md#instancesIdFileGet) | **GET** /instances/{id}/file | Download DICOM |
| [**instancesIdFramesFrameImageInt16Get()**](InstancesApi.md#instancesIdFramesFrameImageInt16Get) | **GET** /instances/{id}/frames/{frame}/image-int16 | Decode a frame (int16) |
| [**instancesIdFramesFrameImageUint16Get()**](InstancesApi.md#instancesIdFramesFrameImageUint16Get) | **GET** /instances/{id}/frames/{frame}/image-uint16 | Decode a frame (uint16) |
| [**instancesIdFramesFrameImageUint8Get()**](InstancesApi.md#instancesIdFramesFrameImageUint8Get) | **GET** /instances/{id}/frames/{frame}/image-uint8 | Decode a frame (uint8) |
| [**instancesIdFramesFrameMatlabGet()**](InstancesApi.md#instancesIdFramesFrameMatlabGet) | **GET** /instances/{id}/frames/{frame}/matlab | Decode frame for Matlab |
| [**instancesIdFramesFrameNumpyGet()**](InstancesApi.md#instancesIdFramesFrameNumpyGet) | **GET** /instances/{id}/frames/{frame}/numpy | Decode frame for numpy |
| [**instancesIdFramesFramePreviewGet()**](InstancesApi.md#instancesIdFramesFramePreviewGet) | **GET** /instances/{id}/frames/{frame}/preview | Decode a frame (preview) |
| [**instancesIdFramesFrameRawGet()**](InstancesApi.md#instancesIdFramesFrameRawGet) | **GET** /instances/{id}/frames/{frame}/raw | Access raw frame |
| [**instancesIdFramesFrameRawGzGet()**](InstancesApi.md#instancesIdFramesFrameRawGzGet) | **GET** /instances/{id}/frames/{frame}/raw.gz | Access raw frame (compressed) |
| [**instancesIdFramesFrameRenderedGet()**](InstancesApi.md#instancesIdFramesFrameRenderedGet) | **GET** /instances/{id}/frames/{frame}/rendered | Render a frame |
| [**instancesIdFramesGet()**](InstancesApi.md#instancesIdFramesGet) | **GET** /instances/{id}/frames | List available frames |
| [**instancesIdGet()**](InstancesApi.md#instancesIdGet) | **GET** /instances/{id} | Get information about some instance |
| [**instancesIdHeaderGet()**](InstancesApi.md#instancesIdHeaderGet) | **GET** /instances/{id}/header | Get DICOM meta-header |
| [**instancesIdImageInt16Get()**](InstancesApi.md#instancesIdImageInt16Get) | **GET** /instances/{id}/image-int16 | Decode an image (int16) |
| [**instancesIdImageUint16Get()**](InstancesApi.md#instancesIdImageUint16Get) | **GET** /instances/{id}/image-uint16 | Decode an image (uint16) |
| [**instancesIdImageUint8Get()**](InstancesApi.md#instancesIdImageUint8Get) | **GET** /instances/{id}/image-uint8 | Decode an image (uint8) |
| [**instancesIdLabelsGet()**](InstancesApi.md#instancesIdLabelsGet) | **GET** /instances/{id}/labels | List labels |
| [**instancesIdLabelsLabelDelete()**](InstancesApi.md#instancesIdLabelsLabelDelete) | **DELETE** /instances/{id}/labels/{label} | Remove label |
| [**instancesIdLabelsLabelGet()**](InstancesApi.md#instancesIdLabelsLabelGet) | **GET** /instances/{id}/labels/{label} | Test label |
| [**instancesIdLabelsLabelPut()**](InstancesApi.md#instancesIdLabelsLabelPut) | **PUT** /instances/{id}/labels/{label} | Add label |
| [**instancesIdMatlabGet()**](InstancesApi.md#instancesIdMatlabGet) | **GET** /instances/{id}/matlab | Decode frame for Matlab |
| [**instancesIdMetadataGet()**](InstancesApi.md#instancesIdMetadataGet) | **GET** /instances/{id}/metadata | List metadata |
| [**instancesIdMetadataNameDelete()**](InstancesApi.md#instancesIdMetadataNameDelete) | **DELETE** /instances/{id}/metadata/{name} | Delete metadata |
| [**instancesIdMetadataNameGet()**](InstancesApi.md#instancesIdMetadataNameGet) | **GET** /instances/{id}/metadata/{name} | Get metadata |
| [**instancesIdMetadataNamePut()**](InstancesApi.md#instancesIdMetadataNamePut) | **PUT** /instances/{id}/metadata/{name} | Set metadata |
| [**instancesIdModifyPost()**](InstancesApi.md#instancesIdModifyPost) | **POST** /instances/{id}/modify | Modify instance |
| [**instancesIdModuleGet()**](InstancesApi.md#instancesIdModuleGet) | **GET** /instances/{id}/module | Get instance module |
| [**instancesIdNumpyGet()**](InstancesApi.md#instancesIdNumpyGet) | **GET** /instances/{id}/numpy | Decode instance for numpy |
| [**instancesIdPatientGet()**](InstancesApi.md#instancesIdPatientGet) | **GET** /instances/{id}/patient | Get parent patient |
| [**instancesIdPdfGet()**](InstancesApi.md#instancesIdPdfGet) | **GET** /instances/{id}/pdf | Get embedded PDF |
| [**instancesIdPreviewGet()**](InstancesApi.md#instancesIdPreviewGet) | **GET** /instances/{id}/preview | Decode an image (preview) |
| [**instancesIdReconstructPost()**](InstancesApi.md#instancesIdReconstructPost) | **POST** /instances/{id}/reconstruct | Reconstruct tags &amp; optionally files of instance |
| [**instancesIdRenderedGet()**](InstancesApi.md#instancesIdRenderedGet) | **GET** /instances/{id}/rendered | Render an image |
| [**instancesIdSeriesGet()**](InstancesApi.md#instancesIdSeriesGet) | **GET** /instances/{id}/series | Get parent series |
| [**instancesIdSimplifiedTagsGet()**](InstancesApi.md#instancesIdSimplifiedTagsGet) | **GET** /instances/{id}/simplified-tags | Get human-readable tags |
| [**instancesIdStatisticsGet()**](InstancesApi.md#instancesIdStatisticsGet) | **GET** /instances/{id}/statistics | Get instance statistics |
| [**instancesIdStudyGet()**](InstancesApi.md#instancesIdStudyGet) | **GET** /instances/{id}/study | Get parent study |
| [**instancesIdTagsGet()**](InstancesApi.md#instancesIdTagsGet) | **GET** /instances/{id}/tags | Get DICOM tags |
| [**instancesPost()**](InstancesApi.md#instancesPost) | **POST** /instances | Upload DICOM instances |


## `instancesGet()`

```php
instancesGet($expand, $full, $limit, $requestedTags, $short, $since): mixed
```

List the available instances

List the Orthanc identifiers of all the available DICOM instances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expand = 'expand_example'; // string | If present, retrieve detailed information about the individual instances
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$limit = 3.4; // float | Limit the number of results
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$since = 3.4; // float | Show only the resources since the provided index

try {
    $result = $apiInstance->instancesGet($expand, $full, $limit, $requestedTags, $short, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| If present, retrieve detailed information about the individual instances | [optional] |
| **full** | **bool**| If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value) | [optional] |
| **limit** | **float**| Limit the number of results | [optional] |
| **requestedTags** | **string**| If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: &#39;requested-tags&#x3D;0010,0010;PatientBirthDate&#39;.  The tags requested tags are returned in the &#39;RequestedTags&#39; field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return | [optional] |
| **short** | **bool**| If present, report the DICOM tags in hexadecimal format | [optional] |
| **since** | **float**| Show only the resources since the provided index | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAnonymizePost()`

```php
instancesIdAnonymizePost($id, $instancesIdAnonymizePostRequest): mixed
```

Anonymize instance

Download an anonymized version of the DICOM instance whose Orthanc identifier is provided in the URL: https://orthanc.uclouvain.be/book/users/anonymization.html#anonymization-of-a-single-instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$instancesIdAnonymizePostRequest = new \Aurabx\OrthancPHP\Model\InstancesIdAnonymizePostRequest(); // \Aurabx\OrthancPHP\Model\InstancesIdAnonymizePostRequest

try {
    $result = $apiInstance->instancesIdAnonymizePost($id, $instancesIdAnonymizePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAnonymizePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **instancesIdAnonymizePostRequest** | [**\Aurabx\OrthancPHP\Model\InstancesIdAnonymizePostRequest**](../Model/InstancesIdAnonymizePostRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/dicom`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsGet()`

```php
instancesIdAttachmentsGet($id, $full): mixed
```

List attachments

Get the list of attachments that are associated with the given instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$full = 'full_example'; // string | If present, retrieve the attachments list and their numerical ids

try {
    $result = $apiInstance->instancesIdAttachmentsGet($id, $full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **full** | **string**| If present, retrieve the attachments list and their numerical ids | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNameCompressPost()`

```php
instancesIdAttachmentsNameCompressPost($id, $name)
```

Compress attachment

Change the compression scheme that is used to store an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)

try {
    $apiInstance->instancesIdAttachmentsNameCompressPost($id, $name);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNameCompressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNameCompressedDataGet()`

```php
instancesIdAttachmentsNameCompressedDataGet($id, $name, $ifNoneMatch): mixed
```

Get attachment (no decompression)

Get the (binary) content of one attachment associated with the given instance. The attachment will not be decompressed if `StorageCompression` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the metadata, to check if its content has changed

try {
    $result = $apiInstance->instancesIdAttachmentsNameCompressedDataGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNameCompressedDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **ifNoneMatch** | **string**| Optional revision of the metadata, to check if its content has changed | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNameCompressedMd5Get()`

```php
instancesIdAttachmentsNameCompressedMd5Get($id, $name, $ifNoneMatch): mixed
```

Get MD5 of attachment on disk

Get the MD5 hash of one attachment associated with the given instance, as stored on the disk. This is different from `.../md5` iff `EnableStorage` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->instancesIdAttachmentsNameCompressedMd5Get($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNameCompressedMd5Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **ifNoneMatch** | **string**| Optional revision of the attachment, to check if its content has changed | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNameCompressedSizeGet()`

```php
instancesIdAttachmentsNameCompressedSizeGet($id, $name, $ifNoneMatch): mixed
```

Get size of attachment on disk

Get the size of one attachment associated with the given instance, as stored on the disk. This is different from `.../size` iff `EnableStorage` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->instancesIdAttachmentsNameCompressedSizeGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNameCompressedSizeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **ifNoneMatch** | **string**| Optional revision of the attachment, to check if its content has changed | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNameDataGet()`

```php
instancesIdAttachmentsNameDataGet($id, $name, $ifNoneMatch): mixed
```

Get attachment

Get the (binary) content of one attachment associated with the given instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the metadata, to check if its content has changed

try {
    $result = $apiInstance->instancesIdAttachmentsNameDataGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNameDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **ifNoneMatch** | **string**| Optional revision of the metadata, to check if its content has changed | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNameDelete()`

```php
instancesIdAttachmentsNameDelete($id, $name, $ifMatch)
```

Delete attachment

Delete an attachment associated with the given DICOM instance. This call will fail if trying to delete a system attachment (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the attachment, to check if its content has not changed and can be deleted. This header is mandatory if `CheckRevisions` option is `true`.

try {
    $apiInstance->instancesIdAttachmentsNameDelete($id, $name, $ifMatch);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **ifMatch** | **string**| Revision of the attachment, to check if its content has not changed and can be deleted. This header is mandatory if &#x60;CheckRevisions&#x60; option is &#x60;true&#x60;. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNameInfoGet()`

```php
instancesIdAttachmentsNameInfoGet($id, $name, $ifNoneMatch): mixed
```

Get info about the attachment

Get all the information about the attachment associated with the given instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->instancesIdAttachmentsNameInfoGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNameInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **ifNoneMatch** | **string**| Optional revision of the attachment, to check if its content has changed | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNameIsCompressedGet()`

```php
instancesIdAttachmentsNameIsCompressedGet($id, $name, $ifNoneMatch): mixed
```

Is attachment compressed?

Test whether the attachment has been stored as a compressed file on the disk.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->instancesIdAttachmentsNameIsCompressedGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNameIsCompressedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **ifNoneMatch** | **string**| Optional revision of the attachment, to check if its content has changed | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNameMd5Get()`

```php
instancesIdAttachmentsNameMd5Get($id, $name, $ifNoneMatch): mixed
```

Get MD5 of attachment

Get the MD5 hash of one attachment associated with the given instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->instancesIdAttachmentsNameMd5Get($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNameMd5Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **ifNoneMatch** | **string**| Optional revision of the attachment, to check if its content has changed | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNamePut()`

```php
instancesIdAttachmentsNamePut($id, $name, $ifMatch, $body): mixed
```

Set attachment

Attach a file to the given DICOM instance. This call will fail if trying to modify a system attachment (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the attachment, if this is not the first time this attachment is set.
$body = NULL; // mixed

try {
    $result = $apiInstance->instancesIdAttachmentsNamePut($id, $name, $ifMatch, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **ifMatch** | **string**| Revision of the attachment, if this is not the first time this attachment is set. | [optional] |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNameSizeGet()`

```php
instancesIdAttachmentsNameSizeGet($id, $name, $ifNoneMatch): mixed
```

Get size of attachment

Get the size of one attachment associated with the given instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->instancesIdAttachmentsNameSizeGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNameSizeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **ifNoneMatch** | **string**| Optional revision of the attachment, to check if its content has changed | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNameUncompressPost()`

```php
instancesIdAttachmentsNameUncompressPost($id, $name)
```

Uncompress attachment

Change the compression scheme that is used to store an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)

try {
    $apiInstance->instancesIdAttachmentsNameUncompressPost($id, $name);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNameUncompressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdAttachmentsNameVerifyMd5Post()`

```php
instancesIdAttachmentsNameVerifyMd5Post($id, $name): mixed
```

Verify attachment

Verify that the attachment is not corrupted, by validating its MD5 hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)

try {
    $result = $apiInstance->instancesIdAttachmentsNameVerifyMd5Post($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdAttachmentsNameVerifyMd5Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdContentPathGet()`

```php
instancesIdContentPathGet($id, $path): mixed
```

Get raw tag

Get the raw content of one DICOM tag in the hierarchy of DICOM dataset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$path = 'path_example'; // string | Path to the DICOM tag. This is the interleaving of one DICOM tag, possibly followed by an index for sequences. Sequences are accessible as, for instance, `/0008-1140/1/0008-1150`

try {
    $result = $apiInstance->instancesIdContentPathGet($id, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdContentPathGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **path** | **string**| Path to the DICOM tag. This is the interleaving of one DICOM tag, possibly followed by an index for sequences. Sequences are accessible as, for instance, &#x60;/0008-1140/1/0008-1150&#x60; | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdDelete()`

```php
instancesIdDelete($id)
```

Delete some instance

Delete the DICOM instance whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest

try {
    $apiInstance->instancesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdExportPost()`

```php
instancesIdExportPost($id, $body)
```

Write DICOM onto filesystem

Write the DICOM file onto the filesystem where Orthanc is running.  This is insecure for Orthanc servers that are remotely accessible since one could overwrite any system file.  Since Orthanc 1.12.0, this route is disabled by default, but can be enabled using the `RestApiWriteToFileSystemEnabled` configuration option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$body = NULL; // mixed

try {
    $apiInstance->instancesIdExportPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdExportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **body** | **mixed**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdFileGet()`

```php
instancesIdFileGet($id, $transcode, $accept): mixed
```

Download DICOM

Download one DICOM instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$transcode = 'transcode_example'; // string | If present, the DICOM file will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html
$accept = 'accept_example'; // string | This HTTP header can be set to retrieve the DICOM instance in DICOMweb format

try {
    $result = $apiInstance->instancesIdFileGet($id, $transcode, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdFileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **transcode** | **string**| If present, the DICOM file will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html | [optional] |
| **accept** | **string**| This HTTP header can be set to retrieve the DICOM instance in DICOMweb format | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/dicom`, `application/dicom+json`, `application/dicom+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdFramesFrameImageInt16Get()`

```php
instancesIdFramesFrameImageInt16Get($frame, $id, $quality, $returnUnsupportedImage, $accept): mixed
```

Decode a frame (int16)

Decode one frame of interest from the given DICOM instance. Pixels of grayscale images are truncated to the [-32768,32767] range. Negative values must be interpreted according to two's complement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$frame = 3.4; // float | Index of the frame (starts at `0`)
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$quality = 3.4; // float | Quality for JPEG images (between 1 and 100, defaults to 90)
$returnUnsupportedImage = True; // bool | Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false)
$accept = 'accept_example'; // string | Format of the resulting image. Can be `image/png` (default), `image/jpeg` or `image/x-portable-arbitrarymap`

try {
    $result = $apiInstance->instancesIdFramesFrameImageInt16Get($frame, $id, $quality, $returnUnsupportedImage, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdFramesFrameImageInt16Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frame** | **float**| Index of the frame (starts at &#x60;0&#x60;) | |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **quality** | **float**| Quality for JPEG images (between 1 and 100, defaults to 90) | [optional] |
| **returnUnsupportedImage** | **bool**| Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false) | [optional] |
| **accept** | **string**| Format of the resulting image. Can be &#x60;image/png&#x60; (default), &#x60;image/jpeg&#x60; or &#x60;image/x-portable-arbitrarymap&#x60; | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `image/png`, `image/x-portable-arbitrarymap`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdFramesFrameImageUint16Get()`

```php
instancesIdFramesFrameImageUint16Get($frame, $id, $quality, $returnUnsupportedImage, $accept): mixed
```

Decode a frame (uint16)

Decode one frame of interest from the given DICOM instance. Pixels of grayscale images are truncated to the [0,65535] range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$frame = 3.4; // float | Index of the frame (starts at `0`)
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$quality = 3.4; // float | Quality for JPEG images (between 1 and 100, defaults to 90)
$returnUnsupportedImage = True; // bool | Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false)
$accept = 'accept_example'; // string | Format of the resulting image. Can be `image/png` (default), `image/jpeg` or `image/x-portable-arbitrarymap`

try {
    $result = $apiInstance->instancesIdFramesFrameImageUint16Get($frame, $id, $quality, $returnUnsupportedImage, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdFramesFrameImageUint16Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frame** | **float**| Index of the frame (starts at &#x60;0&#x60;) | |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **quality** | **float**| Quality for JPEG images (between 1 and 100, defaults to 90) | [optional] |
| **returnUnsupportedImage** | **bool**| Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false) | [optional] |
| **accept** | **string**| Format of the resulting image. Can be &#x60;image/png&#x60; (default), &#x60;image/jpeg&#x60; or &#x60;image/x-portable-arbitrarymap&#x60; | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `image/png`, `image/x-portable-arbitrarymap`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdFramesFrameImageUint8Get()`

```php
instancesIdFramesFrameImageUint8Get($frame, $id, $quality, $returnUnsupportedImage, $accept): mixed
```

Decode a frame (uint8)

Decode one frame of interest from the given DICOM instance. Pixels of grayscale images are truncated to the [0,255] range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$frame = 3.4; // float | Index of the frame (starts at `0`)
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$quality = 3.4; // float | Quality for JPEG images (between 1 and 100, defaults to 90)
$returnUnsupportedImage = True; // bool | Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false)
$accept = 'accept_example'; // string | Format of the resulting image. Can be `image/png` (default), `image/jpeg` or `image/x-portable-arbitrarymap`

try {
    $result = $apiInstance->instancesIdFramesFrameImageUint8Get($frame, $id, $quality, $returnUnsupportedImage, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdFramesFrameImageUint8Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frame** | **float**| Index of the frame (starts at &#x60;0&#x60;) | |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **quality** | **float**| Quality for JPEG images (between 1 and 100, defaults to 90) | [optional] |
| **returnUnsupportedImage** | **bool**| Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false) | [optional] |
| **accept** | **string**| Format of the resulting image. Can be &#x60;image/png&#x60; (default), &#x60;image/jpeg&#x60; or &#x60;image/x-portable-arbitrarymap&#x60; | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `image/png`, `image/x-portable-arbitrarymap`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdFramesFrameMatlabGet()`

```php
instancesIdFramesFrameMatlabGet($frame, $id): mixed
```

Decode frame for Matlab

Decode one frame of interest from the given DICOM instance, and export this frame as a Octave/Matlab matrix to be imported with `eval()`: https://orthanc.uclouvain.be/book/faq/matlab.html

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$frame = 3.4; // float | Index of the frame (starts at `0`)
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest

try {
    $result = $apiInstance->instancesIdFramesFrameMatlabGet($frame, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdFramesFrameMatlabGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frame** | **float**| Index of the frame (starts at &#x60;0&#x60;) | |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdFramesFrameNumpyGet()`

```php
instancesIdFramesFrameNumpyGet($frame, $id, $compress, $rescale): mixed
```

Decode frame for numpy

Decode one frame of interest from the given DICOM instance, for use with numpy in Python. The numpy array has 3 dimensions: (height, width, color channel).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$frame = 3.4; // float | Index of the frame (starts at `0`)
$id = 'id_example'; // string | Orthanc identifier of the DICOM resource of interest
$compress = True; // bool | Compress the file as `.npz`
$rescale = True; // bool | On grayscale images, apply the rescaling and return floating-point values

try {
    $result = $apiInstance->instancesIdFramesFrameNumpyGet($frame, $id, $compress, $rescale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdFramesFrameNumpyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frame** | **float**| Index of the frame (starts at &#x60;0&#x60;) | |
| **id** | **string**| Orthanc identifier of the DICOM resource of interest | |
| **compress** | **bool**| Compress the file as &#x60;.npz&#x60; | [optional] |
| **rescale** | **bool**| On grayscale images, apply the rescaling and return floating-point values | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdFramesFramePreviewGet()`

```php
instancesIdFramesFramePreviewGet($frame, $id, $quality, $returnUnsupportedImage, $accept): mixed
```

Decode a frame (preview)

Decode one frame of interest from the given DICOM instance. The full dynamic range of grayscale images is rescaled to the [0,255] range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$frame = 3.4; // float | Index of the frame (starts at `0`)
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$quality = 3.4; // float | Quality for JPEG images (between 1 and 100, defaults to 90)
$returnUnsupportedImage = True; // bool | Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false)
$accept = 'accept_example'; // string | Format of the resulting image. Can be `image/png` (default), `image/jpeg` or `image/x-portable-arbitrarymap`

try {
    $result = $apiInstance->instancesIdFramesFramePreviewGet($frame, $id, $quality, $returnUnsupportedImage, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdFramesFramePreviewGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frame** | **float**| Index of the frame (starts at &#x60;0&#x60;) | |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **quality** | **float**| Quality for JPEG images (between 1 and 100, defaults to 90) | [optional] |
| **returnUnsupportedImage** | **bool**| Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false) | [optional] |
| **accept** | **string**| Format of the resulting image. Can be &#x60;image/png&#x60; (default), &#x60;image/jpeg&#x60; or &#x60;image/x-portable-arbitrarymap&#x60; | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `image/png`, `image/x-portable-arbitrarymap`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdFramesFrameRawGet()`

```php
instancesIdFramesFrameRawGet($frame, $id): mixed
```

Access raw frame

Access the raw content of one individual frame of the DICOM instance of interest, bypassing image decoding. This is notably useful to access the source files in compressed transfer syntaxes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$frame = 3.4; // float | Index of the frame (starts at `0`)
$id = 'id_example'; // string | Orthanc identifier of the instance of interest

try {
    $result = $apiInstance->instancesIdFramesFrameRawGet($frame, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdFramesFrameRawGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frame** | **float**| Index of the frame (starts at &#x60;0&#x60;) | |
| **id** | **string**| Orthanc identifier of the instance of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdFramesFrameRawGzGet()`

```php
instancesIdFramesFrameRawGzGet($frame, $id): mixed
```

Access raw frame (compressed)

Access the raw content of one individual frame of the DICOM instance of interest, bypassing image decoding. This is notably useful to access the source files in compressed transfer syntaxes. The image is compressed using gzip

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$frame = 3.4; // float | Index of the frame (starts at `0`)
$id = 'id_example'; // string | Orthanc identifier of the instance of interest

try {
    $result = $apiInstance->instancesIdFramesFrameRawGzGet($frame, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdFramesFrameRawGzGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frame** | **float**| Index of the frame (starts at &#x60;0&#x60;) | |
| **id** | **string**| Orthanc identifier of the instance of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/gzip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdFramesFrameRenderedGet()`

```php
instancesIdFramesFrameRenderedGet($frame, $id, $height, $quality, $returnUnsupportedImage, $smooth, $width, $windowCenter, $windowWidth, $accept): mixed
```

Render a frame

Render one frame of interest from the given DICOM instance. This function takes scaling into account (`RescaleSlope` and `RescaleIntercept` tags), as well as the default windowing stored in the DICOM file (`WindowCenter` and `WindowWidth`tags), and can be used to resize the resulting image. Color images are not affected by windowing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$frame = 3.4; // float | Index of the frame (starts at `0`)
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$height = 3.4; // float | Height of the resized image
$quality = 3.4; // float | Quality for JPEG images (between 1 and 100, defaults to 90)
$returnUnsupportedImage = True; // bool | Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false)
$smooth = True; // bool | Whether to smooth image on resize
$width = 3.4; // float | Width of the resized image
$windowCenter = 3.4; // float | Windowing center
$windowWidth = 3.4; // float | Windowing width
$accept = 'accept_example'; // string | Format of the resulting image. Can be `image/png` (default), `image/jpeg` or `image/x-portable-arbitrarymap`

try {
    $result = $apiInstance->instancesIdFramesFrameRenderedGet($frame, $id, $height, $quality, $returnUnsupportedImage, $smooth, $width, $windowCenter, $windowWidth, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdFramesFrameRenderedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frame** | **float**| Index of the frame (starts at &#x60;0&#x60;) | |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **height** | **float**| Height of the resized image | [optional] |
| **quality** | **float**| Quality for JPEG images (between 1 and 100, defaults to 90) | [optional] |
| **returnUnsupportedImage** | **bool**| Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false) | [optional] |
| **smooth** | **bool**| Whether to smooth image on resize | [optional] |
| **width** | **float**| Width of the resized image | [optional] |
| **windowCenter** | **float**| Windowing center | [optional] |
| **windowWidth** | **float**| Windowing width | [optional] |
| **accept** | **string**| Format of the resulting image. Can be &#x60;image/png&#x60; (default), &#x60;image/jpeg&#x60; or &#x60;image/x-portable-arbitrarymap&#x60; | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `image/png`, `image/x-portable-arbitrarymap`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdFramesGet()`

```php
instancesIdFramesGet($id): mixed
```

List available frames

List the frames that are available in the DICOM instance of interest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest

try {
    $result = $apiInstance->instancesIdFramesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdFramesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdGet()`

```php
instancesIdGet($id, $full, $requestedTags, $short): mixed
```

Get information about some instance

Get detailed information about the DICOM instance whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->instancesIdGet($id, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **full** | **bool**| If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value) | [optional] |
| **requestedTags** | **string**| If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: &#39;requested-tags&#x3D;0010,0010;PatientBirthDate&#39;.  The tags requested tags are returned in the &#39;RequestedTags&#39; field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return | [optional] |
| **short** | **bool**| If present, report the DICOM tags in hexadecimal format | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdHeaderGet()`

```php
instancesIdHeaderGet($id, $short, $simplify): mixed
```

Get DICOM meta-header

Get the DICOM tags in the meta-header of the DICOM instance. By default, the `full` format is used, which combines hexadecimal tags with human-readable description.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->instancesIdHeaderGet($id, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdHeaderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **short** | **bool**| If present, report the DICOM tags in hexadecimal format | [optional] |
| **simplify** | **bool**| If present, report the DICOM tags in human-readable format (using the symbolic name of the tags) | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdImageInt16Get()`

```php
instancesIdImageInt16Get($id, $quality, $returnUnsupportedImage, $accept): mixed
```

Decode an image (int16)

Decode the first frame of the given DICOM instance. Pixels of grayscale images are truncated to the [-32768,32767] range. Negative values must be interpreted according to two's complement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$quality = 3.4; // float | Quality for JPEG images (between 1 and 100, defaults to 90)
$returnUnsupportedImage = True; // bool | Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false)
$accept = 'accept_example'; // string | Format of the resulting image. Can be `image/png` (default), `image/jpeg` or `image/x-portable-arbitrarymap`

try {
    $result = $apiInstance->instancesIdImageInt16Get($id, $quality, $returnUnsupportedImage, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdImageInt16Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **quality** | **float**| Quality for JPEG images (between 1 and 100, defaults to 90) | [optional] |
| **returnUnsupportedImage** | **bool**| Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false) | [optional] |
| **accept** | **string**| Format of the resulting image. Can be &#x60;image/png&#x60; (default), &#x60;image/jpeg&#x60; or &#x60;image/x-portable-arbitrarymap&#x60; | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `image/png`, `image/x-portable-arbitrarymap`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdImageUint16Get()`

```php
instancesIdImageUint16Get($id, $quality, $returnUnsupportedImage, $accept): mixed
```

Decode an image (uint16)

Decode the first frame of the given DICOM instance. Pixels of grayscale images are truncated to the [0,65535] range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$quality = 3.4; // float | Quality for JPEG images (between 1 and 100, defaults to 90)
$returnUnsupportedImage = True; // bool | Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false)
$accept = 'accept_example'; // string | Format of the resulting image. Can be `image/png` (default), `image/jpeg` or `image/x-portable-arbitrarymap`

try {
    $result = $apiInstance->instancesIdImageUint16Get($id, $quality, $returnUnsupportedImage, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdImageUint16Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **quality** | **float**| Quality for JPEG images (between 1 and 100, defaults to 90) | [optional] |
| **returnUnsupportedImage** | **bool**| Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false) | [optional] |
| **accept** | **string**| Format of the resulting image. Can be &#x60;image/png&#x60; (default), &#x60;image/jpeg&#x60; or &#x60;image/x-portable-arbitrarymap&#x60; | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `image/png`, `image/x-portable-arbitrarymap`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdImageUint8Get()`

```php
instancesIdImageUint8Get($id, $quality, $returnUnsupportedImage, $accept): mixed
```

Decode an image (uint8)

Decode the first frame of the given DICOM instance. Pixels of grayscale images are truncated to the [0,255] range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$quality = 3.4; // float | Quality for JPEG images (between 1 and 100, defaults to 90)
$returnUnsupportedImage = True; // bool | Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false)
$accept = 'accept_example'; // string | Format of the resulting image. Can be `image/png` (default), `image/jpeg` or `image/x-portable-arbitrarymap`

try {
    $result = $apiInstance->instancesIdImageUint8Get($id, $quality, $returnUnsupportedImage, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdImageUint8Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **quality** | **float**| Quality for JPEG images (between 1 and 100, defaults to 90) | [optional] |
| **returnUnsupportedImage** | **bool**| Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false) | [optional] |
| **accept** | **string**| Format of the resulting image. Can be &#x60;image/png&#x60; (default), &#x60;image/jpeg&#x60; or &#x60;image/x-portable-arbitrarymap&#x60; | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `image/png`, `image/x-portable-arbitrarymap`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdLabelsGet()`

```php
instancesIdLabelsGet($id): mixed
```

List labels

Get the labels that are associated with the given instance (new in Orthanc 1.12.0)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest

try {
    $result = $apiInstance->instancesIdLabelsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdLabelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdLabelsLabelDelete()`

```php
instancesIdLabelsLabelDelete($id, $label)
```

Remove label

Remove a label associated with a instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$label = 'label_example'; // string | The label to be removed

try {
    $apiInstance->instancesIdLabelsLabelDelete($id, $label);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdLabelsLabelDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **label** | **string**| The label to be removed | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdLabelsLabelGet()`

```php
instancesIdLabelsLabelGet($id, $label): mixed
```

Test label

Test whether the instance is associated with the given label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$label = 'label_example'; // string | The label of interest

try {
    $result = $apiInstance->instancesIdLabelsLabelGet($id, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdLabelsLabelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **label** | **string**| The label of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdLabelsLabelPut()`

```php
instancesIdLabelsLabelPut($id, $label)
```

Add label

Associate a label with a instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$label = 'label_example'; // string | The label to be added

try {
    $apiInstance->instancesIdLabelsLabelPut($id, $label);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdLabelsLabelPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **label** | **string**| The label to be added | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdMatlabGet()`

```php
instancesIdMatlabGet($id): mixed
```

Decode frame for Matlab

Decode the first frame of the given DICOM instance., and export this frame as a Octave/Matlab matrix to be imported with `eval()`: https://orthanc.uclouvain.be/book/faq/matlab.html

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest

try {
    $result = $apiInstance->instancesIdMatlabGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdMatlabGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdMetadataGet()`

```php
instancesIdMetadataGet($id, $expand, $numeric): mixed
```

List metadata

Get the list of metadata that are associated with the given instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$expand = 'expand_example'; // string | If present, also retrieve the value of the individual metadata
$numeric = 'numeric_example'; // string | If present, use the numeric identifier of the metadata instead of its symbolic name

try {
    $result = $apiInstance->instancesIdMetadataGet($id, $expand, $numeric);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdMetadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **expand** | **string**| If present, also retrieve the value of the individual metadata | [optional] |
| **numeric** | **string**| If present, use the numeric identifier of the metadata instead of its symbolic name | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdMetadataNameDelete()`

```php
instancesIdMetadataNameDelete($id, $name, $ifMatch)
```

Delete metadata

Delete some metadata associated with the given DICOM instance. This call will fail if trying to delete a system metadata (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the metadata, or its index (cf. `UserMetadata` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the metadata, to check if its content has not changed and can be deleted. This header is mandatory if `CheckRevisions` option is `true`.

try {
    $apiInstance->instancesIdMetadataNameDelete($id, $name, $ifMatch);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdMetadataNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the metadata, or its index (cf. &#x60;UserMetadata&#x60; configuration option) | |
| **ifMatch** | **string**| Revision of the metadata, to check if its content has not changed and can be deleted. This header is mandatory if &#x60;CheckRevisions&#x60; option is &#x60;true&#x60;. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdMetadataNameGet()`

```php
instancesIdMetadataNameGet($id, $name, $ifNoneMatch): mixed
```

Get metadata

Get the value of a metadata that is associated with the given instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the metadata, or its index (cf. `UserMetadata` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the metadata, to check if its content has changed

try {
    $result = $apiInstance->instancesIdMetadataNameGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdMetadataNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the metadata, or its index (cf. &#x60;UserMetadata&#x60; configuration option) | |
| **ifNoneMatch** | **string**| Optional revision of the metadata, to check if its content has changed | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdMetadataNamePut()`

```php
instancesIdMetadataNamePut($id, $name, $ifMatch, $body)
```

Set metadata

Set the value of some metadata in the given DICOM instance. This call will fail if trying to modify a system metadata (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the metadata, or its index (cf. `UserMetadata` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the metadata, if this is not the first time this metadata is set.
$body = NULL; // mixed

try {
    $apiInstance->instancesIdMetadataNamePut($id, $name, $ifMatch, $body);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdMetadataNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the metadata, or its index (cf. &#x60;UserMetadata&#x60; configuration option) | |
| **ifMatch** | **string**| Revision of the metadata, if this is not the first time this metadata is set. | [optional] |
| **body** | **mixed**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdModifyPost()`

```php
instancesIdModifyPost($id, $instancesIdModifyPostRequest): mixed
```

Modify instance

Download a modified version of the DICOM instance whose Orthanc identifier is provided in the URL: https://orthanc.uclouvain.be/book/users/anonymization.html#modification-of-a-single-instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$instancesIdModifyPostRequest = new \Aurabx\OrthancPHP\Model\InstancesIdModifyPostRequest(); // \Aurabx\OrthancPHP\Model\InstancesIdModifyPostRequest

try {
    $result = $apiInstance->instancesIdModifyPost($id, $instancesIdModifyPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdModifyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **instancesIdModifyPostRequest** | [**\Aurabx\OrthancPHP\Model\InstancesIdModifyPostRequest**](../Model/InstancesIdModifyPostRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/dicom`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdModuleGet()`

```php
instancesIdModuleGet($id, $ignoreLength, $short, $simplify): mixed
```

Get instance module

Get the instance module of the DICOM instance whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$ignoreLength = array('ignoreLength_example'); // string[] | Also include the DICOM tags that are provided in this list, even if their associated value is long
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->instancesIdModuleGet($id, $ignoreLength, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdModuleGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **ignoreLength** | [**string[]**](../Model/string.md)| Also include the DICOM tags that are provided in this list, even if their associated value is long | [optional] |
| **short** | **bool**| If present, report the DICOM tags in hexadecimal format | [optional] |
| **simplify** | **bool**| If present, report the DICOM tags in human-readable format (using the symbolic name of the tags) | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdNumpyGet()`

```php
instancesIdNumpyGet($id, $compress, $rescale): mixed
```

Decode instance for numpy

Decode the given DICOM instance, for use with numpy in Python. The numpy array has 4 dimensions: (frame, height, width, color channel).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM resource of interest
$compress = True; // bool | Compress the file as `.npz`
$rescale = True; // bool | On grayscale images, apply the rescaling and return floating-point values

try {
    $result = $apiInstance->instancesIdNumpyGet($id, $compress, $rescale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdNumpyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM resource of interest | |
| **compress** | **bool**| Compress the file as &#x60;.npz&#x60; | [optional] |
| **rescale** | **bool**| On grayscale images, apply the rescaling and return floating-point values | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdPatientGet()`

```php
instancesIdPatientGet($id, $full, $requestedTags, $short): mixed
```

Get parent patient

Get detailed information about the parent patient of the DICOM instance whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->instancesIdPatientGet($id, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdPatientGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **full** | **bool**| If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value) | [optional] |
| **requestedTags** | **string**| If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: &#39;requested-tags&#x3D;0010,0010;PatientBirthDate&#39;.  The tags requested tags are returned in the &#39;RequestedTags&#39; field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return | [optional] |
| **short** | **bool**| If present, report the DICOM tags in hexadecimal format | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdPdfGet()`

```php
instancesIdPdfGet($id): mixed
```

Get embedded PDF

Get the PDF file that is embedded in one DICOM instance. If the DICOM instance doesn't contain the `EncapsulatedDocument` tag or if the `MIMETypeOfEncapsulatedDocument` tag doesn't correspond to the PDF type, a `404` HTTP error is raised.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance interest

try {
    $result = $apiInstance->instancesIdPdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdPdfGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdPreviewGet()`

```php
instancesIdPreviewGet($id, $quality, $returnUnsupportedImage, $accept): mixed
```

Decode an image (preview)

Decode the first frame of the given DICOM instance. The full dynamic range of grayscale images is rescaled to the [0,255] range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$quality = 3.4; // float | Quality for JPEG images (between 1 and 100, defaults to 90)
$returnUnsupportedImage = True; // bool | Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false)
$accept = 'accept_example'; // string | Format of the resulting image. Can be `image/png` (default), `image/jpeg` or `image/x-portable-arbitrarymap`

try {
    $result = $apiInstance->instancesIdPreviewGet($id, $quality, $returnUnsupportedImage, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdPreviewGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **quality** | **float**| Quality for JPEG images (between 1 and 100, defaults to 90) | [optional] |
| **returnUnsupportedImage** | **bool**| Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false) | [optional] |
| **accept** | **string**| Format of the resulting image. Can be &#x60;image/png&#x60; (default), &#x60;image/jpeg&#x60; or &#x60;image/x-portable-arbitrarymap&#x60; | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `image/png`, `image/x-portable-arbitrarymap`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdReconstructPost()`

```php
instancesIdReconstructPost($id, $instancesIdReconstructPostRequest)
```

Reconstruct tags & optionally files of instance

Reconstruct the main DICOM tags in DB of the instance whose Orthanc identifier is provided in the URL. This is useful if child studies/series/instances have inconsistent values for higher-level tags, in order to force Orthanc to use the value from the resource of interest. Beware that this is a time-consuming operation, as all the children DICOM instances will be parsed again, and the Orthanc index will be updated accordingly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$instancesIdReconstructPostRequest = new \Aurabx\OrthancPHP\Model\InstancesIdReconstructPostRequest(); // \Aurabx\OrthancPHP\Model\InstancesIdReconstructPostRequest

try {
    $apiInstance->instancesIdReconstructPost($id, $instancesIdReconstructPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdReconstructPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **instancesIdReconstructPostRequest** | [**\Aurabx\OrthancPHP\Model\InstancesIdReconstructPostRequest**](../Model/InstancesIdReconstructPostRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdRenderedGet()`

```php
instancesIdRenderedGet($id, $height, $quality, $returnUnsupportedImage, $smooth, $width, $windowCenter, $windowWidth, $accept): mixed
```

Render an image

Render the first frame of the given DICOM instance. This function takes scaling into account (`RescaleSlope` and `RescaleIntercept` tags), as well as the default windowing stored in the DICOM file (`WindowCenter` and `WindowWidth`tags), and can be used to resize the resulting image. Color images are not affected by windowing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$height = 3.4; // float | Height of the resized image
$quality = 3.4; // float | Quality for JPEG images (between 1 and 100, defaults to 90)
$returnUnsupportedImage = True; // bool | Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false)
$smooth = True; // bool | Whether to smooth image on resize
$width = 3.4; // float | Width of the resized image
$windowCenter = 3.4; // float | Windowing center
$windowWidth = 3.4; // float | Windowing width
$accept = 'accept_example'; // string | Format of the resulting image. Can be `image/png` (default), `image/jpeg` or `image/x-portable-arbitrarymap`

try {
    $result = $apiInstance->instancesIdRenderedGet($id, $height, $quality, $returnUnsupportedImage, $smooth, $width, $windowCenter, $windowWidth, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdRenderedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **height** | **float**| Height of the resized image | [optional] |
| **quality** | **float**| Quality for JPEG images (between 1 and 100, defaults to 90) | [optional] |
| **returnUnsupportedImage** | **bool**| Returns an unsupported.png placeholder image if unable to provide the image instead of returning a 415 HTTP error (defaults to false) | [optional] |
| **smooth** | **bool**| Whether to smooth image on resize | [optional] |
| **width** | **float**| Width of the resized image | [optional] |
| **windowCenter** | **float**| Windowing center | [optional] |
| **windowWidth** | **float**| Windowing width | [optional] |
| **accept** | **string**| Format of the resulting image. Can be &#x60;image/png&#x60; (default), &#x60;image/jpeg&#x60; or &#x60;image/x-portable-arbitrarymap&#x60; | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `image/png`, `image/x-portable-arbitrarymap`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdSeriesGet()`

```php
instancesIdSeriesGet($id, $full, $requestedTags, $short): mixed
```

Get parent series

Get detailed information about the parent series of the DICOM instance whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->instancesIdSeriesGet($id, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdSeriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **full** | **bool**| If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value) | [optional] |
| **requestedTags** | **string**| If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: &#39;requested-tags&#x3D;0010,0010;PatientBirthDate&#39;.  The tags requested tags are returned in the &#39;RequestedTags&#39; field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return | [optional] |
| **short** | **bool**| If present, report the DICOM tags in hexadecimal format | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdSimplifiedTagsGet()`

```php
instancesIdSimplifiedTagsGet($id, $ignoreLength, $whole): mixed
```

Get human-readable tags

Get the DICOM tags in human-readable format (same as the `/instances/{id}/tags?simplify` route)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$ignoreLength = array('ignoreLength_example'); // string[] | Also include the DICOM tags that are provided in this list, even if their associated value is long
$whole = True; // bool | Whether to read the whole DICOM file from the storage area (new in Orthanc 1.12.4). If set to \"false\" (default value), the DICOM file is read until the pixel data tag (7fe0,0010) to optimize access to storage. Setting the option to \"true\" provides access to the DICOM tags stored after the pixel data tag.

try {
    $result = $apiInstance->instancesIdSimplifiedTagsGet($id, $ignoreLength, $whole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdSimplifiedTagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **ignoreLength** | [**string[]**](../Model/string.md)| Also include the DICOM tags that are provided in this list, even if their associated value is long | [optional] |
| **whole** | **bool**| Whether to read the whole DICOM file from the storage area (new in Orthanc 1.12.4). If set to \&quot;false\&quot; (default value), the DICOM file is read until the pixel data tag (7fe0,0010) to optimize access to storage. Setting the option to \&quot;true\&quot; provides access to the DICOM tags stored after the pixel data tag. | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdStatisticsGet()`

```php
instancesIdStatisticsGet($id): \Aurabx\OrthancPHP\Model\InstancesIdStatisticsGet200Response
```

Get instance statistics

Get statistics about the given instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest

try {
    $result = $apiInstance->instancesIdStatisticsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |

### Return type

[**\Aurabx\OrthancPHP\Model\InstancesIdStatisticsGet200Response**](../Model/InstancesIdStatisticsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdStudyGet()`

```php
instancesIdStudyGet($id, $full, $requestedTags, $short): mixed
```

Get parent study

Get detailed information about the parent study of the DICOM instance whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->instancesIdStudyGet($id, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdStudyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **full** | **bool**| If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value) | [optional] |
| **requestedTags** | **string**| If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: &#39;requested-tags&#x3D;0010,0010;PatientBirthDate&#39;.  The tags requested tags are returned in the &#39;RequestedTags&#39; field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return | [optional] |
| **short** | **bool**| If present, report the DICOM tags in hexadecimal format | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesIdTagsGet()`

```php
instancesIdTagsGet($id, $ignoreLength, $short, $simplify, $whole): mixed
```

Get DICOM tags

Get the DICOM tags in the specified format. By default, the `full` format is used, which combines hexadecimal tags with human-readable description.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM instance of interest
$ignoreLength = array('ignoreLength_example'); // string[] | Also include the DICOM tags that are provided in this list, even if their associated value is long
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)
$whole = True; // bool | Whether to read the whole DICOM file from the storage area (new in Orthanc 1.12.4). If set to \"false\" (default value), the DICOM file is read until the pixel data tag (7fe0,0010) to optimize access to storage. Setting the option to \"true\" provides access to the DICOM tags stored after the pixel data tag.

try {
    $result = $apiInstance->instancesIdTagsGet($id, $ignoreLength, $short, $simplify, $whole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesIdTagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the DICOM instance of interest | |
| **ignoreLength** | [**string[]**](../Model/string.md)| Also include the DICOM tags that are provided in this list, even if their associated value is long | [optional] |
| **short** | **bool**| If present, report the DICOM tags in hexadecimal format | [optional] |
| **simplify** | **bool**| If present, report the DICOM tags in human-readable format (using the symbolic name of the tags) | [optional] |
| **whole** | **bool**| Whether to read the whole DICOM file from the storage area (new in Orthanc 1.12.4). If set to \&quot;false\&quot; (default value), the DICOM file is read until the pixel data tag (7fe0,0010) to optimize access to storage. Setting the option to \&quot;true\&quot; provides access to the DICOM tags stored after the pixel data tag. | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesPost()`

```php
instancesPost($body): \Aurabx\OrthancPHP\Model\InstancesPost200Response
```

Upload DICOM instances

Upload DICOM instances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $result = $apiInstance->instancesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | [optional] |

### Return type

[**\Aurabx\OrthancPHP\Model\InstancesPost200Response**](../Model/InstancesPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/dicom`, `application/zip`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
