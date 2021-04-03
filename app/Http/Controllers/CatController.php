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
            'name' => $request['name'],
            'date_birthday' => $request['date_birthday'],
            'photo' => $request['photo'],
            'cat_story' => $request['cat_story'],
            'cat_come_in' => $request['cat_come_in'],
            'status' => $request['status'],
            'curator_id' => $request['curator_id'],
            'special_signs' => $request['special_signs']
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
