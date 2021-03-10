<?php
/**
 * 
 * @category  Netsmartz
 * @package   Netsmartz_AdditionalField
 * @author    Rajwinder
 * @copyright Copyright (c) 2021 Netsmartz Limited
 */
namespace Netsmartz\AdditionalField\Plugin\Cart;
class AbstractCart
{
    /*
    *   Override cart/item/default.phtml file
    *   \Magento\Checkout\Block\Cart\AbstractCart $subject
    *   $result
    */
    public function afterGetItemRenderer(\Magento\Checkout\Block\Cart\AbstractCart $subject, $result)
    {
        $result->setTemplate('Netsmartz_AdditionalField::cart/item/default.phtml');
        return $result;
    }
} ?>