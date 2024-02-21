<?php 
namespace App\Models;

class Listing {
    public static function all() {
        return [ 
            [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Description one'
            ],
            [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Description two'
            ],
        ];
    }

public static function find($id) {
 
}

}