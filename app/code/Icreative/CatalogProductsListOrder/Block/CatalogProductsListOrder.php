<?php
namespace Icreative\CatalogProductsListOrder\Block;

use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Block\Product\ListProduct;
use Magento\Catalog\Helper\Output as OutputHelper;
use Magento\Catalog\Model\Layer\Resolver;
use Magento\Catalog\Model\ProductRepository;
use Magento\Catalog\Model\ProductRepositoryFactory;
use Magento\Framework\Api\Search\SearchCriteriaFactory;
use Magento\Framework\Api\Search\SearchCriteriaInterface;
use Magento\Framework\Data\Helper\PostHelper;
use Magento\Framework\Url\Helper\Data;
use Magento\Framework\View\Element\Template;
//use Magento\Framework\View\Element\Template\Context;
use Magento\Catalog\Block\Product\Context;


class CatalogProductsListOrder extends ListProduct
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
     * @param Context $context
     * @param PostHelper $postDataHelper
     * @param Resolver $layerResolver
     * @param CategoryRepositoryInterface $categoryRepository
     * @param Data $urlHelper
     * @param array $data
     * @param OutputHelper|null $outputHelper
     * @param ProductRepositoryFactory $productRepositoryFactory
     * @param SearchCriteriaFactory $searchCriteriaFactory
     */

    public function __construct(
        Context $context,
        PostHelper $postDataHelper,
        Resolver $layerResolver,
        CategoryRepositoryInterface $categoryRepository,
        Data $urlHelper,
        array $data = [],
        ?OutputHelper $outputHelper = null,
        ProductRepositoryFactory $productRepositoryFactory,
        SearchCriteriaFactory $searchCriteriaFactory
    )
    {
        parent::__construct($context, $postDataHelper, $layerResolver, $categoryRepository, $urlHelper, $data, $outputHelper);
        $this-> _productRepository = $productRepositoryFactory->create();
        $this-> _searchCriteria = $searchCriteriaFactory->create();
    }


    public function getProductRepository()
    {
        return $this->_productRepository->getList($this->_searchCriteria
            ->setPageSize(3)
        )->getItems();
    }

}
//class CatalogProductsListOrder extends Template
//{
//    /**
//     * @var ProductRepository
//     */
//    protected $_productRepository;
//
//    /**
//     * @var SearchCriteriaInterface
//     */
//
//    protected $_searchCriteria;
//
//    /**
//     * @param ProductRepositoryFactory $productRepositoryFactory
//     * @param SearchCriteriaFactory $searchCriteriaFactory
//     */
//
//    public function __construct(
//        Context $context,
//        ProductRepositoryFactory $productRepositoryFactory,
//        SearchCriteriaFactory $searchCriteriaFactory,
//        array $data = []
//    )
//    {
//        parent::__construct($context, $data);
//        $this-> _productRepository = $productRepositoryFactory->create();
//        $this-> _searchCriteria = $searchCriteriaFactory->create();
//    }
//
//
//    public function getProductRepository()
//    {
//        return $this->_productRepository->getList($this->_searchCriteria
//            ->setPageSize(3)
//        )->getItems();
//    }
//}

