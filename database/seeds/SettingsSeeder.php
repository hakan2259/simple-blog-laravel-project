<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("settings")->insert([
            "title" => "WebMag Blog Site",
            "description" => "lorem ipsum",
            "keywords" => "blog,haber,magazin,teknoloji",
            "hakkimizda" => "<p>Kullanacağınız dil de bir o kadar önemli. Yaptığınız iş, bulunduğunuz sektör ve hedef kitlenize göre bir dil belirlemelisiniz. Kurumsal bir kimlik mi kullanacağınıza yoksa daha eğlenceli ve sıcak bir dil mi kullacaksınız, karar vermelisiniz.</p><p>Ulaşmayı hedeflediğiniz kişilere göre böyle bir yaklaşımda olmanız oldukça önemli. Hedef kitlenizi 30 altındaki kişiler oluşturuyorsa, biraz daha eğlenceli ve sıcak bir dil kullanmanız daha doğru olur. 30 ve üzerindeki kitlelere hitap ediyorsanız, biraz daha ciddi bir dil kurgulayabilirsiniz. Çünkü bu tüketicilerin markalardan beklentileri farklı olacaktır ve sizinle yaptıkları konuşmaların dili de değişiklik gösterecektir.</p>"
        ]);
    }
}
