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
        CmsPages::create(['filename'=>'home','title'=>'Homepage','contents'=>'This is your Homepage']);
        CmsPages::create(['filename'=>'impressum','title'=>'Impressum','contents'=>'This is your Impressum']);
    }
}
