<?php
/**
 * Index Block.
 * @category  Netsmartz
 * @package   Netsmartz_ElasticSearch
 * @author    Rajwinder
 * @copyright Copyright (c) 2021 Netsmartz Limited
 */
namespace Netsmartz\ElasticSearch\Block;


class Index extends \Magento\Framework\View\Element\Template
{
  /**
   * @var \Magento\Framework\App\Config\ScopeConfigInterface
   */
   protected $scopeConfig;

   /**
   * ElasticSearch URL config path
   */
   const ELASTIC_URL_PATH = 'elasticsearch/general/elastic_url';

   /**
     * Index constructor
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
   public function __construct(
    \Magento\Framework\View\Element\Template\Context $context,
    \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
   {
      $this->scopeConfig = $scopeConfig;
      parent::__construct($context);
   }
    /**
     * Get product Data from Elasticsearch
     *
     * @return array
     */
	public function getProductsApi(){

      // sample elastic search url: "localhost:9200/magentocgi_product_1_v2/_search?pretty&q=*:*"
      $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
      $elasticsearchURL = $this->scopeConfig->getValue(self::ELASTIC_URL_PATH, $storeScope);
			$queryURL= $elasticsearchURL;
			$ch = curl_init($queryURL);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			$result =  json_decode($result, true);
            return $result['hits']['hits'];
       }

}