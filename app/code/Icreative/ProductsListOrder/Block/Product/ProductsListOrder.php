<?php
namespace Icreative\ProductListOrder\Block\Product;

use Magento\Catalog\Model\ResourceModel\Product\Collection;
use Magento\CatalogWidget\Block\Product\ProductsList;

/**
 * Class ProductsOrderList
 */
class ProductsOrderList
{

    /**
     * @param ProductsList $subject
     * @param Collection $result
     * @return Collection
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterCreateCollection(ProductsList $subject, Collection $result)
    {
        $result->getSelect()->order('cat_index_position asc');

        return $result;
    }
}
