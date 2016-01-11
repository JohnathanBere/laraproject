<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Task;
use App\Http\Requests\StoreTaskRequest;

class DestroyTaskCommand extends Command implements SelfHandling {
	public $id;

	public function __construct($id)
	{
		$this->id = $id;
	}


	public function handle() {
		return Task::where('id', $this->id)->delete();
	}
}