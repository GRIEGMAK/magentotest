<?php

namespace Icreative\Cms\Block;

use Magento\Framework\View\Element\Template;


class CustomWidgetFeature extends Template
{
    public function IndexAction() {
        $this->loadLayout(); // do this first
        $this->getLayout()->getBlock('head')->setTitle($this->__('My Title')); // You need to add this line.
        $this->renderLayout(); // render as usual
    }
}
