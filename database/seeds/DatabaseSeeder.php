<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customerQuantity = 100;
        $siteQuantity = 1000;
        factory(App\Customer::class, $customerQuantity)->create();
        factory(App\Site::class, $siteQuantity)->create()->each(function ($site) use ($customerQuantity) {
            $site->update([
                'customer_id'   =>  rand(1, $customerQuantity - 1)
            ]);
        });
    }
}
