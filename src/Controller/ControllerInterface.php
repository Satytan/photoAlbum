<?php


namespace App\Controller;

interface ControllerInterface
{
    public function isApplicable(array $params): bool;
    public function handle(array $params): string;
}
