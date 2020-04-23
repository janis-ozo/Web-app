<?php

namespace App\Controllers;

use App\Core\View;

class CitiesController
{
    public function create(array $params)
    {
        $countries = database()->select(
            'countries',
            '*'
        );

        View::show('Cities/create.php', [
            'countries' => $countries
        ]);
    }

    public function store(array $params)
    {
        database()->insert('cities', [
            'country_id' => (int) $_POST['countryId'],
            'name' => $_POST['name']
        ]);

        header('Location: /countries/' . $_POST['countryId']);
    }

    public function delete(array $params)
    {
        database()->delete('cities', [
            'id' => (int) $params['cityId']
        ]);

        header('Location: /countries/' . (int) $params['countryId']);
    }
}