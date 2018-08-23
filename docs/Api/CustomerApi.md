# QualificationClient\CustomerApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPreferredTranslators**](CustomerApi.md#addPreferredTranslators) | **PATCH** /customer/{user_id}/translators/add_preferred | Add preferred translators
[**removePreferredTranslators**](CustomerApi.md#removePreferredTranslators) | **PATCH** /customer/{user_id}/translators/remove_preferred | Remove preferred translators


# **addPreferredTranslators**
> \QualificationClient\Model\QualificationResponse[] addPreferredTranslators($user_id, $preferred_translators)

Add preferred translators



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QualificationClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 56; // int | Customer user ID.
$preferred_translators = array(new \QualificationClient\Model\PreferredTranslatorRequest()); // \QualificationClient\Model\PreferredTranslatorRequest[] | 

try {
    $result = $apiInstance->addPreferredTranslators($user_id, $preferred_translators);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->addPreferredTranslators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| Customer user ID. |
 **preferred_translators** | [**\QualificationClient\Model\PreferredTranslatorRequest[]**](../Model/PreferredTranslatorRequest.md)|  |

### Return type

[**\QualificationClient\Model\QualificationResponse[]**](../Model/QualificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removePreferredTranslators**
> \QualificationClient\Model\QualificationResponse[] removePreferredTranslators($user_id, $ids, $force)

Remove preferred translators



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QualificationClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 56; // int | Customer user ID.
$ids = new \QualificationClient\Model\IDCollectionRequest(); // \QualificationClient\Model\IDCollectionRequest | 
$force = new \QualificationClient\Model\null(); //  | Pemanent deletion of the preferred translators

try {
    $result = $apiInstance->removePreferredTranslators($user_id, $ids, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->removePreferredTranslators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| Customer user ID. |
 **ids** | [**\QualificationClient\Model\IDCollectionRequest**](../Model/IDCollectionRequest.md)|  |
 **force** | [****](../Model/.md)| Pemanent deletion of the preferred translators | [optional]

### Return type

[**\QualificationClient\Model\QualificationResponse[]**](../Model/QualificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

