<?php

namespace Agorate\PimcoreDeeplBundle\EventListener;

use Pimcore\Event\BundleManager\PathsEvent;

class AdminInterfaceListener
{
    /**
     * @param \Pimcore\Event\BundleManager\PathsEvent $event
     */
    public function addJsFiles(PathsEvent $event): void
    {
        $event->setPaths(
            array_merge(
                $event->getPaths(),
                [
                    '/bundles/pimcoredeepl/js/deepl-translation/startup.js',
                ]
            )
        );
    }
}
