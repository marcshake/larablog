<?php

use Illuminate\Database\Seeder;
use App\CmsPages;

class CMSPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CmsPages::create(['filename'=>'home','title'=>'Homepage','contents'=>'<div class="container">This is your Homepage</div>']);
        CmsPages::create(['filename'=>'impressum','title'=>'Impressum','contents'=>'This is your Impressum']);
        CmsPages::create(['filename'=>'snippets','title'=>'You can load some additional javascripts here. Snippets is displayed everywhere','contents'=>' ','hidden' => 1]);
    }
}
