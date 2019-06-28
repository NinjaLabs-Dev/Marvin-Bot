<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
$conn = new mysql(env(DB_HOST), env(DB_USERNAME), env (DB_PASSWORD), env(DB_DATABASE) or die);
function CloseCon($conn) 
{
    $conn -> close();
}

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function info()
    {
       //$sql = ("SELECT * FROM info");
       //$result = $conn->query($sql);
       //return $result;
       $data = [
           "test" => "123",
       ];
       return data()->json($data, 200);
    }
}