# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.1.2
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
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
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

$apiInstance = new Swagger\Client\Api\QualificationApi(
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
    echo 'Exception when calling QualificationApi->createWorkerQualification: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*QualificationApi* | [**createWorkerQualification**](docs/Api/QualificationApi.md#createworkerqualification) | **POST** /workers/{worker_id}/qualifications/{qualification_type} | Create a new qualification
*QualificationApi* | [**getQualifications**](docs/Api/QualificationApi.md#getqualifications) | **GET** /qualifications/{qualification_type}/workers | Get all qualifications of the given qualification type
*QualificationApi* | [**updateWorkerQualification**](docs/Api/QualificationApi.md#updateworkerqualification) | **PATCH** /workers/{worker_id}/qualifications/{qualification_type}/{qualification_id} | Update qualification
*QualificationTypeApi* | [**createWorkerQualification**](docs/Api/QualificationTypeApi.md#createworkerqualification) | **POST** /workers/{worker_id}/qualifications/{qualification_type} | Create a new qualification
*QualificationTypeApi* | [**getQualificationTypes**](docs/Api/QualificationTypeApi.md#getqualificationtypes) | **GET** /qualifications | Get all types of qualifications
*QualificationTypeApi* | [**updateWorkerQualification**](docs/Api/QualificationTypeApi.md#updateworkerqualification) | **PATCH** /workers/{worker_id}/qualifications/{qualification_type}/{qualification_id} | Update qualification
*StatusApi* | [**getStatus**](docs/Api/StatusApi.md#getstatus) | **GET** /status | Returns the API version
*WorkerApi* | [**createWorker**](docs/Api/WorkerApi.md#createworker) | **POST** /workers | Create a new worker
*WorkerApi* | [**createWorkerQualification**](docs/Api/WorkerApi.md#createworkerqualification) | **POST** /workers/{worker_id}/qualifications/{qualification_type} | Create a new qualification
*WorkerApi* | [**updateWorkerQualification**](docs/Api/WorkerApi.md#updateworkerqualification) | **PATCH** /workers/{worker_id}/qualifications/{qualification_type}/{qualification_id} | Update qualification


## Documentation For Models

 - [BadRequest](docs/Model/BadRequest.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [QualificationRequest](docs/Model/QualificationRequest.md)
 - [QualificationResponse](docs/Model/QualificationResponse.md)
 - [QualificationResponseUser](docs/Model/QualificationResponseUser.md)
 - [QualificationTypeResponse](docs/Model/QualificationTypeResponse.md)
 - [Ranks](docs/Model/Ranks.md)
 - [Status](docs/Model/Status.md)
 - [UserResponse](docs/Model/UserResponse.md)
 - [WorkerQualificationResponse](docs/Model/WorkerQualificationResponse.md)
 - [WorkerRequest](docs/Model/WorkerRequest.md)
 - [WorkerResponse](docs/Model/WorkerResponse.md)
 - [PostQualificationRequest](docs/Model/PostQualificationRequest.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




