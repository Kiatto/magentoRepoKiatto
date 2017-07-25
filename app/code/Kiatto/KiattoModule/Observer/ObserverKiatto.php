<?php
namespace Kiatto\KiattoModule\Observer;
use Magento\Framework\Event\ObserverInterface;

class ObserverKiatto implements ObserverInterface
{
  public function __construct()
  {
    
  }

  public function execute(\Magento\Framework\Event\Observer $observer)
  {
    $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    //echo $objectManager->get('Magento\Framework\App\Config\ScopeConfigInterface')
    //        ->getValue('sales/general/issaleable/issaleable/visibile');
    //$object = \Magento\Framework\DataObject(['product' => $this, 'is_salable' => $salable]);
        
    $observed =  $observer->getData('salable');
    /*if($observer){
            echo "observer";
        }
        else{
            echo "non observer";
        }
    */
      $product = $observer->getProduct();
        $salable = $observer->getSalable(); 
        $observed =  $observer->getData('$this->salable');
        if($product->getIsSalable())
        {
            $salable->setIsSalable(false);
        }
        return $this;
        
        }
  }
