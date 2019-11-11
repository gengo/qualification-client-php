# QualificationClient\WorkerApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorker**](WorkerApi.md#createWorker) | **POST** /workers | Create a new worker
[**createWorkerDomain**](WorkerApi.md#createWorkerDomain) | **POST** /workers/{worker_id}/domains | Add a worker specialization
[**getWorkerQualifications**](WorkerApi.md#getWorkerQualifications) | **GET** /workers/{worker_id}/qualifications | Get worker qualifications
[**getWorkers**](WorkerApi.md#getWorkers) | **GET** /workers | Get workers


# **createWorker**
> \QualificationClient\Model\WorkerResponse createWorker($worker)

Create a new worker

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QualificationClient\Api\WorkerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$worker = new \QualificationClient\Model\WorkerRequest(); // \QualificationClient\Model\WorkerRequest | 

try {
    $result = $apiInstance->createWorker($worker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->createWorker: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **worker** | [**\QualificationClient\Model\WorkerRequest**](../Model/WorkerRequest.md)|  |

### Return type

[**\QualificationClient\Model\WorkerResponse**](../Model/WorkerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createWorkerDomain**
> \QualificationClient\Model\WorkerDomain createWorkerDomain($worker_id, $domains)

Add a worker specialization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QualificationClient\Api\WorkerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$worker_id = 56; // int | Worker user ID
$domains = new \QualificationClient\Model\WorkerDomainRequest(); // \QualificationClient\Model\WorkerDomainRequest | 

try {
    $result = $apiInstance->createWorkerDomain($worker_id, $domains);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->createWorkerDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **worker_id** | **int**| Worker user ID |
 **domains** | [**\QualificationClient\Model\WorkerDomainRequest**](../Model/WorkerDomainRequest.md)|  |

### Return type

[**\QualificationClient\Model\WorkerDomain**](../Model/WorkerDomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkerQualifications**
> \QualificationClient\Model\WorkerQualificationResponse[] getWorkerQualifications($worker_id)

Get worker qualifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QualificationClient\Api\WorkerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$worker_id = 56; // int | ID of a worker

try {
    $result = $apiInstance->getWorkerQualifications($worker_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->getWorkerQualifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **worker_id** | **int**| ID of a worker |

### Return type

[**\QualificationClient\Model\WorkerQualificationResponse[]**](../Model/WorkerQualificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkers**
> \QualificationClient\Model\WorkerResponse[] getWorkers()

Get workers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QualificationClient\Api\WorkerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getWorkers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->getWorkers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\QualificationClient\Model\WorkerResponse[]**](../Model/WorkerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

