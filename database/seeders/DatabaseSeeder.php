<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
          
        $this->call([
            ColorSeed::class,
            RamSeed::class,
            RomSeed::class,
            CategorySeed::class,
            PhoneSeed::class,
            CustomerSeed::class,
            CartSeed::class,
            CartItemSeed::class,
            ShipMethodSeed::class,
            PaymentMethodSeed::class,
            OrderSeed::class,
            OrderItemSeed::class,
            CommentSeed::class,
            ReplyCommentSeed::class,

        ]);
    }
}
