<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Coupon;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Sales;
use App\Models\SalesAssociate;
use App\Models\Store;
use App\Models\User;
use Database\Factories\BannerFactory;
use Database\Factories\StoreFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //has to run in the order of the migrations


        $this->call([
            StoreTypeSeeder::class,
        ]);

        User::factory()->customer()->has(Customer::factory())->count(1000)->create();
        User::factory()->salesAccountant()->has(SalesAssociate::factory())->count(50)->create();
        User::factory()->merchant()->has(Store::factory()->has(Contact::factory()))->count(20)->create();
        User::factory()->superAdmin()->count(5)->create();//

        $stores = Store::all();
        foreach ($stores as $store) {
            BannerFactory::new()->storeID($store->id)->sequence(
                ['image_path' => '69Utd2Pljj7Npse4Dd8O7xxdelne17IRUFANVwGy.png'],
                ['image_path' => 'nUTBhmSnUwSn50j4lnn832Ghbe5wCN7USrHt9i9e.png'],
                ['image_path' => 'zwK5nM5yq5yVDahvosfBCCfSvz4UHWM8zSkZ05dQ.png'],
            )->count(3)->create();
        }

        $this->call([
            BrandSeeder::class,
            CategoryTypeSeeder::class,
            CategorySeeder::class,
        ]);

        Product::factory()->count(4000)->state(new Sequence(
            ['status' => 'active'],
            ['status' => 'inactive'],
            ['sale_price' => null]
        ))->create();

        $this->call([
            RatingSeeder::class,
        ]);

        Coupon::factory()->count(2000)->state(new Sequence(
            ['status' => 'active'],
            ['status' => 'inactive'],
        ))->create();

        $this->call([
            UsedCouponSeeder::class,
            CartSeeder::class,
        ]);

        Sales::factory()->has(Invoice::factory())->count(20000)->create();

        $this->call([
            CommissionSeeder::class,
            InboxSeeder::class,
        ]);


    }
}
