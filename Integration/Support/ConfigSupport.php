<?php

declare(strict_types=1);

namespace MauticPlugin\SkeletonBundle\Integration\Support;

use Mautic\IntegrationsBundle\Integration\DefaultConfigFormTrait;
use Mautic\IntegrationsBundle\Integration\Interfaces\ConfigFormFeatureSettingsInterface;
use Mautic\IntegrationsBundle\Integration\Interfaces\ConfigFormInterface;
use MauticPlugin\SkeletonBundle\Form\Type\ConfigFeaturesType;
use MauticPlugin\SkeletonBundle\Integration\SkeletonBundleIntegration;

class ConfigSupport extends SkeletonBundleIntegration implements ConfigFormInterface, ConfigFormFeatureSettingsInterface
{
    use DefaultConfigFormTrait;

    public function getFeatureSettingsConfigFormName(): string
    {
        return ConfigFeaturesType::class;
    }
}
