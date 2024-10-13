# Aurabx\OrthancPHP\StudiesApi

All URIs are relative to https://orthanc.uclouvain.be/demo, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**studiesGet()**](StudiesApi.md#studiesGet) | **GET** /studies | List the available studies |
| [**studiesIdAnonymizePost()**](StudiesApi.md#studiesIdAnonymizePost) | **POST** /studies/{id}/anonymize | Anonymize study |
| [**studiesIdArchiveGet()**](StudiesApi.md#studiesIdArchiveGet) | **GET** /studies/{id}/archive | Create ZIP archive |
| [**studiesIdArchivePost()**](StudiesApi.md#studiesIdArchivePost) | **POST** /studies/{id}/archive | Create ZIP archive |
| [**studiesIdAttachmentsGet()**](StudiesApi.md#studiesIdAttachmentsGet) | **GET** /studies/{id}/attachments | List attachments |
| [**studiesIdAttachmentsNameCompressPost()**](StudiesApi.md#studiesIdAttachmentsNameCompressPost) | **POST** /studies/{id}/attachments/{name}/compress | Compress attachment |
| [**studiesIdAttachmentsNameCompressedDataGet()**](StudiesApi.md#studiesIdAttachmentsNameCompressedDataGet) | **GET** /studies/{id}/attachments/{name}/compressed-data | Get attachment (no decompression) |
| [**studiesIdAttachmentsNameCompressedMd5Get()**](StudiesApi.md#studiesIdAttachmentsNameCompressedMd5Get) | **GET** /studies/{id}/attachments/{name}/compressed-md5 | Get MD5 of attachment on disk |
| [**studiesIdAttachmentsNameCompressedSizeGet()**](StudiesApi.md#studiesIdAttachmentsNameCompressedSizeGet) | **GET** /studies/{id}/attachments/{name}/compressed-size | Get size of attachment on disk |
| [**studiesIdAttachmentsNameDataGet()**](StudiesApi.md#studiesIdAttachmentsNameDataGet) | **GET** /studies/{id}/attachments/{name}/data | Get attachment |
| [**studiesIdAttachmentsNameDelete()**](StudiesApi.md#studiesIdAttachmentsNameDelete) | **DELETE** /studies/{id}/attachments/{name} | Delete attachment |
| [**studiesIdAttachmentsNameInfoGet()**](StudiesApi.md#studiesIdAttachmentsNameInfoGet) | **GET** /studies/{id}/attachments/{name}/info | Get info about the attachment |
| [**studiesIdAttachmentsNameIsCompressedGet()**](StudiesApi.md#studiesIdAttachmentsNameIsCompressedGet) | **GET** /studies/{id}/attachments/{name}/is-compressed | Is attachment compressed? |
| [**studiesIdAttachmentsNameMd5Get()**](StudiesApi.md#studiesIdAttachmentsNameMd5Get) | **GET** /studies/{id}/attachments/{name}/md5 | Get MD5 of attachment |
| [**studiesIdAttachmentsNamePut()**](StudiesApi.md#studiesIdAttachmentsNamePut) | **PUT** /studies/{id}/attachments/{name} | Set attachment |
| [**studiesIdAttachmentsNameSizeGet()**](StudiesApi.md#studiesIdAttachmentsNameSizeGet) | **GET** /studies/{id}/attachments/{name}/size | Get size of attachment |
| [**studiesIdAttachmentsNameUncompressPost()**](StudiesApi.md#studiesIdAttachmentsNameUncompressPost) | **POST** /studies/{id}/attachments/{name}/uncompress | Uncompress attachment |
| [**studiesIdAttachmentsNameVerifyMd5Post()**](StudiesApi.md#studiesIdAttachmentsNameVerifyMd5Post) | **POST** /studies/{id}/attachments/{name}/verify-md5 | Verify attachment |
| [**studiesIdDelete()**](StudiesApi.md#studiesIdDelete) | **DELETE** /studies/{id} | Delete some study |
| [**studiesIdGet()**](StudiesApi.md#studiesIdGet) | **GET** /studies/{id} | Get information about some study |
| [**studiesIdInstancesGet()**](StudiesApi.md#studiesIdInstancesGet) | **GET** /studies/{id}/instances | Get child instances |
| [**studiesIdInstancesTagsGet()**](StudiesApi.md#studiesIdInstancesTagsGet) | **GET** /studies/{id}/instances-tags | Get tags of instances |
| [**studiesIdLabelsGet()**](StudiesApi.md#studiesIdLabelsGet) | **GET** /studies/{id}/labels | List labels |
| [**studiesIdLabelsLabelDelete()**](StudiesApi.md#studiesIdLabelsLabelDelete) | **DELETE** /studies/{id}/labels/{label} | Remove label |
| [**studiesIdLabelsLabelGet()**](StudiesApi.md#studiesIdLabelsLabelGet) | **GET** /studies/{id}/labels/{label} | Test label |
| [**studiesIdLabelsLabelPut()**](StudiesApi.md#studiesIdLabelsLabelPut) | **PUT** /studies/{id}/labels/{label} | Add label |
| [**studiesIdMediaGet()**](StudiesApi.md#studiesIdMediaGet) | **GET** /studies/{id}/media | Create DICOMDIR media |
| [**studiesIdMediaPost()**](StudiesApi.md#studiesIdMediaPost) | **POST** /studies/{id}/media | Create DICOMDIR media |
| [**studiesIdMergePost()**](StudiesApi.md#studiesIdMergePost) | **POST** /studies/{id}/merge | Merge study |
| [**studiesIdMetadataGet()**](StudiesApi.md#studiesIdMetadataGet) | **GET** /studies/{id}/metadata | List metadata |
| [**studiesIdMetadataNameDelete()**](StudiesApi.md#studiesIdMetadataNameDelete) | **DELETE** /studies/{id}/metadata/{name} | Delete metadata |
| [**studiesIdMetadataNameGet()**](StudiesApi.md#studiesIdMetadataNameGet) | **GET** /studies/{id}/metadata/{name} | Get metadata |
| [**studiesIdMetadataNamePut()**](StudiesApi.md#studiesIdMetadataNamePut) | **PUT** /studies/{id}/metadata/{name} | Set metadata |
| [**studiesIdModifyPost()**](StudiesApi.md#studiesIdModifyPost) | **POST** /studies/{id}/modify | Modify study |
| [**studiesIdModuleGet()**](StudiesApi.md#studiesIdModuleGet) | **GET** /studies/{id}/module | Get study module |
| [**studiesIdModulePatientGet()**](StudiesApi.md#studiesIdModulePatientGet) | **GET** /studies/{id}/module-patient | Get patient module of study |
| [**studiesIdPatientGet()**](StudiesApi.md#studiesIdPatientGet) | **GET** /studies/{id}/patient | Get parent patient |
| [**studiesIdReconstructPost()**](StudiesApi.md#studiesIdReconstructPost) | **POST** /studies/{id}/reconstruct | Reconstruct tags &amp; optionally files of study |
| [**studiesIdSeriesGet()**](StudiesApi.md#studiesIdSeriesGet) | **GET** /studies/{id}/series | Get child series |
| [**studiesIdSharedTagsGet()**](StudiesApi.md#studiesIdSharedTagsGet) | **GET** /studies/{id}/shared-tags | Get shared tags |
| [**studiesIdSplitPost()**](StudiesApi.md#studiesIdSplitPost) | **POST** /studies/{id}/split | Split study |
| [**studiesIdStatisticsGet()**](StudiesApi.md#studiesIdStatisticsGet) | **GET** /studies/{id}/statistics | Get study statistics |


## `studiesGet()`

```php
studiesGet($expand, $full, $limit, $requestedTags, $short, $since): mixed
```

List the available studies

List the Orthanc identifiers of all the available DICOM studies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expand = 'expand_example'; // string | If present, retrieve detailed information about the individual studies
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$limit = 3.4; // float | Limit the number of results
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$since = 3.4; // float | Show only the resources since the provided index

try {
    $result = $apiInstance->studiesGet($expand, $full, $limit, $requestedTags, $short, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| If present, retrieve detailed information about the individual studies | [optional] |
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

## `studiesIdAnonymizePost()`

```php
studiesIdAnonymizePost($id, $patientsIdAnonymizePostRequest): \Aurabx\OrthancPHP\Model\ModalitiesIdMovePost200Response
```

Anonymize study

Start a job that will anonymize all the DICOM instances within the study whose identifier is provided in the URL. The modified DICOM instances will be stored into a brand new study, whose Orthanc identifiers will be returned by the job. https://orthanc.uclouvain.be/book/users/anonymization.html#anonymization-of-patients-studies-or-series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$patientsIdAnonymizePostRequest = new \Aurabx\OrthancPHP\Model\PatientsIdAnonymizePostRequest(); // \Aurabx\OrthancPHP\Model\PatientsIdAnonymizePostRequest

try {
    $result = $apiInstance->studiesIdAnonymizePost($id, $patientsIdAnonymizePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAnonymizePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
| **patientsIdAnonymizePostRequest** | [**\Aurabx\OrthancPHP\Model\PatientsIdAnonymizePostRequest**](../Model/PatientsIdAnonymizePostRequest.md)|  | [optional] |

### Return type

[**\Aurabx\OrthancPHP\Model\ModalitiesIdMovePost200Response**](../Model/ModalitiesIdMovePost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `studiesIdArchiveGet()`

```php
studiesIdArchiveGet($id, $filename, $transcode): mixed
```

Create ZIP archive

Synchronously create a ZIP archive containing the DICOM study whose Orthanc identifier is provided in the URL. This flavor is synchronous, which might *not* be desirable to archive large amount of data, as it might lead to network timeouts. Prefer the asynchronous version using `POST` method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$filename = 'filename_example'; // string | Filename to set in the \"Content-Disposition\" HTTP header (including file extension)
$transcode = 'transcode_example'; // string | If present, the DICOM files in the archive will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html

try {
    $result = $apiInstance->studiesIdArchiveGet($id, $filename, $transcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdArchiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
| **filename** | **string**| Filename to set in the \&quot;Content-Disposition\&quot; HTTP header (including file extension) | [optional] |
| **transcode** | **string**| If present, the DICOM files in the archive will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `studiesIdArchivePost()`

```php
studiesIdArchivePost($id, $patientsIdArchivePostRequest): \Aurabx\OrthancPHP\Model\PatientsIdArchivePost200Response
```

Create ZIP archive

Create a ZIP archive containing the DICOM study whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$patientsIdArchivePostRequest = new \Aurabx\OrthancPHP\Model\PatientsIdArchivePostRequest(); // \Aurabx\OrthancPHP\Model\PatientsIdArchivePostRequest

try {
    $result = $apiInstance->studiesIdArchivePost($id, $patientsIdArchivePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdArchivePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
| **patientsIdArchivePostRequest** | [**\Aurabx\OrthancPHP\Model\PatientsIdArchivePostRequest**](../Model/PatientsIdArchivePostRequest.md)|  | [optional] |

### Return type

[**\Aurabx\OrthancPHP\Model\PatientsIdArchivePost200Response**](../Model/PatientsIdArchivePost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `studiesIdAttachmentsGet()`

```php
studiesIdAttachmentsGet($id, $full): mixed
```

List attachments

Get the list of attachments that are associated with the given study

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$full = 'full_example'; // string | If present, retrieve the attachments list and their numerical ids

try {
    $result = $apiInstance->studiesIdAttachmentsGet($id, $full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNameCompressPost()`

```php
studiesIdAttachmentsNameCompressPost($id, $name)
```

Compress attachment

Change the compression scheme that is used to store an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)

try {
    $apiInstance->studiesIdAttachmentsNameCompressPost($id, $name);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNameCompressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNameCompressedDataGet()`

```php
studiesIdAttachmentsNameCompressedDataGet($id, $name, $ifNoneMatch): mixed
```

Get attachment (no decompression)

Get the (binary) content of one attachment associated with the given study. The attachment will not be decompressed if `StorageCompression` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the metadata, to check if its content has changed

try {
    $result = $apiInstance->studiesIdAttachmentsNameCompressedDataGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNameCompressedDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNameCompressedMd5Get()`

```php
studiesIdAttachmentsNameCompressedMd5Get($id, $name, $ifNoneMatch): mixed
```

Get MD5 of attachment on disk

Get the MD5 hash of one attachment associated with the given study, as stored on the disk. This is different from `.../md5` iff `EnableStorage` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->studiesIdAttachmentsNameCompressedMd5Get($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNameCompressedMd5Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNameCompressedSizeGet()`

```php
studiesIdAttachmentsNameCompressedSizeGet($id, $name, $ifNoneMatch): mixed
```

Get size of attachment on disk

Get the size of one attachment associated with the given study, as stored on the disk. This is different from `.../size` iff `EnableStorage` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->studiesIdAttachmentsNameCompressedSizeGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNameCompressedSizeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNameDataGet()`

```php
studiesIdAttachmentsNameDataGet($id, $name, $ifNoneMatch): mixed
```

Get attachment

Get the (binary) content of one attachment associated with the given study

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the metadata, to check if its content has changed

try {
    $result = $apiInstance->studiesIdAttachmentsNameDataGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNameDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNameDelete()`

```php
studiesIdAttachmentsNameDelete($id, $name, $ifMatch)
```

Delete attachment

Delete an attachment associated with the given DICOM study. This call will fail if trying to delete a system attachment (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the attachment, to check if its content has not changed and can be deleted. This header is mandatory if `CheckRevisions` option is `true`.

try {
    $apiInstance->studiesIdAttachmentsNameDelete($id, $name, $ifMatch);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNameInfoGet()`

```php
studiesIdAttachmentsNameInfoGet($id, $name, $ifNoneMatch): mixed
```

Get info about the attachment

Get all the information about the attachment associated with the given study

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->studiesIdAttachmentsNameInfoGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNameInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNameIsCompressedGet()`

```php
studiesIdAttachmentsNameIsCompressedGet($id, $name, $ifNoneMatch): mixed
```

Is attachment compressed?

Test whether the attachment has been stored as a compressed file on the disk.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->studiesIdAttachmentsNameIsCompressedGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNameIsCompressedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNameMd5Get()`

```php
studiesIdAttachmentsNameMd5Get($id, $name, $ifNoneMatch): mixed
```

Get MD5 of attachment

Get the MD5 hash of one attachment associated with the given study

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->studiesIdAttachmentsNameMd5Get($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNameMd5Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNamePut()`

```php
studiesIdAttachmentsNamePut($id, $name, $ifMatch, $body): mixed
```

Set attachment

Attach a file to the given DICOM study. This call will fail if trying to modify a system attachment (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the attachment, if this is not the first time this attachment is set.
$body = NULL; // mixed

try {
    $result = $apiInstance->studiesIdAttachmentsNamePut($id, $name, $ifMatch, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNameSizeGet()`

```php
studiesIdAttachmentsNameSizeGet($id, $name, $ifNoneMatch): mixed
```

Get size of attachment

Get the size of one attachment associated with the given study

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->studiesIdAttachmentsNameSizeGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNameSizeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNameUncompressPost()`

```php
studiesIdAttachmentsNameUncompressPost($id, $name)
```

Uncompress attachment

Change the compression scheme that is used to store an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)

try {
    $apiInstance->studiesIdAttachmentsNameUncompressPost($id, $name);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNameUncompressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdAttachmentsNameVerifyMd5Post()`

```php
studiesIdAttachmentsNameVerifyMd5Post($id, $name): mixed
```

Verify attachment

Verify that the attachment is not corrupted, by validating its MD5 hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)

try {
    $result = $apiInstance->studiesIdAttachmentsNameVerifyMd5Post($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdAttachmentsNameVerifyMd5Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdDelete()`

```php
studiesIdDelete($id)
```

Delete some study

Delete the DICOM study whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest

try {
    $apiInstance->studiesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |

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

## `studiesIdGet()`

```php
studiesIdGet($id, $full, $requestedTags, $short): mixed
```

Get information about some study

Get detailed information about the DICOM study whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->studiesIdGet($id, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdInstancesGet()`

```php
studiesIdInstancesGet($id, $expand, $full, $requestedTags, $short): mixed
```

Get child instances

Get detailed information about the child instances of the DICOM study whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$expand = 'expand_example'; // string | If false or missing, only retrieve the list of child instances
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->studiesIdInstancesGet($id, $expand, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdInstancesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
| **expand** | **string**| If false or missing, only retrieve the list of child instances | [optional] |
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

## `studiesIdInstancesTagsGet()`

```php
studiesIdInstancesTagsGet($id, $ignoreLength, $short, $simplify): mixed
```

Get tags of instances

Get the tags of all the child instances of the DICOM study whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$ignoreLength = array('ignoreLength_example'); // string[] | Also include the DICOM tags that are provided in this list, even if their associated value is long
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->studiesIdInstancesTagsGet($id, $ignoreLength, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdInstancesTagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdLabelsGet()`

```php
studiesIdLabelsGet($id): mixed
```

List labels

Get the labels that are associated with the given study (new in Orthanc 1.12.0)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest

try {
    $result = $apiInstance->studiesIdLabelsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdLabelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |

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

## `studiesIdLabelsLabelDelete()`

```php
studiesIdLabelsLabelDelete($id, $label)
```

Remove label

Remove a label associated with a study

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$label = 'label_example'; // string | The label to be removed

try {
    $apiInstance->studiesIdLabelsLabelDelete($id, $label);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdLabelsLabelDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdLabelsLabelGet()`

```php
studiesIdLabelsLabelGet($id, $label): mixed
```

Test label

Test whether the study is associated with the given label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$label = 'label_example'; // string | The label of interest

try {
    $result = $apiInstance->studiesIdLabelsLabelGet($id, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdLabelsLabelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdLabelsLabelPut()`

```php
studiesIdLabelsLabelPut($id, $label)
```

Add label

Associate a label with a study

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$label = 'label_example'; // string | The label to be added

try {
    $apiInstance->studiesIdLabelsLabelPut($id, $label);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdLabelsLabelPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdMediaGet()`

```php
studiesIdMediaGet($id, $extended, $filename, $transcode): mixed
```

Create DICOMDIR media

Synchronously create a DICOMDIR media containing the DICOM study whose Orthanc identifier is provided in the URL. This flavor is synchronous, which might *not* be desirable to archive large amount of data, as it might lead to network timeouts. Prefer the asynchronous version using `POST` method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$extended = 'extended_example'; // string | If present, will include additional tags such as `SeriesDescription`, leading to a so-called *extended DICOMDIR*
$filename = 'filename_example'; // string | Filename to set in the \"Content-Disposition\" HTTP header (including file extension)
$transcode = 'transcode_example'; // string | If present, the DICOM files in the archive will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html

try {
    $result = $apiInstance->studiesIdMediaGet($id, $extended, $filename, $transcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdMediaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
| **extended** | **string**| If present, will include additional tags such as &#x60;SeriesDescription&#x60;, leading to a so-called *extended DICOMDIR* | [optional] |
| **filename** | **string**| Filename to set in the \&quot;Content-Disposition\&quot; HTTP header (including file extension) | [optional] |
| **transcode** | **string**| If present, the DICOM files in the archive will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `studiesIdMediaPost()`

```php
studiesIdMediaPost($id, $patientsIdMediaPostRequest): \Aurabx\OrthancPHP\Model\PatientsIdArchivePost200Response
```

Create DICOMDIR media

Create a DICOMDIR media containing the DICOM study whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$patientsIdMediaPostRequest = new \Aurabx\OrthancPHP\Model\PatientsIdMediaPostRequest(); // \Aurabx\OrthancPHP\Model\PatientsIdMediaPostRequest

try {
    $result = $apiInstance->studiesIdMediaPost($id, $patientsIdMediaPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdMediaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
| **patientsIdMediaPostRequest** | [**\Aurabx\OrthancPHP\Model\PatientsIdMediaPostRequest**](../Model/PatientsIdMediaPostRequest.md)|  | [optional] |

### Return type

[**\Aurabx\OrthancPHP\Model\PatientsIdArchivePost200Response**](../Model/PatientsIdArchivePost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `studiesIdMergePost()`

```php
studiesIdMergePost($id, $studiesIdMergePostRequest): \Aurabx\OrthancPHP\Model\ModalitiesIdMovePost200Response
```

Merge study

Start a new job so as to move some DICOM resources into the DICOM study whose Orthanc identifier is provided in the URL: https://orthanc.uclouvain.be/book/users/anonymization.html#merging

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$studiesIdMergePostRequest = new \Aurabx\OrthancPHP\Model\StudiesIdMergePostRequest(); // \Aurabx\OrthancPHP\Model\StudiesIdMergePostRequest

try {
    $result = $apiInstance->studiesIdMergePost($id, $studiesIdMergePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdMergePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
| **studiesIdMergePostRequest** | [**\Aurabx\OrthancPHP\Model\StudiesIdMergePostRequest**](../Model/StudiesIdMergePostRequest.md)|  | [optional] |

### Return type

[**\Aurabx\OrthancPHP\Model\ModalitiesIdMovePost200Response**](../Model/ModalitiesIdMovePost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `studiesIdMetadataGet()`

```php
studiesIdMetadataGet($id, $expand, $numeric): mixed
```

List metadata

Get the list of metadata that are associated with the given study

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$expand = 'expand_example'; // string | If present, also retrieve the value of the individual metadata
$numeric = 'numeric_example'; // string | If present, use the numeric identifier of the metadata instead of its symbolic name

try {
    $result = $apiInstance->studiesIdMetadataGet($id, $expand, $numeric);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdMetadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdMetadataNameDelete()`

```php
studiesIdMetadataNameDelete($id, $name, $ifMatch)
```

Delete metadata

Delete some metadata associated with the given DICOM study. This call will fail if trying to delete a system metadata (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the metadata, or its index (cf. `UserMetadata` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the metadata, to check if its content has not changed and can be deleted. This header is mandatory if `CheckRevisions` option is `true`.

try {
    $apiInstance->studiesIdMetadataNameDelete($id, $name, $ifMatch);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdMetadataNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdMetadataNameGet()`

```php
studiesIdMetadataNameGet($id, $name, $ifNoneMatch): mixed
```

Get metadata

Get the value of a metadata that is associated with the given study

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the metadata, or its index (cf. `UserMetadata` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the metadata, to check if its content has changed

try {
    $result = $apiInstance->studiesIdMetadataNameGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdMetadataNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdMetadataNamePut()`

```php
studiesIdMetadataNamePut($id, $name, $ifMatch, $body)
```

Set metadata

Set the value of some metadata in the given DICOM study. This call will fail if trying to modify a system metadata (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the metadata, or its index (cf. `UserMetadata` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the metadata, if this is not the first time this metadata is set.
$body = NULL; // mixed

try {
    $apiInstance->studiesIdMetadataNamePut($id, $name, $ifMatch, $body);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdMetadataNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdModifyPost()`

```php
studiesIdModifyPost($id, $patientsIdModifyPostRequest): \Aurabx\OrthancPHP\Model\ModalitiesIdMovePost200Response
```

Modify study

Start a job that will modify all the DICOM instances within the study whose identifier is provided in the URL. The modified DICOM instances will be stored into a brand new study, whose Orthanc identifiers will be returned by the job. https://orthanc.uclouvain.be/book/users/anonymization.html#modification-of-studies-or-series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$patientsIdModifyPostRequest = new \Aurabx\OrthancPHP\Model\PatientsIdModifyPostRequest(); // \Aurabx\OrthancPHP\Model\PatientsIdModifyPostRequest

try {
    $result = $apiInstance->studiesIdModifyPost($id, $patientsIdModifyPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdModifyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
| **patientsIdModifyPostRequest** | [**\Aurabx\OrthancPHP\Model\PatientsIdModifyPostRequest**](../Model/PatientsIdModifyPostRequest.md)|  | [optional] |

### Return type

[**\Aurabx\OrthancPHP\Model\ModalitiesIdMovePost200Response**](../Model/ModalitiesIdMovePost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `studiesIdModuleGet()`

```php
studiesIdModuleGet($id, $ignoreLength, $short, $simplify): mixed
```

Get study module

Get the study module of the DICOM study whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$ignoreLength = array('ignoreLength_example'); // string[] | Also include the DICOM tags that are provided in this list, even if their associated value is long
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->studiesIdModuleGet($id, $ignoreLength, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdModuleGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdModulePatientGet()`

```php
studiesIdModulePatientGet($id, $ignoreLength, $short, $simplify): mixed
```

Get patient module of study

Get the patient module of the DICOM study whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$ignoreLength = array('ignoreLength_example'); // string[] | Also include the DICOM tags that are provided in this list, even if their associated value is long
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->studiesIdModulePatientGet($id, $ignoreLength, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdModulePatientGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdPatientGet()`

```php
studiesIdPatientGet($id, $full, $requestedTags, $short): mixed
```

Get parent patient

Get detailed information about the parent patient of the DICOM study whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->studiesIdPatientGet($id, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdPatientGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdReconstructPost()`

```php
studiesIdReconstructPost($id, $instancesIdReconstructPostRequest)
```

Reconstruct tags & optionally files of study

Reconstruct the main DICOM tags in DB of the study whose Orthanc identifier is provided in the URL. This is useful if child studies/series/instances have inconsistent values for higher-level tags, in order to force Orthanc to use the value from the resource of interest. Beware that this is a time-consuming operation, as all the children DICOM instances will be parsed again, and the Orthanc index will be updated accordingly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$instancesIdReconstructPostRequest = new \Aurabx\OrthancPHP\Model\InstancesIdReconstructPostRequest(); // \Aurabx\OrthancPHP\Model\InstancesIdReconstructPostRequest

try {
    $apiInstance->studiesIdReconstructPost($id, $instancesIdReconstructPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdReconstructPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdSeriesGet()`

```php
studiesIdSeriesGet($id, $expand, $full, $requestedTags, $short): mixed
```

Get child series

Get detailed information about the child series of the DICOM study whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$expand = 'expand_example'; // string | If false or missing, only retrieve the list of child series
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->studiesIdSeriesGet($id, $expand, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdSeriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
| **expand** | **string**| If false or missing, only retrieve the list of child series | [optional] |
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

## `studiesIdSharedTagsGet()`

```php
studiesIdSharedTagsGet($id, $short, $simplify): mixed
```

Get shared tags

Extract the DICOM tags whose value is constant across all the child instances of the DICOM study whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->studiesIdSharedTagsGet($id, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdSharedTagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
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

## `studiesIdSplitPost()`

```php
studiesIdSplitPost($id, $studiesIdSplitPostRequest): \Aurabx\OrthancPHP\Model\ModalitiesIdMovePost200Response
```

Split study

Start a new job so as to split the DICOM study whose Orthanc identifier is provided in the URL, by taking some of its children series or instances out of it and putting them into a brand new study (this new study is created by setting the `StudyInstanceUID` tag to a random identifier): https://orthanc.uclouvain.be/book/users/anonymization.html#splitting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$studiesIdSplitPostRequest = new \Aurabx\OrthancPHP\Model\StudiesIdSplitPostRequest(); // \Aurabx\OrthancPHP\Model\StudiesIdSplitPostRequest

try {
    $result = $apiInstance->studiesIdSplitPost($id, $studiesIdSplitPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdSplitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
| **studiesIdSplitPostRequest** | [**\Aurabx\OrthancPHP\Model\StudiesIdSplitPostRequest**](../Model/StudiesIdSplitPostRequest.md)|  | [optional] |

### Return type

[**\Aurabx\OrthancPHP\Model\ModalitiesIdMovePost200Response**](../Model/ModalitiesIdMovePost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `studiesIdStatisticsGet()`

```php
studiesIdStatisticsGet($id): \Aurabx\OrthancPHP\Model\StudiesIdStatisticsGet200Response
```

Get study statistics

Get statistics about the given study

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest

try {
    $result = $apiInstance->studiesIdStatisticsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->studiesIdStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |

### Return type

[**\Aurabx\OrthancPHP\Model\StudiesIdStatisticsGet200Response**](../Model/StudiesIdStatisticsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
