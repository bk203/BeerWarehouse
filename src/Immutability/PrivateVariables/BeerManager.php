<?php
declare(strict_types=1);

namespace Webbaard\Immutability\PrivateVariables;

class BeerManager
{
    public function createBeer(): Beer
    {
        $beer = New Beer;
        return $beer;
    }
}
