<?php

namespace Icreative\Sales\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class SalesAmountObserver implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $payment = $observer->getEvent()->getData('payment');
        var_dump($payment);
    }
}
