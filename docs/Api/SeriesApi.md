# Aurabx\OrthancPHP\SeriesApi

All URIs are relative to https://orthanc.uclouvain.be/demo, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**seriesGet()**](SeriesApi.md#seriesGet) | **GET** /series | List the available series |
| [**seriesIdAnonymizePost()**](SeriesApi.md#seriesIdAnonymizePost) | **POST** /series/{id}/anonymize | Anonymize series |
| [**seriesIdArchiveGet()**](SeriesApi.md#seriesIdArchiveGet) | **GET** /series/{id}/archive | Create ZIP archive |
| [**seriesIdArchivePost()**](SeriesApi.md#seriesIdArchivePost) | **POST** /series/{id}/archive | Create ZIP archive |
| [**seriesIdAttachmentsGet()**](SeriesApi.md#seriesIdAttachmentsGet) | **GET** /series/{id}/attachments | List attachments |
| [**seriesIdAttachmentsNameCompressPost()**](SeriesApi.md#seriesIdAttachmentsNameCompressPost) | **POST** /series/{id}/attachments/{name}/compress | Compress attachment |
| [**seriesIdAttachmentsNameCompressedDataGet()**](SeriesApi.md#seriesIdAttachmentsNameCompressedDataGet) | **GET** /series/{id}/attachments/{name}/compressed-data | Get attachment (no decompression) |
| [**seriesIdAttachmentsNameCompressedMd5Get()**](SeriesApi.md#seriesIdAttachmentsNameCompressedMd5Get) | **GET** /series/{id}/attachments/{name}/compressed-md5 | Get MD5 of attachment on disk |
| [**seriesIdAttachmentsNameCompressedSizeGet()**](SeriesApi.md#seriesIdAttachmentsNameCompressedSizeGet) | **GET** /series/{id}/attachments/{name}/compressed-size | Get size of attachment on disk |
| [**seriesIdAttachmentsNameDataGet()**](SeriesApi.md#seriesIdAttachmentsNameDataGet) | **GET** /series/{id}/attachments/{name}/data | Get attachment |
| [**seriesIdAttachmentsNameDelete()**](SeriesApi.md#seriesIdAttachmentsNameDelete) | **DELETE** /series/{id}/attachments/{name} | Delete attachment |
| [**seriesIdAttachmentsNameInfoGet()**](SeriesApi.md#seriesIdAttachmentsNameInfoGet) | **GET** /series/{id}/attachments/{name}/info | Get info about the attachment |
| [**seriesIdAttachmentsNameIsCompressedGet()**](SeriesApi.md#seriesIdAttachmentsNameIsCompressedGet) | **GET** /series/{id}/attachments/{name}/is-compressed | Is attachment compressed? |
| [**seriesIdAttachmentsNameMd5Get()**](SeriesApi.md#seriesIdAttachmentsNameMd5Get) | **GET** /series/{id}/attachments/{name}/md5 | Get MD5 of attachment |
| [**seriesIdAttachmentsNamePut()**](SeriesApi.md#seriesIdAttachmentsNamePut) | **PUT** /series/{id}/attachments/{name} | Set attachment |
| [**seriesIdAttachmentsNameSizeGet()**](SeriesApi.md#seriesIdAttachmentsNameSizeGet) | **GET** /series/{id}/attachments/{name}/size | Get size of attachment |
| [**seriesIdAttachmentsNameUncompressPost()**](SeriesApi.md#seriesIdAttachmentsNameUncompressPost) | **POST** /series/{id}/attachments/{name}/uncompress | Uncompress attachment |
| [**seriesIdAttachmentsNameVerifyMd5Post()**](SeriesApi.md#seriesIdAttachmentsNameVerifyMd5Post) | **POST** /series/{id}/attachments/{name}/verify-md5 | Verify attachment |
| [**seriesIdDelete()**](SeriesApi.md#seriesIdDelete) | **DELETE** /series/{id} | Delete some series |
| [**seriesIdGet()**](SeriesApi.md#seriesIdGet) | **GET** /series/{id} | Get information about some series |
| [**seriesIdInstancesGet()**](SeriesApi.md#seriesIdInstancesGet) | **GET** /series/{id}/instances | Get child instances |
| [**seriesIdInstancesTagsGet()**](SeriesApi.md#seriesIdInstancesTagsGet) | **GET** /series/{id}/instances-tags | Get tags of instances |
| [**seriesIdLabelsGet()**](SeriesApi.md#seriesIdLabelsGet) | **GET** /series/{id}/labels | List labels |
| [**seriesIdLabelsLabelDelete()**](SeriesApi.md#seriesIdLabelsLabelDelete) | **DELETE** /series/{id}/labels/{label} | Remove label |
| [**seriesIdLabelsLabelGet()**](SeriesApi.md#seriesIdLabelsLabelGet) | **GET** /series/{id}/labels/{label} | Test label |
| [**seriesIdLabelsLabelPut()**](SeriesApi.md#seriesIdLabelsLabelPut) | **PUT** /series/{id}/labels/{label} | Add label |
| [**seriesIdMediaGet()**](SeriesApi.md#seriesIdMediaGet) | **GET** /series/{id}/media | Create DICOMDIR media |
| [**seriesIdMediaPost()**](SeriesApi.md#seriesIdMediaPost) | **POST** /series/{id}/media | Create DICOMDIR media |
| [**seriesIdMetadataGet()**](SeriesApi.md#seriesIdMetadataGet) | **GET** /series/{id}/metadata | List metadata |
| [**seriesIdMetadataNameDelete()**](SeriesApi.md#seriesIdMetadataNameDelete) | **DELETE** /series/{id}/metadata/{name} | Delete metadata |
| [**seriesIdMetadataNameGet()**](SeriesApi.md#seriesIdMetadataNameGet) | **GET** /series/{id}/metadata/{name} | Get metadata |
| [**seriesIdMetadataNamePut()**](SeriesApi.md#seriesIdMetadataNamePut) | **PUT** /series/{id}/metadata/{name} | Set metadata |
| [**seriesIdModifyPost()**](SeriesApi.md#seriesIdModifyPost) | **POST** /series/{id}/modify | Modify series |
| [**seriesIdModuleGet()**](SeriesApi.md#seriesIdModuleGet) | **GET** /series/{id}/module | Get series module |
| [**seriesIdNumpyGet()**](SeriesApi.md#seriesIdNumpyGet) | **GET** /series/{id}/numpy | Decode series for numpy |
| [**seriesIdOrderedSlicesGet()**](SeriesApi.md#seriesIdOrderedSlicesGet) | **GET** /series/{id}/ordered-slices | Order the slices |
| [**seriesIdPatientGet()**](SeriesApi.md#seriesIdPatientGet) | **GET** /series/{id}/patient | Get parent patient |
| [**seriesIdReconstructPost()**](SeriesApi.md#seriesIdReconstructPost) | **POST** /series/{id}/reconstruct | Reconstruct tags &amp; optionally files of series |
| [**seriesIdSharedTagsGet()**](SeriesApi.md#seriesIdSharedTagsGet) | **GET** /series/{id}/shared-tags | Get shared tags |
| [**seriesIdStatisticsGet()**](SeriesApi.md#seriesIdStatisticsGet) | **GET** /series/{id}/statistics | Get series statistics |
| [**seriesIdStudyGet()**](SeriesApi.md#seriesIdStudyGet) | **GET** /series/{id}/study | Get parent study |


## `seriesGet()`

```php
seriesGet($expand, $full, $limit, $requestedTags, $short, $since): mixed
```

List the available series

List the Orthanc identifiers of all the available DICOM series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expand = 'expand_example'; // string | If present, retrieve detailed information about the individual series
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$limit = 3.4; // float | Limit the number of results
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$since = 3.4; // float | Show only the resources since the provided index

try {
    $result = $apiInstance->seriesGet($expand, $full, $limit, $requestedTags, $short, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| If present, retrieve detailed information about the individual series | [optional] |
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

## `seriesIdAnonymizePost()`

```php
seriesIdAnonymizePost($id, $patientsIdAnonymizePostRequest): \Aurabx\OrthancPHP\Model\ModalitiesIdMovePost200Response
```

Anonymize series

Start a job that will anonymize all the DICOM instances within the series whose identifier is provided in the URL. The modified DICOM instances will be stored into a brand new series, whose Orthanc identifiers will be returned by the job. https://orthanc.uclouvain.be/book/users/anonymization.html#anonymization-of-patients-studies-or-series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$patientsIdAnonymizePostRequest = new \Aurabx\OrthancPHP\Model\PatientsIdAnonymizePostRequest(); // \Aurabx\OrthancPHP\Model\PatientsIdAnonymizePostRequest

try {
    $result = $apiInstance->seriesIdAnonymizePost($id, $patientsIdAnonymizePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAnonymizePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdArchiveGet()`

```php
seriesIdArchiveGet($id, $filename, $transcode): mixed
```

Create ZIP archive

Synchronously create a ZIP archive containing the DICOM series whose Orthanc identifier is provided in the URL. This flavor is synchronous, which might *not* be desirable to archive large amount of data, as it might lead to network timeouts. Prefer the asynchronous version using `POST` method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$filename = 'filename_example'; // string | Filename to set in the \"Content-Disposition\" HTTP header (including file extension)
$transcode = 'transcode_example'; // string | If present, the DICOM files in the archive will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html

try {
    $result = $apiInstance->seriesIdArchiveGet($id, $filename, $transcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdArchiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdArchivePost()`

```php
seriesIdArchivePost($id, $patientsIdArchivePostRequest): \Aurabx\OrthancPHP\Model\PatientsIdArchivePost200Response
```

Create ZIP archive

Create a ZIP archive containing the DICOM series whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$patientsIdArchivePostRequest = new \Aurabx\OrthancPHP\Model\PatientsIdArchivePostRequest(); // \Aurabx\OrthancPHP\Model\PatientsIdArchivePostRequest

try {
    $result = $apiInstance->seriesIdArchivePost($id, $patientsIdArchivePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdArchivePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsGet()`

```php
seriesIdAttachmentsGet($id, $full): mixed
```

List attachments

Get the list of attachments that are associated with the given series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$full = 'full_example'; // string | If present, retrieve the attachments list and their numerical ids

try {
    $result = $apiInstance->seriesIdAttachmentsGet($id, $full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNameCompressPost()`

```php
seriesIdAttachmentsNameCompressPost($id, $name)
```

Compress attachment

Change the compression scheme that is used to store an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)

try {
    $apiInstance->seriesIdAttachmentsNameCompressPost($id, $name);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNameCompressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNameCompressedDataGet()`

```php
seriesIdAttachmentsNameCompressedDataGet($id, $name, $ifNoneMatch): mixed
```

Get attachment (no decompression)

Get the (binary) content of one attachment associated with the given series. The attachment will not be decompressed if `StorageCompression` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the metadata, to check if its content has changed

try {
    $result = $apiInstance->seriesIdAttachmentsNameCompressedDataGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNameCompressedDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNameCompressedMd5Get()`

```php
seriesIdAttachmentsNameCompressedMd5Get($id, $name, $ifNoneMatch): mixed
```

Get MD5 of attachment on disk

Get the MD5 hash of one attachment associated with the given series, as stored on the disk. This is different from `.../md5` iff `EnableStorage` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->seriesIdAttachmentsNameCompressedMd5Get($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNameCompressedMd5Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNameCompressedSizeGet()`

```php
seriesIdAttachmentsNameCompressedSizeGet($id, $name, $ifNoneMatch): mixed
```

Get size of attachment on disk

Get the size of one attachment associated with the given series, as stored on the disk. This is different from `.../size` iff `EnableStorage` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->seriesIdAttachmentsNameCompressedSizeGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNameCompressedSizeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNameDataGet()`

```php
seriesIdAttachmentsNameDataGet($id, $name, $ifNoneMatch): mixed
```

Get attachment

Get the (binary) content of one attachment associated with the given series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the metadata, to check if its content has changed

try {
    $result = $apiInstance->seriesIdAttachmentsNameDataGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNameDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNameDelete()`

```php
seriesIdAttachmentsNameDelete($id, $name, $ifMatch)
```

Delete attachment

Delete an attachment associated with the given DICOM series. This call will fail if trying to delete a system attachment (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the attachment, to check if its content has not changed and can be deleted. This header is mandatory if `CheckRevisions` option is `true`.

try {
    $apiInstance->seriesIdAttachmentsNameDelete($id, $name, $ifMatch);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNameInfoGet()`

```php
seriesIdAttachmentsNameInfoGet($id, $name, $ifNoneMatch): mixed
```

Get info about the attachment

Get all the information about the attachment associated with the given series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->seriesIdAttachmentsNameInfoGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNameInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNameIsCompressedGet()`

```php
seriesIdAttachmentsNameIsCompressedGet($id, $name, $ifNoneMatch): mixed
```

Is attachment compressed?

Test whether the attachment has been stored as a compressed file on the disk.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->seriesIdAttachmentsNameIsCompressedGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNameIsCompressedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNameMd5Get()`

```php
seriesIdAttachmentsNameMd5Get($id, $name, $ifNoneMatch): mixed
```

Get MD5 of attachment

Get the MD5 hash of one attachment associated with the given series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->seriesIdAttachmentsNameMd5Get($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNameMd5Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNamePut()`

```php
seriesIdAttachmentsNamePut($id, $name, $ifMatch, $body): mixed
```

Set attachment

Attach a file to the given DICOM series. This call will fail if trying to modify a system attachment (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the attachment, if this is not the first time this attachment is set.
$body = NULL; // mixed

try {
    $result = $apiInstance->seriesIdAttachmentsNamePut($id, $name, $ifMatch, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNameSizeGet()`

```php
seriesIdAttachmentsNameSizeGet($id, $name, $ifNoneMatch): mixed
```

Get size of attachment

Get the size of one attachment associated with the given series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->seriesIdAttachmentsNameSizeGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNameSizeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNameUncompressPost()`

```php
seriesIdAttachmentsNameUncompressPost($id, $name)
```

Uncompress attachment

Change the compression scheme that is used to store an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)

try {
    $apiInstance->seriesIdAttachmentsNameUncompressPost($id, $name);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNameUncompressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdAttachmentsNameVerifyMd5Post()`

```php
seriesIdAttachmentsNameVerifyMd5Post($id, $name): mixed
```

Verify attachment

Verify that the attachment is not corrupted, by validating its MD5 hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)

try {
    $result = $apiInstance->seriesIdAttachmentsNameVerifyMd5Post($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdAttachmentsNameVerifyMd5Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdDelete()`

```php
seriesIdDelete($id)
```

Delete some series

Delete the DICOM series whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest

try {
    $apiInstance->seriesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |

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

## `seriesIdGet()`

```php
seriesIdGet($id, $full, $requestedTags, $short): mixed
```

Get information about some series

Get detailed information about the DICOM series whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->seriesIdGet($id, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdInstancesGet()`

```php
seriesIdInstancesGet($id, $expand, $full, $requestedTags, $short): mixed
```

Get child instances

Get detailed information about the child instances of the DICOM series whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$expand = 'expand_example'; // string | If false or missing, only retrieve the list of child instances
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->seriesIdInstancesGet($id, $expand, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdInstancesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdInstancesTagsGet()`

```php
seriesIdInstancesTagsGet($id, $ignoreLength, $short, $simplify): mixed
```

Get tags of instances

Get the tags of all the child instances of the DICOM series whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$ignoreLength = array('ignoreLength_example'); // string[] | Also include the DICOM tags that are provided in this list, even if their associated value is long
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->seriesIdInstancesTagsGet($id, $ignoreLength, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdInstancesTagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdLabelsGet()`

```php
seriesIdLabelsGet($id): mixed
```

List labels

Get the labels that are associated with the given series (new in Orthanc 1.12.0)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest

try {
    $result = $apiInstance->seriesIdLabelsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdLabelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |

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

## `seriesIdLabelsLabelDelete()`

```php
seriesIdLabelsLabelDelete($id, $label)
```

Remove label

Remove a label associated with a series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$label = 'label_example'; // string | The label to be removed

try {
    $apiInstance->seriesIdLabelsLabelDelete($id, $label);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdLabelsLabelDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdLabelsLabelGet()`

```php
seriesIdLabelsLabelGet($id, $label): mixed
```

Test label

Test whether the series is associated with the given label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$label = 'label_example'; // string | The label of interest

try {
    $result = $apiInstance->seriesIdLabelsLabelGet($id, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdLabelsLabelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdLabelsLabelPut()`

```php
seriesIdLabelsLabelPut($id, $label)
```

Add label

Associate a label with a series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$label = 'label_example'; // string | The label to be added

try {
    $apiInstance->seriesIdLabelsLabelPut($id, $label);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdLabelsLabelPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdMediaGet()`

```php
seriesIdMediaGet($id, $extended, $filename, $transcode): mixed
```

Create DICOMDIR media

Synchronously create a DICOMDIR media containing the DICOM series whose Orthanc identifier is provided in the URL. This flavor is synchronous, which might *not* be desirable to archive large amount of data, as it might lead to network timeouts. Prefer the asynchronous version using `POST` method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$extended = 'extended_example'; // string | If present, will include additional tags such as `SeriesDescription`, leading to a so-called *extended DICOMDIR*
$filename = 'filename_example'; // string | Filename to set in the \"Content-Disposition\" HTTP header (including file extension)
$transcode = 'transcode_example'; // string | If present, the DICOM files in the archive will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html

try {
    $result = $apiInstance->seriesIdMediaGet($id, $extended, $filename, $transcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdMediaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdMediaPost()`

```php
seriesIdMediaPost($id, $patientsIdMediaPostRequest): \Aurabx\OrthancPHP\Model\PatientsIdArchivePost200Response
```

Create DICOMDIR media

Create a DICOMDIR media containing the DICOM series whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$patientsIdMediaPostRequest = new \Aurabx\OrthancPHP\Model\PatientsIdMediaPostRequest(); // \Aurabx\OrthancPHP\Model\PatientsIdMediaPostRequest

try {
    $result = $apiInstance->seriesIdMediaPost($id, $patientsIdMediaPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdMediaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdMetadataGet()`

```php
seriesIdMetadataGet($id, $expand, $numeric): mixed
```

List metadata

Get the list of metadata that are associated with the given series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$expand = 'expand_example'; // string | If present, also retrieve the value of the individual metadata
$numeric = 'numeric_example'; // string | If present, use the numeric identifier of the metadata instead of its symbolic name

try {
    $result = $apiInstance->seriesIdMetadataGet($id, $expand, $numeric);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdMetadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdMetadataNameDelete()`

```php
seriesIdMetadataNameDelete($id, $name, $ifMatch)
```

Delete metadata

Delete some metadata associated with the given DICOM series. This call will fail if trying to delete a system metadata (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the metadata, or its index (cf. `UserMetadata` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the metadata, to check if its content has not changed and can be deleted. This header is mandatory if `CheckRevisions` option is `true`.

try {
    $apiInstance->seriesIdMetadataNameDelete($id, $name, $ifMatch);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdMetadataNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdMetadataNameGet()`

```php
seriesIdMetadataNameGet($id, $name, $ifNoneMatch): mixed
```

Get metadata

Get the value of a metadata that is associated with the given series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the metadata, or its index (cf. `UserMetadata` configuration option)
$ifNoneMatch = 'ifNoneMatch_example'; // string | Optional revision of the metadata, to check if its content has changed

try {
    $result = $apiInstance->seriesIdMetadataNameGet($id, $name, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdMetadataNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdMetadataNamePut()`

```php
seriesIdMetadataNamePut($id, $name, $ifMatch, $body)
```

Set metadata

Set the value of some metadata in the given DICOM series. This call will fail if trying to modify a system metadata (i.e. whose index is < 1024).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the metadata, or its index (cf. `UserMetadata` configuration option)
$ifMatch = 'ifMatch_example'; // string | Revision of the metadata, if this is not the first time this metadata is set.
$body = NULL; // mixed

try {
    $apiInstance->seriesIdMetadataNamePut($id, $name, $ifMatch, $body);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdMetadataNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdModifyPost()`

```php
seriesIdModifyPost($id, $patientsIdModifyPostRequest): \Aurabx\OrthancPHP\Model\ModalitiesIdMovePost200Response
```

Modify series

Start a job that will modify all the DICOM instances within the series whose identifier is provided in the URL. The modified DICOM instances will be stored into a brand new series, whose Orthanc identifiers will be returned by the job. https://orthanc.uclouvain.be/book/users/anonymization.html#modification-of-studies-or-series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$patientsIdModifyPostRequest = new \Aurabx\OrthancPHP\Model\PatientsIdModifyPostRequest(); // \Aurabx\OrthancPHP\Model\PatientsIdModifyPostRequest

try {
    $result = $apiInstance->seriesIdModifyPost($id, $patientsIdModifyPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdModifyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdModuleGet()`

```php
seriesIdModuleGet($id, $ignoreLength, $short, $simplify): mixed
```

Get series module

Get the series module of the DICOM series whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$ignoreLength = array('ignoreLength_example'); // string[] | Also include the DICOM tags that are provided in this list, even if their associated value is long
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->seriesIdModuleGet($id, $ignoreLength, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdModuleGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdNumpyGet()`

```php
seriesIdNumpyGet($id, $compress, $rescale): mixed
```

Decode series for numpy

Decode the given DICOM series, for use with numpy in Python. The numpy array has 4 dimensions: (frame, height, width, color channel).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the DICOM resource of interest
$compress = True; // bool | Compress the file as `.npz`
$rescale = True; // bool | On grayscale images, apply the rescaling and return floating-point values

try {
    $result = $apiInstance->seriesIdNumpyGet($id, $compress, $rescale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdNumpyGet: ', $e->getMessage(), PHP_EOL;
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

## `seriesIdOrderedSlicesGet()`

```php
seriesIdOrderedSlicesGet($id): \Aurabx\OrthancPHP\Model\SeriesIdOrderedSlicesGet200Response
```

Order the slices

Sort the instances and frames (slices) of the DICOM series whose Orthanc identifier is provided in the URL. This URI is essentially used by the Orthanc Web viewer and by the Osimis Web viewer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest

try {
    $result = $apiInstance->seriesIdOrderedSlicesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdOrderedSlicesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |

### Return type

[**\Aurabx\OrthancPHP\Model\SeriesIdOrderedSlicesGet200Response**](../Model/SeriesIdOrderedSlicesGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `seriesIdPatientGet()`

```php
seriesIdPatientGet($id, $full, $requestedTags, $short): mixed
```

Get parent patient

Get detailed information about the parent patient of the DICOM series whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->seriesIdPatientGet($id, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdPatientGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdReconstructPost()`

```php
seriesIdReconstructPost($id, $instancesIdReconstructPostRequest)
```

Reconstruct tags & optionally files of series

Reconstruct the main DICOM tags in DB of the series whose Orthanc identifier is provided in the URL. This is useful if child studies/series/instances have inconsistent values for higher-level tags, in order to force Orthanc to use the value from the resource of interest. Beware that this is a time-consuming operation, as all the children DICOM instances will be parsed again, and the Orthanc index will be updated accordingly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$instancesIdReconstructPostRequest = new \Aurabx\OrthancPHP\Model\InstancesIdReconstructPostRequest(); // \Aurabx\OrthancPHP\Model\InstancesIdReconstructPostRequest

try {
    $apiInstance->seriesIdReconstructPost($id, $instancesIdReconstructPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdReconstructPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdSharedTagsGet()`

```php
seriesIdSharedTagsGet($id, $short, $simplify): mixed
```

Get shared tags

Extract the DICOM tags whose value is constant across all the child instances of the DICOM series whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->seriesIdSharedTagsGet($id, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdSharedTagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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

## `seriesIdStatisticsGet()`

```php
seriesIdStatisticsGet($id): \Aurabx\OrthancPHP\Model\SeriesIdStatisticsGet200Response
```

Get series statistics

Get statistics about the given series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest

try {
    $result = $apiInstance->seriesIdStatisticsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |

### Return type

[**\Aurabx\OrthancPHP\Model\SeriesIdStatisticsGet200Response**](../Model/SeriesIdStatisticsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `seriesIdStudyGet()`

```php
seriesIdStudyGet($id, $full, $requestedTags, $short): mixed
```

Get parent study

Get detailed information about the parent study of the DICOM series whose Orthanc identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$requestedTags = 'requestedTags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requested-tags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format

try {
    $result = $apiInstance->seriesIdStudyGet($id, $full, $requestedTags, $short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeriesApi->seriesIdStudyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
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
