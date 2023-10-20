<?php

declare(strict_types=1);

namespace Album\Core;

interface ControllerInterface
{
    /**
     * This is basic controller which render all the pages on the website.
     *
     * @return void
     */
    public function execute(): void;
}