<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $product = new Product;

        app()->setLocale('en');
		
        $product->title = 'Awesome Translated Product';
        $product->description = 'Translated Product description5 Translated Product description5';
		
		$translations = [
		   'ar' => 'الترجمة بالعربي',
		   'fr' => 'Name in french'
		];

      $product->setTranslations('title', $translations);

        $product->save();

     /*  $product_ar = new Product;

        app()->setLocale('ar');
		
        $product_ar->title = 'عنوان المقالة5';
        $product_ar->description = '22وصف المقالة  هنا وصف المقالة هنا وصف للمقالة هنا';
        $product_ar->save();
		 */
    }
}
