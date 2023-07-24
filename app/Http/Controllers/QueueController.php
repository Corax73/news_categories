<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\TestRedisForQueue;
use App\Jobs\PreTestRedisForQueue;
use App\Jobs\PostTestRedisForQueue;

class QueueController extends Controller
{
    public function jobs() : void
    {
        TestRedisForQueue::withChain([
            new PreTestRedisForQueue('Prepare'),
            new PostTestRedisForQueue('Post'),
        ])->delay(now()->addMinutes(3))->dispatch('redis');
    }
}
