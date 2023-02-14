<?php declare(strict_types=1);

namespace SoundDesign\DataResolver;

use Shopware\Core\Content\Cms\Aggregate\CmsSlot\CmsSlotEntity;
use Shopware\Core\Content\Cms\DataResolver\Element\AbstractCmsElementResolver;
use Shopware\Core\Content\Cms\DataResolver\Element\ElementDataCollection;
use Shopware\Core\Content\Cms\DataResolver\ResolverContext\ResolverContext;
use Shopware\Core\Content\Cms\DataResolver\CriteriaCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Content\Media\MediaDefinition;
use Shopware\Core\Content\Media\MediaEntity;

class DailyMotionCmsElementResolver extends AbstractCmsElementResolver
{
    public function getType(): string
    {
        return 'dailymotion';
    }

    public function collect(CmsSlotEntity $slot, ResolverContext $resolverContext): ?CriteriaCollection
    {
        $config = $slot->getFieldConfig();
        $myCustomMedia = $config->get('myCustomMedia');

        if (!$myCustomMedia) {
            return null;
        }

        $mediaId = $myCustomMedia->getValue();

        $criteria = new Criteria([$mediaId]);

        var_dump( $criteria);
        $criteriaCollection = new CriteriaCollection();
        $criteriaCollection->add('media_' . $slot->getUniqueIdentifier(), MediaDefinition::class, $criteria);

        return $criteriaCollection;
    }

    public function enrich(CmsSlotEntity $slot, ResolverContext $resolverContext, ElementDataCollection $result): void
    {
        $config = $slot->getFieldConfig();
        $myCustomApiPayload = $config->get('myCustomApiPayload');

        var_dump($myCustomApiPayload);
        // perform some external api call with the payload `myCustomApiPayload`
        // $myCustomAPI = new MyCustomAPI();
        // $response    = $myCustomAPI->query($myCustomApiPayload);

        // if ($response) {
        //     $slot->setData($response);
        // }
    }
}