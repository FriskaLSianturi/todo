<?php

use Illuminate\Database\Seeder;

class ProduksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Produk::class,15)->create();
    }
}
