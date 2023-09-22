<?php
/**
 * KeymanagementApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;
use \CyberSource\Logging\LogFactory as LogFactory;

/**
 * KeymanagementApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KeymanagementApi
{
    private static $logger = null;
    
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;

        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class()), $apiClient->merchantConfig->getLogConfiguration());
        }
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return KeymanagementApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation searchKeys
     *
     * Search Keys
     *
     * @param int $offset This allows you to specify the page offset from the resulting list resultset you want the records to be returned (optional)
     * @param int $limit This allows you to specify the total number of records to be returned off the resulting list resultset (optional)
     * @param string $sort This allows you to specify a comma separated list of fields in the order which the resulting list resultset must be sorted. (optional)
     * @param string[] $organizationIds List of Orgaization Ids to search. The maximum size of the organization Ids list is 1. The maximum length of Organization Id is 30. (optional)
     * @param string[] $keyIds List of Key Ids to search. The maximum size of the Key Ids list is 1 (optional)
     * @param string[] $keyTypes Key Type, Possible values -  certificate, password, pgp and scmp_api. When Key Type is provided atleast one more filter needs to be provided (optional)
     * @param \DateTime $expirationStartDate Expiry Filter Start Date. When Expiration Date filter is provided, atleast one more filter needs to be provided (optional)
     * @param \DateTime $expirationEndDate Expiry Filter End Date. When Expiration Date filter is provided, atleast one more filter needs to be provided (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchKeys($offset = null, $limit = null, $sort = null, $organizationIds = null, $keyIds = null, $keyTypes = null, $expirationStartDate = null, $expirationEndDate = null)
    {
        self::$logger->info('CALL TO METHOD searchKeys STARTED');
        list($response, $statusCode, $httpHeader) = $this->searchKeysWithHttpInfo($offset, $limit, $sort, $organizationIds, $keyIds, $keyTypes, $expirationStartDate, $expirationEndDate);
        self::$logger->info('CALL TO METHOD searchKeys ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation searchKeysWithHttpInfo
     *
     * Search Keys
     *
     * @param int $offset This allows you to specify the page offset from the resulting list resultset you want the records to be returned (optional)
     * @param int $limit This allows you to specify the total number of records to be returned off the resulting list resultset (optional)
     * @param string $sort This allows you to specify a comma separated list of fields in the order which the resulting list resultset must be sorted. (optional)
     * @param string[] $organizationIds List of Orgaization Ids to search. The maximum size of the organization Ids list is 1. The maximum length of Organization Id is 30. (optional)
     * @param string[] $keyIds List of Key Ids to search. The maximum size of the Key Ids list is 1 (optional)
     * @param string[] $keyTypes Key Type, Possible values -  certificate, password, pgp and scmp_api. When Key Type is provided atleast one more filter needs to be provided (optional)
     * @param \DateTime $expirationStartDate Expiry Filter Start Date. When Expiration Date filter is provided, atleast one more filter needs to be provided (optional)
     * @param \DateTime $expirationEndDate Expiry Filter End Date. When Expiration Date filter is provided, atleast one more filter needs to be provided (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchKeysWithHttpInfo($offset = null, $limit = null, $sort = null, $organizationIds = null, $keyIds = null, $keyTypes = null, $expirationStartDate = null, $expirationEndDate = null)
    {
        if (!is_null($expirationStartDate) && !preg_match("/yyyy-mm-dd/", $expirationStartDate)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"expirationStartDate\" when calling KeymanagementApi.searchKeys, must conform to the pattern /yyyy-mm-dd/.");
            throw new \InvalidArgumentException('Invalid value for \"expirationStartDate\" when calling KeymanagementApi.searchKeys, must conform to the pattern /yyyy-mm-dd/.');
        }

        if (!is_null($expirationEndDate) && !preg_match("/yyyy-mm-dd/", $expirationEndDate)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"expirationEndDate\" when calling KeymanagementApi.searchKeys, must conform to the pattern /yyyy-mm-dd/.");
            throw new \InvalidArgumentException('Invalid value for \"expirationEndDate\" when calling KeymanagementApi.searchKeys, must conform to the pattern /yyyy-mm-dd/.');
        }

        // parse inputs
        $resourcePath = "/kms/v2/keys";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // query params
        if (is_array($organizationIds)) {
            $organizationIds = $this->apiClient->getSerializer()->serializeCollection($organizationIds, 'csv', true);
        }
        if ($organizationIds !== null) {
            $queryParams['organizationIds'] = $this->apiClient->getSerializer()->toQueryValue($organizationIds);
        }
        // query params
        if (is_array($keyIds)) {
            $keyIds = $this->apiClient->getSerializer()->serializeCollection($keyIds, 'csv', true);
        }
        if ($keyIds !== null) {
            $queryParams['keyIds'] = $this->apiClient->getSerializer()->toQueryValue($keyIds);
        }
        // query params
        if (is_array($keyTypes)) {
            $keyTypes = $this->apiClient->getSerializer()->serializeCollection($keyTypes, 'csv', true);
        }
        if ($keyTypes !== null) {
            $queryParams['keyTypes'] = $this->apiClient->getSerializer()->toQueryValue($keyTypes);
        }
        // query params
        if ($expirationStartDate !== null) {
            $queryParams['expirationStartDate'] = $this->apiClient->getSerializer()->toQueryValue($expirationStartDate);
        }
        // query params
        if ($expirationEndDate !== null) {
            $queryParams['expirationEndDate'] = $this->apiClient->getSerializer()->toQueryValue($expirationEndDate);
        }
        if ('GET' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : GET $resourcePath");
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse2001");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2001',
                '/kms/v2/keys'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2001', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4006', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse5002', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
