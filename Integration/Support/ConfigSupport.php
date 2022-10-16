<?php

declare(strict_types=1);

namespace MauticPlugin\SkeletonBundle\Integration\Support;

use Mautic\IntegrationsBundle\Integration\DefaultConfigFormTrait;
use Mautic\IntegrationsBundle\Integration\Interfaces\ConfigFormInterface;
use MauticPlugin\SkeletonBundle\Integration\SkeletonBundleIntegration;

class ConfigSupport extends SkeletonBundleIntegration implements ConfigFormInterface
{
    use DefaultConfigFormTrait;
}
