<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contracts\TypeInterface;

class BaseController extends Controller
{
    /**
    * Create a new instance of BaseController class.
    *
    * @param $notificationRepo
    * @param $messageRepo
    * @return void
    */
    public function __construct(TypeInterface $typeRepo)
    {
        $types = $typeRepo->getList();
        $data = [
            'types' => $types
        ];
        view()->share($data);
    }
}
