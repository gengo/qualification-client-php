<?php
/**
 * CustomerApi
 * PHP version 5
 *
 * @category Class
 * @package  QualificationClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * qualification-client
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QualificationClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use QualificationClient\ApiException;
use QualificationClient\Configuration;
use QualificationClient\HeaderSelector;
use QualificationClient\ObjectSerializer;

/**
 * CustomerApi Class Doc Comment
 *
 * @category Class
 * @package  QualificationClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation addPreferredTranslators
     *
     * Add preferred translators
     *
     * @param  int $user_id Customer user ID. (required)
     * @param  \QualificationClient\Model\PreferredTranslatorRequest[] $preferred_translators preferred_translators (required)
     *
     * @throws \QualificationClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \QualificationClient\Model\QualificationResponse[]
     */
    public function addPreferredTranslators($user_id, $preferred_translators)
    {
        list($response) = $this->addPreferredTranslatorsWithHttpInfo($user_id, $preferred_translators);
        return $response;
    }

    /**
     * Operation addPreferredTranslatorsWithHttpInfo
     *
     * Add preferred translators
     *
     * @param  int $user_id Customer user ID. (required)
     * @param  \QualificationClient\Model\PreferredTranslatorRequest[] $preferred_translators (required)
     *
     * @throws \QualificationClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \QualificationClient\Model\QualificationResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function addPreferredTranslatorsWithHttpInfo($user_id, $preferred_translators)
    {
        $returnType = '\QualificationClient\Model\QualificationResponse[]';
        $request = $this->addPreferredTranslatorsRequest($user_id, $preferred_translators);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\QualificationClient\Model\QualificationResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\QualificationClient\Model\BadRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addPreferredTranslatorsAsync
     *
     * Add preferred translators
     *
     * @param  int $user_id Customer user ID. (required)
     * @param  \QualificationClient\Model\PreferredTranslatorRequest[] $preferred_translators (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addPreferredTranslatorsAsync($user_id, $preferred_translators)
    {
        return $this->addPreferredTranslatorsAsyncWithHttpInfo($user_id, $preferred_translators)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addPreferredTranslatorsAsyncWithHttpInfo
     *
     * Add preferred translators
     *
     * @param  int $user_id Customer user ID. (required)
     * @param  \QualificationClient\Model\PreferredTranslatorRequest[] $preferred_translators (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addPreferredTranslatorsAsyncWithHttpInfo($user_id, $preferred_translators)
    {
        $returnType = '\QualificationClient\Model\QualificationResponse[]';
        $request = $this->addPreferredTranslatorsRequest($user_id, $preferred_translators);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'addPreferredTranslators'
     *
     * @param  int $user_id Customer user ID. (required)
     * @param  \QualificationClient\Model\PreferredTranslatorRequest[] $preferred_translators (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addPreferredTranslatorsRequest($user_id, $preferred_translators)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling addPreferredTranslators'
            );
        }
        // verify the required parameter 'preferred_translators' is set
        if ($preferred_translators === null || (is_array($preferred_translators) && count($preferred_translators) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $preferred_translators when calling addPreferredTranslators'
            );
        }

        $resourcePath = '/customer/{user_id}/translators/add_preferred';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user_id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($preferred_translators)) {
            $_tempBody = $preferred_translators;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation removePreferredTranslators
     *
     * Remove preferred translators
     *
     * @param  int $user_id Customer user ID. (required)
     * @param  \QualificationClient\Model\IDCollectionRequest $ids ids (required)
     *
     * @throws \QualificationClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \QualificationClient\Model\QualificationResponse[]
     */
    public function removePreferredTranslators($user_id, $ids)
    {
        list($response) = $this->removePreferredTranslatorsWithHttpInfo($user_id, $ids);
        return $response;
    }

    /**
     * Operation removePreferredTranslatorsWithHttpInfo
     *
     * Remove preferred translators
     *
     * @param  int $user_id Customer user ID. (required)
     * @param  \QualificationClient\Model\IDCollectionRequest $ids (required)
     *
     * @throws \QualificationClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \QualificationClient\Model\QualificationResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function removePreferredTranslatorsWithHttpInfo($user_id, $ids)
    {
        $returnType = '\QualificationClient\Model\QualificationResponse[]';
        $request = $this->removePreferredTranslatorsRequest($user_id, $ids);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\QualificationClient\Model\QualificationResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\QualificationClient\Model\BadRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation removePreferredTranslatorsAsync
     *
     * Remove preferred translators
     *
     * @param  int $user_id Customer user ID. (required)
     * @param  \QualificationClient\Model\IDCollectionRequest $ids (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removePreferredTranslatorsAsync($user_id, $ids)
    {
        return $this->removePreferredTranslatorsAsyncWithHttpInfo($user_id, $ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation removePreferredTranslatorsAsyncWithHttpInfo
     *
     * Remove preferred translators
     *
     * @param  int $user_id Customer user ID. (required)
     * @param  \QualificationClient\Model\IDCollectionRequest $ids (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removePreferredTranslatorsAsyncWithHttpInfo($user_id, $ids)
    {
        $returnType = '\QualificationClient\Model\QualificationResponse[]';
        $request = $this->removePreferredTranslatorsRequest($user_id, $ids);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'removePreferredTranslators'
     *
     * @param  int $user_id Customer user ID. (required)
     * @param  \QualificationClient\Model\IDCollectionRequest $ids (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function removePreferredTranslatorsRequest($user_id, $ids)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling removePreferredTranslators'
            );
        }
        // verify the required parameter 'ids' is set
        if ($ids === null || (is_array($ids) && count($ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ids when calling removePreferredTranslators'
            );
        }

        $resourcePath = '/customer/{user_id}/translators/remove_preferred';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user_id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($ids)) {
            $_tempBody = $ids;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
