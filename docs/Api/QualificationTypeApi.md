# Swagger\Client\QualificationTypeApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorkerQualification**](QualificationTypeApi.md#createWorkerQualification) | **POST** /workers/{worker_id}/qualifications/{qualification_type} | Create a new qualification
[**getQualificationTypes**](QualificationTypeApi.md#getQualificationTypes) | **GET** /qualifications | Get all types of qualifications
[**updateWorkerQualification**](QualificationTypeApi.md#updateWorkerQualification) | **PATCH** /workers/{worker_id}/qualifications/{qualification_type}/{qualification_id} | Update qualification


# **createWorkerQualification**
> \Swagger\Client\Model\QualificationResponse[] createWorkerQualification($worker_id, $qualification_type, $qualification)

Create a new qualification

Create a new worker qualification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QualificationTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$worker_id = 56; // int | ID of a worker
$qualification_type = "qualification_type_example"; // string | Qualification type.
$qualification = new \Swagger\Client\Model\PostQualificationRequest(); // \Swagger\Client\Model\PostQualificationRequest | 

try {
    $result = $apiInstance->createWorkerQualification($worker_id, $qualification_type, $qualification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationTypeApi->createWorkerQualification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **worker_id** | **int**| ID of a worker |
 **qualification_type** | **string**| Qualification type. |
 **qualification** | [**\Swagger\Client\Model\PostQualificationRequest**](../Model/PostQualificationRequest.md)|  |

### Return type

[**\Swagger\Client\Model\QualificationResponse[]**](../Model/QualificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualificationTypes**
> \Swagger\Client\Model\QualificationTypeResponse[] getQualificationTypes()

Get all types of qualifications



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QualificationTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getQualificationTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationTypeApi->getQualificationTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\QualificationTypeResponse[]**](../Model/QualificationTypeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWorkerQualification**
> \Swagger\Client\Model\QualificationResponse updateWorkerQualification($worker_id, $qualification_type, $qualification_id, $qualification)

Update qualification

Update qualification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QualificationTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$worker_id = 56; // int | ID of a worker
$qualification_type = "qualification_type_example"; // string | Qualification type.
$qualification_id = 56; // int | Qualification ID.
$qualification = new \Swagger\Client\Model\QualificationRequest(); // \Swagger\Client\Model\QualificationRequest | 

try {
    $result = $apiInstance->updateWorkerQualification($worker_id, $qualification_type, $qualification_id, $qualification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationTypeApi->updateWorkerQualification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **worker_id** | **int**| ID of a worker |
 **qualification_type** | **string**| Qualification type. |
 **qualification_id** | **int**| Qualification ID. |
 **qualification** | [**\Swagger\Client\Model\QualificationRequest**](../Model/QualificationRequest.md)|  |

### Return type

[**\Swagger\Client\Model\QualificationResponse**](../Model/QualificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

