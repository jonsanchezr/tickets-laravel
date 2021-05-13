<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Queue;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     /**
     * @param string $view
     * @param array $arg
     *
     * @return view
     */
	public function responseView($view, $arg)
	{
		$queues = Queue::all();

		$arg1 = [
			'queues' => $queues
		];

		$newArg = array_merge($arg1, $arg);
		
	 	return view($view, $newArg);
	}
}
