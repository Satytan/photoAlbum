<?php


namespace App;

use App\Controller\ControllerInterface;
use App\Controller\NotFoundController;

class App
{
    /**
     * @var ControllerInterface[]
     */
    private $controllers = [];

    /**
     * @param ControllerInterface $controller
     */
    public function addController(ControllerInterface $controller): void
    {
        $this->controllers[] = $controller;
    }

    /**
     * @param array $params
     *
     * @return string
     */
    public function run(array $params): string
    {
        $controller = $this->getController($params);

        return $controller->handle($params);
    }

    /**
     * @param array $params
     *
     * @return ControllerInterface
     */
    public function getController(array $params): ControllerInterface
    {
        foreach ($this->controllers as $controller) {
            if ($controller->isApplicable($params)) {
                return $controller;
            }
        }

        return new NotFoundController();
    }
}
