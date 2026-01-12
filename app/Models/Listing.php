<?php
namespace App\Models;
class Listing
{
    public static function getAll()
    {
        return [
            [
                "id" => 1,
                "title" => "Post One",
                "desc" => "This is Post one"
            ],
            [
                "id" => 2,
                "title" => "Post Two",
                "desc" => "This is Post Two"
            ]
        ];
    }

    public static function find($id)
    {
        foreach (self::getAll() as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }

        return null;
    }
}

