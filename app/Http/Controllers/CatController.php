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
        $cat= Cat::byName('Граф');

        return view( 'catview',['cat'=> $cat]);

    }


    public function delete(Delete $request)
    {
        Cat::destroy($request['id']);
    }
    public function update(Update $request)
    {
        Cat::update([
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
}
