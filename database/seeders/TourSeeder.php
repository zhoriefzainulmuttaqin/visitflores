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

                Selain keindahan alamnya, Waduk Darma juga dilengkapi dengan fasilitas rekreasi seperti taman bermain, area piknik, dan lapangan olahraga, menjadikannya tempat ideal untuk keluarga yang ingin bersantai sambil menikmati alam. Jadi, tempat ini tidak hanya memungkinkan Anda untuk melepaskan penat, tetapi juga menikmati waktu berkualitas dengan orang-orang terkasih.
                
                KUNINGAN – Waduk Darma yang terletak di sebelah barat daya Kabupaten Kuningan, tepatnya berada di Desa Jagara, Kecamatan Darma, dengan sumber air dari beberapa sungai, diantaranya Sungai Cisanggarung, Cinangka, Cikalapa dan Cireungit hari ini Selasa (20/10/2020) dikunjungi Kepala BBWS Cimanuk Cisanggarung Dr. Ismail Widadi, S.T., M.Sc.

                “Sejarah panjang Waduk Darma dimulai pada tahun 1923 saat Belanda melakukan perencanaan dan penilitan, groundbreaking  tahun 1938 kemudian terhenti karena PD II, Pembangunan dilanjutkan tahun 1951 sd tahun 1962 oleh Pemerintah RI sampai dengan selesai, dari Waduk Darma pula salah satu tonggak pembangunan infrastruktur di era kemerdekaan dimulai “ demikian kata Kepala BBWS.

                Dengan semangat sejarah Waduk Darma pula Kepala BBWS menginginkan warna baru dalam kinerja jajarannya, diantaranya pertama kebanggaan akan Infrastruktur yang dibangun maupun Infrastruktur yang sedang dipelihara dengan Prasasti, Aman, Rapih, Indah dan Sehat atau PARIS, kedua untuk siaga bencana dengan “SIAGA 500” dan ketiga bergerak dengan Sistem Informasi Gerak-Cepat Antisipasi Bencana atau SIGAB untuk mengantisipasi datangnya musim hujan di Wilayah Sungai Cimanuk Cisanggarung. (PPID-Cimancis)",
                "description_en"   => "Darma Reservoir is an artificial reservoir located in the village of Kertayasa, Cirebon. It offers breathtaking natural scenery, with green hills surrounding it and a beautiful expanse of water. Visitors can enjoy water activities such as rowing boats, fishing, and swimming. Additionally, the reservoir is a popular spot for photography, thanks to its stunning natural backdrop.

                In addition to its natural beauty, Darma Reservoir is equipped with recreational facilities like playgrounds, picnic areas, and sports fields, making it an ideal place for families to relax while enjoying the outdoors. So, this place not only allows you to unwind but also to spend quality time with your loved ones.
                
                KUNINGAN - The Darma Reservoir is located in the southwest of Kuningan Regency, precisely in Jagara Village, Darma District, with water sources from several rivers, including the Cisanggarung, Cinangka, Cikalapa and Cireungit Rivers. This Tuesday (20/10/2020) was visited by the Head. BBWS Cimanuk Cisanggarung Dr. Ismail Widadi, S.T., M.Sc.

                 'The long history of the Darma Reservoir began in 1923 when the Dutch carried out planning and research, groundbreaking in 1938 then stopped because of WWII, construction was continued from 1951 to 1962 by the Indonesian Government until it was completed, the Darma Reservoir was also one of the milestones of infrastructure development in this era. independence begins,' said the Head of BBWS.

                 In the spirit of the history of the Darma Reservoir, the Head of BBWS also wants a new color in the performance of his staff, including firstly pride in the infrastructure that has been built and the infrastructure that is being maintained with the inscription, Safe, Neat, Beautiful and Healthy or PARIS, secondly for disaster preparedness with 'SIAGA 500' and The third is moving with the Disaster Anticipation Rapid Action Information System or SIGAB to anticipate the arrival of the rainy season in the Cimanuk Cisanggarung River Area. (PPID-Cimancis)
                ",
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

                Selain itu, Cibulan juga menawarkan hidangan khas Jawa yang otentik dan camilan tradisional yang menggugah selera. Wisatawan juga dapat membeli beragam kerajinan tangan lokal sebagai kenang-kenangan.
                Menurut cerita yang berkembang di kalangan Masyarakat Desa Maniskidul dan masyarakat Kuningan pada umumnya, ikan dewa yang ada di kolam Cibulan ini konon dahulunya adalah prajurit-prajurit yang membangkang atau tidak setia pada masa pemerintahan Prabu Siliwangi. 
                
                Singkat cerita, prajurit-prajurit pembangkang tersebut kemudian dikutuk oleh Prabu Siliwangi sehingga menjadi ikan.
                Konon ikan-ikan dewa ini dari dulu hingga sekarang jumlahnya tidak berkurang maupun bertambah.  Terlepas dari benar atau tidaknya legenda itu sampai saat ini tidak ada yang berani mengambil ikan ini karena ada kepercayaan bahwa barang siapa yang berani mengganggu ikan-ikan tersebut akan mendapatkan kemalangan.

                Selain kolam dengan ikan dewanya yang jinak, di sudut barat pemandian ini juga terdapat tujuh sumber mata air yang dikeramatkan yang bernama Tujuh Sumur. Tujuh mata air ini berbentuk kolam-kolam kecil yang masing-masing mempunyai nama tersendiri, yaitu: Sumur Kejayaan, Sumur Kemulyaan, Sumur Pengabulan, Sumur Cirancana, Sumur Cisadane, Sumur Kemudahan, dan Sumur Keselamatan. Di antara ketujuh sumur itu, konon ada salah satu sumur yang berisikan Kepiting Emas, yaitu Sumur Cirancana.",
                "description_en"   => "Cibulan is an intriguing destination in the Cirebon region that offers a unique combination of cultural richness and natural beauty. Located in the village of Cibulan, this place provides a captivating experience for visitors.
                Cibulan is known for its cultural richness, which includes traditional Javanese architecture, art, and local handicrafts. Visitors can explore this cultural heritage while enjoying the tranquil natural beauty, including lush green rice fields.
                Furthermore, Cibulan also offers authentic Javanese cuisine and traditional snacks that tantalize the taste buds. Tourists can also purchase a variety of local handmade crafts as souvenirs.
                Apart from that, Cibulan also offers authentic Javanese dishes and mouth-watering traditional snacks. Tourists can also buy various local handicrafts as souvenirs.
                 According to the story that has developed among the Maniskidul Village Community and the Kuningan community in general, it is said that the god fish in the Cibulan pond were once soldiers who were disobedient or disloyal during the reign of King Siliwangi.
                
                 Long story short, the dissident soldiers were then cursed by Prabu Siliwangi so that they became fish.
                 It is said that these divine fish have not decreased or increased in number from the past until now. Regardless of whether the legend is true or not, to this day no one dares to take this fish because there is a belief that anyone who dares to disturb these fish will suffer misfortune.

                 Apart from the pool with its tame divine fish, in the west corner of this bath there are also seven sacred springs called Seven Wells. These seven springs are in the form of small pools, each of which has its own name, namely: Well of Glory, Well of Glory, Well of Granting, Well of Cirancana, Well of Cisadane, Well of Ease, and Well of Safety. Among the seven wells, it is said that there is one well that contains Golden Crabs, namely the Cirancana Well.
                ",
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

                Keunikan Curug Bangkong terletak pada formasi bebatuan yang mengelilingi air terjun. Batu-batu besar tersebut menciptakan lanskap yang menawan dan menawarkan peluang untuk menjelajahi dan berfoto di sekitarnya. Bagi para petualang, air terjun ini juga menjadi tempat yang menarik untuk hiking dan menikmati alam.
                
                Cerita rakyat atau mitos seringkali berhubungan dengan nama tempat di pelosok nusantara. Salah satunya adalah Air Terjun Bangkong atau Curug Bangkong di Kuningan, tepatnya di Desa Kertawiratma, Kecamatan Nusaherang, Jawa Barat.

                Nama bangkong sendiri bukan tidak punya arti. Di kalangan penduduk setempat beredar cerita seputar arti nama air terjun ini. Konon, air terjun yang memiliki ketinggian 23 meter dan lebar sekitar 3 meter ini didiami oleh katak berukuran besar yang merupakan jelmaan Abah Wiria, seorang petapa yang berasal dari daerah Ciamis.

                Cerita bermula saat Wiria datang ke daerah Kuningan untuk melakukan tarikat guna menambah ilmu kebatinan yang dimilikinya. Dalam pencarian itu, Wiria merasa terpanggil untuk melakukan pertapaan di sebuah air terjun yang ditemuinya. Tidak hanya melakukan tarikat, dirinya juga bergaul dengan masyarakat dan mengajarkan cara membuat gula merah. Karena jasanya tersebut, masyarakat  pun belakangan memanggilnya Abah Wiria sebagai tanda penghormatan.

                Hari demi hari hingga tahunan, Abah Wiria tetap melakukan aktivitas bersama penduduk sekitar. Namun, karena pangggilan batin yang dirasakannya datang lagi, Abah Wiria kembali melakukan pertapaan di dalam gua yang terdapat di balik air terjun.

                Masyarakat yang merasa kehilangan seorang tokoh pemimpin mulai resah karena Abah Wiria tidak segera kembali dari tarikatnya. Warga mulai mencari menuju air terjun. Namun, wujud Abah Wiria yang dicari tidak juga ditemukan.

                Hilangnya Abah Wiria beriringan dengan suara kodok (bangkong dalam bahasa Sunda) yang selalu terdengar di sekeliling air terjun. Dugaan muncul Abah Wiria hilang karena ilmunya telah sempurna dan menjelma menjadi seekor kodok.

                Satu yang mengherankan, bunyi kodok tersebut akan hilang jika didekati. Karena itulah, masyarakat setempat menamai air terjun dengan sebutan Air Terjun Bangkong atau Curug Bangkong dalam bahasa Sunda.

                Menikmati Air Terjun Bangkong tidak hanya melihat sebuah air yang jatuh ke dalam kolam yang berada di bawahnya. Jalan setapak dan keindahan pematang sawah nan hijau juga menjadi pelengkap saat mengunjungi air terjun ini.

                Bahkan jika Anda berkunjung ke curug ini saat curah hujan tinggi dan debit air naik, maka Anda akan menyaksikan air terjun ini akan terbelah menjadi dua.
                ",
                "description_en"   => "
                Bangkong Waterfall is a natural waterfall located in the Cirebon region, serving as an exotic destination for nature enthusiasts. With its stunning natural beauty, Bangkong Waterfall captivates visitors with its pristine and fresh landscape.

                The waterfall is surrounded by lush greenery, creating a natural and serene ambiance. The sound of cascading water from a height adds to the calming atmosphere. Bangkong Waterfall is an ideal place for relaxation, picnicking, or simply getting away from the city's hustle and bustle to immerse oneself in the beauty of nature.

                What sets Bangkong Waterfall apart is the rock formations that surround the waterfall. The large boulders create a captivating landscape and offer opportunities for exploration and photography. For adventurers, the waterfall is also an attractive location for hiking and enjoying the nature.
                
                The name bangkong itself is not meaningless. Among local residents, stories circulate about the meaning of the name of this waterfall. It is said that this waterfall, which has a height of 23 meters and a width of around 3 meters, is inhabited by a large frog which is the incarnation of Abah Wiria, a hermit from the Ciamis area.

                 The story begins when Wiria comes to the Kuningan area to do taliat to increase her spiritual knowledge. During this search, Wiria felt called to perform asceticism at a waterfall he encountered. Not only did he do Tarikat, he also socialized with the community and taught them how to make brown sugar. Because of his services, people later called him Abah Wiria as a sign of respect.

                 Day after day for years, Abah Wiria continues to carry out activities with local residents. However, because the inner call he felt came again, Abah Wiria returned to meditate in the cave behind the waterfall.

                 The people who felt they had lost a leading figure began to worry because Abah Wiria did not immediately return from his pilgrimage. Residents started looking for the waterfall. However, the form of Abah Wiria that he was looking for was not found.

                 Abah Wiria's disappearance was accompanied by the sound of frogs (bangkong in Sundanese) which were always heard around the waterfall. It is suspected that Abah Wiria disappeared because his knowledge was perfect and he transformed into a frog.

                 One thing that is surprising is that the frog's sound will disappear if it is approached. For this reason, local people call the waterfall Bangkong Waterfall or Curug Bangkong in Sundanese.

                 Enjoying Bangkong Waterfall is not just seeing the water falling into the pool below. The walking paths and the beauty of the green rice fields also complement the visit to this waterfall.

                 Even if you visit this waterfall when rainfall is high and the water level rises, you will see this waterfall split into two.
                ",
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

                Di dalam istana, pengunjung dapat menjelajahi ruang-ruang bersejarah, seperti balairung (aula), tempat pertemuan penting berlangsung, dan pendapa (bangunan terbuka), yang sering digunakan untuk upacara resmi. Ada juga museum yang menampilkan koleksi benda-benda bersejarah, seperti pakaian raja dan peralatan kerajaan.
                
                Keraton Kasepuhan memiliki dua buah pintu gerbang, pintu gerbang utama keraton Kasepuhan terletak di sebelah utara dan pintu gerbang kedua berada di selatan kompleks. Gerbang utara disebut Kreteg Pangrawit (bahasa Indonesia: jembatan baik) berupa jembatan, sedangkan di sebelah selatan disebut Lawang sanga (bahasa Indonesia: pintu sembilan). Setelah melewati Kreteg Pangrawit akan sampai di bagian depan keraton, di bagian ini terdapat dua bangunan yaitu Pancaratna dan Pancaniti.

                Bangunan Pancaratna berada di kiri depan kompleks arah barat berdenah persegi panjang dengan ukuran 8 × 8 m. Lantai tegel, konstruksi atap ditunjang empat sokoguru di atas lantai yang lebih tinggi dan 12 tiang pendukung di permukaan lantai yang lebih rendah. Atap dari bahan genteng, pada puncaknya terdapat mamolo. Bangunan ini berfungsi sebagai tempat seba atau tempat yang menghadap para pembesar desa yang diterima oleh Demang atau Wedana. Secara keseluruhan memiliki pagar terali besi.

                Pancaniti berarti jalan atasan, merupakan pendopo sebelah timur yang merupakan tempat para perwira keraton melatih para prajurit ketika diadakannya latihan keprajuritan di alun-alun dan sebagai tempat pengadilan. Bangunan ini berukuran 8 × 8 m, berantai tegel. Bangunan ini terbuka tanpa dinding. Tiang-tiang yang berjumlah 16 buah mendukung atap sirap. Bangunan ini memiliki pagar terali besi
                ",
                "description_en"   => "Kasepuhan Palace is a historic royal palace in Cirebon, West Java. This palace is a part of the rich Javanese cultural heritage and stands as a silent witness to the glory of the ancient kingdoms in the region.

                With its grand architecture and beautiful artistic details, Kasepuhan Palace showcases the splendor of bygone eras. The buildings are dominated by the distinctive red and brown colors, creating a captivating atmosphere.

                Inside the palace, visitors can explore historic rooms such as the balairung (hall), where important meetings were held, and the pendapa (open building), often used for official ceremonies. There is also a museum displaying a collection of historical artifacts, including royal attire and royal paraphernalia.
                
                The Kasepuhan Palace has two gates, the main gate of the Kasepuhan Palace is located to the north and the second gate is to the south of the complex. The north gate is called Kreteg Pangrawit (Indonesian: good bridge) in the form of a bridge, while the south gate is called Lawang sanga (Indonesian: nine doors). After passing Kreteg Pangrawit you will arrive at the front of the palace, in this section there are two buildings, namely Pancaratna and Pancaniti.

                The Pancaratna building is on the left front of the complex to the west and has a rectangular floor plan measuring 8 × 8 m. The floor is tile, the roof construction is supported by four pillars on the higher floor and 12 supporting pillars on the surface of the lower floor. The roof is made of tiles, at the top there is a mamolo. This building functions as a seba place or a place facing village officials who are received by the Demang or Wedana. Overall it has an iron grille fence.

                Pancaniti means superior road, it is the eastern pavilion which is where palace officers train soldiers when soldiering exercises are held in the square and as a place for court. This building measures 8 × 8 m, chained with tiles. This building is open without walls. Sixteen pillars support the shingled roof. This building has an iron grille fence",
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

                Selain sebagai situs sejarah, Gua Sunyaragi juga merupakan lokasi yang ideal untuk berjalan-jalan santai di taman yang hijau dan rindang. Pengunjung dapat menikmati pemandangan alam yang indah dan merasakan ketenangan di tengah kota.
                
                 Jumlah wisatawan yang mengunjungi objek wisata Goa Sunyaragi di Cirebon, Jawa Barat, mengalami peningkatan selama beberapa hari pada momen libur Lebaran. Diperkirakan kunjungan wisatawan masih akan terjadi hingga akhir pekan mendatang.

                Menurut Kepala Bagian Humas Badan Pengelola Taman Air Goa Sunyaragi (BPTAGS), Eko Ardi Nugraha, pada hari pertama Lebaran atau Sabtu (22/4/2023), jumlah pengunjung mencapai 184 orang. Keesokan harinya melonjak menjadi 764 orang.

                Jumlah pengunjung objek wisata Goa Sunyaragi kembali meningkat pada Senin (24/4/2023), mencapai 830 orang. Selama tiga hari masa libur Lebaran itu, total wisatawan yang mengunjungi objek wisata Goa Sunyaragi 1.778 orang.

                Sementara pada periode yang sama saat momen libur Lebaran 2022, jumlah pengunjung 1.360 orang. “Jadi, ada penambahan jumlah pengunjung 418 orang atau 30 persen dibandingkan Lebaran tahun lalu,” kata Eko, Selasa (25/4/2023).",
                "description_en"   => "Sunyaragi Cave is a historical site located in Cirebon, West Java. This site features a complex of caves and a park that combines elements of nature, history, and art, creating a unique and captivating destination.

                Sunyaragi Cave, with its remarkable architecture and views, is rich in historical and artistic value. Inside the cave, you'll find various corridors and rooms adorned with reliefs, ornaments, and various captivating artworks. The cave also features a system of flowing clear water channels, adding to its uniqueness.

                Apart from being a historical site, Sunyaragi Cave is also an ideal location for a leisurely stroll in the lush and verdant park. Visitors can enjoy the beautiful natural scenery and experience tranquility in the heart of the city.
                
                The number of tourists visiting the Sunyaragi Cave tourist attraction in Cirebon, West Java, has increased for several days during the Eid holiday. It is estimated that tourist visits will continue until next weekend.

                According to the Head of Public Relations of the Sunyaragi Cave Water Park Management Agency (BPTAGS), Eko Ardi Nugraha, on the first day of Eid or Saturday (22/4/2023), the number of visitors reached 184 people. The next day it jumped to 764 people.

                The number of visitors to the Sunyaragi Cave tourist attraction increased again on Monday (24/4/2023), reaching 830 people. During the three days of the Eid holiday, a total of 1,778 tourists visited the Sunyaragi Cave tourist attraction.

                Meanwhile, during the same period during the 2022 Eid holiday, the number of visitors was 1,360 people. 'So, there was an increase in the number of visitors by 418 people or 30 percent compared to last years Eid,' said Eko, Tuesday (25/4/2023).
                ",
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
