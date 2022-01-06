<?php
namespace Icreative\CatalogProductsListOrder\Block;

use Magento\Catalog\Model\ProductRepository;
use Magento\Catalog\Model\ProductRepositoryFactory;
use Magento\Framework\Api\Search\SearchCriteriaFactory;
use Magento\Framework\Api\Search\SearchCriteriaInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class CatalogProductsListOrder extends Template
{
    /**
     * @var ProductRepository
     */
    protected $_productRepository;

    /**
     * @var SearchCriteriaInterface
     */

    protected $_searchCriteria;

    /**
     * @param ProductRepositoryFactory $productRepositoryFactory
     * @param SearchCriteriaFactory $searchCriteriaFactory
     */

    public function __construct(
        Context $context,
        ProductRepositoryFactory $productRepositoryFactory,
        SearchCriteriaFactory $searchCriteriaFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this-> _productRepository = $productRepositoryFactory->create();
        $this-> _searchCriteria = $searchCriteriaFactory->create();
    }


    public function getProductRepository()
    {
        return $this->_productRepository->getList($this->_searchCriteria)->getItems();
    }
}
