<?php

return [
    'name'        => 'SkeletonBundle',
    'description' => 'Skeleton bundle for Mautic.',
    'version'     => '1.0',
    'author'      => 'Webmecanik',
    'services'    => [
        'integrations' => [
            // Basic definitions with name, display name and icon
            'mautic.integration.skeletonbundle' => [
                'class' => \MauticPlugin\SkeletonBundle\Integration\SkeletonBundleIntegration::class,
                'tags'  => [
                    'mautic.integration',
                    'mautic.basic_integration',
                ],
            ],
            // Provides the form types to use for the configuration UI
            'skeletonbundle.integration.configuration' => [
                'class'     => \MauticPlugin\SkeletonBundle\Integration\Support\ConfigSupport::class,
                'tags'      => [
                    'mautic.config_integration',
                ],
            ],
        ],
    ],
];
