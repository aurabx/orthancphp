# Aurabx\OrthancPHP\JobsApi

All URIs are relative to https://orthanc.uclouvain.be/demo, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**jobsGet()**](JobsApi.md#jobsGet) | **GET** /jobs | List jobs |
| [**jobsIdCancelPost()**](JobsApi.md#jobsIdCancelPost) | **POST** /jobs/{id}/cancel | Cancel job |
| [**jobsIdDelete()**](JobsApi.md#jobsIdDelete) | **DELETE** /jobs/{id} | Delete a job from history |
| [**jobsIdGet()**](JobsApi.md#jobsIdGet) | **GET** /jobs/{id} | Get job |
| [**jobsIdKeyDelete()**](JobsApi.md#jobsIdKeyDelete) | **DELETE** /jobs/{id}/{key} | Delete a job output |
| [**jobsIdKeyGet()**](JobsApi.md#jobsIdKeyGet) | **GET** /jobs/{id}/{key} | Get job output |
| [**jobsIdPausePost()**](JobsApi.md#jobsIdPausePost) | **POST** /jobs/{id}/pause | Pause job |
| [**jobsIdResubmitPost()**](JobsApi.md#jobsIdResubmitPost) | **POST** /jobs/{id}/resubmit | Resubmit job |
| [**jobsIdResumePost()**](JobsApi.md#jobsIdResumePost) | **POST** /jobs/{id}/resume | Resume job |


## `jobsGet()`

```php
jobsGet($expand): mixed
```

List jobs

List all the available jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expand = 'expand_example'; // string | If present, retrieve detailed information about the individual jobs

try {
    $result = $apiInstance->jobsGet($expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| If present, retrieve detailed information about the individual jobs | [optional] |

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

## `jobsIdCancelPost()`

```php
jobsIdCancelPost($id): mixed
```

Cancel job

Cancel the job whose identifier is provided in the URL. Check out the Orthanc Book for more information about the state machine applicable to jobs: https://orthanc.uclouvain.be/book/users/advanced-rest.html#jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the job of interest

try {
    $result = $apiInstance->jobsIdCancelPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsIdCancelPost: ', $e->getMessage(), PHP_EOL;
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

## `jobsIdDelete()`

```php
jobsIdDelete($id)
```

Delete a job from history

Delete the job from the jobs history.  Only a completed job can be deleted. If the job has not run or not completed yet, you must cancel it first. If the job has outputs, all outputs will be deleted as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the job of interest

try {
    $apiInstance->jobsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the job of interest | |

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

## `jobsIdGet()`

```php
jobsIdGet($id): mixed
```

Get job

Retrieve detailed information about the job whose identifier is provided in the URL: https://orthanc.uclouvain.be/book/users/advanced-rest.html#jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the job of interest

try {
    $result = $apiInstance->jobsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsIdGet: ', $e->getMessage(), PHP_EOL;
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

## `jobsIdKeyDelete()`

```php
jobsIdKeyDelete($id, $key)
```

Delete a job output

Delete the output produced by a job. As of Orthanc 1.12.1, only the jobs that generate a DICOMDIR media or a ZIP archive provide such an output (with `key` equals to `archive`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the job of interest
$key = 'key_example'; // string | Name of the output of interest

try {
    $apiInstance->jobsIdKeyDelete($id, $key);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsIdKeyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the job of interest | |
| **key** | **string**| Name of the output of interest | |

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

## `jobsIdKeyGet()`

```php
jobsIdKeyGet($id, $key): mixed
```

Get job output

Retrieve some output produced by a job. As of Orthanc 1.8.2, only the jobs that generate a DICOMDIR media or a ZIP archive provide such an output (with `key` equals to `archive`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the job of interest
$key = 'key_example'; // string | Name of the output of interest

try {
    $result = $apiInstance->jobsIdKeyGet($id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsIdKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the job of interest | |
| **key** | **string**| Name of the output of interest | |

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

## `jobsIdPausePost()`

```php
jobsIdPausePost($id): mixed
```

Pause job

Pause the job whose identifier is provided in the URL. Check out the Orthanc Book for more information about the state machine applicable to jobs: https://orthanc.uclouvain.be/book/users/advanced-rest.html#jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the job of interest

try {
    $result = $apiInstance->jobsIdPausePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsIdPausePost: ', $e->getMessage(), PHP_EOL;
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

## `jobsIdResubmitPost()`

```php
jobsIdResubmitPost($id): mixed
```

Resubmit job

Resubmit the job whose identifier is provided in the URL. Check out the Orthanc Book for more information about the state machine applicable to jobs: https://orthanc.uclouvain.be/book/users/advanced-rest.html#jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the job of interest

try {
    $result = $apiInstance->jobsIdResubmitPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsIdResubmitPost: ', $e->getMessage(), PHP_EOL;
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

## `jobsIdResumePost()`

```php
jobsIdResumePost($id): mixed
```

Resume job

Resume the job whose identifier is provided in the URL. Check out the Orthanc Book for more information about the state machine applicable to jobs: https://orthanc.uclouvain.be/book/users/advanced-rest.html#jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurabx\OrthancPHP\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the job of interest

try {
    $result = $apiInstance->jobsIdResumePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsIdResumePost: ', $e->getMessage(), PHP_EOL;
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
