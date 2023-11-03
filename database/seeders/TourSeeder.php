<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tours = ([
            ([
                "category_id"   => 6,
                "city"   => "Kab. Kuningan",
                "slug"   => "waduk-darma",
                "name"   => "Waduk Darma",
                "name_en"   => "Darma Reservoir",
                "picture"   => "waduk-darma.png",
                "cover_picture"   => "waduk-darma.png",
                "address"   => "Jl. Raya Darma Km 11 Kab. Kuningan",
                "facilities"   => "Perahu Wisata, Spot Foto, Taman dan Jogging Track, Kuliner Khas, Gazebo Artistik",
                "facilities_en"   => "Tour Boats, Photo Spots, Park and Jogging Track, Local Cuisine, Artistic Gazebos",
                "description"   => "Waduk Darma adalah sebuah waduk buatan yang terletak di Desa Kertayasa, Cirebon. Tempat ini menawarkan pemandangan alam yang menakjubkan, dengan perbukitan hijau yang mengelilingi dan hamparan air yang indah. Pengunjung dapat menikmati aktivitas air seperti perahu dayung, memancing, dan berenang. Selain itu, waduk ini juga menjadi tempat populer untuk berfoto dengan latar belakang alam yang menawan.

                Selain keindahan alamnya, Waduk Darma juga dilengkapi dengan fasilitas rekreasi seperti taman bermain, area piknik, dan lapangan olahraga, menjadikannya tempat ideal untuk keluarga yang ingin bersantai sambil menikmati alam. Jadi, tempat ini tidak hanya memungkinkan Anda untuk melepaskan penat, tetapi juga menikmati waktu berkualitas dengan orang-orang terkasih.",
                "description_en"   => "Darma Reservoir is an artificial reservoir located in the village of Kertayasa, Cirebon. It offers breathtaking natural scenery, with green hills surrounding it and a beautiful expanse of water. Visitors can enjoy water activities such as rowing boats, fishing, and swimming. Additionally, the reservoir is a popular spot for photography, thanks to its stunning natural backdrop.

                In addition to its natural beauty, Darma Reservoir is equipped with recreational facilities like playgrounds, picnic areas, and sports fields, making it an ideal place for families to relax while enjoying the outdoors. So, this place not only allows you to unwind but also to spend quality time with your loved ones.",
                "phone"   => "081224689599",
                "price"   => 24000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/beZMGQTZ2pU2DQMk6",
            ]),
            ([
                "category_id"   => 5,
                "city"   => "Kab. Kuningan",
                "slug"   => "cibulan",
                "name"   => "Cibulan",
                "name_en"   => "Cibulan",
                "picture"   => "cibulan.jpg",
                "cover_picture"   => "cibulan.jpg",
                "address"   => "Desa Manis Kidul, Kecamatan Jalaksana, Kabupaten Kuningan, Jawa Barat - Indonesia",
                "facilities"   => "Berenang di Kolam Bersama Ikan Dewa, Berwisata Sejarah di Sumur Tujuh, Terapi Ikan, Memanah, Bermain Sepeda Gantung",
                "facilities_en"   => "Swimming in the Pool with God Fish, Exploring History at Sumur Tujuh, Fish Therapy, Archery, and Biking on Suspended Bicycles",
                "description"   => "Cibulan adalah destinasi yang menarik di wilayah Cirebon yang menawarkan perpaduan unik antara kekayaan budaya dan keindahan alam. Terletak di desa Cibulan, tempat ini menghadirkan pengalaman yang memikat bagi para pengunjung.

                Cibulan dikenal dengan kekayaan budayanya yang meliputi arsitektur tradisional Jawa, seni, dan kerajinan tangan lokal. Pengunjung dapat menjelajahi warisan budaya ini sambil menikmati keindahan alam yang tenang, termasuk pemandangan sawah yang hijau.

                Selain itu, Cibulan juga menawarkan hidangan khas Jawa yang otentik dan camilan tradisional yang menggugah selera. Wisatawan juga dapat membeli beragam kerajinan tangan lokal sebagai kenang-kenangan.",
                "description_en"   => "Cibulan is an intriguing destination in the Cirebon region that offers a unique combination of cultural richness and natural beauty. Located in the village of Cibulan, this place provides a captivating experience for visitors.

                Cibulan is known for its cultural richness, which includes traditional Javanese architecture, art, and local handicrafts. Visitors can explore this cultural heritage while enjoying the tranquil natural beauty, including lush green rice fields.

                Furthermore, Cibulan also offers authentic Javanese cuisine and traditional snacks that tantalize the taste buds. Tourists can also purchase a variety of local handmade crafts as souvenirs.",
                "phone"   => "082124167416",
                "price"   => 25000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/R2hQu7HhmiKSr5QC8",
            ]),
            ([
                "category_id"   => 1,
                "city"   => "Kab. Kuningan",
                "slug"   => "curug-bangkong",
                "name"   => "Curug Bangkong",
                "name_en"   => "Bangkong Waterfall",
                "picture"   => "curug-bangkong.jpeg",
                "cover_picture"   => "curug-bangkong.jpeg",
                "address"   => "Kertawirama, Kec. Nusaherang, Kabupaten Kuningan, Jawa Barat 45563",
                "facilities"   => "Aliran air yang deras dan jernih, Suasana alam yang asri dan sejuk, Tersedia berbagai wahana permainan air",
                "facilities_en"   => "Swift and clear water flow, Fresh and cool natural environment, Various water amusement facilities available",
                "description"   => "
                Curug Bangkong adalah sebuah air terjun alami yang terletak di daerah Cirebon yang menjadi destinasi eksotis bagi para wisatawan pencinta alam. Dengan keindahan alamnya yang menakjubkan, Curug Bangkong memukau para pengunjung dengan pemandangan alam yang masih alami dan segar.

                Air terjun ini dikelilingi oleh hutan hijau yang memberikan kesan alami dan tenang. Suara gemericik air yang jatuh dari ketinggian menambah suasana yang menenangkan. Curug Bangkong adalah tempat yang cocok untuk bersantai, berpiknik, atau sekadar menjauh dari hiruk-pikuk kota untuk meresapi keindahan alam.

                Keunikan Curug Bangkong terletak pada formasi bebatuan yang mengelilingi air terjun. Batu-batu besar tersebut menciptakan lanskap yang menawan dan menawarkan peluang untuk menjelajahi dan berfoto di sekitarnya. Bagi para petualang, air terjun ini juga menjadi tempat yang menarik untuk hiking dan menikmati alam.",
                "description_en"   => "
                Bangkong Waterfall is a natural waterfall located in the Cirebon region, serving as an exotic destination for nature enthusiasts. With its stunning natural beauty, Bangkong Waterfall captivates visitors with its pristine and fresh landscape.

                The waterfall is surrounded by lush greenery, creating a natural and serene ambiance. The sound of cascading water from a height adds to the calming atmosphere. Bangkong Waterfall is an ideal place for relaxation, picnicking, or simply getting away from the city's hustle and bustle to immerse oneself in the beauty of nature.

                What sets Bangkong Waterfall apart is the rock formations that surround the waterfall. The large boulders create a captivating landscape and offer opportunities for exploration and photography. For adventurers, the waterfall is also an attractive location for hiking and enjoying the nature.",
                "phone"   => "089662840159",
                "price"   => 26000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/cxB8h3fj9ycZqNTM8",
            ]),
            ([
                "category_id"   => 6,
                "city"   => "Kota Cirebon",
                "slug"   => "keraton-kesepuhan",
                "name"   => "Keraton Kesepuhan",
                "name_en"   => "Kesepuhan Palace",
                "picture"   => "keraton.jpg",
                "cover_picture"   => "keraton.jpg",
                "address"   => "Jl. Kasepuhan No.43, Kesepuhan, Kec. Lemahwungkuk, Kota Cirebon, Jawa Barat 45114",
                "facilities"   => "Parkir, Toilet",
                "facilities_en"   => "Parking, Toilet",
                "description"   => "Keraton Kasepuhan adalah sebuah istana kerajaan yang bersejarah di Cirebon, Jawa Barat. Istana ini adalah bagian dari warisan budaya Jawa yang kaya dan menjadi saksi bisu dari masa kejayaan kerajaan-kerajaan di daerah ini.

                Dengan arsitektur yang megah dan detail artistik yang indah, Keraton Kasepuhan memperlihatkan kemegahan zaman dulu. Bangunannya didominasi oleh warna merah dan coklat yang khas, menciptakan suasana yang memikat.

                Di dalam istana, pengunjung dapat menjelajahi ruang-ruang bersejarah, seperti balairung (aula), tempat pertemuan penting berlangsung, dan pendapa (bangunan terbuka), yang sering digunakan untuk upacara resmi. Ada juga museum yang menampilkan koleksi benda-benda bersejarah, seperti pakaian raja dan peralatan kerajaan.",
                "description_en"   => "Kasepuhan Palace is a historic royal palace in Cirebon, West Java. This palace is a part of the rich Javanese cultural heritage and stands as a silent witness to the glory of the ancient kingdoms in the region.

                With its grand architecture and beautiful artistic details, Kasepuhan Palace showcases the splendor of bygone eras. The buildings are dominated by the distinctive red and brown colors, creating a captivating atmosphere.

                Inside the palace, visitors can explore historic rooms such as the balairung (hall), where important meetings were held, and the pendapa (open building), often used for official ceremonies. There is also a museum displaying a collection of historical artifacts, including royal attire and royal paraphernalia.",
                "phone"   => "081931132884",
                "price"   => 10000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/cs4KZkQW5ZhXzHNm6",
            ]),
            ([
                "category_id"   => 6,
                "city"   => "Kota Cirebon",
                "slug"   => "goa-sunyaragi",
                "name"   => "Goa Sunyaragi",
                "name_en"   => "Sunyaragi Cave",
                "picture"   => "goa-sunyaragi.jpg",
                "cover_picture"   => "goa-sunyaragi.jpg",
                "address"   => "Jln. Sunyaragi, Kec. Kesambi, Kota Cirebon, Jawa Barat 45132",
                "facilities"   => "Parkir, Toilet, Kantin",
                "facilities_en"   => "Parking, Toilet, Cafeteria",
                "description"   => "Gua Sunyaragi adalah sebuah situs bersejarah yang terletak di Cirebon, Jawa Barat. Situs ini memiliki kompleks gua dan taman yang menggabungkan elemen alam, sejarah, dan seni, menciptakan destinasi yang unik dan menarik.

                Gua Sunyaragi, dengan arsitektur dan pemandangan yang mengagumkan, adalah tempat yang sarat dengan nilai sejarah dan seni. Dalam gua, Anda akan menemukan berbagai koridor dan ruangan yang dihiasi dengan relief, ornamen, dan berbagai karya seni yang menawan. Gua ini juga memiliki sistem saluran air yang mengalir dengan air jernih yang menambah keunikan tempat ini.

                Selain sebagai situs sejarah, Gua Sunyaragi juga merupakan lokasi yang ideal untuk berjalan-jalan santai di taman yang hijau dan rindang. Pengunjung dapat menikmati pemandangan alam yang indah dan merasakan ketenangan di tengah kota.",
                "description_en"   => "Sunyaragi Cave is a historical site located in Cirebon, West Java. This site features a complex of caves and a park that combines elements of nature, history, and art, creating a unique and captivating destination.

                Sunyaragi Cave, with its remarkable architecture and views, is rich in historical and artistic value. Inside the cave, you'll find various corridors and rooms adorned with reliefs, ornaments, and various captivating artworks. The cave also features a system of flowing clear water channels, adding to its uniqueness.

                Apart from being a historical site, Sunyaragi Cave is also an ideal location for a leisurely stroll in the lush and verdant park. Visitors can enjoy the beautiful natural scenery and experience tranquility in the heart of the city.",
                "phone"   => "081931132884",
                "price"   => 12000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/5AWEcnNrz2rrJAEf7",
            ]),
        ]);

        DB::table('tours')->insert($tours);
    }
}
