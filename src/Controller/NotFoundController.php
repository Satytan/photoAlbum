<?php


namespace App\Controller;

class NotFoundController implements ControllerInterface
{
    public function isApplicable(array $params): bool
    {
        return true;
    }

    public function handle(array $params): string
    {
        $message = '404 page not found';
        header($message, true, 404);

        return '<h1>' . $message . '</h1>';
    }
}
