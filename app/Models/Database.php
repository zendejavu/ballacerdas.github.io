<?php

namespace App\Models;

class Database 
{
    private static $management = [
        [
            "name" => "M. Sabirin Hadis",
            "position" => "Chief of Executive Officer",
            "image" => "sabirin.jpg"
        ],
        [
            "name" => "Muhammad Rizal",
            "position" => "Chief of Technology Officer",
            "image" => "rizal.jpg"
        ],
        [
            "name" => "Akbar Hendra",
            "position" => "Chief of Marketing Officer",
            "image" => "akbar.jpg"
        ],
        [
            "name" => "Arsan Kumala Jaya",
            "position" => "Chief of Operating Officer",
            "image" => "arsan.jpg"
        ],
        [
            "name" => "Annisa Nurul Puteri",
            "position" => "Chief of Financial Officer",
            "image" => "annisa.jpg"
        ],
        [
            "name" => "Randy Angriawan",
            "position" => "Vice Chief of Technology Officer",
            "image" => "Randy.jpeg"
        ]
    ];

    private static $work_experience = [
        [
            "date" => "02 Jun - 15 Aug, 2020",
            "client" => "In Collaboration Project with ACT Sulsel and IEEE Indonesia",
            "title" => "Humanitarian Project with IEEE Indonesia",
            "description" => "In collaboration project with @ieee_indonesia Sebagai bentuk respon kami terhadap pandemi covid-19, IEEE Indonesia Section berkolaborasi dengan Balla Cerdas membuat Automatic Handwash Portable Machine. Sepuluh unit Automatic Handwash Portable Machine ini didistribusikan ke rumah sakit dan instansi pemerintahan di Makassar."
        ],
        [
            "date" => "12 Oct - 16 Oct, 2020",
            "client" => "Kejaksaan Negeri Makassar",
            "title" => "Tim Ahli Pemeriksaan Peralatan Komputer",
            "description" => "Pemeriksaan Dugaan Penyimpangan Dana Pengadaan Peralatan Komputer Sekolah Menengah Pertama (SMP) di Kota Makassar."
        ],
        [
            "date" => "01 Nov - 31 Dec, 2020",
            "client" => "Badan Pendapatan Daerah Provinsi Sulawesi Selatan UPT Pendapatan Wilayah Gowa",
            "title" => "Project Pengembangan Aplikasi Antrian versi 1.2",
            "description" => "Kegiatan Pemeliharaan Aplikasi antrian dengan menggunakan Sistem Jaringan Terdistribusi di Kantor Badan Pendapatan Daerah Provinsi Sulawesi Selatan UPT Pendapatan Wilayah Gowa, Kabupaten Gowa."
        ],
        [
            "date" => "16 Nov, 2021 - 17 Jan, 2021",
            "client" => "IEEE HAC Indonesia",
            "title" => "IEEE HAC Webinar & Virtual Training",
            "description" => "IEEE HAC Webinar & Virtual Training 2020 is an activity that is intended to be a means of information sharing and training related to the opportunities and challenges of technology-based humanitarian projects in the new era. The webinar 'Technology-Based Humanitarian Project in a New Era' discusses technological developments in a new era specifically for humanity. This webinar invites experts from IEEE SIGHT on E-Health and Telemedicine as speakers who are competent in their fields. The virtual training 'Expanding Internet Access in Blind Spot Areas' will provide participants with an comprehension of networking as an urgent technology related to its use in the COVID-19 era. Also this training itself invites several instructors from the industry."
        ],
        [
            "date" => "21 Okt, 2021",
            "client" => "Universitas Hasanuddin",
            "title" => "Workshop Smart Reader",
            "description" => "Workshop Smart Reader, Installasi dan Setup Perangka Smart Reader untuk mendukung jaringan IoT Smart Campus kerja sama CEAIT-UNHAS dan PT. Balla Cerdas Teknologi."
        ]
    ];

    private static $awards = [
        [
            "date" => "29 Sept - 03 Oct, 2019",
            "client" => "IEEE Industry Applicaion Society",
            "title" => "5TH Prize Award in Humanitarian Project Contest",
            "description" => "5TH Prize Award in Humanitarian Project Contest using Smart Lock System in Baltimore, MD, USA."
        ],
        [
            "date" => "2019",
            "client" => "Kementerian Perindustrian Republik Indonesia",
            "title" => "Nominate Award in National Project Contest",
            "description" => "Nominate Award in National Project Contest using Sistem Penguncian Cerdas (SPC) in Kementerian Perindustrian, Jakarta."
        ]
    ];

    private static $portfolio = [
        [
            "groups" => '["category_all", "category_product"]',
            "img" => "1.jpg",
            "figure_class" => "item standard",
            "link" => "portfolio-1.html",
            "a_class" => "ajax-page-load",
            "i_class" => "far fa-file-alt",
            "name" => "Humanitarian Project",
            "category" => "Media"
        ],
        [
            "groups" => '["category_all", "category_inspection"]',
            "img" => "2.jpg",
            "figure_class" => "item standard",
            "link" => "portfolio-2.html",
            "a_class" => "ajax-page-load",
            "i_class" => "far fa-file-alt",
            "name" => "Pemeriksaan Alat Komputer",
            "category" => "Media"
        ],
        [
            "groups" => '["category_all", "category_product"]',
            "img" => "3.jpg",
            "figure_class" => "item standard",
            "link" => "portfolio-2.html",
            "a_class" => "ajax-page-load",
            "i_class" => "far fa-file-alt",
            "name" => "Aplikasi Antrian v-1.2",
            "category" => "Media"
        ],
        [
            "groups" => '["category_all", "category_education"]',
            "img" => "4.jpg",
            "figure_class" => "item standard",
            "link" => "portfolio-2.html",
            "a_class" => "ajax-page-load",
            "i_class" => "far fa-file-alt",
            "name" => "Webinar & Virtual Training",
            "category" => "Media"
        ],
        [
            "groups" => '["category_all", "category_education"]',
            "img" => "5.jpg",
            "figure_class" => "item standard",
            "link" => "portfolio-2.html",
            "a_class" => "ajax-page-load",
            "i_class" => "far fa-file-alt",
            "name" => "Workshop Smart Reader",
            "category" => "Media"
        ]
    ];

    public static function managementData(){
        return collect(self::$management);
    }

    public static function work_experienceData(){
        return collect(self::$work_experience);
    }

    public static function awardsData(){
        return collect(self::$awards);
    }

    public static function portolioData(){
        return collect(self::$portfolio);
    }

    // public static function find($name){
    //     $management = static::all();
    //     return $management->firstWhere('name', $name);
    // }
    
}
