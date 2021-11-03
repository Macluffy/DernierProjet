<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        { DB::table("footers")->insert([
            [
                "logo"=>"logo.png",
                "p1"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a convallis nulla. Ut ",
                "icon1"=> "zmdi zmdi-email",
                "p2"=> "username@gmail.com",
                "icon2"=> "zmdi zmdi-phone",
                "p3"=> "(+660 256 24857)",
                "icon3"=> "zmdi zmdi-home",
                "p4"=> "Your Address Here",
                "titre1"=> "Recent Tweets",
                "icon4"=> "zmdi zmdi-twitter",
                "p5"=> "@envato good News for today!! We got  2 psd templete weekly top selling quality template in technology category !!!",
                "link1"=> "https://twitter.com/login/",
                "contenu1"=> "https://twitter.com/login",
                "icon5"=> "zmdi zmdi-twitter",
                "p6"=> "@envato good News for today!! We got  2 psd templete weekly top selling quality template in technology category !!!",
                "link2"=> "https://twitter.com/login/",
                "contenu2"=> "https://twitter.com/login",
                "titre2"=> "get in touch",
                "btn"=> "submit",
                "span1"=> "Copyright",
                "span2"=> "Hastech",
                "span3"=> " 2017. All Rights Reserved.",
            ],
        ]);
    }
}
}