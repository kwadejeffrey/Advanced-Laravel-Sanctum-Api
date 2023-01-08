<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait DisableForeignKeys
{
    public function disable(){
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
    }

    public function enable(){
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}