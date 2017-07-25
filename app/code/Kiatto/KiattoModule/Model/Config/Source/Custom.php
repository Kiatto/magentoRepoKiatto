<?php

namespace Kiatto\KiattoModule\Model\Config\Source;

class Custom implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {

        return [
            ['value' => 0, 'label' => __('Yes')],
            ['value' => 1, 'label' => __('No')],
            
        ];
    }
}