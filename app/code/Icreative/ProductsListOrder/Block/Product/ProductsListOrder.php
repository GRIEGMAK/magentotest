<?php
namespace Icreative\ProductsListOrder\Block\Product;

use Magento\Catalog\Model\ProductRepository;
use Magento\Catalog\Model\ResourceModel\Product\Collection;
use Magento\CatalogWidget\Block\Product\ProductsList;
use Magento\Framework\Api\Search\SearchCriteriaFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

/**
 * Class ProductsOrderList
 */
class ProductsListOrder
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


}
