<?php
namespace App\Models;

class cv_bank{

    public static function all(){

        return [
            [
                'id' => 1,
                'name' => 'John Doe',
                'focus' => 'Java',
                'years' => 3,
                'status' => 'N/A',
                'phone' => '12345',
                'email' => 'john@mail.com'
            ],
            [
                'id' => 2,
                'name' => 'John Doe',
                'focus' => 'Java',
                'years' => 3,
                'status' => 'N/A',
                'phone' => '12345',
                'email' => 'john@mail.com'
            ]
            ];
    }

    public static function find($id){
        $cv_bank = self::all();
        foreach($cv_bank as $list){
            if($list['id'] == $id) {
                return $list;
            }
        }

    }
}