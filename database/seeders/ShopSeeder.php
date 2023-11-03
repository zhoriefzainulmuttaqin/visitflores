<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shops = ([
            ([
                "city"   => "Kab. Cirebon",
                "picture"   => "batik-trusmi.jpg",
                "cover_picture"   => "batik-trusmi.jpg",
                "name"   => "Batik Trusmi",
                "name_en"   => "Trusmi Batik",
                "slug"   => "batik-trusmi",
                "details"   => "Batik Trusmi adalah pusat batik yang terkenal di Cirebon, Jawa Barat. Tempat ini menawarkan berbagai jenis batik yang menggabungkan tradisi dan seni dalam setiap motifnya. Kualitas dan keindahan kain batik yang dihasilkan di Batik Trusmi menjadikannya tujuan belanja yang populer di Cirebon.

                Batik Trusmi adalah tempat yang sempurna untuk mengeksplorasi keanekaragaman batik Indonesia. Pengunjung dapat menemukan berbagai desain dan warna yang memikat, masing-masing mencerminkan kekayaan budaya dan sejarah Cirebon. Beberapa motif batik di Batik Trusmi diilhami oleh keindahan alam, cerita rakyat, atau bahkan corak tradisional.

                Selain berbelanja, pengunjung juga dapat menyaksikan proses pembuatan batik secara langsung. Di sini, Anda dapat melihat para pengrajin batik yang ahli dalam mengecat kain dengan tangan, menciptakan karya seni yang luar biasa. Pengrajin juga akan dengan senang hati menjelaskan proses dan makna di balik setiap motif.",
                "details_en"   => "Batik Trusmi is a renowned batik center in Cirebon, West Java. This place offers various types of batik that blend tradition and art in every motif. The quality and beauty of the batik fabric produced at Batik Trusmi make it a popular shopping destination in Cirebon.

                Batik Trusmi is the perfect place to explore the diversity of Indonesian batik. Visitors can discover various captivating designs and colors, each reflecting the cultural richness and history of Cirebon. Some batik motifs at Batik Trusmi are inspired by the beauty of nature, folklore, or even traditional patterns.

                In addition to shopping, visitors can also witness the batik-making process firsthand. Here, you can see skilled batik artisans hand-painting fabric, creating extraordinary works of art. These artisans will be more than happy to explain the process and meaning behind each motif.",
                "address"   => "Astapada, Kec. Tengah Tani, Kabupaten Cirebon, Jawa Barat 45153",
                "facilities"   => "Toilet, Parkir Luas",
                "facilities_en"   => "Toilet, Spacious Parking",
                "phone"   => "0231321416",
                "price"   => 25000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kab. Cirebon",
                "picture"   => "krupuk-mlarat.jpeg",
                "cover_picture"   => "krupuk-mlarat.jpeg",
                "name"   => "Krupuk Mlarat khas Cirebon 'Sofie Mars'",
                "name_en"   => "Krupuk Mlarat khas Cirebon 'Sofie Mars'",
                "slug"   => "krupuk-mlarat",
                "details"   => "Krupuk Mlarat khas Cirebon 'Sofie Mars' adalah oleh-oleh yang sangat terkenal di daerah ini. Krupuk ini adalah camilan tradisional yang memiliki rasa gurih dan renyah yang memikat. Dibuat dengan hati-hati menggunakan resep turun-temurun, Krupuk Mlarat menjadi representasi autentik dari cita rasa Cirebon.

                Krupuk Mlarat 'Sofie Mars' dihasilkan dari bahan-bahan berkualitas tinggi, termasuk tepung terbaik dan bumbu-bumbu pilihan. Proses pembuatannya dilakukan secara tradisional dengan tangan terampil para pengrajin. Ini menghasilkan krupuk yang sangat lezat dan memiliki tekstur yang sempurna.

                Selain rasa yang luar biasa, kemasan Krupuk Mlarat 'Sofie Mars' juga menawan dan cocok sebagai oleh-oleh khas Cirebon. Krupuk ini sering dihadirkan dalam kemasan yang cantik, sehingga Anda dapat membawanya sebagai oleh-oleh kepada teman dan keluarga.",
                "details_en"   => "
                Krupuk Mlarat, a specialty of Cirebon known as 'Sofie Mars,' is a highly renowned local delicacy. These crackers are a traditional snack with an enticingly savory and crispy taste. Crafted with great care using time-honored recipes, Krupuk Mlarat serves as an authentic representation of Cirebon's flavors.

                Krupuk Mlarat 'Sofie Mars' is made from high-quality ingredients, including the finest flour and select spices. The production process follows traditional techniques skillfully executed by artisans, resulting in incredibly delicious crackers with the perfect texture.

                In addition to its exceptional taste, Krupuk Mlarat 'Sofie Mars' comes in attractive packaging, making it a suitable souvenir from Cirebon. These crackers are often presented in beautiful packaging, allowing you to bring them as a souvenirs for friends and family.",
                "address"   => "Astapada, Kec. Tengah Tani, Kabupaten Cirebon, Jawa Barat 45153",
                "facilities"   => "-",
                "facilities_en"   => "-",
                "phone"   => "2312313",
                "price"   => 10000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kab. Cirebon",
                "picture"   => "gapit.jpeg",
                "cover_picture"   => "gapit.jpeg",
                "name"   => "Toko Putri Tunggal Gapit Khas Cirebon",
                "name_en"   => "Toko Putri Tunggal Gapit Khas Cirebon",
                "slug"   => "toko-c",
                "details"   => "Toko Putri Tunggal Gapit adalah sebuah toko yang terkenal di Cirebon, khususnya untuk makanan lezat bernama Gapit. Gapit adalah camilan manis tradisional Cirebon yang terbuat dari bahan berkualitas tinggi. Toko ini terkenal karena Gapit-nya yang lezat dan otentik.

                Gapit dari Putri Tunggal Gapit merupakan favorit lokal dan menjadi oleh-oleh atau camilan yang sempurna. Rasanya yang manis dan unik mencerminkan cita rasa kuliner Cirebon. Setiap potongan Gapit adalah nikmat kecil yang bisa dinikmati oleh penduduk setempat maupun pengunjung. Saat berada di Cirebon, berkunjung ke Putri Tunggal Gapit untuk menikmati dan membeli camilan lezat ini adalah suatu keharusan.",
                "details_en"   => "Toko Putri Tunggal Gapit is a well-known store in Cirebon, specializing in a local delicacy called Gapit. Gapit is a traditional Cirebonese sweet snack made from high-quality ingredients. This store is renowned for its delicious and authentic Gapit.

                Gapit from Putri Tunggal Gapit is a local favorite and makes for a perfect souvenir or treat. It has a unique and delightful sweetness that captures the essence of Cirebon's culinary heritage. Each piece of Gapit is a small, delectable delight that can be enjoyed by locals and visitors alike. When in Cirebon, a visit to Putri Tunggal Gapit to savor and purchase this delicious treat is a must.",
                "address"   => "Jl. Silayur, Kaliwadas, Kec. Sumber, Kabupaten Cirebon, Jawa Barat 45611",
                "facilities"   => "-",
                "facilities_en"   => "-",
                "phone"   => "08454",
                "price"   => 12000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "topeng-cirebon.jpeg",
                "cover_picture"   => "topeng-cirebon.jpeg",
                "name"   => "Topeng Cirebon",
                "name_en"   => "Topeng Cirebon",
                "slug"   => "toko-d",
                "details"   => "
                Topeng Cirebon adalah karya seni tradisional yang sangat istimewa dari Cirebon, Jawa Barat. Topeng ini adalah manifestasi dari kekayaan budaya dan sejarah Cirebon yang kaya, serta menjadi simbol penting dalam berbagai upacara dan pertunjukan tradisional.

                Setiap topeng Cirebon adalah karya seni tangan yang indah dan rumit. Masing-masing topeng memiliki desain dan warna yang khas, mencerminkan karakteristik tokoh-tokoh dalam cerita tradisional Cirebon. Setiap detail diukir dengan cermat, menciptakan karya seni yang mempesona.

                Topeng Cirebon digunakan dalam berbagai pertunjukan seni tradisional, seperti wayang kulit Cirebon dan tari topeng. Mereka juga sering digunakan dalam upacara adat dan ritual keagamaan, membawa makna mendalam dalam budaya Cirebon.",
                "details_en"   => "Topeng Cirebon is a very special traditional art form from Cirebon, West Java. These masks are a manifestation of the rich cultural and historical heritage of Cirebon and serve as significant symbols in various ceremonies and traditional performances.

                Each Topeng Cirebon is a beautiful and intricate handcrafted piece of art. Each mask has distinctive designs and colors, reflecting the characteristics of characters from traditional Cirebonese stories. Every detail is meticulously carved, creating captivating works of art.

                Topeng Cirebon is used in various traditional art performances such as Cirebonese wayang kulit (shadow puppetry) and mask dances. They are also commonly used in customary ceremonies and religious rituals, carrying deep cultural significance in Cirebon.",
                "address"   => "Jl. Kesambi, Kesambi, Kec. Kesambi, Kota Cirebon",
                "facilities"   => "-",
                "facilities_en"   => "-",
                "phone"   => "0836253",
                "price"   => 90000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "terasi-udang.jpeg",
                "cover_picture"   => "terasi-udang.jpeg",
                "name"   => "Terasi Udang",
                "name_en"   => "Terasi Udang",
                "slug"   => "toko-e",
                "details"   => "Terasi udang adalah bumbu tradisional yang populer di berbagai masakan Indonesia. Bumbu ini dihasilkan dari udang fermentasi yang telah dijemur hingga mengering, dan kemudian dihaluskan menjadi pasta yang kuat dan penuh rasa.

                Terasi udang memiliki aroma yang khas dan rasa yang kuat, yang dapat memberikan cita rasa khas pada berbagai hidangan. Ini digunakan sebagai bumbu dasar dalam banyak masakan Indonesia, seperti sambal, rendang, dan banyak lagi. Terasi udang adalah elemen penting dalam memperkaya rasa dan aroma masakan Indonesia.

                Keistimewaan terasi udang adalah kemampuannya untuk memberikan rasa gurih, asin, dan unik yang tidak bisa digantikan oleh bumbu lain. Ini adalah salah satu bumbu kunci dalam masakan Indonesia dan menjadi elemen penting dalam menciptakan hidangan yang autentik dan lezat.",
                "details_en"   => "
                Shrimp paste, known as terasi udang in Indonesian, is a popular traditional seasoning used in various Indonesian dishes. This seasoning is produced from fermented shrimp that has been sun-dried and then ground into a strong and flavorful paste.

                Shrimp paste has a distinctive aroma and a robust flavor that can add a unique taste to a variety of dishes. It is used as a fundamental ingredient in many Indonesian dishes such as sambal, rendang, and more. Shrimp paste is an essential element in enhancing the flavor and aroma of Indonesian cuisine.

                What makes shrimp paste special is its ability to impart a savory, salty, and unique taste that cannot be substituted by other seasonings. It is one of the key seasonings in Indonesian cuisine and is a vital component in creating authentic and delicious dishes.",
                "address"   => "Jl. Pagongan No.15B, Pekalangan, Kec. Kejaksan, Kota Cirebon",
                "facilities"   => "-",
                "facilities_en"   => "-",
                "phone"   => "08675678",
                "price"   => 23000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "tape-ketan.jpeg",
                "cover_picture"   => "tape-ketan.jpeg",
                "name"   => "Tape Ketan Bakung",
                "name_en"   => "Tape Ketan Bakung",
                "slug"   => "toko-f",
                "details"   => "Tape ketan bakung adalah makanan tradisional Indonesia yang lezat dan populer. Makanan ini terbuat dari ketan, atau beras ketan, yang difermentasi dengan bantuan ragi ketan atau ragi tape. Fermentasi ini menghasilkan tekstur yang lengket dan kenyal serta rasa yang manis dan sedikit asam.

                Tape ketan bakung sering dibungkus dalam daun pisang, yang memberikan aroma alami yang khas. Makanan ini sering diolah menjadi berbagai hidangan, seperti kue, jajanan pasar, atau dimakan langsung sebagai camilan.

                Rasa manis dan kelembutan tape ketan bakung membuatnya menjadi camilan yang sangat digemari, terutama di berbagai acara tradisional, perayaan, atau sebagai oleh-oleh khas daerah. Makanan ini mencerminkan keanekaragaman kuliner Indonesia dan merupakan hidangan yang nikmat dan menggugah selera.",
                "details_en"   => "
                Tape ketan bakung is a delicious and popular traditional Indonesian food. It is made from sticky rice, or glutinous rice, which is fermented with the help of glutinous rice yeast or tape yeast. This fermentation process results in a sticky and chewy texture and a sweet, slightly tangy flavor.

                Tape ketan bakung is often wrapped in banana leaves, giving it a distinctive natural aroma. This food is commonly used to make various dishes, such as cakes, traditional snacks, or can be eaten directly as a snack.

                The sweet taste and the chewiness of tape ketan bakung make it a highly appreciated snack, especially during various traditional events, celebrations, or as a typical regional souvenir. This food reflects the culinary diversity of Indonesia and is a delightful and appetizing dish.",
                "address"   => "Jl. Fatahillah Blok Kawung No.80, Megu Gede, Kec. Weru, Kabupaten Cirebon",
                "facilities"   => "-",
                "facilities_en"   => "-",
                "phone"   => "067875",
                "price"   => 40000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
        ]);

        DB::table('shops')->insert($shops);
    }
}
