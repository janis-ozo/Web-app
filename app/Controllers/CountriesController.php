<?php

namespace App\Controllers;

use App\Core\View;

class CountriesController
{
    public function index()
    {
        $countries = database()->select('countries', '*');

        View::show('Countries/index.php', [
            'countries' => $countries
        ]);
    }
}