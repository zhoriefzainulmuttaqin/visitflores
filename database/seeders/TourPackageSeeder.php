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
                "slug"  => "keraton-kacirebonan",
                "view_file" => "keraton_kacirebonan",
                "details"   => "Menawarkan jelajah keraton kacirebonan dan kampung wisata seni & budaya disekitarnya. <br><br> Memberikan pengalaman tak terlupakan dimana wisatawan bisa menikmati keindahan budaya dan sejarah juga berkesempatan meet & greet dengan Sultan Kacirebonan, Disamping itu disuguhkan juga pertunjukan dan kegiatan seni & budaya.",                
            ]),
            ([
                "cover_picture" => "Picture2.png",
                "name"  => "Cirebon History Tour",
                "slug"  => "cirebon-history-tour",
                "view_file" => "cirebon_history_tour",
                "details"   => "Menawarkan jelajah (walking tour) sejarah kota cirebon di tempat/kawasan sejarah kota cirebon dengan pendampingan story teller yang expert mengenai sejarah tempat yang dikunjungi.<br><br>Memberikan pengalaman yang berbeda dan pengetahuan yang mungkin tidak pernah bisa didapatkan dimanapun.<br><br>Untuk sementara paket ini hanya tersedia di hari sabtu & Minggu",
            ]),
            ([
                "cover_picture" => "Picture3.png",
                "name"  => "Cirebon Tour Package Religi",
                "slug"  => "cirebon-tour-package-religi",
                "view_file" => "cirebon_tour_package_religi",
                "details"   => "Menawarkan jelajah (walking tour) sejarah kota cirebon di tempat/kawasan sejarah kota cirebon dengan pendampingan story teller yang expert mengenai sejarah tempat yang dikunjungi.<br><br>Memberikan pengalaman yang berbeda dan pengetahuan yang mungkin tidak pernah bisa didapatkan dimanapun.<br><br>Untuk sementara paket ini hanya tersedia di hari sabtu & Minggu",
            ]),
            ([
                "cover_picture" => "Picture4.png",
                "name"  => "Cirebon Aero Tourism",
                "slug"  => "cirebon-aero-tourism",
                "view_file" => "cirebon_aero_tourism",
                "details"   => "Menawarkan perjalanan wisata yang akan memberikan anda salah satu pengalaman paling mengesankan dan tidak terlupakan. Lihatlah betapa mengesankannya duniamu !!!<br><br>With PROFLIGHT<br>“ See how impressive your world is “",
            ]),
            ([
                "cover_picture" => "Picture5.png",
                "name"  => "Plesir Wisata Cirebon",
                "slug"  => "plesir-wisata-cirebon",
                "view_file" => "plesir-wisata-cirebon",
                "details"   => "Menawarkan pilihan paket wisata keliling cirebon dengan panduan guide profesional dan memberikan pengalaman city tour yang lengkap dan tak terlupakan.<br><br>Paket kombinasi antara wisata kuliner, sejarah, budaya dan shopping ini menyediakan berbagai pilihan destinasi di Kota Cirebon.",
            ]),
        ]);

        Pattern::insert($patterns);
    }
}
