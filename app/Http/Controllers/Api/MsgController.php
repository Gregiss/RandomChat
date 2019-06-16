<?php

namespace App\Http\Controllers\Api;

use App\Msg;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MsgController extends Controller
{
    public function index()
    {
        return Msg::all();
    }

    public function show(Msg $id)
    {
        return $id;
    }
}
