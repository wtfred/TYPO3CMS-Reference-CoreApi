<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Backend\EventListener;

use TYPO3\CMS\Backend\Module\BeforeModuleCreationEvent;

final class MyEventListener
{
    public function __invoke(BeforeModuleCreationEvent $event): void
    {
        // Change module icon of page module
        if ($event->getIdentifier() === 'web_layout') {
            $event->setConfigurationValue('iconIdentifier', 'my-custom-icon-identifier');
        }
    }
}
