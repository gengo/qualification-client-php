# QualificationClient\QualificationApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorkerQualification**](QualificationApi.md#createWorkerQualification) | **POST** /workers/{worker_id}/qualifications/{qualification_type} | Create a new qualification
[**getQualificationTypes**](QualificationApi.md#getQualificationTypes) | **GET** /qualifications | Get all types of qualifications
[**getQualifications**](QualificationApi.md#getQualifications) | **GET** /qualifications/{qualification_type}/workers | Get all qualifications of the given qualification type
[**revokeWorkerQualification**](QualificationApi.md#revokeWorkerQualification) | **PATCH** /workers/qualifications/revoke | Revoke worker qualification
[**unrevokeWorkerQualification**](QualificationApi.md#unrevokeWorkerQualification) | **PATCH** /workers/qualifications/unrevoke | Unrevoke worker qualification
[**updateWorkerQualification**](QualificationApi.md#updateWorkerQualification) | **PATCH** /workers/{worker_id}/qualifications/{qualification_type}/{qualification_id} | Update qualification


# **createWorkerQualification**
> \QualificationClient\Model\QualificationResponse[] createWorkerQualification($worker_id, $qualification_type, $qualification)

Create a new qualification

Create a new worker qualification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QualificationClient\Api\QualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$worker_id = 56; // int | ID of a worker
$qualification_type = "qualification_type_example"; // string | Qualification type.
$qualification = new \QualificationClient\Model\PostQualificationRequest(); // \QualificationClient\Model\PostQualificationRequest | 

try {
    $result = $apiInstance->createWorkerQualification($worker_id, $qualification_type, $qualification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationApi->createWorkerQualification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **worker_id** | **int**| ID of a worker |
 **qualification_type** | **string**| Qualification type. |
 **qualification** | [**\QualificationClient\Model\PostQualificationRequest**](../Model/PostQualificationRequest.md)|  |

### Return type

[**\QualificationClient\Model\QualificationResponse[]**](../Model/QualificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualificationTypes**
> \QualificationClient\Model\QualificationTypeResponse[] getQualificationTypes()

Get all types of qualifications



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QualificationClient\Api\QualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getQualificationTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationApi->getQualificationTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\QualificationClient\Model\QualificationTypeResponse[]**](../Model/QualificationTypeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualifications**
> \QualificationClient\Model\QualificationResponse[] getQualifications($qualification_type, $id, $worker_id, $status, $rank, $lc_src, $lc_tgt, $preferred_by, $sort_by, $page, $limit)

Get all qualifications of the given qualification type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QualificationClient\Api\QualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$qualification_type = "qualification_type_example"; // string | Qualification type.
$id = 56; // int | ID of a qualification
$worker_id = 56; // int | ID of a worker
$status = "status_example"; // string | Status of a qualification
$rank = "rank_example"; // string | Rank of a qualification
$lc_src = "lc_src_example"; // string | Language source
$lc_tgt = "lc_tgt_example"; // string | Language target
$preferred_by = 56; // int | Preferred worker by a customer ID
$sort_by = "sort_by_example"; // string | Columns to sort. '-' for descending; '+' for ascending
$page = 56; // int | Current page
$limit = 56; // int | No. of items per page

try {
    $result = $apiInstance->getQualifications($qualification_type, $id, $worker_id, $status, $rank, $lc_src, $lc_tgt, $preferred_by, $sort_by, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationApi->getQualifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qualification_type** | **string**| Qualification type. |
 **id** | **int**| ID of a qualification | [optional]
 **worker_id** | **int**| ID of a worker | [optional]
 **status** | **string**| Status of a qualification | [optional]
 **rank** | **string**| Rank of a qualification | [optional]
 **lc_src** | **string**| Language source | [optional]
 **lc_tgt** | **string**| Language target | [optional]
 **preferred_by** | **int**| Preferred worker by a customer ID | [optional]
 **sort_by** | **string**| Columns to sort. &#39;-&#39; for descending; &#39;+&#39; for ascending | [optional]
 **page** | **int**| Current page | [optional]
 **limit** | **int**| No. of items per page | [optional]

### Return type

[**\QualificationClient\Model\QualificationResponse[]**](../Model/QualificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeWorkerQualification**
> \QualificationClient\Model\QualificationResponse[] revokeWorkerQualification($qualification)

Revoke worker qualification

Revoke worker qualification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QualificationClient\Api\QualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$qualification = array(new \QualificationClient\Model\RevokeQualificationRequest()); // \QualificationClient\Model\RevokeQualificationRequest[] | 

try {
    $result = $apiInstance->revokeWorkerQualification($qualification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationApi->revokeWorkerQualification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qualification** | [**\QualificationClient\Model\RevokeQualificationRequest[]**](../Model/RevokeQualificationRequest.md)|  |

### Return type

[**\QualificationClient\Model\QualificationResponse[]**](../Model/QualificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unrevokeWorkerQualification**
> \QualificationClient\Model\QualificationResponse[] unrevokeWorkerQualification($qualification)

Unrevoke worker qualification

Unrevoke worker qualification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QualificationClient\Api\QualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$qualification = array(new \QualificationClient\Model\UnrevokeQualificationRequest()); // \QualificationClient\Model\UnrevokeQualificationRequest[] | 

try {
    $result = $apiInstance->unrevokeWorkerQualification($qualification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationApi->unrevokeWorkerQualification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qualification** | [**\QualificationClient\Model\UnrevokeQualificationRequest[]**](../Model/UnrevokeQualificationRequest.md)|  |

### Return type

[**\QualificationClient\Model\QualificationResponse[]**](../Model/QualificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWorkerQualification**
> \QualificationClient\Model\QualificationResponse updateWorkerQualification($worker_id, $qualification_type, $qualification_id, $qualification)

Update qualification

Update qualification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QualificationClient\Api\QualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$worker_id = 56; // int | ID of a worker
$qualification_type = "qualification_type_example"; // string | Qualification type.
$qualification_id = 56; // int | Qualification ID.
$qualification = new \QualificationClient\Model\QualificationRequest(); // \QualificationClient\Model\QualificationRequest | 

try {
    $result = $apiInstance->updateWorkerQualification($worker_id, $qualification_type, $qualification_id, $qualification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationApi->updateWorkerQualification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **worker_id** | **int**| ID of a worker |
 **qualification_type** | **string**| Qualification type. |
 **qualification_id** | **int**| Qualification ID. |
 **qualification** | [**\QualificationClient\Model\QualificationRequest**](../Model/QualificationRequest.md)|  |

### Return type

[**\QualificationClient\Model\QualificationResponse**](../Model/QualificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

