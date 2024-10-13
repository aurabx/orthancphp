# Aurabx\OrthancPHP\PatientsApi

All URIs are relative to https://orthanc.uclouvain.be/demo, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**patientsGet()**](PatientsApi.md#patientsGet) | **GET** /patients | List the available patients |
| [**patientsIdAnonymizePost()**](PatientsApi.md#patientsIdAnonymizePost) | **POST** /patients/{id}/anonymize | Anonymize patient |
| [**patientsIdArchiveGet()**](PatientsApi.md#patientsIdArchiveGet) | **GET** /patients/{id}/archive | Create ZIP archive |
| [**patientsIdArchivePost()**](PatientsApi.md#patientsIdArchivePost) | **POST** /patients/{id}/archive | Create ZIP archive |
| [**patientsIdAttachmentsGet()**](PatientsApi.md#patientsIdAttachmentsGet) | **GET** /patients/{id}/attachments | List attachments |
| [**patientsIdAttachmentsNameCompressPost()**](PatientsApi.md#patientsIdAttachmentsNameCompressPost) | **POST** /patients/{id}/attachments/{name}/compress | Compress attachment |
| [**patientsIdAttachmentsNameCompressedDataGet()**](PatientsApi.md#patientsIdAttachmentsNameCompressedDataGet) | **GET** /patients/{id}/attachments/{name}/compressed-data | Get attachment (no decompression) |
| [**patientsIdAttachmentsNameCompressedMd5Get()**](PatientsApi.md#patientsIdAttachmentsNameCompressedMd5Get) | **GET** /patients/{id}/attachments/{name}/compressed-md5 | Get MD5 of attachment on disk |
| [**patientsIdAttachmentsNameCompressedSizeGet()**](PatientsApi.md#patientsIdAttachmentsNameCompressedSizeGet) | **GET** /patients/{id}/attachments/{name}/compressed-size | Get size of attachment on disk |
| [**patientsIdAttachmentsNameDataGet()**](PatientsApi.md#patientsIdAttachmentsNameDataGet) | **GET** /patients/{id}/attachments/{name}/data | Get attachment |
| [**patientsIdAttachmentsNameDelete()**](PatientsApi.md#patientsIdAttachmentsNameDelete) | **DELETE** /patients/{id}/attachments/{name} | Delete attachment |
| [**patientsIdAttachmentsNameInfoGet()**](PatientsApi.md#patientsIdAttachmentsNameInfoGet) | **GET** /patients/{id}/attachments/{name}/info | Get info about the attachment |
| [**patientsIdAttachmentsNameIsCompressedGet()**](PatientsApi.md#patientsIdAttachmentsNameIsCompressedGet) | **GET** /patients/{id}/attachments/{name}/is-compressed | Is attachment compressed? |
| [**patientsIdAttachmentsNameMd5Get()**](PatientsApi.md#patientsIdAttachmentsNameMd5Get) | **GET** /patients/{id}/attachments/{name}/md5 | Get MD5 of attachment |
| [**patientsIdAttachmentsNamePut()**](PatientsApi.md#patientsIdAttachmentsNamePut) | **PUT** /patients/{id}/attachments/{name} | Set attachment |
| [**patientsIdAttachmentsNameSizeGet()**](PatientsApi.md#patientsIdAttachmentsNameSizeGet) | **GET** /patients/{id}/attachments/{name}/size | Get size of attachment |
| [**patientsIdAttachmentsNameUncompressPost()**](PatientsApi.md#patientsIdAttachmentsNameUncompressPost) | **POST** /patients/{id}/attachments/{name}/uncompress | Uncompress attachment |
| [**patientsIdAttachmentsNameVerifyMd5Post()**](PatientsApi.md#patientsIdAttachmentsNameVerifyMd5Post) | **POST** /patients/{id}/attachments/{name}/verify-md5 | Verify attachment |
| [**patientsIdDelete()**](PatientsApi.md#patientsIdDelete) | **DELETE** /patients/{id} | Delete some patient |
| [**patientsIdGet()**](PatientsApi.md#patientsIdGet) | **GET** /patients/{id} | Get information about some patient |
| [**patientsIdInstancesGet()**](PatientsApi.md#patientsIdInstancesGet) | **GET** /patients/{id}/instances | Get child instances |
| [**patientsIdInstancesTagsGet()**](PatientsApi.md#patientsIdInstancesTagsGet) | **GET** /patients/{id}/instances-tags | Get tags of instances |
| [**patientsIdLabelsGet()**](PatientsApi.md#patientsIdLabelsGet) | **GET** /patients/{id}/labels | List labels |
| [**patientsIdLabelsLabelDelete()**](PatientsApi.md#patientsIdLabelsLabelDelete) | **DELETE** /patients/{id}/labels/{label} | Remove label |
| [**patientsIdLabelsLabelGet()**](PatientsApi.md#patientsIdLabelsLabelGet) | **GET** /patients/{id}/labels/{label} | Test label |
| [**patientsIdLabelsLabelPut()**](PatientsApi.md#patientsIdLabelsLabelPut) | **PUT** /patients/{id}/labels/{label} | Add label |
| [**patientsIdMediaGet()**](PatientsApi.md#patientsIdMediaGet) | **GET** /patients/{id}/media | Create DICOMDIR media |
| [**patientsIdMediaPost()**](PatientsApi.md#patientsIdMediaPost) | **POST** /patients/{id}/media | Create DICOMDIR media |
| [**patientsIdMetadataGet()**](PatientsApi.md#patientsIdMetadataGet) | **GET** /patients/{id}/metadata | List metadata |
| [**patientsIdMetadataNameDelete()**](PatientsApi.md#patientsIdMetadataNameDelete) | **DELETE** /patients/{id}/metadata/{name} | Delete metadata |
| [**patientsIdMetadataNameGet()**](PatientsApi.md#patientsIdMetadataNameGet) | **GET** /patients/{id}/metadata/{name} | Get metadata |
| [**patientsIdMetadataNamePut()**](PatientsApi.md#patientsIdMetadataNamePut) | **PUT** /patients/{id}/metadata/{name} | Set metadata |
| [**patientsIdModifyPost()**](PatientsApi.md#patientsIdModifyPost) | **POST** /patients/{id}/modify | Modify patient |
| [**patientsIdModuleGet()**](PatientsApi.md#patientsIdModuleGet) | **GET** /patients/{id}/module | Get patient module |
| [**patientsIdProtectedGet()**](PatientsApi.md#patientsIdProtectedGet) | **GET** /patients/{id}/protected | Is the patient protected against recycling? |
| [**patientsIdProtectedPut()**](PatientsApi.md#patientsIdProtectedPut) | **PUT** /patients/{id}/protected | Protect/Unprotect a patient against recycling |
| [**patientsIdReconstructPost()**](PatientsApi.md#patientsIdReconstructPost) | **POST** /patients/{id}/reconstruct | Reconstruct tags &amp; optionally files of patient |
| [**patientsIdSeriesGet()**](PatientsApi.md#patientsIdSeriesGet) | **GET** /patients/{id}/series | Get child series |
| [**patientsIdSharedTagsGet()**](PatientsApi.md#patientsIdSharedTagsGet) | **GET** /patients/{id}/shared-tags | Get shared tags |
| [**patientsIdStatisticsGet()**](PatientsApi.md#patientsIdStatisticsGet) | **GET** /patients/{id}/statistics | Get patient statistics |
| [**patientsIdStudiesGet()**](PatientsApi.md#patientsIdStudiesGet) | **GET** /patients/{id}/studies | Get child studies |


## `patientsGet()`

```php
patientsGet($expand, $full, $limit, $requestedTags, $short, $since): mixed
```

List the available patients

List the Orthanc identifiers of all the available DICOM patients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expand = 'expand_example'; // string | If present, retrieve detailed information about the individual patients
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$limit = 3.4; // float | Limit the number of results
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$since = 3.4; // float | Show only the resources since the provided index

try {
    $result = $apiInstance->patientsGet($expand, $full, $limit, $requestedTags, $short, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| If present, retrieve detailed information about the individual patients | [optional] |
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

## `patientsIdAnonymizePost()`

```php
patientsIdAnonymizePost($id, $patientsIdAnonymizePostRequest): \Aurabx\OrthancPHP\Model\ModalitiesIdMovePost200Response
```

Anonymize patient

Start a job that will anonymize all the DICOM instances within the patient whose identifier is provided in the URL. The modified DICOM instances will be stored into a brand new patient, whose Orthanc identifiers will be returned by the job. https://orthanc.uclouvain.be/book/users/anonymization.html#anonymization-of-patients-studies-or-series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$patientsIdAnonymizePostRequest = new \Aurabx\OrthancPHP\Model\PatientsIdAnonymizePostRequest(); // \Aurabx\OrthancPHP\Model\PatientsIdAnonymizePostRequest

try {
    $result = $apiInstance->patientsIdAnonymizePost($id, $patientsIdAnonymizePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAnonymizePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdArchiveGet()`

```php
patientsIdArchiveGet($id, $filename, $transcode): mixed
```

Create ZIP archive

Synchronously create a ZIP archive containing the DICOM patient whose Orthanc identifier is provided in the URL. This flavor is synchronous, which might *not* be desirable to archive large amount of data, as it might lead to network timeouts. Prefer the asynchronous version using `POST` method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$filename = 'filename_example'; // string | Filename to set in the \"Content-Disposition\" HTTP header (including file extension)
$transcode = 'transcode_example'; // string | If present, the DICOM files in the archive will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html

try {
    $result = $apiInstance->patientsIdArchiveGet($id, $filename, $transcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdArchiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdArchivePost()`

```php
patientsIdArchivePost($id, $patientsIdArchivePostRequest): \Aurabx\OrthancPHP\Model\PatientsIdArchivePost200Response
```

Create ZIP archive

Create a ZIP archive containing the DICOM patient whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$patientsIdArchivePostRequest = new \Aurabx\OrthancPHP\Model\PatientsIdArchivePostRequest(); // \Aurabx\OrthancPHP\Model\PatientsIdArchivePostRequest

try {
    $result = $apiInstance->patientsIdArchivePost($id, $patientsIdArchivePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdArchivePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsGet()`

```php
patientsIdAttachmentsGet($id, $full): mixed
```

List attachments

Get the list of attachments that are associated with the given patient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$full = 'full_example'; // string | If present, retrieve the attachments list and their numerical ids

try {
    $result = $apiInstance->patientsIdAttachmentsGet($id, $full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNameCompressPost()`

```php
patientsIdAttachmentsNameCompressPost($id, $name)
```

Compress attachment

Change the compression scheme that is used to store an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)

try {
    $apiInstance->patientsIdAttachmentsNameCompressPost($id, $name);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNameCompressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNameCompressedDataGet()`

```php
patientsIdAttachmentsNameCompressedDataGet($id, $name, $ifNoneMatch): mixed
```

Get attachment (no decompression)

Get the (binary) content of one attachment associated with the given patient. The attachment will not be decompressed if `StorageCompression` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the metadata, to check if its content has changed

try {
    $result = $apiInstance->patientsIdAttachmentsNameCompressedDataGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNameCompressedDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNameCompressedMd5Get()`

```php
patientsIdAttachmentsNameCompressedMd5Get($id, $name, $ifNoneMatch): mixed
```

Get MD5 of attachment on disk

Get the MD5 hash of one attachment associated with the given patient, as stored on the disk. This is different from `.../md5` iff `EnableStorage` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->patientsIdAttachmentsNameCompressedMd5Get($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNameCompressedMd5Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNameCompressedSizeGet()`

```php
patientsIdAttachmentsNameCompressedSizeGet($id, $name, $ifNoneMatch): mixed
```

Get size of attachment on disk

Get the size of one attachment associated with the given patient, as stored on the disk. This is different from `.../size` iff `EnableStorage` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->patientsIdAttachmentsNameCompressedSizeGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNameCompressedSizeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNameDataGet()`

```php
patientsIdAttachmentsNameDataGet($id, $name, $ifNoneMatch): mixed
```

Get attachment

Get the (binary) content of one attachment associated with the given patient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the metadata, to check if its content has changed

try {
    $result = $apiInstance->patientsIdAttachmentsNameDataGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNameDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNameDelete()`

```php
patientsIdAttachmentsNameDelete($id, $name, $ifMatch)
```

Delete attachment

Delete an attachment associated with the given DICOM patient. This call will fail if trying to delete a system attachment (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the attachment, to check if its content has not changed and can be deleted. This header is mandatory if `CheckRevisions` option is `true`.

try {
    $apiInstance->patientsIdAttachmentsNameDelete($id, $name, $ifMatch);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNameInfoGet()`

```php
patientsIdAttachmentsNameInfoGet($id, $name, $ifNoneMatch): mixed
```

Get info about the attachment

Get all the information about the attachment associated with the given patient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->patientsIdAttachmentsNameInfoGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNameInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNameIsCompressedGet()`

```php
patientsIdAttachmentsNameIsCompressedGet($id, $name, $ifNoneMatch): mixed
```

Is attachment compressed?

Test whether the attachment has been stored as a compressed file on the disk.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->patientsIdAttachmentsNameIsCompressedGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNameIsCompressedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNameMd5Get()`

```php
patientsIdAttachmentsNameMd5Get($id, $name, $ifNoneMatch): mixed
```

Get MD5 of attachment

Get the MD5 hash of one attachment associated with the given patient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->patientsIdAttachmentsNameMd5Get($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNameMd5Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNamePut()`

```php
patientsIdAttachmentsNamePut($id, $name, $ifMatch, $body): mixed
```

Set attachment

Attach a file to the given DICOM patient. This call will fail if trying to modify a system attachment (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the attachment, if this is not the first time this attachment is set.
$body = NULL; // mixed

try {
    $result = $apiInstance->patientsIdAttachmentsNamePut($id, $name, $ifMatch, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNameSizeGet()`

```php
patientsIdAttachmentsNameSizeGet($id, $name, $ifNoneMatch): mixed
```

Get size of attachment

Get the size of one attachment associated with the given patient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->patientsIdAttachmentsNameSizeGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNameSizeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNameUncompressPost()`

```php
patientsIdAttachmentsNameUncompressPost($id, $name)
```

Uncompress attachment

Change the compression scheme that is used to store an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)

try {
    $apiInstance->patientsIdAttachmentsNameUncompressPost($id, $name);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNameUncompressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdAttachmentsNameVerifyMd5Post()`

```php
patientsIdAttachmentsNameVerifyMd5Post($id, $name): mixed
```

Verify attachment

Verify that the attachment is not corrupted, by validating its MD5 hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)

try {
    $result = $apiInstance->patientsIdAttachmentsNameVerifyMd5Post($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdAttachmentsNameVerifyMd5Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdDelete()`

```php
patientsIdDelete($id)
```

Delete some patient

Delete the DICOM patient whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest

try {
    $apiInstance->patientsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |

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

## `patientsIdGet()`

```php
patientsIdGet($id, $full, $requestedTags, $short): mixed
```

Get information about some patient

Get detailed information about the DICOM patient whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->patientsIdGet($id, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdInstancesGet()`

```php
patientsIdInstancesGet($id, $expand, $full, $requestedTags, $short): mixed
```

Get child instances

Get detailed information about the child instances of the DICOM patient whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$expand = 'expand_example'; // string | If false or missing, only retrieve the list of child instances
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->patientsIdInstancesGet($id, $expand, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdInstancesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdInstancesTagsGet()`

```php
patientsIdInstancesTagsGet($id, $ignoreLength, $short, $simplify): mixed
```

Get tags of instances

Get the tags of all the child instances of the DICOM patient whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$ignoreLength = array('ignoreLength_example'); // string[] | Also include the DICOM tags that are provided in this list, even if their associated value is long
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->patientsIdInstancesTagsGet($id, $ignoreLength, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdInstancesTagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdLabelsGet()`

```php
patientsIdLabelsGet($id): mixed
```

List labels

Get the labels that are associated with the given patient (new in Orthanc 1.12.0)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest

try {
    $result = $apiInstance->patientsIdLabelsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdLabelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |

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

## `patientsIdLabelsLabelDelete()`

```php
patientsIdLabelsLabelDelete($id, $label)
```

Remove label

Remove a label associated with a patient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$label = 'label_example'; // string | The label to be removed

try {
    $apiInstance->patientsIdLabelsLabelDelete($id, $label);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdLabelsLabelDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdLabelsLabelGet()`

```php
patientsIdLabelsLabelGet($id, $label): mixed
```

Test label

Test whether the patient is associated with the given label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$label = 'label_example'; // string | The label of interest

try {
    $result = $apiInstance->patientsIdLabelsLabelGet($id, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdLabelsLabelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdLabelsLabelPut()`

```php
patientsIdLabelsLabelPut($id, $label)
```

Add label

Associate a label with a patient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$label = 'label_example'; // string | The label to be added

try {
    $apiInstance->patientsIdLabelsLabelPut($id, $label);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdLabelsLabelPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdMediaGet()`

```php
patientsIdMediaGet($id, $extended, $filename, $transcode): mixed
```

Create DICOMDIR media

Synchronously create a DICOMDIR media containing the DICOM patient whose Orthanc identifier is provided in the URL. This flavor is synchronous, which might *not* be desirable to archive large amount of data, as it might lead to network timeouts. Prefer the asynchronous version using `POST` method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$extended = 'extended_example'; // string | If present, will include additional tags such as `SeriesDescription`, leading to a so-called *extended DICOMDIR*
$filename = 'filename_example'; // string | Filename to set in the \"Content-Disposition\" HTTP header (including file extension)
$transcode = 'transcode_example'; // string | If present, the DICOM files in the archive will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html

try {
    $result = $apiInstance->patientsIdMediaGet($id, $extended, $filename, $transcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdMediaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdMediaPost()`

```php
patientsIdMediaPost($id, $patientsIdMediaPostRequest): \Aurabx\OrthancPHP\Model\PatientsIdArchivePost200Response
```

Create DICOMDIR media

Create a DICOMDIR media containing the DICOM patient whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$patientsIdMediaPostRequest = new \Aurabx\OrthancPHP\Model\PatientsIdMediaPostRequest(); // \Aurabx\OrthancPHP\Model\PatientsIdMediaPostRequest

try {
    $result = $apiInstance->patientsIdMediaPost($id, $patientsIdMediaPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdMediaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdMetadataGet()`

```php
patientsIdMetadataGet($id, $expand, $numeric): mixed
```

List metadata

Get the list of metadata that are associated with the given patient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$expand = 'expand_example'; // string | If present, also retrieve the value of the individual metadata
$numeric = 'numeric_example'; // string | If present, use the numeric identifier of the metadata instead of its symbolic name

try {
    $result = $apiInstance->patientsIdMetadataGet($id, $expand, $numeric);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdMetadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdMetadataNameDelete()`

```php
patientsIdMetadataNameDelete($id, $name, $ifMatch)
```

Delete metadata

Delete some metadata associated with the given DICOM patient. This call will fail if trying to delete a system metadata (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the metadata, or its index (cf. `UserMetadata` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the metadata, to check if its content has not changed and can be deleted. This header is mandatory if `CheckRevisions` option is `true`.

try {
    $apiInstance->patientsIdMetadataNameDelete($id, $name, $ifMatch);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdMetadataNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdMetadataNameGet()`

```php
patientsIdMetadataNameGet($id, $name, $ifNoneMatch): mixed
```

Get metadata

Get the value of a metadata that is associated with the given patient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the metadata, or its index (cf. `UserMetadata` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the metadata, to check if its content has changed

try {
    $result = $apiInstance->patientsIdMetadataNameGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdMetadataNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdMetadataNamePut()`

```php
patientsIdMetadataNamePut($id, $name, $ifMatch, $body)
```

Set metadata

Set the value of some metadata in the given DICOM patient. This call will fail if trying to modify a system metadata (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the metadata, or its index (cf. `UserMetadata` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the metadata, if this is not the first time this metadata is set.
$body = NULL; // mixed

try {
    $apiInstance->patientsIdMetadataNamePut($id, $name, $ifMatch, $body);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdMetadataNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdModifyPost()`

```php
patientsIdModifyPost($id, $patientsIdModifyPostRequest): \Aurabx\OrthancPHP\Model\ModalitiesIdMovePost200Response
```

Modify patient

Start a job that will modify all the DICOM instances within the patient whose identifier is provided in the URL. The modified DICOM instances will be stored into a brand new patient, whose Orthanc identifiers will be returned by the job. https://orthanc.uclouvain.be/book/users/anonymization.html#modification-of-studies-or-series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$patientsIdModifyPostRequest = new \Aurabx\OrthancPHP\Model\PatientsIdModifyPostRequest(); // \Aurabx\OrthancPHP\Model\PatientsIdModifyPostRequest

try {
    $result = $apiInstance->patientsIdModifyPost($id, $patientsIdModifyPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdModifyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdModuleGet()`

```php
patientsIdModuleGet($id, $ignoreLength, $short, $simplify): mixed
```

Get patient module

Get the patient module of the DICOM patient whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$ignoreLength = array('ignoreLength_example'); // string[] | Also include the DICOM tags that are provided in this list, even if their associated value is long
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->patientsIdModuleGet($id, $ignoreLength, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdModuleGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdProtectedGet()`

```php
patientsIdProtectedGet($id): mixed
```

Is the patient protected against recycling?

Is the patient protected against recycling?

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest

try {
    $result = $apiInstance->patientsIdProtectedGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdProtectedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |

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

## `patientsIdProtectedPut()`

```php
patientsIdProtectedPut($id)
```

Protect/Unprotect a patient against recycling

Protects a patient by sending `1` or `true` in the payload request. Unprotects a patient by sending `0` or `false` in the payload requests. More info: https://orthanc.uclouvain.be/book/faq/features.html#recycling-protection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest

try {
    $apiInstance->patientsIdProtectedPut($id);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdProtectedPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |

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

## `patientsIdReconstructPost()`

```php
patientsIdReconstructPost($id, $instancesIdReconstructPostRequest)
```

Reconstruct tags & optionally files of patient

Reconstruct the main DICOM tags in DB of the patient whose Orthanc identifier is provided in the URL. This is useful if child studies/series/instances have inconsistent values for higher-level tags, in order to force Orthanc to use the value from the resource of interest. Beware that this is a time-consuming operation, as all the children DICOM instances will be parsed again, and the Orthanc index will be updated accordingly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$instancesIdReconstructPostRequest = new \Aurabx\OrthancPHP\Model\InstancesIdReconstructPostRequest(); // \Aurabx\OrthancPHP\Model\InstancesIdReconstructPostRequest

try {
    $apiInstance->patientsIdReconstructPost($id, $instancesIdReconstructPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdReconstructPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdSeriesGet()`

```php
patientsIdSeriesGet($id, $expand, $full, $requestedTags, $short): mixed
```

Get child series

Get detailed information about the child series of the DICOM patient whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$expand = 'expand_example'; // string | If false or missing, only retrieve the list of child series
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->patientsIdSeriesGet($id, $expand, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdSeriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdSharedTagsGet()`

```php
patientsIdSharedTagsGet($id, $short, $simplify): mixed
```

Get shared tags

Extract the DICOM tags whose value is constant across all the child instances of the DICOM patient whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->patientsIdSharedTagsGet($id, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdSharedTagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
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

## `patientsIdStatisticsGet()`

```php
patientsIdStatisticsGet($id): \Aurabx\OrthancPHP\Model\PatientsIdStatisticsGet200Response
```

Get patient statistics

Get statistics about the given patient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest

try {
    $result = $apiInstance->patientsIdStatisticsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |

### Return type

[**\Aurabx\OrthancPHP\Model\PatientsIdStatisticsGet200Response**](../Model/PatientsIdStatisticsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patientsIdStudiesGet()`

```php
patientsIdStudiesGet($id, $expand, $full, $requestedTags, $short): mixed
```

Get child studies

Get detailed information about the child studies of the DICOM patient whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$expand = 'expand_example'; // string | If false or missing, only retrieve the list of child studies
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->patientsIdStudiesGet($id, $expand, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->patientsIdStudiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
| **expand** | **string**| If false or missing, only retrieve the list of child studies | [optional] |
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
