<?php

declare(strict_types=1);

namespace Album\Core;

class Router implements ControllerInterface
{
    /**
     * @inheritDoc
     */
    public function execute(): void
    {
        $requestName = $_SERVER['REQUEST_URI'];
        $requestArray = explode('/', $requestName);
        $controllerName = '\Album\Controller\\';
        foreach ($requestArray as $item) {
            if ($item) {
                $controllerName = $controllerName . ucfirst($item);
            }
        }

        if (class_exists($controllerName)) {
            $route = new $controllerName;
            $route->execute();
        } else {
            echo '404';
        }
    }
}