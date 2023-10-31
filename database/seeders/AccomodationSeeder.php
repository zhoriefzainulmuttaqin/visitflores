<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccomodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accomodations = ([
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "picture-aston.webp",
                "cover_picture"   => "aston.webp",
                "name"   => "ASTON Cirebon Hotel & Convention Center",
                "slug"   => "aston-cirebon-hotel-&-convention-center",
                "details"   => "Aston Cirebon merupakan hotel berbintang 4 terbesar di jalan utama Kota Cirebon. Di atas lahan seluas 3,2 hektar, hotel berlantai 12 ini menyediakan 200 kamar tamu, 8 ruang rapat dan konferensi, serta aula serbaguna luas yang mampu menampung hingga 2.600 orang. Berbagai fasilitas menarik untuk liburan keluarga maupun kepentingan bisnis siap memanjakan tamu serta wisatawan yang hendak menghabiskan waktu di Kota Cirebon.

                Dikenal pula dengan nama Aston Hotel and Convention Center, hotel ini menawarkan empat tipe kamar yang telah dilengkapi fasilitas terbaik, yaitu Superior Room, Junior Executive Room, Executive Room, dan Suite Room.
                
                Fasilitas yang disediakan meliputi televisi layar datar yang memuat saluran internasional, AC, kursi dan meja kerja, brankas penyimpanan, lemari, mini bar, serta penyeduh teh dan kopi. Letak kamar hotel pun ditata sedemikian rupa agar pengunjung dapat menikmati pemandangan kolam renang yang mengagumkan dari dalam kamar.",
                "address"   => "Jalan Brigjen Dharsono No. 12C (Bypass) , Kedawung, Cirebon, Jawa Barat, Indonesia, 45135",
                "star"   => 80,
                "price_start_from"   => 857150,
                "facilities"   => "Wifi, Restoran, Kolam Renang, Resepsionis 24 Jam, Parkir",
                "phone"   => "+62 231 8298000",
                "link_youtube"   => null,
                "link_tiktok"   => null,
                "link_facebook"   => "https://www.facebook.com/astonhotelcirebon/",
                "link_instagram"   => "https://www.instagram.com/astoncirebon/",
                "link_maps"   => "https://maps.app.goo.gl/pP4vPtdQwusWARJM7",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "picture-verse.webp",
                "cover_picture"   => "verse.webp",
                "name"   => "Verse Hotel Cirebon",
                "slug"   => "verse-hotel-cirebon",
                "details"   => "Verse Hotel Cirebon merupakan hotel rekomendasi untuk Anda, seorang backpacker yang tak hanya mengutamakan bujet, tapi juga kenyamanan saat beristirahat setelah menempuh petualangan seharian penuh.

                Bagi Anda yang menginginkan kualitas pelayanan oke dengan harga yang ramah di kantong, Verse Hotel Cirebon adalah pilihan yang tepat. Karena meski murah, akomodasi ini menyediakan fasilitas memadai dan pelayanan yang tetap terjaga mutunya.
                
                Jika Anda memiliki agenda kegiatan yang membutuhkan ruangan besar, maka Verse Hotel Cirebon adalah pilihan yang tepat. Hotel ini memiliki ruang pertemuan yang luas dan dilengkapi dengan berbagai fasilitas penunjang.",
                "address"   => "Jalan Tuparev No.168, Kedawung, Cirebon, Jawa Barat, Indonesia, 45171",
                "star"   => 60,
                "price_start_from"   => 399200,
                "facilities"   => "Wifi, Restoran, Lift, AC, Resepsionis 24 Jam, Parkir",
                "phone"   => "2312313",
                "link_youtube"   => null,
                "link_tiktok"   => null,
                "link_facebook"   => "https://www.facebook.com/versehotels/",
                "link_instagram"   => "https://www.instagram.com/versehotels/",
                "link_maps"   => "https://maps.app.goo.gl/ZChJdYKcXWq3Dq7W7",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "picture-batiqa.webp",
                "cover_picture"   => "batiqa.webp",
                "name"   => "BATIQA Hotel Cirebon",
                "slug"   => "batiqa-hotel-cirebon",
                "details"   => "Batiqa Hotel Cirebon adalah sebuah hotel yang terletak di Jalan Dr. Cipto Mangunkusumo, Kesambi, Cirebon. Penginapan bintang 3 ini berada di tengah kota sehingga mudah ditemukan. Dikelola oleh PT Batiqa Hotel Manajemen, Batiqa menawarkan suasana yang hangat dengan desain minimalis di lobi dan kamar hotel.

                Interior hotel ini bergaya etnik dengan sentuhan furnitur modern yang chic. Dengan fasilitas yang lengkap dan memanjakan, hotel di Cirebon ini bisa dijadikan tempat menginap untuk berlibur bersama keluarga atau saat perjalanan bisnis.
                
                Dengan 108 kamar, Hotel Batiqa Cirebon menawarkan dua tipe kamar yaitu Superior dan Suite. Masing-masing kamar memiliki pilihan yang berbeda, yaitu kamar keluarga, kamar bebas asap rokok, dan kamar bebas merokok. Jadi, tamu bisa memilih tipe dan jenis kamar sesuai keinginan. Beberapa kamar di hotel ini pun memiliki pemandangan indah ke arah Gunung Ciremai.",
                "address"   => "Jalan Dr. Cipto Mangunkusumo, Sunyaragi, Kesambi, Kesambi, Cirebon, Jawa Barat, Indonesia, 45132",
                "star"   => 60,
                "price_start_from"   => 490000,
                "facilities"   => "Wifi, Restoran, Lift, AC, Resepsionis 24 Jam, Parkir",
                "phone"   => "+62 231 8338000",
                "link_youtube"   => "https://www.youtube.com/channel/UCQjmTzR_mWyMmWcLLVuwkaA/videos",
                "link_tiktok"   => null,
                "link_facebook"   => "https://www.facebook.com/BatiqaHotels/",
                "link_instagram"   => "https://www.instagram.com/batiqahotels/",
                "link_maps"   => "https://maps.app.goo.gl/FtiEGCn3og849FgT6",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "picture-cordela.webp",
                "cover_picture"   => "cordela.webp",
                "name"   => "Cordela Hotel Cirebon",
                "slug"   => "cordela-hotel-cirebon",
                "details"   => "Menginap di Cordela Hotel Cirebon tak hanya memberikan kemudahan untuk mengeksplorasi destinasi petualangan Anda, tapi juga menawarkan kenyamanan bagi istirahat Anda.

                Cordela Hotel Cirebon merupakan hotel rekomendasi untuk Anda, seorang backpacker yang tak hanya mengutamakan bujet, tapi juga kenyamanan saat beristirahat setelah menempuh petualangan seharian penuh.
                
                Bagi Anda yang menginginkan kualitas pelayanan oke dengan harga yang ramah di kantong, Cordela Hotel Cirebon adalah pilihan yang tepat. Karena meski murah, akomodasi ini menyediakan fasilitas memadai dan pelayanan yang tetap terjaga mutunya.",
                "address"   => "Jalan Dokter Cipto Mangunkusumo 111, Kesambi, Cirebon, Jawa Barat, Indonesia, 45133",
                "star"   => 40,
                "price_start_from"   => 378000,
                "facilities"   => "Wifi, Restoran, Lift, AC, Resepsionis 24 Jam, Parkir",
                "phone"   => "+62 231 8332722",
                "link_youtube"   => null,
                "link_tiktok"   => null,
                "link_facebook"   => "https://web.facebook.com/people/Cordela-Hotel/pfbid02dLTJVKFRcyrNXGkVivPGAPmcvDzebjpWnsaaHZvseVUuvFU9PQ3SZRbxSRFDnYvel/",
                "link_instagram"   => "https://www.instagram.com/cordelahotels/",
                "link_maps"   => "https://maps.app.goo.gl/dWtJCRt8fjZpZbdj9",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "picture-swiss.webp",
                "cover_picture"   => "swiss.webp",
                "name"   => "Swiss-Belhotel Cirebon",
                "slug"   => "swiss-belhotel-cirebon",
                "details"   => "Swiss-Belhotel Cirebon terletak di pusat Kota Cirebon dan berdampingan dengan CSB Mall. Akomodasi ini dapat dicapai dalam waktu lima menit dari Stasiun Cirebon Kejaksan. Fasilitas dan pelayanannya memiliki standar internasional, karena itu akomodasi ini cocok untuk kegiatan tamu bisnis maupun wisatawan.

                Swiss-Belhotel terdiri dari satu menara dengan 10 lantai bertingkat. Seluruh kamar di tempat ini berjumlah sekitar 182 ruangan. Tersedia beberapa tipe kamar yang ditawarkan, yaitu Deluxe, Superior Deluxe, Business Suite, dan masih banyak lagi. Desain interiornya mengadopsi gaya kontemporer dan modern. Corak kayu pada lantai serta nuansa krem pada dinding menciptakan dekorasi elegan.

                Beberapa fasilitas yang terdapat di semua tipe ruang tidur, antara lain AC, TV kabel atau satelit, telepon, kulkas, dan pembuat kopi/teh. Tidak ketinggalan, satu buah lemari es menjadi pelengkap dalam ruangan. Selain itu, kamar mandinya memiliki peralatan komplet, shower, dan pengering rambut.",
                "address"   => "Jalan Cipto Mangunkusumo No. 26, Kesambi, Cirebon, Jawa Barat, Indonesia, 45131",
                "star"   => 80,
                "price_start_from"   => 695000,
                "facilities"   => "Wifi, Restoran, Lift, AC, Resepsionis 24 Jam, Parkir",
                "phone"   => "(62-231) 8291888",
                "link_youtube"   => "https://www.youtube.com/user/swissbelhotelint",
                "link_tiktok"   => null,
                "link_facebook"   => "https://www.facebook.com/swissbelhotel",
                "link_instagram"   => "https://www.instagram.com/swissbelhotel/",
                "link_maps"   => "https://maps.app.goo.gl/kFGosXnqFZcFwKS76",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "picture-grage.webp",
                "cover_picture"   => "grage.webp",
                "name"   => "Grage Hotel Cirebon",
                "slug"   => "gragehotel-cirebon",
                "details"   => "Dibangun pada 2006, Grage Hotel Cirebon merupakan penginapan bergaya modern. Akomodasi bintang 4 ini berlokasi di Jalan R.A. Kartini No. 77. Lokasinya strategis karena dekat dengan berbagai objek wisata di Kota Cirebon dan stasiun kereta api.

                Hotel dengan staf yang ramah ini menyewakan 114 kamar dan 10 ruang pertemuan. Ada lima tipe kamar yang disewakan, yaitu: Silver Business, Silver, Silver Executive, Gold, dan Platinum. Kamar tipe Silver Business memiliki luas 29 m2 dengan desain minimalis modern dan sentuhan tradisional Cirebon pada dekorasinya. Ruangan ini memiliki pemandangan ke arah kolam renang hotel.
                
                Kamar tipe Silver memiliki kamar seluas 31 m2 yang menghadap ke arah Grage Mall Cirebon dan kolam renang. Mengutamakan kombinasi warna hitam dan putih, tipe Silver Executive menawarkan akomodasi nyaman dalam kamar seluas 34 m2.",
                "address"   => "Jl. R.A. Kartini No. 77, Kejaksan, Cirebon, Jawa Barat, Indonesia, 45123",
                "star"   => 80,
                "price_start_from"   => 625430,
                "facilities"   => "Wifi, Restoran, Lift, Kolam Renang, Resepsionis 24 Jam, Parkir",
                "phone"   => "0231-+222999",
                "link_youtube"   => null,
                "link_tiktok"   => null,
                "link_facebook"   => "https://www.facebook.com/profile.php?id=100091369238692&mibextid=LQQJ4d",
                "link_instagram"   => "https://instagram.com/gragehotel.cirebon?igshid=MGU3ZTQzNzY=",
                "link_maps"   => "https://maps.app.goo.gl/93EuxL7XsQvPcT4j6",
            ]),
        ]);

        DB::table('accomodations')->insert($accomodations);
    }
}
