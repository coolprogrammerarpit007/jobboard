<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    public static function jobs()
    {
        return 
        [
            [
                'id' => 1,
                'title' => 'Listing-One',
                'description' => 'PHP And Laravel Developer'
            ],
            [
                'id' => 2,
                'title' => 'Listing-Two',
                'description' => 'PHP And Python Developer'
            ]
        ];
    }


    public static function find($id){
        // echo $id;
        $listings = self::jobs();
        // echo "<pre>";
        // print_r($listings);
        // echo "</pre>";
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
        // echo "<pre>";
        // print_r($listings);
        // echo "</pre>";
    }
}
