<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $arg = [
            'queue' => Queue::with('clients')->where('id', $id)->first()
        ];
        return $this->responseView('queue', $arg);
    }
}
