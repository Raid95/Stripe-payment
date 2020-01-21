<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://myer-media.com.au/wcsstore/MyerCatalogAssetStore/images/65/650/5225/12/6/248981860/248981860_1_1_720x928.jpg',
            'title' => 'Harry Potter and the Order of the Phoenix',
            'description' => 'This is the fifth book in the new edition Harry Potter series.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://myer-media.com.au/wcsstore/MyerCatalogAssetStore/images/65/650/5225/12/6/248981950/248981950_1_1_720x928.jpg',
            'title' => 'Harry Potter and the Half-Blood Prince',
            'description' => 'This is the sixth book in the new edition Harry Potter series.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://myer-media.com.au/wcsstore/MyerCatalogAssetStore/images/65/650/5225/12/8/694007020/694007020_1_720x928.jpg',
            'title' => 'Aladdin: Far From Agrabah',
            'description' => 'A magic carpet ride full of adventure, suspense and wonder.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://myer-media.com.au/wcsstore/MyerCatalogAssetStore/images/65/650/5225/12/6/644416390/644416390_1_720x928.jpg',
            'title' => 'The Enchanted Wood Vintage',
            'description' => 'Join the children on their incredible adventures as they meet the Three Bear.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://myer-media.com.au/wcsstore/MyerCatalogAssetStore/images/65/650/5225/12/6/644417380/644417380_1_720x928.jpg',
            'title' => 'Waiting for Chicken Smith',
            'description' => 'A story about childhood friendship, the inevitability of change and the magic of anticipation.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://myer-media.com.au/wcsstore/MyerCatalogAssetStore/images/65/650/5225/12/6/266578480/266578480_1_720x928.jpg',
            'title' => 'The Long Haul: Diary of a Wimpy Kid',
            'description' => 'This is book 9 in The Diary of Wimpy Kid series by best-selling author Jeff Kinney.',
            'price' => 10
        ]);
        $product->save();


    }
}
