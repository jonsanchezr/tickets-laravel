<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Queue;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
  		'name',
  		'identity',
  		'queue_id',
  	];

  	/**
     * Get the queue that owns the client.
     */
    public function queue()
    {
        return $this->belongsTo(Queue::class);
    }
}
