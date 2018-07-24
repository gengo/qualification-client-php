# QualificationClient\WorkerApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorker**](WorkerApi.md#createWorker) | **POST** /workers | Create a new worker
[**getWorkerQualifications**](WorkerApi.md#getWorkerQualifications) | **GET** /workers/{worker_id}/qualifications | Get worker qualifications


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

# **getWorkerQualifications**
> \QualificationClient\Model\WorkerQualificationResponse[] getWorkerQualifications($qualification_type)

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
$qualification_type = "qualification_type_example"; // string | Qualification type.

try {
    $result = $apiInstance->getWorkerQualifications($qualification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->getWorkerQualifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qualification_type** | **string**| Qualification type. |

### Return type

[**\QualificationClient\Model\WorkerQualificationResponse[]**](../Model/WorkerQualificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

