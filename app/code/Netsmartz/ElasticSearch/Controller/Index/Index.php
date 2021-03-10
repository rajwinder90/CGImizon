<?php
/**
 * Index Controller.
 * @category  Netsmartz
 * @package   Netsmartz_ElasticSearch
 * @author    Rajwinder
 * @copyright Copyright (c) 2021 Netsmartz Limited
 */
namespace Netsmartz\ElasticSearch\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	/**
     * @var \Magento\Framework\View\Result\PageFactory 
     */
	protected $_pageFactory;

	/**
	 * Index constructor.
	 *
	 * @param \Magento\Framework\App\Action\Context $context
	 * @param \Magento\Framework\View\Result\PageFactory $pageFactory
	 */
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

    /**
     * @inheritDoc
     */
	public function execute()
	{
		return $this->_pageFactory->create();
	}
}
