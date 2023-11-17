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
                "picture"   => "tryas.png",
                "cover_picture"   => "tryas.png",
                "name"   => "Hotel Grand Tryas",
                "name_en"   => "Grand Tryas Hotel",
                "slug"   => "grand-tryas",
                "details"   => "Desain dan arsitektur menjadi salah satu faktor penentu kenyamanan Anda di hotel. Hotel Grand Tryas menyediakan tempat menginap yang tak hanya nyaman untuk beristirahat, tapi juga desain cantik yang memanjakan mata Anda.
                Hotel Grand Tryas memiliki segala fasilitas penunjang bisnis untuk Anda dan kolega.
                Pelayanan memuaskan serta fasilitas hotel yang memadai akan membuat Anda nyaman berada di Hotel Grand Tryas.
                Pusat kebugaran menjadi salah satu fasilitas yang wajib Anda coba saat menginap di tempat ini.
                Tersedia kolam renang untuk Anda bersantai sendiri maupun bersama teman dan keluarga.
                Manjakan diri Anda dengan menikmati fasilitas spa yang memberikan harga dan kualitas pelayanan terbaik.
                Resepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda.",
                "details_en"   => "Design and architecture are key factors in determining your comfort at a hotel. Hotel Grand Tryas offers a place to stay that not only provides a comfortable rest but also beautiful design that pleases your eyes.
                Hotel Grand Tryas provides all the necessary business facilities for you and your colleagues.
                Satisfactory service and adequate hotel facilities will make you feel comfortable at Hotel Grand Tryas.
                The fitness center is one of the facilities you must try during your stay here.
                There's a swimming pool for you to relax alone or with friends and family.
                Indulge yourself by enjoying the spa facilities that offer the best price and service quality.
                The reception desk is ready 24/7 to assist with the check-in, check-out process, and any other needs you may have. Don't hesitate to contact the reception desk; we are here to serve you.",
                "address"   => "Jalan Tentara Pelajar No 103 - 107 , Kesambi, Cirebon, Jawa Barat, Indonesia",
                "star"   => 90,
                "price_start_from"   => 420000,
                "facilities"   => "AC, Restoran, WiFi, Resepsionis 24 Jam, Kolam Renang, Lift, Parkir",
                "facilities_en"   => "AC, Restaurant, WiFi, 24-Hour Reception, Swimming Pool, Lift, Parking",
                "phone"   => "+62 813-9278-6802",
                "mitra_status"   => 0,
                "link_youtube"   => null,
                "link_tiktok"   => null,
                "link_facebook"   => "https://m.facebook.com/profile.php?id=141226889815796",
                "link_instagram"   => "https://www.instagram.com/grandtryashotel/",
                "link_maps"   => "https://maps.app.goo.gl/bAcoayEfdn47pvW87",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "tryashotel.png",
                "cover_picture"   => "tryashotel.png",
                "name"   => "Hotel Tryas Cirebon",
                "name_en"   => "Hotel Tryas Cirebon",
                "slug"   => "tryas-hotel",
                "details"   => "Hotel Tryas adalah hotel di lokasi yang baik, tepatnya berada di Lemahwungkuk.

                Lokasi hotel sangat strategis karena hanya berjarak 5,25 km dengan Bandar Udara Penggung (CBN).

                Dari Stasiun Cirebon, hotel ini hanya berjarak sekitar 1,47 km.

                Desain dan arsitektur menjadi salah satu faktor penentu kenyamanan Anda di hotel. Hotel Tryas menyediakan tempat menginap yang tak hanya nyaman untuk beristirahat, tapi juga desain cantik yang memanjakan mata Anda.

                Hotel Tryas memiliki segala fasilitas penunjang bisnis untuk Anda dan kolega.

                Hotel Tryas adalah pilihan cerdas bagi Anda yang ingin menginap di hotel dengan harga terjangkau, namun tetap memberikan pelayanan yang baik.

                Pusat kebugaran menjadi salah satu fasilitas yang wajib Anda coba saat menginap di tempat ini.

                Resepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda.

                Terdapat restoran yang menyajikan menu lezat ala Hotel Tryas khusus untuk Anda.

                WiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman.

                Hotel Tryas adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu.

                Hotel Tryas adalah pilihan cerdas bagi para wisatawan yang berkunjung ke Lemahwungkuk.",
                "details_en"   => "Hotel Tryas is a conveniently located hotel, precisely situated in Lemahwungkuk.

                The hotel's location is highly strategic, being only 5.25 km away from Penggung Airport (CBN).

                From Cirebon Station, the hotel is just around 1.47 km away.

                The design and architecture are key factors in ensuring your comfort at the hotel. Hotel Tryas provides accommodations that are not only comfortable for rest but also feature beautiful designs that please the eye.

                Hotel Tryas offers all the necessary business facilities for you and your colleagues.

                It is a smart choice for those seeking affordable accommodation without compromising on good service.

                The fitness center is one of the must-try facilities during your stay here.

                The reception is available 24/7 to assist with check-in, check-out, and any other needs you may have. Feel free to contact the reception; we are here to serve you.

                There is a restaurant serving delicious menus in the style of Hotel Tryas, specially crafted for you.

                WiFi is available throughout the public areas of the property to help you stay connected with family and friends.

                Hotel Tryas is an accommodation with good facilities and satisfying service quality according to most guests.

                Hotel Tryas is a smart choice for travelers visiting Lemahwungkuk.",
                "address"   => "Jalan RA Kartini No 86 , Lemahwungkuk, Cirebon, Jawa Barat, Indonesia, 45122",
                "star"   => 80,
                "price_start_from"   => 420000,
                "facilities"   => "Wifi, Restoran, Kolam Renang, Resepsionis 24 Jam, Parkir",
                "facilities_en"   => "WiFi, Restaurant, Swimming Pool, 24-Hour Reception, Parking",
                "phone"   => "+62 813-9278-6802",
                "mitra_status"   => 0,
                "link_youtube"   => null,
                "link_tiktok"   => "https://www.tiktok.com/@tryashotelcirebon",
                "link_facebook"   => "https://www.facebook.com/tryas.hotel.cirebon",
                "link_instagram"   => "https://www.instagram.com/tryashotelcirebon/",
                "link_maps"   => "https://maps.app.goo.gl/4Hosi9LGiZLgq2Wd9",
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
