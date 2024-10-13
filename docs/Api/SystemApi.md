# Aurabx\OrthancPHP\SystemApi

All URIs are relative to https://orthanc.uclouvain.be/demo, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pluginsExplorerJsGet()**](SystemApi.md#pluginsExplorerJsGet) | **GET** /plugins/explorer.js | JavaScript extensions to Orthanc Explorer |
| [**pluginsGet()**](SystemApi.md#pluginsGet) | **GET** /plugins | List plugins |
| [**pluginsIdGet()**](SystemApi.md#pluginsIdGet) | **GET** /plugins/{id} | Get plugin |
| [**statisticsGet()**](SystemApi.md#statisticsGet) | **GET** /statistics | Get database statistics |
| [**systemGet()**](SystemApi.md#systemGet) | **GET** /system | Get system information |
| [**toolsAcceptedTransferSyntaxesGet()**](SystemApi.md#toolsAcceptedTransferSyntaxesGet) | **GET** /tools/accepted-transfer-syntaxes | Get accepted transfer syntaxes |
| [**toolsAcceptedTransferSyntaxesPut()**](SystemApi.md#toolsAcceptedTransferSyntaxesPut) | **PUT** /tools/accepted-transfer-syntaxes | Set accepted transfer syntaxes |
| [**toolsBulkAnonymizePost()**](SystemApi.md#toolsBulkAnonymizePost) | **POST** /tools/bulk-anonymize | Anonymize a set of resources |
| [**toolsBulkContentPost()**](SystemApi.md#toolsBulkContentPost) | **POST** /tools/bulk-content | Describe a set of resources |
| [**toolsBulkDeletePost()**](SystemApi.md#toolsBulkDeletePost) | **POST** /tools/bulk-delete | Delete a set of resources |
| [**toolsBulkModifyPost()**](SystemApi.md#toolsBulkModifyPost) | **POST** /tools/bulk-modify | Modify a set of resources |
| [**toolsCreateArchiveGet()**](SystemApi.md#toolsCreateArchiveGet) | **GET** /tools/create-archive | Create ZIP archive |
| [**toolsCreateArchivePost()**](SystemApi.md#toolsCreateArchivePost) | **POST** /tools/create-archive | Create ZIP archive |
| [**toolsCreateDicomPost()**](SystemApi.md#toolsCreateDicomPost) | **POST** /tools/create-dicom | Create one DICOM instance |
| [**toolsCreateMediaExtendedGet()**](SystemApi.md#toolsCreateMediaExtendedGet) | **GET** /tools/create-media-extended | Create DICOMDIR media |
| [**toolsCreateMediaExtendedPost()**](SystemApi.md#toolsCreateMediaExtendedPost) | **POST** /tools/create-media-extended | Create DICOMDIR media |
| [**toolsCreateMediaGet()**](SystemApi.md#toolsCreateMediaGet) | **GET** /tools/create-media | Create DICOMDIR media |
| [**toolsCreateMediaPost()**](SystemApi.md#toolsCreateMediaPost) | **POST** /tools/create-media | Create DICOMDIR media |
| [**toolsDefaultEncodingGet()**](SystemApi.md#toolsDefaultEncodingGet) | **GET** /tools/default-encoding | Get default encoding |
| [**toolsDefaultEncodingPut()**](SystemApi.md#toolsDefaultEncodingPut) | **PUT** /tools/default-encoding | Set default encoding |
| [**toolsDicomConformanceGet()**](SystemApi.md#toolsDicomConformanceGet) | **GET** /tools/dicom-conformance | Get DICOM conformance |
| [**toolsDicomEchoPost()**](SystemApi.md#toolsDicomEchoPost) | **POST** /tools/dicom-echo | Trigger C-ECHO SCU |
| [**toolsExecuteScriptPost()**](SystemApi.md#toolsExecuteScriptPost) | **POST** /tools/execute-script | Execute Lua script |
| [**toolsFindPost()**](SystemApi.md#toolsFindPost) | **POST** /tools/find | Look for local resources |
| [**toolsGenerateUidGet()**](SystemApi.md#toolsGenerateUidGet) | **GET** /tools/generate-uid | Generate an identifier |
| [**toolsInvalidateTagsPost()**](SystemApi.md#toolsInvalidateTagsPost) | **POST** /tools/invalidate-tags | Invalidate DICOM-as-JSON summaries |
| [**toolsLabelsGet()**](SystemApi.md#toolsLabelsGet) | **GET** /tools/labels | Get all the used labels |
| [**toolsLookupPost()**](SystemApi.md#toolsLookupPost) | **POST** /tools/lookup | Look for DICOM identifiers |
| [**toolsMetricsGet()**](SystemApi.md#toolsMetricsGet) | **GET** /tools/metrics | Are metrics collected? |
| [**toolsMetricsPrometheusGet()**](SystemApi.md#toolsMetricsPrometheusGet) | **GET** /tools/metrics-prometheus | Get usage metrics |
| [**toolsMetricsPut()**](SystemApi.md#toolsMetricsPut) | **PUT** /tools/metrics | Enable collection of metrics |
| [**toolsNowGet()**](SystemApi.md#toolsNowGet) | **GET** /tools/now | Get UTC time |
| [**toolsNowLocalGet()**](SystemApi.md#toolsNowLocalGet) | **GET** /tools/now-local | Get local time |
| [**toolsReconstructPost()**](SystemApi.md#toolsReconstructPost) | **POST** /tools/reconstruct | Reconstruct all the index |
| [**toolsResetPost()**](SystemApi.md#toolsResetPost) | **POST** /tools/reset | Restart Orthanc |
| [**toolsShutdownPost()**](SystemApi.md#toolsShutdownPost) | **POST** /tools/shutdown | Shutdown Orthanc |
| [**toolsUnknownSopClassAcceptedGet()**](SystemApi.md#toolsUnknownSopClassAcceptedGet) | **GET** /tools/unknown-sop-class-accepted | Is unknown SOP class accepted? |
| [**toolsUnknownSopClassAcceptedPut()**](SystemApi.md#toolsUnknownSopClassAcceptedPut) | **PUT** /tools/unknown-sop-class-accepted | Set unknown SOP class accepted |


## `pluginsExplorerJsGet()`

```php
pluginsExplorerJsGet(): mixed
```

JavaScript extensions to Orthanc Explorer

Get the JavaScript extensions that are installed by all the plugins using the `OrthancPluginExtendOrthancExplorer()` function of the plugin SDK. This route is for internal use of Orthanc Explorer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->pluginsExplorerJsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->pluginsExplorerJsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/javascript`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pluginsGet()`

```php
pluginsGet(): mixed
```

List plugins

List all the installed plugins

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->pluginsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->pluginsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `pluginsIdGet()`

```php
pluginsIdGet($id): mixed
```

Get plugin

Get system information about the plugin whose identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the job of interest

try {
    $result = $apiInstance->pluginsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->pluginsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the job of interest | |

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

## `statisticsGet()`

```php
statisticsGet(): \Aurabx\OrthancPHP\Model\StatisticsGet200Response
```

Get database statistics

Get statistics related to the database of Orthanc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->statisticsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->statisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Aurabx\OrthancPHP\Model\StatisticsGet200Response**](../Model/StatisticsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemGet()`

```php
systemGet(): \Aurabx\OrthancPHP\Model\SystemGet200Response
```

Get system information

Get system information about Orthanc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->systemGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Aurabx\OrthancPHP\Model\SystemGet200Response**](../Model/SystemGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsAcceptedTransferSyntaxesGet()`

```php
toolsAcceptedTransferSyntaxesGet(): mixed
```

Get accepted transfer syntaxes

Get the list of UIDs of the DICOM transfer syntaxes that are accepted by Orthanc C-STORE SCP. This corresponds to the configuration options `AcceptedTransferSyntaxes` and `XXXTransferSyntaxAccepted`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsAcceptedTransferSyntaxesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsAcceptedTransferSyntaxesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `toolsAcceptedTransferSyntaxesPut()`

```php
toolsAcceptedTransferSyntaxesPut($body): mixed
```

Set accepted transfer syntaxes

Set the DICOM transfer syntaxes that accepted by Orthanc C-STORE SCP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $result = $apiInstance->toolsAcceptedTransferSyntaxesPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsAcceptedTransferSyntaxesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsBulkAnonymizePost()`

```php
toolsBulkAnonymizePost($toolsBulkAnonymizePostRequest): \Aurabx\OrthancPHP\Model\ToolsBulkAnonymizePost200Response
```

Anonymize a set of resources

Start a job that will anonymize all the DICOM patients, studies, series or instances whose identifiers are provided in the `Resources` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolsBulkAnonymizePostRequest = new \Aurabx\OrthancPHP\Model\ToolsBulkAnonymizePostRequest(); // \Aurabx\OrthancPHP\Model\ToolsBulkAnonymizePostRequest

try {
    $result = $apiInstance->toolsBulkAnonymizePost($toolsBulkAnonymizePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsBulkAnonymizePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolsBulkAnonymizePostRequest** | [**\Aurabx\OrthancPHP\Model\ToolsBulkAnonymizePostRequest**](../Model/ToolsBulkAnonymizePostRequest.md)|  | [optional] |

### Return type

[**\Aurabx\OrthancPHP\Model\ToolsBulkAnonymizePost200Response**](../Model/ToolsBulkAnonymizePost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsBulkContentPost()`

```php
toolsBulkContentPost($toolsBulkContentPostRequest)
```

Describe a set of resources

Get the content all the DICOM patients, studies, series or instances whose identifiers are provided in the `Resources` field, in one single call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolsBulkContentPostRequest = new \Aurabx\OrthancPHP\Model\ToolsBulkContentPostRequest(); // \Aurabx\OrthancPHP\Model\ToolsBulkContentPostRequest

try {
    $apiInstance->toolsBulkContentPost($toolsBulkContentPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsBulkContentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolsBulkContentPostRequest** | [**\Aurabx\OrthancPHP\Model\ToolsBulkContentPostRequest**](../Model/ToolsBulkContentPostRequest.md)|  | [optional] |

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

## `toolsBulkDeletePost()`

```php
toolsBulkDeletePost($toolsBulkDeletePostRequest)
```

Delete a set of resources

Delete all the DICOM patients, studies, series or instances whose identifiers are provided in the `Resources` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolsBulkDeletePostRequest = new \Aurabx\OrthancPHP\Model\ToolsBulkDeletePostRequest(); // \Aurabx\OrthancPHP\Model\ToolsBulkDeletePostRequest

try {
    $apiInstance->toolsBulkDeletePost($toolsBulkDeletePostRequest);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsBulkDeletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolsBulkDeletePostRequest** | [**\Aurabx\OrthancPHP\Model\ToolsBulkDeletePostRequest**](../Model/ToolsBulkDeletePostRequest.md)|  | [optional] |

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

## `toolsBulkModifyPost()`

```php
toolsBulkModifyPost($toolsBulkModifyPostRequest): \Aurabx\OrthancPHP\Model\ToolsBulkModifyPost200Response
```

Modify a set of resources

Start a job that will modify all the DICOM patients, studies, series or instances whose identifiers are provided in the `Resources` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolsBulkModifyPostRequest = new \Aurabx\OrthancPHP\Model\ToolsBulkModifyPostRequest(); // \Aurabx\OrthancPHP\Model\ToolsBulkModifyPostRequest

try {
    $result = $apiInstance->toolsBulkModifyPost($toolsBulkModifyPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsBulkModifyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolsBulkModifyPostRequest** | [**\Aurabx\OrthancPHP\Model\ToolsBulkModifyPostRequest**](../Model/ToolsBulkModifyPostRequest.md)|  | [optional] |

### Return type

[**\Aurabx\OrthancPHP\Model\ToolsBulkModifyPost200Response**](../Model/ToolsBulkModifyPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsCreateArchiveGet()`

```php
toolsCreateArchiveGet($resources, $transcode)
```

Create ZIP archive

Create a ZIP archive containing the DICOM resources (patients, studies, series, or instances) whose Orthanc identifiers are provided in the 'resources' argument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resources = 'resources_example'; // string | A comma separated list of Orthanc resource identifiers to include in the ZIP archive.
$transcode = 'transcode_example'; // string | If present, the DICOM files will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html

try {
    $apiInstance->toolsCreateArchiveGet($resources, $transcode);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsCreateArchiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resources** | **string**| A comma separated list of Orthanc resource identifiers to include in the ZIP archive. | |
| **transcode** | **string**| If present, the DICOM files will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html | [optional] |

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

## `toolsCreateArchivePost()`

```php
toolsCreateArchivePost($toolsCreateArchivePostRequest): \Aurabx\OrthancPHP\Model\PatientsIdArchivePost200Response
```

Create ZIP archive

Create a ZIP archive containing the DICOM resources (patients, studies, series, or instances) whose Orthanc identifiers are provided in the body

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolsCreateArchivePostRequest = new \Aurabx\OrthancPHP\Model\ToolsCreateArchivePostRequest(); // \Aurabx\OrthancPHP\Model\ToolsCreateArchivePostRequest

try {
    $result = $apiInstance->toolsCreateArchivePost($toolsCreateArchivePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsCreateArchivePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolsCreateArchivePostRequest** | [**\Aurabx\OrthancPHP\Model\ToolsCreateArchivePostRequest**](../Model/ToolsCreateArchivePostRequest.md)|  | [optional] |

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

## `toolsCreateDicomPost()`

```php
toolsCreateDicomPost($toolsCreateDicomPostRequest): \Aurabx\OrthancPHP\Model\ToolsCreateDicomPost200Response
```

Create one DICOM instance

Create one DICOM instance, and store it into Orthanc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolsCreateDicomPostRequest = new \Aurabx\OrthancPHP\Model\ToolsCreateDicomPostRequest(); // \Aurabx\OrthancPHP\Model\ToolsCreateDicomPostRequest

try {
    $result = $apiInstance->toolsCreateDicomPost($toolsCreateDicomPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsCreateDicomPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolsCreateDicomPostRequest** | [**\Aurabx\OrthancPHP\Model\ToolsCreateDicomPostRequest**](../Model/ToolsCreateDicomPostRequest.md)|  | [optional] |

### Return type

[**\Aurabx\OrthancPHP\Model\ToolsCreateDicomPost200Response**](../Model/ToolsCreateDicomPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsCreateMediaExtendedGet()`

```php
toolsCreateMediaExtendedGet($resources, $transcode)
```

Create DICOMDIR media

Create a DICOMDIR media containing the DICOM resources (patients, studies, series, or instances) whose Orthanc identifiers are provided in the 'resources' argument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resources = 'resources_example'; // string | A comma separated list of Orthanc resource identifiers to include in the DICOMDIR media.
$transcode = 'transcode_example'; // string | If present, the DICOM files will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html

try {
    $apiInstance->toolsCreateMediaExtendedGet($resources, $transcode);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsCreateMediaExtendedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resources** | **string**| A comma separated list of Orthanc resource identifiers to include in the DICOMDIR media. | |
| **transcode** | **string**| If present, the DICOM files will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html | [optional] |

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

## `toolsCreateMediaExtendedPost()`

```php
toolsCreateMediaExtendedPost($toolsCreateMediaExtendedPostRequest): \Aurabx\OrthancPHP\Model\PatientsIdArchivePost200Response
```

Create DICOMDIR media

Create a DICOMDIR media containing the DICOM resources (patients, studies, series, or instances) whose Orthanc identifiers are provided in the body

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolsCreateMediaExtendedPostRequest = new \Aurabx\OrthancPHP\Model\ToolsCreateMediaExtendedPostRequest(); // \Aurabx\OrthancPHP\Model\ToolsCreateMediaExtendedPostRequest

try {
    $result = $apiInstance->toolsCreateMediaExtendedPost($toolsCreateMediaExtendedPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsCreateMediaExtendedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolsCreateMediaExtendedPostRequest** | [**\Aurabx\OrthancPHP\Model\ToolsCreateMediaExtendedPostRequest**](../Model/ToolsCreateMediaExtendedPostRequest.md)|  | [optional] |

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

## `toolsCreateMediaGet()`

```php
toolsCreateMediaGet($resources, $transcode)
```

Create DICOMDIR media

Create a DICOMDIR media containing the DICOM resources (patients, studies, series, or instances) whose Orthanc identifiers are provided in the 'resources' argument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resources = 'resources_example'; // string | A comma separated list of Orthanc resource identifiers to include in the DICOMDIR media.
$transcode = 'transcode_example'; // string | If present, the DICOM files will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html

try {
    $apiInstance->toolsCreateMediaGet($resources, $transcode);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsCreateMediaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resources** | **string**| A comma separated list of Orthanc resource identifiers to include in the DICOMDIR media. | |
| **transcode** | **string**| If present, the DICOM files will be transcoded to the provided transfer syntax: https://orthanc.uclouvain.be/book/faq/transcoding.html | [optional] |

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

## `toolsCreateMediaPost()`

```php
toolsCreateMediaPost($toolsCreateMediaPostRequest): \Aurabx\OrthancPHP\Model\PatientsIdArchivePost200Response
```

Create DICOMDIR media

Create a DICOMDIR media containing the DICOM resources (patients, studies, series, or instances) whose Orthanc identifiers are provided in the body

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolsCreateMediaPostRequest = new \Aurabx\OrthancPHP\Model\ToolsCreateMediaPostRequest(); // \Aurabx\OrthancPHP\Model\ToolsCreateMediaPostRequest

try {
    $result = $apiInstance->toolsCreateMediaPost($toolsCreateMediaPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsCreateMediaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolsCreateMediaPostRequest** | [**\Aurabx\OrthancPHP\Model\ToolsCreateMediaPostRequest**](../Model/ToolsCreateMediaPostRequest.md)|  | [optional] |

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

## `toolsDefaultEncodingGet()`

```php
toolsDefaultEncodingGet(): mixed
```

Get default encoding

Get the default encoding that is used by Orthanc if parsing a DICOM instance without the `SpecificCharacterEncoding` tag, or during C-FIND. This corresponds to the configuration option `DefaultEncoding`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsDefaultEncodingGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsDefaultEncodingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `toolsDefaultEncodingPut()`

```php
toolsDefaultEncodingPut($body)
```

Set default encoding

Change the default encoding that is used by Orthanc if parsing a DICOM instance without the `SpecificCharacterEncoding` tag, or during C-FIND. This corresponds to the configuration option `DefaultEncoding`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $apiInstance->toolsDefaultEncodingPut($body);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsDefaultEncodingPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `toolsDicomConformanceGet()`

```php
toolsDicomConformanceGet(): mixed
```

Get DICOM conformance

Get the DICOM conformance statement of Orthanc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsDicomConformanceGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsDicomConformanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `toolsDicomEchoPost()`

```php
toolsDicomEchoPost($toolsDicomEchoPostRequest)
```

Trigger C-ECHO SCU

Trigger C-ECHO SCU command against a DICOM modality described in the POST body, without having to register the modality in some `/modalities/{id}` (new in Orthanc 1.8.1)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolsDicomEchoPostRequest = new \Aurabx\OrthancPHP\Model\ToolsDicomEchoPostRequest(); // \Aurabx\OrthancPHP\Model\ToolsDicomEchoPostRequest

try {
    $apiInstance->toolsDicomEchoPost($toolsDicomEchoPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsDicomEchoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolsDicomEchoPostRequest** | [**\Aurabx\OrthancPHP\Model\ToolsDicomEchoPostRequest**](../Model/ToolsDicomEchoPostRequest.md)|  | [optional] |

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

## `toolsExecuteScriptPost()`

```php
toolsExecuteScriptPost($body): mixed
```

Execute Lua script

Execute the provided Lua script by the Orthanc server. This is very insecure for Orthanc servers that are remotely accessible.  Since Orthanc 1.5.8, this route is disabled by default and can be enabled thanks to the `ExecuteLuaEnabled` configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $result = $apiInstance->toolsExecuteScriptPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsExecuteScriptPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsFindPost()`

```php
toolsFindPost($toolsFindPostRequest): mixed
```

Look for local resources

This URI can be used to perform a search on the content of the local Orthanc server, in a way that is similar to querying remote DICOM modalities using C-FIND SCU: https://orthanc.uclouvain.be/book/users/rest.html#performing-finds-within-orthanc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolsFindPostRequest = new \Aurabx\OrthancPHP\Model\ToolsFindPostRequest(); // \Aurabx\OrthancPHP\Model\ToolsFindPostRequest

try {
    $result = $apiInstance->toolsFindPost($toolsFindPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsFindPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolsFindPostRequest** | [**\Aurabx\OrthancPHP\Model\ToolsFindPostRequest**](../Model/ToolsFindPostRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsGenerateUidGet()`

```php
toolsGenerateUidGet($level): mixed
```

Generate an identifier

Generate a random DICOM identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = 'level_example'; // string | Type of DICOM resource among: `patient`, `study`, `series` or `instance`

try {
    $result = $apiInstance->toolsGenerateUidGet($level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsGenerateUidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | **string**| Type of DICOM resource among: &#x60;patient&#x60;, &#x60;study&#x60;, &#x60;series&#x60; or &#x60;instance&#x60; | |

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

## `toolsInvalidateTagsPost()`

```php
toolsInvalidateTagsPost()
```

Invalidate DICOM-as-JSON summaries

Remove all the attachments of the type \"DICOM-as-JSON\" that are associated will all the DICOM instances stored in Orthanc. These summaries will be automatically re-created on the next access. This is notably useful after changes to the `Dictionary` configuration option. https://orthanc.uclouvain.be/book/faq/orthanc-storage.html#storage-area

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->toolsInvalidateTagsPost();
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsInvalidateTagsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `toolsLabelsGet()`

```php
toolsLabelsGet(): mixed
```

Get all the used labels

List all the labels that are associated with any resource of the Orthanc database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsLabelsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsLabelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `toolsLookupPost()`

```php
toolsLookupPost($body): mixed
```

Look for DICOM identifiers

This URI can be used to convert one DICOM identifier to a list of matching Orthanc resources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $result = $apiInstance->toolsLookupPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsLookupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsMetricsGet()`

```php
toolsMetricsGet(): mixed
```

Are metrics collected?

Returns a Boolean specifying whether Prometheus metrics are collected and exposed at `/tools/metrics-prometheus`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsMetricsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsMetricsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `toolsMetricsPrometheusGet()`

```php
toolsMetricsPrometheusGet()
```

Get usage metrics

Get usage metrics of Orthanc in the Prometheus file format (OpenMetrics): https://orthanc.uclouvain.be/book/users/advanced-rest.html#instrumentation-with-prometheus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->toolsMetricsPrometheusGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsMetricsPrometheusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsMetricsPut()`

```php
toolsMetricsPut($body)
```

Enable collection of metrics

Enable or disable the collection and publication of metrics at `/tools/metrics-prometheus`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $apiInstance->toolsMetricsPut($body);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsMetricsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `toolsNowGet()`

```php
toolsNowGet(): mixed
```

Get UTC time

Get UTC time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsNowGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsNowGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `toolsNowLocalGet()`

```php
toolsNowLocalGet(): mixed
```

Get local time

Get local time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsNowLocalGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsNowLocalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `toolsReconstructPost()`

```php
toolsReconstructPost($toolsReconstructPostRequest)
```

Reconstruct all the index

Reconstruct the index of all the tags of all the DICOM instances that are stored in Orthanc. This is notably useful after the deletion of resources whose children resources have inconsistent values with their sibling resources. Beware that this is a highly time-consuming operation, as all the DICOM instances will be parsed again, and as all the Orthanc index will be regenerated. If you have a large database to process, it is advised to use the Housekeeper plugin to perform this action resource by resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolsReconstructPostRequest = new \Aurabx\OrthancPHP\Model\ToolsReconstructPostRequest(); // \Aurabx\OrthancPHP\Model\ToolsReconstructPostRequest

try {
    $apiInstance->toolsReconstructPost($toolsReconstructPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsReconstructPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolsReconstructPostRequest** | [**\Aurabx\OrthancPHP\Model\ToolsReconstructPostRequest**](../Model/ToolsReconstructPostRequest.md)|  | [optional] |

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

## `toolsResetPost()`

```php
toolsResetPost()
```

Restart Orthanc

Restart Orthanc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->toolsResetPost();
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsResetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `toolsShutdownPost()`

```php
toolsShutdownPost()
```

Shutdown Orthanc

Shutdown Orthanc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->toolsShutdownPost();
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsShutdownPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `toolsUnknownSopClassAcceptedGet()`

```php
toolsUnknownSopClassAcceptedGet(): mixed
```

Is unknown SOP class accepted?

Shall Orthanc C-STORE SCP accept DICOM instances with an unknown SOP class UID?

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsUnknownSopClassAcceptedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsUnknownSopClassAcceptedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `toolsUnknownSopClassAcceptedPut()`

```php
toolsUnknownSopClassAcceptedPut($body)
```

Set unknown SOP class accepted

Set whether Orthanc C-STORE SCP should accept DICOM instances with an unknown SOP class UID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $apiInstance->toolsUnknownSopClassAcceptedPut($body);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->toolsUnknownSopClassAcceptedPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
