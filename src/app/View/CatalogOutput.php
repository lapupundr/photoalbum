<?php

declare(strict_types=1);

namespace Album\View;

use Album\Core\ControllerInterface;

class CatalogOutput implements ControllerInterface
{
    /**
     * @inheritDoc
     */
    public function execute(): void
    {

        echo 'catalog output';
    }
}