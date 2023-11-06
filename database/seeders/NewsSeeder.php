<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news = ([
            ([
                "category_id"   => 7,
                "admin_id"   => 1,
                "cover_picture"   => "curug-bangkong.png",
                "name"   => "Wisata yang lagi hits bangett ! Wajib Kamu kunjungi",
                "name_en"   => "Hot and trending tourist destination! A must-visit for you",
                "slug"   => "berita-1",
                "published_date"   => date('Y-m-d'),
                "content"   => "Inilah berita terbaru untuk para pecinta perjalanan! Destinasi wisata terbaru yang sedang menjadi sorotan telah muncul, dan kamu pasti ingin mengunjunginya segera. Dengan pemandangan yang memukau dan pengalaman yang tak terlupakan, destinasi ini akan membuat liburanmu menjadi luar biasa.

                Destinasi ini menyuguhkan keindahan alam yang menakjubkan, mulai dari pantai pasir putih yang mempesona hingga pegunungan hijau yang menawan. Tidak hanya itu, kamu juga dapat menikmati berbagai aktivitas seru, seperti berenang, snorkeling, hiking, dan menjelajahi budaya lokal yang kaya.

                Jadi, siap-siaplah untuk membuat rencana liburanmu dan menikmati destinasi wisata yang sedang booming ini. Pastikan untuk membawa kamera, karena kamu akan ingin mengabadikan semua momen indah selama perjalanan ini. Jangan sampai ketinggalan!",
                "content_en"   => "Here's the latest news for travel enthusiasts! A new and trending tourist destination has emerged, and you'll definitely want to visit it soon. With stunning landscapes and unforgettable experiences, this destination will make your vacation extraordinary.

                This destination offers breathtaking natural beauty, from enchanting white sandy beaches to captivating green mountains. Not only that, you can also enjoy various exciting activities such as swimming, snorkeling, hiking, and exploring the rich local culture.

                So, get ready to plan your vacation and enjoy this booming tourist destination. Make sure to bring your camera, as you'll want to capture all the beautiful moments during this journey. Don't miss out!",
            ]),
            ([
                "category_id"   => 7,
                "admin_id"   => 1,
                "cover_picture"   => "waduk-darma.png",
                "name"   => "Hayuk Mampir di Waduk Darma, Bisa Naik Perahu Bareng lhoo !",
                "name_en"   => "Come visit Waduk Darma, you can take a boat ride together!",
                "slug"   => "berita-2",
                "published_date"   => date('Y-m-d'),
                "content"   => "Pecinta alam dan petualangan, jangan lewatkan kesempatan istimewa ini! Waduk Darma, dengan keindahan alamnya yang memesona, kini mengundang kamu untuk menikmati pengalaman unik naik perahu bersama teman-teman dan keluarga.

                Waduk Darma, terletak di Desa Kertayasa, Cirebon, menyuguhkan pemandangan air yang tenang dan perbukitan hijau yang mengelilingi. Dengan naik perahu di atas waduk ini, kamu dapat merasakan ketenangan alam dan menikmati momen santai yang tak terlupakan.

                Selain naik perahu, Waduk Darma juga menawarkan beragam aktivitas seru seperti memancing, berenang, atau sekadar bersantai di tepi danau. Ini adalah tempat yang sempurna untuk berlibur bersama keluarga atau teman-teman.

                Jadi, jadwalkan segera perjalananmu ke Waduk Darma dan nikmati pengalaman unik naik perahu di tengah keindahan alamnya yang menawan. Pastikan untuk membawa kamera, karena momen-momen ini patut diabadikan untuk dikenang selamanya!",
                "content_en"   => "Nature and adventure enthusiasts, don't miss this special opportunity! Waduk Darma, with its charming natural beauty, now invites you to enjoy the unique experience of riding a boat with friends and family.

                Waduk Darma, located in Kertayasa Village, Cirebon, offers tranquil water views and lush green hills surrounding it. By taking a boat ride on this reservoir, you can experience the tranquility of nature and enjoy unforgettable moments of relaxation.

                In addition to boating, Waduk Darma also offers various exciting activities such as fishing, swimming, or just relaxing by the lakeside. It's a perfect place for a vacation with family or friends.

                So, plan your trip to Waduk Darma and enjoy the unique experience of boating amid its enchanting natural beauty. Make sure to bring your camera, as these moments are worth capturing for everlasting memories!",
            ]),
            ([
                "category_id"   => 7,
                "admin_id"   => 1,
                "cover_picture"   => "festival.webp",
                "name"   => "Festival Pecinan Cirebon 2023",
                "name_en"   => "Cirebon Chinatown Festival 2023",
                "slug"   => "berita-3",
                "published_date"   => date('Y-m-d'),
                "content"   => "Pecinta budaya dan festival, persiapkan diri untuk salah satu acara tahunan paling dinanti di Cirebon, yakni Festival Pecinan Cirebon 2023. Acara yang dipenuhi dengan budaya dan tradisi Tionghoa ini akan berlangsung selama beberapa hari dan menawarkan pengalaman yang mempesona bagi semua pengunjung.

                Festival Pecinan Cirebon 2023 akan menampilkan parade budaya yang megah, dengan para peserta mengenakan pakaian tradisional Tionghoa dan membawa persembahan khas dalam perjalanan mereka. Musik dan tarian tradisional akan mengisi udara, menciptakan atmosfer yang penuh semangat dan riang.

                Selain parade, festival ini juga akan menampilkan stan-stan makanan yang menjajakan hidangan lezat khas Tionghoa dan barang-barang kerajinan tangan yang cantik. Pengunjung dapat mencicipi aneka hidangan lezat sambil menjelajahi keindahan seni rupa tradisional.

                Festival Pecinan Cirebon 2023 adalah kesempatan yang sempurna untuk memahami dan merayakan warisan budaya Tionghoa yang kaya di Cirebon. Jangan lewatkan kesempatan ini untuk merasakan kegembiraan dan pesona festival ini yang telah menjadi bagian integral dari kehidupan kota Cirebon.",
                "content_en"   => "Culture and festival enthusiasts, prepare yourself for one of the most anticipated annual events in Cirebon, the Chinatown Festival Cirebon 2023. This event filled with Chinese culture and traditions will take place over several days and offer a fascinating experience for all visitors.

                Chinatown Festival Cirebon 2023 will feature a grand cultural parade, with participants dressed in traditional Chinese attire and carrying typical offerings on their journey. Traditional music and dance will fill the air, creating a spirited and joyous atmosphere.

                In addition to the parade, the festival will also showcase food stalls offering delicious Chinese dishes and beautiful handicrafts. Visitors can savor various tasty dishes while exploring the beauty of traditional art.

                Chinatown Festival Cirebon 2023 is the perfect opportunity to understand and celebrate the rich Chinese cultural heritage in Cirebon. Don't miss this chance to experience the excitement and charm of this festival, which has become an integral part of Cirebon's life.",
            ]),
        ]);


        DB::table('news')->insert($news);
    }
}
