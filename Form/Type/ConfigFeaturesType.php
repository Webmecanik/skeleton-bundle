<?php

declare(strict_types=1);

namespace MauticPlugin\SkeletonBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ConfigFeaturesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(
            'setting',
            ChoiceType::class,
            [
                'label'             => 'skeleton.setting',
                'label_attr'        => ['class' => 'control-label'],
                'required'          => true,
                'attr'              => [
                    'class' => 'form-control',
                ],
                'choices'           => [
                    'skeleton.hello'    => 'hello',
                    'skeleton.hi'       => 'hi',
                ],
            ]
        );
    }
}
