<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = ([
            ([
                "admin_id"   => 1,
                "cover_picture"   => "pecinan.jpg",
                "name"   => "Festival Pecinan 2023",
                "name_en"   => "Chinatown Festival 2023",
                "slug"   => "pecinan",
                "location"   => "Taman Kebumen Lemahwungkuk Cirebon",
                "published_date"   => "2023-10-20",
                "published_time"   => "12:00",
                "start_date"   => "2023-10-31",
                "start_time"   => "12:00",
                "end_date"   => "2023-10-31",
                "end_time"   => "16:00",
                "details"   => "
                Festival Pecinan Cirebon adalah sebuah acara atau festival yang diadakan di Cirebon, sebuah kota di Provinsi Jawa Barat, Indonesia. Festival ini berkaitan dengan budaya Tionghoa dan perayaan Cap Go Meh, yang merupakan hari ke-15 dalam perayaan Tahun Baru Imlek.

                Pecinan adalah sebutan untuk kawasan permukiman orang Tionghoa di Indonesia, dan Cirebon memiliki sejarah panjang dalam hubungannya dengan komunitas Tionghoa. Festival Pecinan Cirebon biasanya melibatkan berbagai kegiatan dan perayaan yang menampilkan budaya Tionghoa, seperti pementasan pertunjukan seni tradisional, tarian, musik, serta kuliner khas Tionghoa.

                Salah satu puncak acara dari Festival Pecinan Cirebon adalah Cap Go Meh, yang merupakan perayaan Hari Valentine versi Tionghoa. Biasanya, Cap Go Meh diwarnai dengan parade lampion, tarian naga, dan pertunjukan seni lainnya. Acara ini sering dihadiri oleh komunitas Tionghoa dan juga masyarakat umum yang datang untuk menikmati perayaan tersebut.

                Festival Pecinan Cirebon adalah salah satu contoh dari berbagai perayaan budaya Tionghoa yang diadakan di berbagai daerah di Indonesia, yang menggabungkan unsur-unsur tradisional Tionghoa dengan budaya lokal, menciptakan keragaman budaya yang kaya dalam masyarakat Indonesia.",
                "details_en"   => "The Cirebon Chinatown Festival is an event or festival held in Cirebon, a city in West Java, Indonesia. This festival is related to Chinese culture and the celebration of Cap Go Meh, which is the 15th day in the Chinese New Year celebration.

                Chinatown, often referred to as `Pecinan` is the name for Chinese settlements in Indonesia, and Cirebon has a long history of association with the Chinese community. The Cirebon Chinatown Festival typically involves various activities and celebrations that showcase Chinese culture, such as traditional art performances, dances, music, and Chinese cuisine.

                One of the highlights of the Cirebon Chinatown Festival is Cap Go Meh, which is the Chinese version of Valentine's Day. It is usually marked with lantern parades, dragon dances, and other artistic performances. This event is often attended by the Chinese community and the general public who come to enjoy the festivities.

                The Cirebon Chinatown Festival is an example of various Chinese cultural celebrations held in different regions of Indonesia, blending traditional Chinese elements with local culture, creating a rich cultural diversity in Indonesian society.",
            ]),
            ([
                "admin_id"   => 1,
                "cover_picture"   => "pekan-raya-cirebon.jpg",
                "name"   => "Pekan Raya Cirebon 2023",
                "name_en"   => "Cirebon Fair 2023",
                "slug"   => "pentas-seni",
                "location"   => "Kantor Bupati, Cirebon",
                "published_date"   => "2022-10-07",
                "published_time"   => "12:00",
                "start_date"   => "2022-10-10",
                "start_time"   => "12:00",
                "end_date"   => "2022-10-10",
                "end_time"   => "16:00",
                "details"   => "Pekan Raya Cirebon adalah sebuah acara besar yang menjadi sorotan tahunan di kota ini. Acara ini merayakan kekayaan budaya dan ekonomi Cirebon dengan cara yang meriah dan bervariasi. Pekan Raya ini menampilkan berbagai pameran, pertunjukan seni, kompetisi, serta berbagai kegiatan seru lainnya.

                Salah satu daya tarik utama Pekan Raya Cirebon adalah pameran produk lokal dan industri, di mana pengusaha dan produsen lokal dapat memamerkan produk mereka. Pameran ini menampilkan berbagai jenis barang, mulai dari kerajinan tangan, kuliner khas, hingga produk-produk industri. Ini adalah kesempatan sempurna untuk membeli oleh-oleh khas Cirebon dan mencicipi hidangan lezat.

                Selain itu, acara ini juga menampilkan pertunjukan seni tradisional dan modern, yang mencerminkan keberagaman budaya Cirebon. Para seniman lokal tampil dengan semangat, menampilkan tarian, musik, dan pertunjukan seni lainnya.

                Pekan Raya Cirebon adalah saat yang dinanti-nantikan oleh penduduk setempat dan pengunjung, karena ini adalah waktu di mana mereka dapat merayakan warisan budaya dan ekonomi kota ini. Acara ini juga mempromosikan kerjasama antara masyarakat dan dunia usaha, menciptakan hubungan yang lebih erat di antara mereka.",
                "details_en"   => "Cirebon Fair is a major annual event that takes center stage in the city. The event celebrates the cultural and economic richness of Cirebon in a lively and diverse manner. Cirebon Fair features various exhibitions, art performances, competitions, and a wide range of exciting activities.

                One of the main attractions of Cirebon Fair is the exhibition of local products and industries, where local entrepreneurs and manufacturers can showcase their products. This exhibition displays a variety of items, ranging from handcrafted goods, local cuisine, to industrial products. It is the perfect opportunity to purchase unique souvenirs from Cirebon and savor delicious dishes.

                Furthermore, the event also features traditional and modern art performances, reflecting the cultural diversity of Cirebon. Local artists perform with enthusiasm, showcasing dance, music, and other forms of artistic expression.

                Cirebon Fair is eagerly anticipated by both locals and visitors, as it is a time to celebrate the cultural and economic heritage of the city. The event also promotes collaboration between the community and the business world, fostering closer relationships among them.",
            ]),
            ([
                "admin_id"   => 1,
                "cover_picture"   => "expo-billiard.jpeg",
                "name"   => "Expo Billiard & Cafe Cirebon 2023",
                "name_en"   => "Expo Billiard & Cafe Cirebon 2023",
                "slug"   => "pentas-seni",
                "location"   => "Kantor Bupati, Cirebon",
                "published_date"   => "2021-10-11",
                "published_time"   => "12:00",
                "start_date"   => "2021-10-12",
                "start_time"   => "12:00",
                "end_date"   => "2021-10-12",
                "end_time"   => "16:00",
                "details"   => "Expo Billiard & Cafe Cirebon 2023 adalah sebuah acara istimewa yang memadukan olahraga biliar dengan hiburan kafe. Acara ini merupakan panggung bagi para pecinta biliar untuk bersaing dalam turnamen, menunjukkan keahlian mereka, dan memperebutkan hadiah menarik.

                Selain turnamen biliar yang sengit, expo ini juga menyajikan berbagai fasilitas kafe yang nyaman dan menyenangkan. Ini menciptakan lingkungan yang santai bagi pengunjung untuk bersantai sambil menikmati kopi, makanan ringan, dan teman-teman mereka.

                Expo Billiard & Cafe Cirebon 2023 juga menyuguhkan berbagai kegiatan sampingan, seperti demonstrasi keahlian biliar, seminar, dan pertunjukan hiburan. Semua elemen ini menjadikan acara ini lebih dari sekadar turnamen biliar; ini adalah pengalaman sosial yang menarik dan menawarkan kesenangan untuk semua pengunjungnya.",
                "details_en"   => "
                The Expo Billiard & Cafe Cirebon 2023 is a special event that combines the sport of billiards with cafe entertainment. This event serves as a stage for billiards enthusiasts to compete in tournaments, showcase their skills, and vie for attractive prizes.

                In addition to the intense billiard tournaments, the expo also offers various comfortable and enjoyable cafe facilities. This creates a relaxed environment for visitors to unwind while enjoying coffee, snacks, and the company of friends.

                The Expo Billiard & Cafe Cirebon 2023 also features various side activities, such as billiard skill demonstrations, seminars, and entertainment shows. All of these elements make this event more than just a billiard tournament; it is a social experience that is engaging and offers enjoyment for all its visitors.",
            ]),
            ([
                "admin_id"   => 1,
                "cover_picture"   => "world-philosophy-day.jpg",
                "name"   => "World Philosophy Day 2023",
                "name_en"   => "World Philosophy Day 2023",
                "slug"   => "pentas-seni",
                "location"   => "Kantor Bupati, Cirebon",
                "published_date"   => "2020-10-11",
                "published_time"   => "12:00",
                "start_date"   => "2020-10-12",
                "start_time"   => "12:00",
                "end_date"   => "2020-10-12",
                "end_time"   => "16:00",
                "details"   => "World Philosophy Day & Knowledge and Transformation Celebration Day adalah sebuah perayaan yang dirancang untuk mempromosikan filsafat dan pengetahuan yang mendalam. Acara ini merayakan peran penting filsafat dalam memperkaya pemahaman manusia tentang dunia dan menginspirasi transformasi positif dalam masyarakat.

                Acara ini juga mencakup seminar yang menghadirkan pemikir terkemuka dan pakar di berbagai bidang. Mereka berbagi pemikiran mereka tentang berbagai isu filsafat dan pengetahuan yang relevan. Seminar ini memberikan wadah bagi para peserta untuk berdiskusi dan merenungkan isu-isu kunci dalam dunia filsafat.

                World Philosophy Day & Knowledge and Transformation Celebration Day adalah kesempatan yang luar biasa untuk merayakan kebijaksanaan manusia, berbagi gagasan, dan merangsang perubahan positif dalam masyarakat. Ini adalah momen penting dalam menghargai pengetahuan, refleksi, dan pemikiran mendalam.",
                "details_en"   => "World Philosophy Day & Knowledge and Transformation Celebration Day is an event designed to promote philosophy and profound knowledge. The event celebrates the significant role of philosophy in enriching human understanding of the world and inspiring positive transformation in society.

                The event also includes seminars featuring prominent thinkers and experts in various fields. They share their thoughts on various philosophical and knowledge-related issues. These seminars provide a platform for participants to discuss and contemplate key issues in the world of philosophy.

                World Philosophy Day & Knowledge and Transformation Celebration Day is an extraordinary opportunity to celebrate human wisdom, share ideas, and stimulate positive change in society. It is a significant moment for appreciating knowledge, reflection, and profound thinking.",
            ]),
            ([
                "admin_id"   => 1,
                "cover_picture"   => "aston-1001.jpg",
                "name"   => "Aston Cirebon New Year’s Eve 2024 : Kisah 1001 Malam",
                "name_en"   => "Aston Cirebon New Year’s Eve 2024: 1001 Nights Story",
                "slug"   => "pentas-seni",
                "location"   => "Kantor Bupati, Cirebon",
                "published_date"   => "2019-10-11",
                "published_time"   => "12:00",
                "start_date"   => "2019-10-12",
                "start_time"   => "12:00",
                "end_date"   => "2019-10-12",
                "end_time"   => "16:00",
                "details"   => "Aston Cirebon New Year's Eve 2024: Kisah 1001 Malam adalah perayaan Tahun Baru yang istimewa dan memukau. Acara ini diilhami oleh cerita epik 1001 yang kaya akan keajaiban dan petualangan. Para tamu diajak untuk merasakan pesona dan magisnya kisah ini dalam suasana yang mewah dan penuh kegembiraan.

                Aston Cirebon menghadirkan malam Tahun Baru yang tak terlupakan dengan hiburan yang spektakuler, pertunjukan seni yang memukau, dan hidangan lezat yang menggugah selera. Tamu dapat menikmati malam yang penuh warna dengan permainan kembang api yang mempesona, tarian eksotis, dan berbagai atraksi menarik.

                Kisah 1001 Malam di Aston Cirebon adalah cara yang sempurna untuk mengawali tahun yang baru dengan mewah dan meriah. Acara ini menciptakan pengalaman yang magis dan tak terlupakan bagi semua yang hadir.",
                "details_en"   => "Aston Cirebon New Year's Eve 2024: Tales of 1001 Nights is a special and enchanting New Year's celebration. The event is inspired by the epic stories of 1001 rich with wonders and adventures. Guests are invited to experience the charm and magic of this tale in a luxurious and joyous atmosphere.

                Aston Cirebon presents an unforgettable New Year's Eve with spectacular entertainment, captivating art performances, and delicious culinary delights. Guests can enjoy a colorful evening with mesmerizing fireworks, exotic dances, and various exciting attractions.

                The Tales of 1001 Nights at Aston Cirebon is the perfect way to kick off the new year with grandeur and celebration. The event creates a magical and unforgettable experience for all who attend.",
            ]),
            ([
                "admin_id"   => 1,
                "cover_picture"   => "diversity-day.jpg",
                "name"   => "Diversity Day & University Day Fair 2023",
                "name_en"   => "Diversity Day & University Day Fair 2023",
                "slug"   => "pentas-seni",
                "location"   => "Kantor Bupati, Cirebon",
                "published_date"   => "2018-10-11",
                "published_time"   => "12:00",
                "start_date"   => "2018-10-12",
                "start_time"   => "12:00",
                "end_date"   => "2018-10-12",
                "end_time"   => "16:00",
                "details"   => "Diversity Day & University Day Fair 2023 adalah perayaan yang menggambarkan keanekaragaman budaya, ilmu pengetahuan, dan kesempatan pendidikan. Acara ini mempromosikan kesadaran akan keberagaman yang ada di masyarakat dan pentingnya mendukung pendidikan.

                Selain perayaan keberagaman, acara ini juga menjadi tempat bagi berbagai universitas untuk memamerkan program dan peluang pendidikan mereka. Calon mahasiswa dapat mendapatkan informasi tentang beragam jurusan, beasiswa, dan pilihan pendidikan tinggi.

                Diversity Day & University Day Fair adalah kesempatan yang luar biasa bagi masyarakat untuk merayakan keberagaman budaya dan menggali berbagai peluang pendidikan. Acara ini mendukung integrasi, pemahaman antarbudaya, serta pemajuan pendidikan yang inklusif dan berkelanjutan.",
                "details_en"   => "Diversity Day & University Day Fair 2023 is a celebration that highlights cultural diversity, knowledge, and educational opportunities. The event promotes awareness of the diversity within the community and the importance of supporting education.

                In addition to celebrating diversity, the event also serves as a platform for various universities to showcase their programs and educational opportunities. Prospective students can gather information about a variety of majors, scholarships, and higher education options.

                Diversity Day & University Day Fair is an exceptional opportunity for the community to celebrate cultural diversity and explore various educational opportunities. The event supports integration, cross-cultural understanding, as well as the advancement of inclusive and sustainable education.",
            ]),
        ]);

        DB::table('events')->insert($events);
    }
}
