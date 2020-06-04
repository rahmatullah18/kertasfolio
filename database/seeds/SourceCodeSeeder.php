<?php

use Illuminate\Database\Seeder;
use App\SourceCode;

class SourceCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SourceCode::class, 100)->create();
    }
}
