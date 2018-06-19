<?php

namespace App\Console\Commands;

use App\Jobs\CreateProductJob;
use Illuminate\Console\Command;
use Ramsey\Uuid\Uuid;

class CreateProductsCommand extends Command
{
    protected $signature = 'create-products';

    protected $description = 'Create some products';

    public function handle()
    {
        $uuid = (string) Uuid::uuid4();

        foreach(range(1, 5) as $i) {
            dispatch(new CreateProductJob($uuid));
        }
    }
}
