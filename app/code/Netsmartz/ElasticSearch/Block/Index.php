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
     * Get product Data from Elasticsearch
     *
     * @return array
     */
	public function getProductsApi(){
       	
			$elasticsearchURL= "localhost:9200/magentocgi_product_1_v2/_search?pretty&q=*:*";
			$ch = curl_init($elasticsearchURL);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			$result =  json_decode($result, true);
            return $result['hits']['hits'];
       }

}