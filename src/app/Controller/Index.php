<?php

namespace Album\Controller;

class Index implements \Album\Core\ControllerInterface
{
    /**
     * @inheritDoc
     */
    public function execute(): void
    {
        header('Location: catalog');
    }
}