<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class APIController extends Controller 
{
    public function current() {
        $data = [
            'dj' => 'Ninja',
            'show' => 'Playing the music you loved',
            'start' => '01.40',
            'end' => '02.00'
        ];

        return $data;
    }
}