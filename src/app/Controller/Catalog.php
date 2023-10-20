<?php

declare(strict_types=1);

namespace Album\Controller;

use Album\Core\ControllerInterface;
use Album\View\CatalogOutput;

class Catalog implements ControllerInterface
{
    /**
     * @inheritDoc
     */
    public function execute(): void
    {
        $output = new CatalogOutput();
        $output->execute();
    }
}