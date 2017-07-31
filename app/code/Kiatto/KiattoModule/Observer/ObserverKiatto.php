<?php
namespace Kiatto\KiattoModule\Observer;
use Magento\Framework\Event\ObserverInterface;

class ObserverKiatto implements ObserverInterface
{
    protected $scopeConfig;
    
  public function __construct( \Magento\Framework\ObjectManagerInterface $objectManager ,
                                \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig )
  {
      $this->scopeConfig = $objectManager;
      $this->scopeConfig = $scopeConfig;
      
  }

  public function execute(\Magento\Framework\Event\Observer $observer)
{
  $observed_product =  $observer->getData('salable');
    
  $is_store_saleable = $this->scopeConfig->getValue('issalesable/option/visibile',\Magento\Store\Model\ScopeInterface::SCOPE_STORES);
  
  
  
        if(!$is_store_saleable)
      {
        $observed_product->setIsSalable($is_store_saleable);
      }
        return $this;
               
        }
  }
