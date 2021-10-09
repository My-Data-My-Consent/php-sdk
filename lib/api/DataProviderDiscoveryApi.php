<?php
/**
 * DataProviderDiscoveryApi
 * PHP version 7.3
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * My Data My Consent - Developer API
 *
 * Unleashing the power of data consent
 *
 * The version of the OpenAPI document: v1
 * Contact: support@mydatamyconsent.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MyDataMyConsent\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MyDataMyConsent\ApiException;
use MyDataMyConsent\Configuration;
use MyDataMyConsent\HeaderSelector;
use MyDataMyConsent\ObjectSerializer;

/**
 * DataProviderDiscoveryApi Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DataProviderDiscoveryApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation v1DataProvidersGet
     *
     * Discover All Data Providers in MDMC by country and filters.
     *
     * @param  string $account_type account_type (optional)
     * @param  string $document_type document_type (optional)
     * @param  string $organization_category organization_category (optional)
     * @param  string $country country (optional, default to 'IN')
     *
     * @throws \MyDataMyConsent\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function v1DataProvidersGet($account_type = null, $document_type = null, $organization_category = null, $country = 'IN')
    {
        list($response) = $this->v1DataProvidersGetWithHttpInfo($account_type, $document_type, $organization_category, $country);
        return $response;
    }

    /**
     * Operation v1DataProvidersGetWithHttpInfo
     *
     * Discover All Data Providers in MDMC by country and filters.
     *
     * @param  string $account_type (optional)
     * @param  string $document_type (optional)
     * @param  string $organization_category (optional)
     * @param  string $country (optional, default to 'IN')
     *
     * @throws \MyDataMyConsent\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1DataProvidersGetWithHttpInfo($account_type = null, $document_type = null, $organization_category = null, $country = 'IN')
    {
        $request = $this->v1DataProvidersGetRequest($account_type, $document_type, $organization_category, $country);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1DataProvidersGetAsync
     *
     * Discover All Data Providers in MDMC by country and filters.
     *
     * @param  string $account_type (optional)
     * @param  string $document_type (optional)
     * @param  string $organization_category (optional)
     * @param  string $country (optional, default to 'IN')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1DataProvidersGetAsync($account_type = null, $document_type = null, $organization_category = null, $country = 'IN')
    {
        return $this->v1DataProvidersGetAsyncWithHttpInfo($account_type, $document_type, $organization_category, $country)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1DataProvidersGetAsyncWithHttpInfo
     *
     * Discover All Data Providers in MDMC by country and filters.
     *
     * @param  string $account_type (optional)
     * @param  string $document_type (optional)
     * @param  string $organization_category (optional)
     * @param  string $country (optional, default to 'IN')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1DataProvidersGetAsyncWithHttpInfo($account_type = null, $document_type = null, $organization_category = null, $country = 'IN')
    {
        $returnType = 'object';
        $request = $this->v1DataProvidersGetRequest($account_type, $document_type, $organization_category, $country);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1DataProvidersGet'
     *
     * @param  string $account_type (optional)
     * @param  string $document_type (optional)
     * @param  string $organization_category (optional)
     * @param  string $country (optional, default to 'IN')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function v1DataProvidersGetRequest($account_type = null, $document_type = null, $organization_category = null, $country = 'IN')
    {

        $resourcePath = '/v1/data-providers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($account_type !== null) {
            if('form' === 'form' && is_array($account_type)) {
                foreach($account_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['accountType'] = $account_type;
            }
        }
        // query params
        if ($document_type !== null) {
            if('form' === 'form' && is_array($document_type)) {
                foreach($document_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['documentType'] = $document_type;
            }
        }
        // query params
        if ($organization_category !== null) {
            if('form' === 'form' && is_array($organization_category)) {
                foreach($organization_category as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['organizationCategory'] = $organization_category;
            }
        }
        // query params
        if ($country !== null) {
            if('form' === 'form' && is_array($country)) {
                foreach($country as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['country'] = $country;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires Bearer (JWT) authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'GET',
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
