<?php 
namespace Kiatto\KiattoModule\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface,
\Mageplaza\HelloWorld\Model\Api\Data\PostInterface
{
    const CACHE_TAG = 'kiatto_kiattomodule_post';

    protected $_cacheTag = 'kiatto_kiattomodule_post';// identificatore per cache

    protected $_eventPrefix = 'kiatto_kiattomodule_post';// per eventuali eventi da attivare

    protected function _construct()
    {
        $this->_init('Kiatto\KiattoModule\Model\ResourceModel\Post');// model per recupero delle info DB 
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}