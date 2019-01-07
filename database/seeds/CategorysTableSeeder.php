<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => '油烟机', 'parent_id' => 0]);
        Category::create(['name' => '煤气灶', 'parent_id' => 0]);
        Category::create(['name' => '卫浴', 'parent_id' => 0]);
    }
}
