<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Client;

class Queue extends Model
{
    use HasFactory;

  	protected $fillable = [
  		'name',
  	];

  	/**
     * Get the queue that owns the client.
     */
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
