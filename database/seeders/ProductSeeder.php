<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' =>'Megalith',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1
        ]);

        DB::table('products')->insert([
            'title' => 'GALLANT',
            'price' => rand(75, 500),  // цена от 200 до 500euro
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2
        ]);

        DB::table('products')->insert([
            'title' => 'Tommy Hilfiger',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1
        ]);

        DB::table('products')->insert([
            'title' => 'BOSS',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1
        ]);

        DB::table('products')->insert([
            'title' => 'Calvin Klein Posh',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2
        ]);

        DB::table('products')->insert([
            'title' => 'BALMAIN',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 3
        ]);

        DB::table('products')->insert([
            'title' => 'COLMI',
            'price' => rand(50, 200),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2
        ]);

        DB::table('products')->insert([
            'title' => 'DIESEL',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1
        ]);

        DB::table('products')->insert([
            'title' => 'ORIENT',
            'price' => rand(50, 200),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1
        ]);

        DB::table('products')->insert([
            'title' => 'DIESEL',
            'price' => rand(75, 500),
            'in_stock' => 2,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2
        ]);

        DB::table('products')->insert([
            'title' => 'Tommy Hilfiger',
            'price' => rand(50, 200),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2
        ]);

        DB::table('products')->insert([
            'title' => 'DIESEL',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 3
        ]);

        DB::table('products')->insert([
            'title' => 'Tommy Hilfiger',
            'price' => rand(50, 200),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2
        ]);

        DB::table('products')->insert([
            'title' => 'BALMAIN',
            'price' => rand(75, 400),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1
        ]);



    }
}
