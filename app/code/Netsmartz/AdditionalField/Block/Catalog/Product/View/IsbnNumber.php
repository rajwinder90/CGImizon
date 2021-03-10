<?php
/**
 * 
 * @category  Netsmartz
 * @package   Netsmartz_AdditionalField
 * @author    Rajwinder
 * @copyright Copyright (c) 2021 Netsmartz Limited
 */
namespace Netsmartz\AdditionalField\Block\Catalog\Product\View;

/**
 * Product IsbnNumber block
 */
class IsbnNumber extends \Magento\Framework\View\Element\Template
{
    

    /**
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry;

    /**
     * @param Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     * @codingStandardsIgnoreStart
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct(
            $context,
            $data
        );
    }

    

    /**
     * Retrieve current product model
     *
     * @return \Magento\Catalog\Model\Product
     */
    public function getProduct()
    {
       
        return $this->_coreRegistry->registry('product');
    }
   
}
