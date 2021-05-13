<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use App\Models\Client;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arg = [
            'queue1' => Client::where('queue_id', 1)->get(),
            'queue2' => Client::where('queue_id', 2)->get()
        ];

        return $this->responseView('index', $arg);
    }
}
