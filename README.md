# QualificationClient
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.2.22
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/gengo/qualification-client-php.git"
    }
  ],
  "require": {
    "gengo/qualification-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/QualificationClient/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomerApi* | [**addPreferredTranslators**](docs/Api/CustomerApi.md#addpreferredtranslators) | **PATCH** /customer/{user_id}/translators/add_preferred | Add preferred translators
*CustomerApi* | [**removePreferredTranslators**](docs/Api/CustomerApi.md#removepreferredtranslators) | **PATCH** /customer/{user_id}/translators/remove_preferred | Remove preferred translators
*QualificationApi* | [**createWorkerQualification**](docs/Api/QualificationApi.md#createworkerqualification) | **POST** /workers/{worker_id}/qualifications/{qualification_type} | Create a new qualification
*QualificationApi* | [**endTranslatorProbation**](docs/Api/QualificationApi.md#endtranslatorprobation) | **PATCH** /workers/qualifications/probations/end | Remove worker from probation
*QualificationApi* | [**getQualificationHistory**](docs/Api/QualificationApi.md#getqualificationhistory) | **GET** /qualifications/{qualification_type}/{qualification_id}/history | Get qualification history
*QualificationApi* | [**getQualificationTypes**](docs/Api/QualificationApi.md#getqualificationtypes) | **GET** /qualifications | Get all types of qualifications
*QualificationApi* | [**getQualifications**](docs/Api/QualificationApi.md#getqualifications) | **GET** /qualifications/{qualification_type}/workers | Get all qualifications of the given qualification type
*QualificationApi* | [**getWorkerQualificationsHistory**](docs/Api/QualificationApi.md#getworkerqualificationshistory) | **GET** /workers/{worker_id}/qualification-history/{qualification_type} | Get worker&#39;s qualifications history
*QualificationApi* | [**revokeWorkerQualification**](docs/Api/QualificationApi.md#revokeworkerqualification) | **PATCH** /workers/qualifications/revoke | Revoke worker qualification
*QualificationApi* | [**startTranslatorProbation**](docs/Api/QualificationApi.md#starttranslatorprobation) | **PATCH** /workers/qualifications/probations/start | Place worker on probation
*QualificationApi* | [**unrevokeWorkerQualification**](docs/Api/QualificationApi.md#unrevokeworkerqualification) | **PATCH** /workers/qualifications/unrevoke | Unrevoke worker qualification
*QualificationApi* | [**updateWorkerQualification**](docs/Api/QualificationApi.md#updateworkerqualification) | **PATCH** /workers/{worker_id}/qualifications/{qualification_type}/{qualification_id} | Update qualification
*StatusApi* | [**getStatus**](docs/Api/StatusApi.md#getstatus) | **GET** /status | Returns the API version
*WorkerApi* | [**createWorker**](docs/Api/WorkerApi.md#createworker) | **POST** /workers | Create a new worker
*WorkerApi* | [**createWorkerDomain**](docs/Api/WorkerApi.md#createworkerdomain) | **POST** /workers/{worker_id}/domains | Add a worker specialization
*WorkerApi* | [**getWorkerQualifications**](docs/Api/WorkerApi.md#getworkerqualifications) | **GET** /workers/{worker_id}/qualifications | Get worker qualifications
*WorkerApi* | [**getWorkers**](docs/Api/WorkerApi.md#getworkers) | **GET** /workers | Get workers


## Documentation For Models

 - [BadRequest](docs/Model/BadRequest.md)
 - [HistoryStatus](docs/Model/HistoryStatus.md)
 - [IDCollectionRequest](docs/Model/IDCollectionRequest.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [PreferredTranslatorRequest](docs/Model/PreferredTranslatorRequest.md)
 - [ProbationResponse](docs/Model/ProbationResponse.md)
 - [QualificationHistoryResponse](docs/Model/QualificationHistoryResponse.md)
 - [QualificationRequest](docs/Model/QualificationRequest.md)
 - [QualificationResponse](docs/Model/QualificationResponse.md)
 - [QualificationResponseUser](docs/Model/QualificationResponseUser.md)
 - [QualificationType](docs/Model/QualificationType.md)
 - [QualificationTypeResponse](docs/Model/QualificationTypeResponse.md)
 - [Ranks](docs/Model/Ranks.md)
 - [RevokeQualificationRequest](docs/Model/RevokeQualificationRequest.md)
 - [Status](docs/Model/Status.md)
 - [UserResponse](docs/Model/UserResponse.md)
 - [WorkerDomain](docs/Model/WorkerDomain.md)
 - [WorkerQualificationResponse](docs/Model/WorkerQualificationResponse.md)
 - [WorkerQualificationsHistoryResponse](docs/Model/WorkerQualificationsHistoryResponse.md)
 - [WorkerRequest](docs/Model/WorkerRequest.md)
 - [WorkerResponse](docs/Model/WorkerResponse.md)
 - [PostQualificationRequest](docs/Model/PostQualificationRequest.md)
 - [ProbationRequest](docs/Model/ProbationRequest.md)
 - [RemovePreferredTranslatorRequest](docs/Model/RemovePreferredTranslatorRequest.md)
 - [UnrevokeQualificationRequest](docs/Model/UnrevokeQualificationRequest.md)
 - [WorkerDomainRequest](docs/Model/WorkerDomainRequest.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




