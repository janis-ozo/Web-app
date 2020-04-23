<?php

namespace App\Controllers;

use App\Core\View;

class CountriesController
{
    public function index()
    {
        logger()->info('Message 1');

        logger()->info('Message 2');

        logger()->info('Message 3');

        logger()->warning('Message 4');

        $countries = database()->select('countries', '*');

        View::show('Countries/index.php', [
            'countries' => $countries
        ]);
    }

    public function show(array $params)
    {
        $country = database()->select(
            'countries',
            '*',
            [
                'id[=]' => (int) $params['id']
            ]
        )[0];

        $cities = database()->select(
            'cities',
            '*',
            [
                'country_id[=]' => (int) $country['id']
            ]
        );

        View::show('Countries/show.php', [
            'country' => $country,
            'cities' => $cities
        ]);
    }

    public function create()
    {
        View::show('Countries/create.php');
    }

    public function store()
    {
        database()->insert('countries', [
            'name' => $_POST['name']
        ]);

        header('Location: /countries');
    }

    public function delete(array $params)
    {
        database()->delete('cities', [
            'country_id' => (int) $params['id']
        ]);

        database()->delete('countries', [
            'id' => (int) $params['id']
        ]);

        header('Location: /countries');
    }
}