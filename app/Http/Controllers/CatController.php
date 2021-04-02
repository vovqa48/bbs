<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cat\Add;
use App\Http\Requests\Cat\Update;
use App\Http\Requests\Cat\Delete;
use App\Http\Requests\Cat\Get;
use App\Models\Cat;


class CatController extends Controller
{
    public function add(Add $request)
    {

      Cat::create([
            'name' => $request->get('name'),
            'date_birthday' => $request->get('date_birthday'),
            'photo' => $request->get('photo'),
            'cat_story' => $request->get('cat_story'),
            'cat_come_in' => $request->get('cat_come_in'),
            'status' => $request->get('status'),
            'curator_id' => $request->get('curator_id'),
            'special_signs' => $request->get('special_signs')
        ]);

    }

    public function get(Get $request)
    {
        return 1;
    }
    public function delete(Delete $request)
    {
        return 1;
    }
    public function update(Update $request)
    {
        return 1;
    }
}
