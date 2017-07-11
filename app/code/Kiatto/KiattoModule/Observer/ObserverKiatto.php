<?php
namespace Kiatto\KiattoModule\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
  public function execute(\Magento\Framework\Event\Observer $observer)
  {
     $displayText = $observer->getData();
     $displayText->setText('Execute event successfully.');

     return $this;
  }
}