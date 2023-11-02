<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

Use App\Models\Pattern;
Use App\Models\Package;

class TourPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $patterns = ([
        //     ([
        //         "cover_picture" => "Picture1.png",
        //         "name"  => "Keraton Kacirebonan",
        //         "slug"  => "keraton-kacirebonan",
        //         "view_file" => "keraton_kacirebonan",
        //         "details"   => "Menawarkan jelajah keraton kacirebonan dan kampung wisata seni & budaya disekitarnya. <br><br> Memberikan pengalaman tak terlupakan dimana wisatawan bisa menikmati keindahan budaya dan sejarah juga berkesempatan meet & greet dengan Sultan Kacirebonan, Disamping itu disuguhkan juga pertunjukan dan kegiatan seni & budaya.",
        //         "packages"  => ([
        //             ([
        //                 "picture" => "1.jpg",
        //                 "name"  => "Paket Prabayaksa",
        //                 "slug"  => "paket-pabayaksa", 
        //                 "minimum" => 30,
        //                 "price" => 275000,
        //                 "unit" => "Pax",
        //             ]),
        //             ([
        //                 "picture" => "2.jpg",
        //                 "name"  => "Paket Atraksi Budaya",
        //                 "slug"  => "paket-atraksi-budaya", 
        //                 "minimum" => 30,
        //                 "price" => 195000,
        //                 "unit" => "Pax",
        //             ]),
        //             ([
        //                 "picture" => "3.jpg",
        //                 "name"  => "Paket Eduwisata (Tanpa Konsumsi)",
        //                 "slug"  => "paket-eduwisata-tanpa-konsumsi", 
        //                 "minimum" => 50,
        //                 "price" => 55000,
        //                 "unit" => "Pax",
        //             ]),
        //             ([
        //                 "picture" => "3.jpg",
        //                 "name"  => "Paket Eduwisata (Dengan Konsumsi)",
        //                 "slug"  => "paket-eduwisata-dengan-konsumsi", 
        //                 "minimum" => 50,
        //                 "price" => 80000,
        //                 "unit" => "Pax",
        //             ]),
        //             ([
        //                 "picture" => "5.jpg",
        //                 "name"  => "Tour Package Kampung Wisata Kacirebonan (Umum)",
        //                 "slug"  => "tour-package-kampung-wisata-kacirebonan-umum", 
        //                 "minimum" => 10,
        //                 "price" => 375000,
        //                 "unit" => "Pax",
        //             ]),
        //             ([
        //                 "picture" => "5.jpg",
        //                 "name"  => "Tour Package Kampung Wisata Kacirebonan (Pelajar)",
        //                 "slug"  => "tour-package-kampung-wisata-kacirebonan-pelajar", 
        //                 "minimum" => 50,
        //                 "price" => 50000,
        //                 "unit" => "Pax",
        //             ]),
        //         ])
        //     ]),
        //     ([
        //         "cover_picture" => "Picture2.png",
        //         "name"  => "Cirebon History Tour",
        //         "slug"  => "cirebon-history-tour",
        //         "view_file" => "cirebon_history_tour",
        //         "details"   => "Menawarkan jelajah (walking tour) sejarah kota cirebon di tempat/kawasan sejarah kota cirebon dengan pendampingan story teller yang expert mengenai sejarah tempat yang dikunjungi.<br><br>Memberikan pengalaman yang berbeda dan pengetahuan yang mungkin tidak pernah bisa didapatkan dimanapun.<br><br>Untuk sementara paket ini hanya tersedia di hari sabtu & Minggu",
        //         "packages"  => ([
        //         ])
        //     ]),
        // ]);
        $patterns = ([
            ([
                "cover_picture" => "Picture1.png",
                "name"  => "Keraton Kacirebonan",
                "name_en"  => "Keraton Kacirebonan",
                "slug"  => "keraton-kacirebonan",
                "view_file" => "keraton_kacirebonan",
                "details"   => "Menawarkan jelajah keraton kacirebonan dan kampung wisata seni & budaya disekitarnya. <br><br> Memberikan pengalaman tak terlupakan dimana wisatawan bisa menikmati keindahan budaya dan sejarah juga berkesempatan meet & greet dengan Sultan Kacirebonan, Disamping itu disuguhkan juga pertunjukan dan kegiatan seni & budaya.",
                "details_en"   => "Offers a tour of the Kacirebonan palace and the surrounding art & cultural tourism village. <br><br> Providing an unforgettable experience where tourists can enjoy the beauty of culture and history and also have the opportunity to meet & greet with the Sultan of Kacirebonan, besides that, arts & cultural performances and activities are also presented.",
            ]),
            ([
                "cover_picture" => "Picture2.png",
                "name"  => "Cirebon History Tour",
                "name_en"  => "Cirebon History Tour",
                "slug"  => "cirebon-history-tour",
                "view_file" => "cirebon_history_tour",
                "details"   => "Menawarkan jelajah (walking tour) sejarah kota cirebon di tempat/kawasan sejarah kota cirebon dengan pendampingan story teller yang expert mengenai sejarah tempat yang dikunjungi.<br><br>Memberikan pengalaman yang berbeda dan pengetahuan yang mungkin tidak pernah bisa didapatkan dimanapun.<br><br>Untuk sementara paket ini hanya tersedia di hari Sabtu & Minggu",
                "details_en"   => "Offers a walking tour of the history of the city of Cirebon in historical places/areas of the city of Cirebon accompanied by expert story tellers regarding the history of the places visited.<br><br>Providing a different experience and knowledge that may never be obtained anywhere.<br ><br>At the moment this package is only available on Saturday & Sunday",
            ]),
            ([
                "cover_picture" => "Picture3.png",
                "name"  => "Cirebon Tour Package Religi",
                "name_en"  => "Cirebon Tour Package Religi",
                "slug"  => "cirebon-tour-package-religi",
                "view_file" => "cirebon_tour_package_religi",
                "details"   => "Menawarkan jelajah (walking tour) sejarah kota cirebon di tempat/kawasan sejarah kota cirebon dengan pendampingan story teller yang expert mengenai sejarah tempat yang dikunjungi.<br><br>Memberikan pengalaman yang berbeda dan pengetahuan yang mungkin tidak pernah bisa didapatkan dimanapun.<br><br>Untuk sementara paket ini hanya tersedia di hari sabtu & Minggu",
                "details_en"   => "Offers a walking tour of the history of the city of Cirebon in historical places/areas of the city of Cirebon accompanied by expert story tellers regarding the history of the places visited.<br><br>Providing a different experience and knowledge that may never be obtained anywhere.<br ><br>At the moment this package is only available on Saturday & Sunday",
            ]),
            ([
                "cover_picture" => "Picture4.png",
                "name"  => "Cirebon Aero Tourism",
                "name_en"  => "Cirebon Aero Tourism",
                "slug"  => "cirebon-aero-tourism",
                "view_file" => "cirebon_aero_tourism",
                "details"   => "Menawarkan perjalanan wisata yang akan memberikan anda salah satu pengalaman paling mengesankan dan tidak terlupakan. Lihatlah betapa mengesankannya duniamu !!!<br><br>With PROFLIGHT<br>“ See how impressive your world is “",
                "details_en"   => "Offering tours that will give you one of the most memorable and unforgettable experiences. Look how impressive your world is!!!<br><br>With PROFLIGHT<br>“See how impressive your world is“",
            ]),
            ([
                "cover_picture" => "Picture5.png",
                "name"  => "Plesir Wisata Cirebon",
                "name_en"  => "Cirebon Tourism Enjoyment",
                "slug"  => "plesir-wisata-cirebon",
                "view_file" => "plesir-wisata-cirebon",
                "details"   => "Menawarkan pilihan paket wisata keliling cirebon dengan panduan guide profesional dan memberikan pengalaman city tour yang lengkap dan tak terlupakan.<br><br>Paket kombinasi antara wisata kuliner, sejarah, budaya dan shopping ini menyediakan berbagai pilihan destinasi di Kota Cirebon.",
                "details_en"   => "Offers a choice of tour packages around Cirebon with professional guides and provides a complete and unforgettable city tour experience.<br><br>This combination package of culinary, historical, cultural and shopping tours provides a wide choice of destinations in Cirebon City.",
            ]),
        ]);

        Pattern::insert($patterns);
    }
}
