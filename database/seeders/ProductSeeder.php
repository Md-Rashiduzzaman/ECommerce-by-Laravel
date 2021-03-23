<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//import the database in seeder file and seeder use for dummy data

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name' => 'Oppo Mobile',
            'price' => '10000',
            'description' => '6GB Ram and much more features',
            'category' => 'Mobile',
            'gallery' => 'https://cdn.vox-cdn.com/thumbor/atHwvPiO3XWMxqt3mm6LaLJzDHc=/0x0:2040x1360/920x613/filters:focal(857x517:1183x843):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/68927939/DSCF7293.0.jpg'
            ],
            [
            'name' => 'Samsung TV',
            'price' => '80000',
            'description' => 'Android Smart TV with much more functionality',
            'category' => 'Smart TV',
            'gallery' => 'https://static.clickbd.com/global/classified/item_img/2606987_1_original.jpg'
            ],
            [
            'name' => 'Panasonic TV',
            'price' => '30000',
            'description' => 'much more features',
            'category' => 'TV',
            'gallery' => 'https://www.sentinelassam.com/wp-content/uploads/2018/06/pannna-1.jpg'
            ],
            [
            'name' => 'Hitachi Fridge',
            'price' => '150000',
            'description' => 'Newest Technology',
            'category' => 'Refrigerator ',
            'gallery' => 'https://4.imimg.com/data4/PM/RY/GLADMIN-3759251/wp-content-uploads-2016-02-french-door1-500x500.jpg'
            ],
            [
            'name' => 'YAMAHA FZS FI - 150CC',
            'price' => '262000',
            'description' => 'ABS Technology with much more modern features',
            'category' => 'Bike',
            'gallery' => 'https://5.imimg.com/data5/FW/PO/JR/SELLER-3535906/yamaha-fzs-fi-150cc-500x500.jpg'
            ]
        ]);
    }
}
