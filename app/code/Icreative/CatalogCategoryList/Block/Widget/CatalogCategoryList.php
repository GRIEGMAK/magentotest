<?php

namespace Icreative\CatalogCategoryList\Block\Widget;

use Magento\Catalog\Model\CategoryFactory;

use Magento\Catalog\Model\CategoryRepository;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;
use Magento\Framework\View\Element\Template\Context;

class CatalogCategoryList extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    protected $_template = 'Icreative_CatalogCategoryList::category/widget/content/grid.phtml';

    /**
     * \Magento\Catalog\Model\CategoryFactory $categoryFactory
     */
    protected $_categoryRepository;

    /**
     * @param Context $context
     * @param CollectionFactory $categoryRepository
     * @param array $data
     */
    public function __construct(
        Context $context,
        CollectionFactory $categoryRepository,
        array $data = []
    )
    {
        $this->_categoryRepository = $categoryRepository;
        parent::__construct($context, $data);
    }

    /**
     * Retrieve current store categories
     *
     * @return \Magento\Framework\Data\Tree\Node\Collection|\Magento\Catalog\Model\Resource\Category\Collection|array
     */
    public function getCategoryCollection()
    {
        $collection = $this->_categoryRepository->create();
        $collection->addAttributeToSelect('*');
        $collection->addFieldToFilter('level', '2');
        $collection->setPageSize(10);
        return $collection;

    }

    public function getCategoryImage($categoryId)
    {
        $categoryIdElements = explode('-', $categoryId);
        $category           = $this->categoryRepository->get(end($categoryIdElements));
        $categoryImage       = $category->getImage();
        return $categoryImage;
    }

    public function canShowImage()
    {
        if ($this->getData('image') == 'image')
            return true;
        elseif ($this->getData('image') == 'no-image')
            return false;
    }
}
