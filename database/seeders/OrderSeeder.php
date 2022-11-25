<?php

namespace Database\Seeders;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'product'=>'tablet',
            'unit_price'=>'100',
            'unit_piece'=>'2',
            'delivery_date'=>'2022/10/2',

        ]);
        Order::create([
            'product'=>'injection',
            'unit_price'=>'200',
            'unit_piece'=>'3',
            'delivery_date'=>'2022/10/2',

        ]);
        Order::create([
            'product'=>'capsule',
            'unit_price'=>'700',
            'unit_piece'=>'2',
            'delivery_date'=>'2022/10/2',

        ]);

    }
}
