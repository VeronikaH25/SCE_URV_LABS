<?php
namespace App\Service;

class MultiplierOperatorService
{
    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }
}
