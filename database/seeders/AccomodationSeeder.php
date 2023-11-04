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
                "cover_picture"   => "aston.png",
                "name"   => "ASTON Cirebon Hotel & Convention Center",
                "name_en"   => "ASTON Cirebon Hotel & Convention Center",
                "slug"   => "aston-cirebon-hotel-&-convention-center",
                "details"   => "Aston Cirebon merupakan hotel berbintang 4 terbesar di jalan utama Kota Cirebon. Di atas lahan seluas 3,2 hektar, hotel berlantai 12 ini menyediakan 200 kamar tamu, 8 ruang rapat dan konferensi, serta aula serbaguna luas yang mampu menampung hingga 2.600 orang. Berbagai fasilitas menarik untuk liburan keluarga maupun kepentingan bisnis siap memanjakan tamu serta wisatawan yang hendak menghabiskan waktu di Kota Cirebon.

                Dikenal pula dengan nama Aston Hotel and Convention Center, hotel ini menawarkan empat tipe kamar yang telah dilengkapi fasilitas terbaik, yaitu Superior Room, Junior Executive Room, Executive Room, dan Suite Room.

                Fasilitas yang disediakan meliputi televisi layar datar yang memuat saluran internasional, AC, kursi dan meja kerja, brankas penyimpanan, lemari, mini bar, serta penyeduh teh dan kopi. Letak kamar hotel pun ditata sedemikian rupa agar pengunjung dapat menikmati pemandangan kolam renang yang mengagumkan dari dalam kamar.",
                "details_en"   => "Aston Cirebon is the largest 4-star hotel on the main road of Cirebon City. Spanning over 3.2 hectares of land, this 12-story hotel offers 200 guest rooms, 8 meeting and conference rooms, as well as a spacious multipurpose hall capable of accommodating up to 2,600 people. Various attractive facilities are ready to pamper both family vacationers and business travelers who wish to spend their time in Cirebon.

                Also known as Aston Hotel and Convention Center, this hotel offers four types of rooms equipped with the best amenities: Superior Room, Junior Executive Room, Executive Room, and Suite Room.

                The provided facilities include a flat-screen TV with international channels, air conditioning, a work desk and chair, a storage safe, a wardrobe, a minibar, and tea and coffee making facilities. The hotel room layout is designed in such a way that guests can enjoy the breathtaking view of the swimming pool from their rooms.",
                "address"   => "Jalan Brigjen Dharsono No. 12C (Bypass) , Kedawung, Cirebon, Jawa Barat, Indonesia, 45135",
                "star"   => 80,
                "price_start_from"   => 857150,
                "facilities"   => "Wifi, Restoran, Kolam Renang, Resepsionis 24 Jam, Parkir",
                "facilities_en"   => "WiFi, Restaurant, Swimming Pool, 24-Hour Reception, Parking",
                "phone"   => "+62 231 8298000",
                "mitra_status"   => 0,
                "link_youtube"   => null,
                "link_tiktok"   => null,
                "link_facebook"   => "https://www.facebook.com/astonhotelcirebon/",
                "link_instagram"   => "https://www.instagram.com/astoncirebon/",
                "link_maps"   => "https://maps.app.goo.gl/pP4vPtdQwusWARJM7",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "picture-verse.webp",
                "cover_picture"   => "verse.png",
                "name"   => "Verse Hotel Cirebon",
                "name_en"   => "Verse Cirebon Hotel",
                "slug"   => "verse-hotel-cirebon",
                "details"   => "Verse Hotel Cirebon merupakan hotel rekomendasi untuk Anda, seorang backpacker yang tak hanya mengutamakan bujet, tapi juga kenyamanan saat beristirahat setelah menempuh petualangan seharian penuh.

                Bagi Anda yang menginginkan kualitas pelayanan oke dengan harga yang ramah di kantong, Verse Hotel Cirebon adalah pilihan yang tepat. Karena meski murah, akomodasi ini menyediakan fasilitas memadai dan pelayanan yang tetap terjaga mutunya.

                Jika Anda memiliki agenda kegiatan yang membutuhkan ruangan besar, maka Verse Hotel Cirebon adalah pilihan yang tepat. Hotel ini memiliki ruang pertemuan yang luas dan dilengkapi dengan berbagai fasilitas penunjang.",
                "details_en" => "Verse Cirebon Hotel is a recommended hotel for you, a backpacker who not only prioritizes budget but also seeks comfort after a full day of adventure.

                For those of you looking for quality service at a budget-friendly price, Verse Cirebon Hotel is the right choice. Despite being affordable, this accommodation offers adequate facilities and maintains the quality of service.

                If you have activities that require a spacious room, then Verse Cirebon Hotel is the perfect choice. This hotel has large meeting rooms equipped with various supporting facilities.",
                "address"   => "Jalan Tuparev No.168, Kedawung, Cirebon, Jawa Barat, Indonesia, 45171",
                "star"   => 60,
                "price_start_from"   => 399200,
                "facilities"   => "Wifi, Restoran, Lift, AC, Resepsionis 24 Jam, Parkir",
                "facilities_en" => "WiFi, Restaurant, Elevator, Air Conditioning, 24-Hour Reception, Parking",
                "phone"   => "2312313",
                "mitra_status"   => 0,
                "link_youtube"   => null,
                "link_tiktok"   => null,
                "link_facebook"   => "https://www.facebook.com/versehotels/",
                "link_instagram"   => "https://www.instagram.com/versehotels/",
                "link_maps"   => "https://maps.app.goo.gl/ZChJdYKcXWq3Dq7W7",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "picture-batiqa.webp",
                "cover_picture"   => "batiqa.png",
                "name"   => "BATIQA Hotel Cirebon",
                "name_en"   => "BATIQA Cirebon Hotel",
                "slug"   => "batiqa-hotel-cirebon",
                "details"   => "Batiqa Hotel Cirebon adalah sebuah hotel yang terletak di Jalan Dr. Cipto Mangunkusumo, Kesambi, Cirebon. Penginapan bintang 3 ini berada di tengah kota sehingga mudah ditemukan. Dikelola oleh PT Batiqa Hotel Manajemen, Batiqa menawarkan suasana yang hangat dengan desain minimalis di lobi dan kamar hotel.

                Interior hotel ini bergaya etnik dengan sentuhan furnitur modern yang chic. Dengan fasilitas yang lengkap dan memanjakan, hotel di Cirebon ini bisa dijadikan tempat menginap untuk berlibur bersama keluarga atau saat perjalanan bisnis.

                Dengan 108 kamar, Hotel Batiqa Cirebon menawarkan dua tipe kamar yaitu Superior dan Suite. Masing-masing kamar memiliki pilihan yang berbeda, yaitu kamar keluarga, kamar bebas asap rokok, dan kamar bebas merokok. Jadi, tamu bisa memilih tipe dan jenis kamar sesuai keinginan. Beberapa kamar di hotel ini pun memiliki pemandangan indah ke arah Gunung Ciremai.",
                "details_en"   => "Batiqa Cirebon Hotel is a 3-star hotel located on Dr. Cipto Mangunkusumo Street, Kesambi, Cirebon. This accommodation is situated in the city center, making it easy to find. Managed by PT Batiqa Hotel Management, Batiqa offers a warm atmosphere with a minimalist design in the lobby and hotel rooms.

                The hotel's interior is ethnically styled with chic modern furniture accents. With comprehensive and indulgent facilities, this Cirebon hotel can serve as a place to stay for family vacations or business trips.

                With 108 rooms, Hotel Batiqa Cirebon offers two room types: Superior and Suite. Each room has different options, including family rooms, smoking and non-smoking rooms. So, guests can choose the room type and category that suits their preferences. Some rooms in this hotel also have beautiful views of Mount Ciremai.",
                "address"   => "Jalan Dr. Cipto Mangunkusumo, Sunyaragi, Kesambi, Kesambi, Cirebon, Jawa Barat, Indonesia, 45132",
                "star"   => 60,
                "price_start_from"   => 490000,
                "facilities"   => "Wifi, Restoran, Lift, AC, Resepsionis 24 Jam, Parkir",
                "facilities_en"   => "WiFi, Restaurant, Elevator, Air Conditioning, 24-Hour Reception, Parking",
                "phone"   => "+62 231 8338000",
                "mitra_status"   => 1,
                "link_youtube"   => "https://www.youtube.com/channel/UCQjmTzR_mWyMmWcLLVuwkaA/videos",
                "link_tiktok"   => null,
                "link_facebook"   => "https://www.facebook.com/BatiqaHotels/",
                "link_instagram"   => "https://www.instagram.com/batiqahotels/",
                "link_maps"   => "https://maps.app.goo.gl/FtiEGCn3og849FgT6",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "picture-cordela.webp",
                "cover_picture"   => "cordela.jpg",
                "name"   => "Cordela Hotel Cirebon",
                "name_en"   => "Cordela Cirebon Hotel",
                "slug"   => "cordela-hotel-cirebon",
                "details"   => "Menginap di Cordela Hotel Cirebon tak hanya memberikan kemudahan untuk mengeksplorasi destinasi petualangan Anda, tapi juga menawarkan kenyamanan bagi istirahat Anda.

                Cordela Hotel Cirebon merupakan hotel rekomendasi untuk Anda, seorang backpacker yang tak hanya mengutamakan bujet, tapi juga kenyamanan saat beristirahat setelah menempuh petualangan seharian penuh.

                Bagi Anda yang menginginkan kualitas pelayanan oke dengan harga yang ramah di kantong, Cordela Hotel Cirebon adalah pilihan yang tepat. Karena meski murah, akomodasi ini menyediakan fasilitas memadai dan pelayanan yang tetap terjaga mutunya.",
                "details_en"   => "Staying at Cordela Cirebon Hotel not only provides convenience for exploring your adventure destinations but also offers comfort for your rest.

                Cordela Cirebon Hotel is a recommended hotel for you, a backpacker who not only prioritizes budget but also seeks comfort after a full day of adventure.

                For those of you looking for quality service at a budget-friendly price, Cordela Cirebon Hotel is the right choice. Despite being affordable, this accommodation offers adequate facilities and maintains the quality of service.",
                "address"   => "Jalan Dokter Cipto Mangunkusumo 111, Kesambi, Cirebon, Jawa Barat, Indonesia, 45133",
                "star"   => 40,
                "price_start_from"   => 378000,
                "facilities"   => "Wifi, Restoran, Lift, AC, Resepsionis 24 Jam, Parkir",
                "facilities_en"   => "WiFi, Restaurant, Elevator, Air Conditioning, 24-Hour Reception, Parking",
                "phone"   => "+62 231 8332722",
                "mitra_status"   => 1,
                "link_youtube"   => null,
                "link_tiktok"   => null,
                "link_facebook"   => "https://web.facebook.com/people/Cordela-Hotel/pfbid02dLTJVKFRcyrNXGkVivPGAPmcvDzebjpWnsaaHZvseVUuvFU9PQ3SZRbxSRFDnYvel/",
                "link_instagram"   => "https://www.instagram.com/cordelahotels/",
                "link_maps"   => "https://maps.app.goo.gl/dWtJCRt8fjZpZbdj9",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "picture-swiss.webp",
                "cover_picture"   => "swiss.png",
                "name"   => "Swiss-Belhotel Cirebon",
                "name_en"   => "Swiss-Belhotel Cirebon",
                "slug"   => "swiss-belhotel-cirebon",
                "details"   => "Swiss-Belhotel Cirebon terletak di pusat Kota Cirebon dan berdampingan dengan CSB Mall. Akomodasi ini dapat dicapai dalam waktu lima menit dari Stasiun Cirebon Kejaksan. Fasilitas dan pelayanannya memiliki standar internasional, karena itu akomodasi ini cocok untuk kegiatan tamu bisnis maupun wisatawan.

                Swiss-Belhotel terdiri dari satu menara dengan 10 lantai bertingkat. Seluruh kamar di tempat ini berjumlah sekitar 182 ruangan. Tersedia beberapa tipe kamar yang ditawarkan, yaitu Deluxe, Superior Deluxe, Business Suite, dan masih banyak lagi. Desain interiornya mengadopsi gaya kontemporer dan modern. Corak kayu pada lantai serta nuansa krem pada dinding menciptakan dekorasi elegan.

                Beberapa fasilitas yang terdapat di semua tipe ruang tidur, antara lain AC, TV kabel atau satelit, telepon, kulkas, dan pembuat kopi/teh. Tidak ketinggalan, satu buah lemari es menjadi pelengkap dalam ruangan. Selain itu, kamar mandinya memiliki peralatan komplet, shower, dan pengering rambut.",
                "details_en"  => "
                Swiss-Belhotel Cirebon is located in the heart of Cirebon City and adjacent to CSB Mall. This accommodation can be reached within five minutes from Cirebon Kejaksan Station. Its facilities and services meet international standards, making it suitable for both business travelers and tourists.

                Swiss-Belhotel consists of a 10-story tower. The total number of rooms in this place is approximately 182. There are several room types offered, including Deluxe, Superior Deluxe, Business Suite, and many more. The interior design adopts a contemporary and modern style. Wooden flooring and a cream color scheme on the walls create an elegant decoration.

                Some amenities found in all types of bedrooms include air conditioning, cable or satellite TV, a telephone, a refrigerator, and coffee/tea maker. Additionally, a minibar is provided in the room. Furthermore, the bathroom is well-equipped with a shower and a hairdryer.",
                "address"   => "Jalan Cipto Mangunkusumo No. 26, Kesambi, Cirebon, Jawa Barat, Indonesia, 45131",
                "star"   => 80,
                "price_start_from"   => 695000,
                "facilities"   => "Wifi, Restoran, Lift, AC, Resepsionis 24 Jam, Parkir",
                "facilities_en"   => "WiFi, Restaurant, Elevator, Air Conditioning, 24-Hour Reception, Parking",
                "phone"   => "(62-231) 8291888",
                "mitra_status"   => 0,
                "link_youtube"   => "https://www.youtube.com/user/swissbelhotelint",
                "link_tiktok"   => null,
                "link_facebook"   => "https://www.facebook.com/swissbelhotel",
                "link_instagram"   => "https://www.instagram.com/swissbelhotel/",
                "link_maps"   => "https://maps.app.goo.gl/kFGosXnqFZcFwKS76",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "picture-grage.webp",
                "cover_picture"   => "grage.png",
                "name"   => "Grage Hotel Cirebon",
                "name_en"   => "Grage Cirebon Hotel",
                "slug"   => "gragehotel-cirebon",
                "details"   => "Dibangun pada 2006, Grage Hotel Cirebon merupakan penginapan bergaya modern. Akomodasi bintang 4 ini berlokasi di Jalan R.A. Kartini No. 77. Lokasinya strategis karena dekat dengan berbagai objek wisata di Kota Cirebon dan stasiun kereta api.

                Hotel dengan staf yang ramah ini menyewakan 114 kamar dan 10 ruang pertemuan. Ada lima tipe kamar yang disewakan, yaitu: Silver Business, Silver, Silver Executive, Gold, dan Platinum. Kamar tipe Silver Business memiliki luas 29 m2 dengan desain minimalis modern dan sentuhan tradisional Cirebon pada dekorasinya. Ruangan ini memiliki pemandangan ke arah kolam renang hotel.

                Kamar tipe Silver memiliki kamar seluas 31 m2 yang menghadap ke arah Grage Mall Cirebon dan kolam renang. Mengutamakan kombinasi warna hitam dan putih, tipe Silver Executive menawarkan akomodasi nyaman dalam kamar seluas 34 m2.",
                "details_en"   => "Built in 2006, Grage Hotel Cirebon is a modern-style accommodation. This 4-star hotel is located on Jalan R.A. Kartini No. 77. Its location is strategic as it is close to various tourist attractions in Cirebon and the train station.

                This friendly staffed hotel offers 114 rooms and 10 meeting rooms. There are five types of rooms for rent: Silver Business, Silver, Silver Executive, Gold, and Platinum. The Silver Business room type has an area of 29 square meters with a modern minimalist design and traditional Cirebon touches in its decor. This room offers a view of the hotel's swimming pool.

                The Silver room type has a room with an area of 31 square meters facing Grage Mall Cirebon and the swimming pool. Prioritizing a combination of black and white colors, the Silver Executive type offers comfortable accommodation in a room with an area of 34 square meters.",
                "address"   => "Jl. R.A. Kartini No. 77, Kejaksan, Cirebon, Jawa Barat, Indonesia, 45123",
                "star"   => 80,
                "price_start_from"   => 625430,
                "facilities"   => "Wifi, Restoran, Lift, Kolam Renang, Resepsionis 24 Jam, Parkir",
                "facilities_en"   => "WiFi, Restaurant, Elevator, Swimming Pool, 24-Hour Reception, Parking",
                "phone"   => "0231-+222999",
                "mitra_status"   => 1,
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
