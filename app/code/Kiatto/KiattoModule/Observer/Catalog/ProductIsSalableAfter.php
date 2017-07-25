<?php


namespace Kiatto\Kiattomodule\Observer\Catalog;

class ProductIsSalableAfter implements \Magento\Framework\Event\ObserverInterface
{

    /**
     * Execute observer
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(
        \Magento\Framework\Event\Observer $observer
    ) {
        $product = $observer->getProduct();
        $salable = $observer->getSalable(); 
        $observed =  $observer->getData('$this->salable');
        if($product->getIsSalable())
        {
            $salable->setIsSalable(true);
        }
        return $this;
        
        }
        
    }
