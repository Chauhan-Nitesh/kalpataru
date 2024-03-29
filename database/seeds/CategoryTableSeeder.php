<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        Category::insert([
        	[
	            'parent_id' => NULL,
	            'title' => 'PHP',
	            'order' => 1,
	            'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
	            'parent_id' => 1,
	            'title' => 'Larevel',
	            'order' => 2,
	            'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
	            'parent_id' => 2,
	            'title' => 'Larevel 4',
	            'order' => 3,
	            'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
	            'parent_id' => NULL,
	            'title' => 'JavaScript',
	            'order' => 4,
	            'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
	            'parent_id' => 4,
	            'title' => 'Angular',
	            'order' => 5,
	            'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        	]
    	]);
    }
}
