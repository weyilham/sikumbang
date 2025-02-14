<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seeder untuk category 1
        $categoryId1 = 1; // 0-3 bulan
        $categoryId2 = 2; // 3-6 bulan
        $categoryId3 = 3; // 6-9 bulan
        $categoryId4 = 4; // 9-12 bulan
        $categoryId5 = 5; // 12-15 bulan
        $categoryId6 = 6; // 15-18 bulan
        $categoryId7 = 7; // 18-21 bulan
        $categoryId8 = 8; // 21-24 bulan
        $categoryId9 = 9; // 24-30 bulan
        $categoryId10 = 10; // 30-36 bulan
        $categoryId11 = 11; // 36-42 bulan
        $categoryId12 = 12; // 42-48 bulan
        $categoryId13 = 13; // 48-54 bulan
        $categoryId14 = 14; // 54-60 bulan
        $categoryId15 = 15; // 60-66 bulan
        $categoryId16 = 16; // 66-72 bulan

        $questions = [
            // 0-3 bulan
            ['category_id' => $categoryId1, 'question' => "Pada saat bayi terlentang, apakah masing-masing lengan dan tungkai bergerak dengan mudah? Jawab Tidak bila salah satu atau kedua tungkai atau lengan bayi bergerak tak terarah atau tak terkendali.", 'description' => 'Gerak kasar'],
            ['category_id' => $categoryId1, 'question' => 'Jangan membuat suara apapun. Pada saat bayi terlentang apakah ia melihat dan menatap wajah Anda?', 'description' => ' Sosialisasi dan kemandirian.'],
            ['category_id' => $categoryId1, 'question' => 'Pada saat Anda mengajak bayi berbicara dan tersenyum, apakah ia tersenyum kembali kepada Anda? ', 'description' => ' Sosialisasi dan kemandirian.'],
            ['category_id' => $categoryId1, 'question' => 'Apakah bayi dapat mengeluarkan suara-suara lain (mengoceh) selain menangis?', 'description' => 'Bicara dan bahasa.'],
            ['category_id' => $categoryId1, 'question' => 'Apakah bayi suka tertawa keras walau tidak digelitik atau diraba-raba?', 'description' => 'Bicara dan bahasa.'],
            ['category_id' => $categoryId1, 'question' => 'Ambil gulungan wool merah, lalu letakkan di atas wajah di depan mata bayi. Gerakkan wool dari samping kiri ke kanan kepala atau sebaliknya. Apakah ia dapat mengikuti gerakan Anda dengan menggerakkan kepalanya dari kanan atau kiri ke tengah?' , 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId1, 'question' => 'Ambil gulungan wool merah, lalu letakkan di atas wajah di depan mata bayi. Gerakkan wool dari samping kiri ke kanan kepala atau sebaliknya. Apakah ia dapat mengikuti gerakan Anda dengan menggerakkan kepalanya dari satu sisi hampir sampai pada sisi yang lain?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId1, 'question' => 'Pada saat bayi tengkurap di alas yang datar, apakah ia dapat mengangkat kepalanya seperti pada gambar?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId1, 'question' => 'Pada saat bayi tengkurap di alas yang datar, apakah ia dapat mengangkat kepalanya sehingga membentuk sudut 45˚ seperti pada gambar?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId1, 'question' => 'Pada saat bayi tengkurap di alas yang datar, apakah ia dapat mengangkat kepalanya dengan tegak seperti pada gambar?', 'description' => 'Gerak kasar.'],

            // 3-6 bulan
            ['category_id' => $categoryId2, 'question' => 'Bayi diposisikan terlentang. Ambil gulungan wool merah, letakkan di atas wajah di depan mata bayi. Gerakkan wool dari samping kiri ke kanan kepala. Apakah ia dapat mengikuti gerakan Anda dengan menggerakkan kepala sepenuhnya dari satu ke sisi yang lain?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId2, 'question' => 'Pada posisi bayi terlentang, pegang kedua tangannya lalu tarik perlahan ke posisi duduk. Dapatkah bayi mempertahankan lehernya secara kaku seperti pada gambar? Jawab Tidak bila kepala bayi jatuh kembali seperti gambar.', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId2, 'question' => 'Ketika bayi tengkurap di alas yang datar, apakah ia dapat mengangkat dada dengan kedua lengannya sebagai penyangga seperti pada gambar?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId2, 'question' => 'Bayi dipangku orang tua atau pengasuh. Dapatkah bayi mempertahankan posisi kepala dalam keadaan tegak dan stabil? Jawab Tidak bila kepala bayi cenderung jatuh ke kanan, kiri, atau ke dadanya.', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId2, 'question' => 'Bayi dipangku orang tua atau pengasuh. Sentuhkan pensil di punggung tangan atau ujung jari bayi (jangan meletakkan di atas telapak tangan bayi). Apakah bayi dapat menggenggam pensil itu selama beberapa detik?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId2, 'question' => 'Bayi dipangku orang tua atau pengasuh. Dapatkah bayi mengarahkan matanya pada benda kecil sebesar kacang, kismis atau uang logam? Jawab Tidak jika ia tidak dapat mengarahkan matanya.', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId2, 'question' => 'Bayi dipangku orang tua atau pengasuh. Dapatkah bayi meraih mainan yang diletakkan agak jauh namun masih berada dalam jangkauan tangannya?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId2, 'question' => 'Tanyakan kepada orang tua atau pengasuh, pernahkah bayi berbalik paling sedikit 2 kali, dari terlentang ke tengkurap atau sebaliknya?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId2, 'question' => 'Tanyakan kepada orang tua atau pengasuh, pernahkah bayi mengeluarkan suara gembira bernada tinggi atau memekik tetapi bukan menangis?' , 'description' => 'Bicara dan bahasa.'],
            ['category_id' => $categoryId2, 'question' => 'Tanyakan kepada orang tua atau pengasuh, pernahkah orang tua atau pengasuh melihat bayi tersenyum ketika melihat mainan yang lucu, gambar, atau binatang peliharaan pada saat ia bermain sendiri?', 'description' => 'Sosialisasi dan kemandirian.'],
        
            // 6-9 bulan
            ['category_id' => $categoryId3, 'question' => 'Bayi dipangku orang tua atau pengasuh, Taruh kismis di atas meja. Dapatkah bayi memungut dengan tangannya benda benda kecil seperti kismis, kacang-kacangan, potongan biskuit dengan gerakan miring atau menggerapai seperti gambar?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId3, 'question' => 'Bayi dipangku orang tua atau pengasuh. Taruh 2 kubus di atas meja, buat agar bayi dapat memungut dan memegang kubus pada masing-masing tangannya. Dapatkah ia melakukannya?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId3, 'question' => 'Bayi dipangku orang tua atau pengasuh. Tarik perhatian bayi dengan memperlihatkan gulungan wool merah, kemudian jatuhkan ke lantai. Apakah bayi mencoba mencari benda tersebut, misalnya mencari di bawah meja atau di belakang kursi?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId3, 'question' => 'Bayi dipangku orang tua atau pengasuh. Letakkan suatu mainan yang diinginkan bayi di luar jangkauannya, apakah ia mencoba mendapatkan mainan dengan mengulurkan lengan atau badannya?', 'description' => 'Sosialisasi dan kemandirian.'],
            ['category_id' => $categoryId3, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah bayi menengok ke belakang seperti mendengar kedatangan seseorang pada saat bayi sedang bermain sendiri dan seseorang diam-diam datang berdiri di belakangnya? Suara keras tidak ikut dihitung. Jawab Ya hanya jika melihat reaksinya terhadap suara yang perlahan atau bisikan.', 'description' => 'Bicara dan bahasa.'],
            ['category_id' => $categoryId3, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mengatakan 2 suku kata yang sama, misalnya: “Ma-ma”, “Da-da” atau “Pa-pa”? Jawab Ya bila ia dapat mengeluarkan salah 1 suara tersebut.', 'description' => 'Bicara dan bahasa.'],
            ['category_id' => $categoryId3, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah bayi dapat makan kue kering sendiri?', 'description' => 'Sosialisasi dan kemandirian.'],
            ['category_id' => $categoryId3, 'question' => 'Tanyakan kepada orang tua atau pengasuh apakah pernah melihat bayi memindahkan mainan atau kue kering dari satu tangan ke tangan yang lain? Benda benda panjang seperti sendok atau kerincingan bertangkai tidak ikut dinilai.', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId3, 'question' => 'Tanpa disangga oleh bantal, kursi atau dinding, dapatkah bayi duduk sendiri selama 60 detik?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId3, 'question' => 'Jika Anda mengangkat bayi melalui ketiaknya ke posisi berdiri, dapatkah ia menyangga sebagian berat badan dengan kedua kakinya? Jawab Ya bila ia mencoba berdiri dan sebagian berat badan tertumpu pada kedua kakinya.', 'description' => 'Gerak kasar.'],

            // 10-12 bulan
            ['category_id' => $categoryId4, 'question' => 'Bayi dipangku orang tua atau pengasuh. Letakkan pensil di telapak tangan anak. Coba ambil pensil tersebut dengan perlahan-lahan. Apakah anak menggenggam pensil dengan erat dan Anda merasa kesulitan mendapatkan pensil itu kembali?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId4, 'question' => 'Bayi dipangku orang tua atau pengasuh. Letakkan kismis di atas meja. Dapatkah anak memungut dengan tangannya benda benda kecil seperti kismis, kacang kacangan, potongan biskuit dengan gerakan miring atau menggerapai seperti gambar?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId4, 'question' => 'Bayi dipangku orang tua atau pengasuh. Berikan 2 kubus kepada bayi. Tanpa bantuan, apakah anak dapat mempertemukan 2 kubus kecil yang ia pegang?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId4, 'question' => 'Sebut 2 s/d 3 kata yang dapat ditiru oleh anak (tidak perlu kata kata yang lengkap). Apakah ia mencoba meniru kata-kata tadi?', 'description' => 'Bicara dan bahasa.'],
            ['category_id' => $categoryId4, 'question' => 'Tanyakan kepada ibu atau pengasuh, apakah anak dapat mengangkat badannya ke posisi berdiri tanpa bantuan?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId4, 'question' => 'Tanyakan kepada ibu atau pengasuh, apakah anak dapat duduk sendiri tanpa bantuan dari posisi tidur atau tengkurap?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId4, 'question' => 'Tanyakan kepada ibu atau pengasuh, apakah anak dapat memahami makna kata "jangan"?', 'description' => 'Bicara dan bahasa.'],
            ['category_id' => $categoryId4, 'question' => 'Tanyakan kepada ibu atau pengasuh, apakah anak akan mencari atau terlihat mengharapkan muncul kembali jika ibu atau pengasuh bersembunyi di belakang sesuatu atau di pojok, kemudian muncul dan menghilang secara berulang-ulang di hadapan anak?', 'description' => 'Sosialisasi dan kemandirian.'],
            ['category_id' => $categoryId4, 'question' => 'Tanyakan kepada ibu atau pengasuh, apakah anak dapat membedakan ibu atau pengasuh dengan orang yang belum ia kenal? Ia akan menunjukkan sikap malu-malu atau ragu-ragu pada saat permulaan bertemu dengan orang yang belum dikenalnya.', 'description' => 'Sosialisasi dan kemandirian.'],
            ['category_id' => $categoryId4, 'question' => 'Berdirikan anak. Apakah anak dapat berdiri dengan berpegangan pada kursi atau meja selama 30 detik atau lebih?', 'description' => 'Gerak kasar.'],

            // 12-18 bulan
            ['category_id' => $categoryId5, 'question' => 'Bayi dipangku orang tua atau pengasuh. Berikan 2 kubus kepada anak. Tanpa bantuan, apakah anak dapat mempertemukan 2 kubus kecil yang ia pegang?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId5, 'question' => 'Bayi dipangku orang tua atau pengasuh. Berikan sebuah kubus dan cangkir. Apakah anak dapat memasukkan 1 kubus ke dalam cangkir?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId5, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat berjalan dengan berpegangan?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId5, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mengatakan "papa" ketika ia memanggil atau melihat ayahnya, atau mengatakan "mama" jika memanggil atau melihat ibunya? Jawab "Ya" bila anak mengatakan salah satu di antaranya.', 'description' => 'Bicara dan bahasa.'],
            ['category_id' => $categoryId5, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mengucapkan 1 kata yang bermakna selain "mama", "papa", atau nama panggilan orang?', 'description' => 'Bicara dan bahasa.'],
            ['category_id' => $categoryId5, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat bertepuk tangan atau melambai-lambai tanpa bantuan? Jawab "Tidak" bila ia membutuhkan bantuan.', 'description' => 'Sosialisasi dan kemandirian.'],
            ['category_id' => $categoryId5, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat menunjukkan apa yang diinginkannya tanpa menangis atau merengek? Jawab "Ya" bila ia menunjuk, menarik atau mengeluarkan suara yang menyenangkan.', 'description' => 'Sosialisasi dan kemandirian.'],
            ['category_id' => $categoryId5, 'question' => 'Coba berdirikan anak. Apakah anak dapat berdiri sendiri tanpa berpegangan selama 30 detik atau lebih?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId5, 'question' => 'Letakkan kubus di lantai, tanpa berpegangan atau menyentuh lantai, apakah anak dapat membungkuk untuk memungut kubus di lantai dan kemudian berdiri kembali?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId5, 'question' => 'Apakah anak dapat berjalan di sepanjang ruangan tanpa jatuh atau terhuyung-huyung?', 'description' => 'Gerak kasar.'],
        
        
            // 18-24 bulan
            ['category_id' => $categoryId6, 'question' => 'Bayi dipangku orang tua atau pengasuh. Berikan anak sebuah pensil dan kertas. Apakah anak dapat mencoret-coret kertas tanpa bantuan atau petunjuk?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId6, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat menyebutkan sedikitnya 3 kata yang bermakna?', 'description' => 'Bicara dan bahasa.'],
            ['category_id' => $categoryId6, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat menunjukkan apa yang diinginkannya tanpa menangis atau merengek?', 'description' => 'Sosialisasi dan kemandirian.'],
            ['category_id' => $categoryId6, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat minum dari cangkir atau gelas sendiri tanpa banyak yang tumpah?', 'description' => 'Sosialisasi dan kemandirian.'],
            ['category_id' => $categoryId6, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak suka meniru bila ibu atau pengasuh sedang melakukan pekerjaan rumah tangga (merapikan mainan, menyapu, dll)?', 'description' => 'Sosialisasi dan kemandirian.'],
            ['category_id' => $categoryId6, 'question' => 'Gelindingkan bola tenis ke arah anak. Apakah anak dapat menggelindingkan atau melempar bola tersebut kembali kepada Anda?', 'description' => 'Gerak halus.'],
            ['category_id' => $categoryId6, 'question' => 'Letakkan kubus di lantai, tanpa berpegangan atau menyentuh lantai, apakah anak dapat membungkuk untuk memungut kubus di lantai dan kemudian berdiri kembali?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId6, 'question' => 'Minta anak untuk berjalan sepanjang ruangan. Dapatkah ia berjalan tanpa terhuyung-huyung atau terjatuh?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId6, 'question' => 'Dapatkah anak berjalan mundur minimal 5 langkah tanpa kehilangan keseimbangan?', 'description' => 'Gerak kasar.'],
            ['category_id' => $categoryId6, 'question' => 'Berikan anak perintah berikut ini dengan bantuan telunjuk atau isyarat: "Ambil kertas", "Ambil pensil", "Tutup pintu". Dapatkah anak melakukan perintah tersebut dengan bantuan telunjuk atau isyarat?', 'description' => 'Bicara dan bahasa.'],
            
            
            // 24-30 bulan
            ['category_id' => $categoryId7, 'question' => 'Bayi dipangku orang tua atau pengasuh. Berikan anak sebuah pensil dan kertas. Apakah anak dapat mencoret-coret kertas tanpa bantuan atau petunjuk?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId7, 'question' => 'Bayi dipangku orang tua atau pengasuh. Minta anak untuk menyusun kubus. Apakah anak dapat menyusun 2 kubus?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId7, 'question' => 'Bayi dipangku orang tua atau pengasuh. Tunjukkan gambar di bawah pada anak dan minta ia untuk menunjuk gambar sesuai dengan yang Anda sebutkan namanya. Apakah anak dapat menunjuk minimal 1 gambar?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId7, 'question' => 'Bayi dipangku orang tua atau pengasuh. Tanpa bimbingan, petunjuk, atau bantuan Anda, dapatkah anak menunjuk paling sedikit 1 bagian tubuhnya dengan benar (rambut, mata, hidung, mulut, atau bagian badan yang lain)?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId7, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mengucapkan minimal 7 kata yang mempunyai arti (selain kata "mama" dan "papa")?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId7, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat minum dari cangkir atau gelas sendiri tanpa banyak yang tumpah?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId7, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak suka meniru bila ibu atau pengasuh sedang melakukan pekerjaan rumah tangga (merapikan mainan, menyapu, dll)?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId7, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat berlari tanpa terjatuh?', 'description' => 'Gerak kasar'],
            ['category_id' => $categoryId7, 'question' => 'Letakkan kubus di lantai, tanpa berpegangan atau menyentuh lantai, apakah anak dapat membungkuk untuk memungut kubus di lantai dan kemudian berdiri kembali?', 'description' => 'Gerak kasar'],
            ['category_id' => $categoryId7, 'question' => 'Dapatkah anak berjalan mundur minimal 5 langkah tanpa kehilangan keseimbangan?', 'description' => 'Gerak kasar'],
        
            // 30-36 bulan
            ['category_id' => $categoryId8, 'question' => 'Bayi dipangku orang tua atau pengasuh. Berikan anak sebuah pensil dan kertas. Apakah anak dapat mencoret-coret kertas tanpa bantuan atau petunjuk?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId8, 'question' => 'Bayi dipangku orang tua atau pengasuh. Minta anak untuk menyusun kubus. Apakah anak dapat menyusun 4 kubus?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId8, 'question' => 'Bayi dipangku orang tua atau pengasuh. Tanpa bimbingan, petunjuk, atau bantuan Anda, dapatkah anak menunjuk paling sedikit 2 bagian tubuhnya dengan benar (rambut, mata, hidung, mulut, atau bagian badan yang lain)?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId8, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak mampu menggabungkan 2 kata berbeda ketika berbicara, misalnya “Minum susu” atau “Main bola”? “Terima kasih” dan “Da-dah” tidak termasuk.', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId8, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat melepas pakaiannya seperti baju, rok, atau celana?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId8, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat makan dengan menggunakan sendok sendiri tanpa banyak yang tumpah?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId8, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat berlari tanpa terjatuh?', 'description' => 'Gerak kasar'],
            ['category_id' => $categoryId8, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat berjalan naik tangga sendiri? Jawab "Ya" jika ia naik tangga dengan posisi tegak atau berpegangan pada dinding atau pegangan tangga. Jawab "Tidak" jika ia naik tangga dengan merangkak, orang tua tidak memperbolehkan anak naik tangga, atau anak harus berpegangan pada seseorang.', 'description' => 'Gerak kasar'],
            ['category_id' => $categoryId8, 'question' => 'Letakkan bola tenis di depan kaki anak. Apakah ia dapat menendang ke depan tanpa berpegangan pada apapun?', 'description' => 'Gerak kasar'],
            ['category_id' => $categoryId8, 'question' => 'Ikuti perintah dengan seksama. Jangan memberi isyarat dengan telunjuk atau mata pada saat memberikan perintah berikut ini: “Ambil kertas” “Ambil pensil” “Tutup pintu” Dapatkah anak melakukan perintah tersebut?', 'description' => 'Bicara dan bahasa'],
        
            // 36-42 bulan
            ['category_id' => $categoryId9, 'question' => 'Cerobong asap (dicontohkan)?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId9, 'question' => 'Buat garis lurus ke bawah sepanjang sekurang-kurangnya 2,5 cm. Minta anak untuk menggambar garis lain di samping garis ini.', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId9, 'question' => 'Tanpa bimbingan, petunjuk, atau bantuan Anda, dapatkah anak menyebut 2 gambar di antara gambar-gambar di bawah dengan benar?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId9, 'question' => 'Tanpa bimbingan, petunjuk, atau bantuan Anda, dapatkah anak menunjuk 4 gambar di antara gambar-gambar di atas ini dengan benar ketika Anda sebutkan namanya?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId9, 'question' => 'Tanpa bimbingan, petunjuk, atau bantuan Anda, dapatkah anak menunjuk paling sedikit 6 bagian tubuhnya?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId9, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat memahami perintah yang terdiri dari 2 langkah, misalnya “Tolong ambil bola dan berikan kepada Ayah”?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId9, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak berpakaian sendiri seperti baju, rok, celana (topi dan kaos kaki tidak ikut dinilai)?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId9, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak bermain peran, misalnya menyuapi boneka?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId9, 'question' => 'Letakkan bola tenis di depan kaki anak. Dapatkah anak menendang ke depan tanpa berpegangan pada apapun? Mendorong bola tidak ikut dinilai.', 'description' => 'Gerak kasar'],
            ['category_id' => $categoryId9, 'question' => 'Minta anak untuk melompat atau mengangkat kedua kakinya pada saat bersamaan. Dapatkah ia melakukannya?', 'description' => 'Gerak kasar'],

            
            ['category_id' => $categoryId10, 'question' => 'Beri kubus di depan anak. Dapatkah anak menyusun 6 buah kubus satu persatu di atas kubus yang lain tanpa menjatuhkan kubus tersebut?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId10, 'question' => 'Buat garis lurus ke bawah sepanjang sekurang-kurangnya 2,5 cm. Minta anak untuk menggambar garis lain di samping garis ini.', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId10, 'question' => 'Tanpa bimbingan, petunjuk, atau bantuan Anda, dapatkah anak menyebut 4 gambar di antara gambar-gambar di bawah ini dengan benar?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId10, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat memahami perintah yang terdiri dari 2 langkah, misalnya “Tolong ambil bola dan berikan kepada Ayah”?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId10, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah sebagian dari bicara anak dapat dipahami oleh orang asing (yang tidak bertemu setiap hari)?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId10, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak merangkai kalimat sederhana yang terdiri dari minimal 3 kata, misalnya “Aku makan roti” atau “Ibu minta susu”?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId10, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak menggosok gigi dengan bantuan?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId10, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak mengenakan baju, celana, atau sepatu sendiri (tidak termasuk mengancing dan menali)?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId10, 'question' => 'Berikan kepada anak sebuah bola tenis. Minta ia untuk melemparkan ke arah dada Anda. Dapatkah anak melempar bola dengan lurus ke arah perut atau dada Anda dari jarak 1,5 meter?', 'description' => 'Gerak kasar'],
            ['category_id' => $categoryId10, 'question' => 'Letakkan selembar kertas seukuran buku ini di atas lantai. Apakah anak dapat melompati bagian lebar kertas dengan mengangkat kedua kakinya secara bersamaan tanpa didahului lari?', 'description' => 'Gerak kasar'],

          
            ['category_id' => $categoryId11, 'question' => 'Buat garis lurus ke bawah sepanjang sekurang-kurangnya 2,5 cm. Minta anak untuk menggambar garis lain di samping garis ini.', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId11, 'question' => 'Beri kubus di depan anak. Dapatkah anak menyusun 8 buah kubus satu persatu di atas kubus yang lain tanpa menjatuhkannya?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId11, 'question' => 'Tunjukkan anak gambar di bawah ini dan tanyakan: “Mana yang dapat terbang?” “Mana yang dapat mengeong?” “Mana yang dapat bicara?” “Mana yang dapat menggonggong?” “Mana yang dapat meringkik?” Apakah anak dapat menunjuk 2 kegiatan yang sesuai?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId11, 'question' => 'Tanyakan kepada anak pertanyaan berikut ini satu persatu: “Apa yang kamu lakukan bila kedinginan?” Jawaban: pakai jaket, pakai selimut “Apa yang kamu lakukan bila kamu kelelahan?” Jawaban: tidur, berbaring, istirahat “Apa yang kamu lakukan bila kamu merasa lapar?” Jawaban: makan “Apa yang kamu lakukan bila kamu merasa haus?” Jawaban: minum Apakah anak dapat menjawab 3 pertanyaan dengan benar tanpa gerakan dan isyarat?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId11, 'question' => 'Minta anak untuk menyebut 1 warna. Dapatkah anak menyebut 1 warna dengan benar?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId11, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mencuci tangannya sendiri dengan baik setelah makan?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId11, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak menyebut nama teman bermain di luar rumah atau saudara yang tidak tinggal serumah?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId11, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak mengenakan kaos (T-shirt) tanpa dibantu?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId11, 'question' => 'Letakkan selembar kertas seukuran buku ini di atas lantai. Apakah anak dapat melompati bagian lebar kertas dengan mengangkat kedua kakinya secara bersamaan tanpa didahului lari?', 'description' => 'Gerak kasar'],
            ['category_id' => $categoryId11, 'question' => 'Minta anak untuk berdiri 1 kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak kesempatan sebanyak 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 1 detik atau lebih?', 'description' => 'Gerak kasar'],
            
           
            ['category_id' => $categoryId12, 'question' => 'Berikan contoh membuat jembatan dari 3 buah kubus, yaitu dengan meletakkan 2 kubus dengan sedikit jarak (kira-kira satu jari), lalu letakkan balok ketiga di atas kedua balok sehingga terbentuk seperti jembatan. Minta anak untuk melakukan. Dapatkan anak melakukannya?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId12, 'question' => 'Beri pensil dan kertas. Jangan membantu anak dan jangan menyebut lingkaran. Buatlah lingkaran di atas kertas tersebut. Minta anak menirunya. Dapatkah anak menggambar lingkaran?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId12, 'question' => 'Tunjukkan anak gambar di bawah ini dan tanyakan: - “Yang mana yang dapat terbang?” - “Yang mana yang dapat menggonggong?” - “Yang mana yang dapat mengeong?” - “Yang mana yang dapat meringkik?” - “Yang mana yang dapat bicara?” Apakah anak dapat menunjuk 2 kegiatan yang sesuai?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId12, 'question' => 'Dapatkah anak menyebut nama lengkapnya tanpa dibantu? Jawab ‘Tidak’ jika ia menyebut sebagian namanya atau ucapannya sulit dimengerti.', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId12, 'question' => 'Mengenal konsep angka satu. Letakkan 5 kubus di atas meja dan selembar kertas di samping kubus. Katakan kepada anak “Ambil 1 kubus dan letakkan di atas kertas”. Setelah anak selesai meletakkan, tanyakan “Ada berapa banyak kubus di atas kertas?” Dapatkah anak melakukan dengan hanya mengambil satu kubus dan bisa menyebutkan “Satu”?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId12, 'question' => 'Tanyakan kepada anak pertanyaan di bawah satu persatu: “Apa kegunaan kursi?” Jawaban: untuk duduk “Apa kegunaan cangkir?” Jawaban: untuk minum “Apa kegunaan pensil?” Jawaban: untuk mencoret, menulis, menggambar Dapatkah anak menjawab ketiga pertanyaan terkait kegunaan benda tersebut dengan benar?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId12, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak mengikuti peraturan permainan saat bermain dengan teman-temannya (misal: ular tangga, petak umpet, dll)?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId12, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak mengenakan kaos (T-shirt) tanpa dibantu?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId12, 'question' => 'Letakkan selembar kertas seukuran buku ini di atas lantai. Apakah anak dapat melompati bagian lebar kertas dengan mengangkat kedua kakinya secara bersamaan tanpa didahului lari?', 'description' => 'Gerak kasar'],
            ['category_id' => $categoryId12, 'question' => 'Minta anak untuk berdiri 1 kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak kesempatan sebanyak 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 2 detik atau lebih?', 'description' => 'Gerak kasar'],
        
            ['category_id' => $categoryId13, 'question' => 'Jangan mengoreksi atau membantu anak. Jangan menyebut kata “Lebih panjang”. Perlihatkan gambar kedua garis ini pada anak. Tanyakan: “Mana garis yang lebih panjang?” Minta anak menunjuk garis yang lebih panjang. Setelah anak menunjuk, putar lembar ini dan ulangi pertanyaan tersebut. Apakah anak dapat menunjuk garis yang lebih panjang sebanyak 3 kali dengan benar?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId13, 'question' => 'Jangan membantu anak dan jangan memberitahu nama gambar ini. Minta anak untuk menggambar seperti contoh di kertas kosong yang tersedia. Berikan 3 kali kesempatan. Apakah anak dapat menggambar + seperti contoh di bawah?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId13, 'question' => 'Berikan anak pensil dan kertas lalu katakan kepada anak “Buatlah gambar orang” (anak laki-laki, anak perempuan, papa, mama, dll). Jangan memberi perintah lebih dari itu. Jangan bertanya atau mengingatkan anak bila ada bagian yang belum tergambar. Dalam memberi nilai, hitunglah berapa bagian tubuh yang tergambar. Untuk bagian tubuh yang berpasangan seperti mata, telinga, lengan, dan kaki, setiap pasang dinilai 1 bagian. Pastikan anak telah menyelesaikan gambar sebelum memberikan penilaian. Dapatkah anak menggambar orang dengan sedikitnya 3 bagian tubuh?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId13, 'question' => 'Minta anak untuk menyebutkan 2 warna. Dapatkah anak menyebut 2 warna dengan benar?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId13, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah bicara anak mampu dipahami seluruhnya oleh orang lain (yang tidak bertemu setiap hari)?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId13, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak mengikuti peraturan permainan saat bermain dengan teman-temannya (misal: ular tangga, petak umpet, dll)?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId13, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak menggosok gigi tanpa dibantu?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId13, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mengancingkan bajunya atau pakaian boneka?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId13, 'question' => 'Minta anak untuk mengikuti perintah di bawah, jangan memberi isyarat. “Ambil benda (misalnya kertas, balok) dan letakkan di atas meja” “Ambil benda (misalnya kertas, balok) dan letakkan di bawah meja” “Ambil benda (misalnya kertas, balok) dan letakkan di depan ibu” “Ambil benda (misalnya kertas, balok) dan letakkan di samping ibu” “Ambil benda (misalnya kertas, balok) dan letakkan di belakang ibu” Dapatkah anak melakukan sedikitnya 2 perintah (memahami 2 kata depan)?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId13, 'question' => 'Minta anak untuk berdiri 1 kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak kesempatan sebanyak 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 2 detik atau lebih?', 'description' => 'Gerak kasar'],
        
            ['category_id' => $categoryId14, 'question' => 'Perlihatkan gambar kedua garis ini pada anak. Tanyakan: “Mana garis yang lebih panjang?” Minta anak menunjuk garis yang lebih panjang. Setelah anak menunjuk, putar lembar ini dan ulangi pertanyaan tersebut. Apakah anak dapat menunjuk garis yang lebih panjang sebanyak 3 kali dengan benar?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId14, 'question' => 'Berikan anak pensil dan kertas lalu katakan kepada anak “Buatlah gambar orang” (anak laki-laki, anak perempuan, papa, mama, dll). Jangan memberi perintah lebih dari itu. Jangan bertanya atau mengingatkan anak bila ada bagian yang belum tergambar. Dalam memberi nilai, hitunglah berapa bagian tubuh yang tergambar. Untuk bagian tubuh yang berpasangan seperti mata, telinga, lengan, dan kaki, setiap pasang dinilai 1 bagian. Pastikan anak telah menyelesaikan gambar sebelum memberikan penilaian. Dapatkah anak menggambar orang dengan sedikitnya 3 bagian tubuh?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId14, 'question' => 'Minta anak untuk menyebutkan 4 warna. Dapatkah anak menyebut keempat warna tersebut dengan benar?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId14, 'question' => 'Tanyakan kepada anak pertanyaan berikut ini satu per satu: “Apa yang kamu lakukan saat kedinginan?” Jawaban: pakai jaket, pakai selimut. “Apa yang kamu lakukan saat kelelahan?” Jawaban: tidur, berbaring, istirahat. “Apa yang kamu lakukan saat merasa lapar?” Jawaban: makan. “Apa yang kamu lakukan saat merasa haus?” Jawaban: minum. Dapatkah anak menjawab 3 pertanyaan terkait kata sifat tersebut dengan benar?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId14, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat mengancingkan bajunya atau pakaian boneka?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId14, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak bereaksi dengan tenang dan tidak rewel (tanpa menangis atau menggelayut) pada saat ditinggal oleh orang tua atau pengasuh?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId14, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak sepenuhnya berpakaian sendiri tanpa dibantu?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId14, 'question' => 'Minta anak untuk mengikuti perintah di bawah, jangan memberi isyarat: “Ambil benda (misalnya kertas, balok) dan letakkan di atas meja” “Ambil benda (misalnya kertas, balok) dan letakkan di bawah meja” “Ambil benda (misalnya kertas, balok) dan letakkan di depan ibu” “Ambil benda (misalnya kertas, balok) dan letakkan di samping ibu” “Ambil benda (misalnya kertas, balok) dan letakkan di belakang ibu” Dapatkah anak melakukan sedikitnya 4 perintah (memahami 4 kata depan)?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId14, 'question' => 'Minta anak untuk berdiri 1 kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak kesempatan sebanyak 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 4 detik atau lebih?', 'description' => 'Gerak kasar'],
            ['category_id' => $categoryId14, 'question' => 'Minta anak untuk melompat dengan 1 kaki beberapa kali tanpa berpegangan (lompatan dengan 2 kaki tidak ikut dinilai). Dapatkah anak melompat 2-3 kali dengan 1 kaki?', 'description' => 'Gerak kasar'],
        
            ['category_id' => $categoryId15, 'question' => 'Jangan membantu anak dan jangan memberitahu nama gambar ini. Minta anak untuk menggambar seperti contoh di kertas kosong yang tersedia. Berikan 3 kali kesempatan. Apakah anak dapat menggambar + seperti contoh di bawah?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId15, 'question' => 'Berikan kepada anak pensil dan kertas. Tunjukkan kepada anak contoh gambar di bawah. Anda bisa mencontohkan cara membuat kotak. Dapatkah anak menggambar kotak seperti contoh di bawah?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId15, 'question' => 'Berikan anak pensil dan kertas lalu katakan kepada anak “Buatlah gambar orang” (anak laki-laki, anak perempuan, papa, mama, dll). Jangan memberi perintah lebih dari itu. Jangan bertanya atau mengingatkan anak bila ada bagian yang belum tergambar. Dalam memberi nilai, hitunglah berapa bagian tubuh yang tergambar. Untuk bagian tubuh yang berpasangan seperti mata, telinga, lengan dan kaki, setiap pasang dinilai 1 bagian. Pastikan anak telah menyelesaikan gambar sebelum memberikan penilaian. Dapatkah anak menggambar orang dengan sedikitnya 6 bagian tubuh?', 'description' => 'Gerak halus'],
            ['category_id' => $categoryId15, 'question' => 'Letakkan 8 kubus di atas meja dan selembar kertas di samping kubus. Katakan kepada anak “Ambil 5 kubus dan letakkan di atas kertas”. Setelah anak selesai meletakkan, tanyakan “Ada berapa banyak kubus di atas kertas?” Dapatkah anak melakukannya?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId15, 'question' => 'Pastikan anak mendengar pemeriksa lalu katakan “Saya akan mengucapkan 1 kata dan saya ingin kamu menyebutkan apa arti kata itu”. Setiap kata dapat diberikan sebanyak 3 kali bila perlu. Pemeriksa dapat mengatakan “Beritahu saya sesuatu tentang itu” tetapi jangan tanya apa kegunaannya. Tanyalah setiap kata dalam satu waktu. “Apakah bola itu?”, “Apakah sungai itu?”, “Apakah meja itu?”, “Apakah mobil/motor itu?”, “Apakah rumah itu?”, “Apakah pisang itu?”, “Apakah pintu itu?”, “Apakah atap itu?” Anak dikatakan dapat mengartikan jika anak mengartikan yang sesuai dalam istilah: 1) kegunaan, 2) bentuk, 3) terbuat dari apa, 4) kategori umum. Dapatkah anak mengartikan 5 kata yang sesuai?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId15, 'question' => 'Minta anak untuk melengkapi kalimat di bawah ini, jangan membantu kecuali mengulang pertanyaan: “Jika kuda besar, maka tikus...?” Jawaban: kecil. “Jika api panas, maka es...?” Jawaban: dingin. “Jika ibu seorang wanita, maka ayah seorang...” Jawaban: pria, laki-laki. Apakah anak menjawab ketiga pertanyaan dengan benar?', 'description' => 'Bicara dan bahasa'],
            ['category_id' => $categoryId15, 'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak bereaksi dengan tenang dan tidak rewel (tanpa menangis atau menggelayut) pada saat ditinggal oleh orang tua atau pengasuh?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId15, 'question' => 'Tanyakan kepada orang tua atau pengasuh, dapatkah anak sepenuhnya berpakaian sendiri tanpa dibantu?', 'description' => 'Sosialisasi dan kemandirian'],
            ['category_id' => $categoryId15, 'question' => 'Minta anak untuk berdiri 1 kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak kesempatan sebanyak 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 6 detik atau lebih?', 'description' => 'Gerak kasar'],
            ['category_id' => $categoryId15, 'question' => 'Apakah anak dapat menangkap bola kecil sebesar bola tenis atau bola kasti hanya dengan menggunakan kedua tangannya?', 'description' => 'Gerak kasar'],
            
            
            ['category_id' => $categoryId16, 'question' => 'Menggambar kotak tanpa dicontohkan. Berikan kepada anak pensil dan kertas. Tunjukkan kepada anak contoh gambar di bawah. Tanpa menyebutkan nama dan tanpa mencontohkan atau menggerakkan jari telunjuk atau pensil untuk menunjukkan bagaimana cara menggambarnya, katakan kepada anak “Gambarlah yang seperti gambar ini”. Lihat contoh di bawah untuk menilai gambar anak. Dapatkah anak menggambar kotak seperti contoh di bawah?',
                    'description' => 'Gerak halus'
                ],
                [
                    'category_id' => $categoryId16,
                    'question' => 'Menggambar orang dengan sedikitnya 6 bagian tubuh. Berikan anak pensil dan kertas lalu katakan kepada anak “Buatlah gambar orang” (anak laki-laki, anak perempuan, papa, mama, dll). Jangan memberi perintah lebih dari itu. Jangan bertanya atau mengingatkan anak bila ada bagian yang belum tergambar. Dalam memberi nilai, hitunglah berapa bagian tubuh yang tergambar. Untuk bagian tubuh yang berpasangan seperti mata, telinga, lengan dan kaki, setiap pasang dinilai 1 bagian. Pastikan anak telah menyelesaikan gambar sebelum memberikan penilaian. Dapatkah anak menggambar orang dengan sedikitnya 6 bagian tubuh?',
                    'description' => 'Gerak halus'
                ],
                [
                    'category_id' => $categoryId16,
                    'question' => 'Mengetahui konsep analogi berlawanan. Minta anak untuk melengkapi kalimat di bawah ini, jangan membantu kecuali mengulang pertanyaan: “Jika kuda besar, maka tikus...?” Jawaban: kecil. “Jika api panas, maka es...?” Jawaban: dingin. “Jika ibu seorang wanita, maka ayah seorang...” Jawaban: pria, laki-laki. “Jika pagi ada matahari, malam ada...” Jawaban: bulan. Apakah anak menjawab ketiga pertanyaan dengan benar?',
                    'description' => 'Bicara dan bahasa'
                ],
                [
                    'category_id' => $categoryId16,
                    'question' => 'Memahami/mengartikan 7 kata. Pastikan anak mendengar pemeriksa lalu katakan “Saya akan mengucapkan 1 kata dan saya ingin kamu menyebutkan apa arti kata itu”. Setiap kata dapat diberikan sebanyak 3 kali bila perlu. Pemeriksa dapat mengatakan “Beritahu saya sesuatu tentang itu” tetapi jangan tanya apa kegunaannya. Tanyalah setiap kata dalam satu waktu. “Apakah bola itu?”, “Apakah sungai itu?”, “Apakah meja itu?”, “Apakah mobil/motor itu?”, “Apakah rumah itu?”, “Apakah pisang itu?”, “Apakah pintu itu?”, “Apakah atap itu?” Anak dikatakan dapat mengartikan jika anak mengartikan yang sesuai dalam istilah: 1) kegunaan, 2) bentuk, 3) terbuat dari apa, 4) kategori umum. Dapatkah anak mengartikan 7 kata yang sesuai?',
                    'description' => 'Bicara dan bahasa'
                ],
                [
                    'category_id' => $categoryId16,
                    'question' => 'Mengetahui komposisi benda. Isi titik−titik di bawah ini dengan jawaban anak. Jangan membantu kecuali mengulangi pertanyaan sampai 3 kali bila anak menanyakannya. "Sendok dibuat dari apa?" Jawaban: besi, baja, plastik, kayu. "Sepatu dibuat dari apa?" Jawaban: kulit, karet, kain, plastik, kayu. "Pintu dibuat dari apa?" Jawaban: kayu, besi, kaca. Apakah anak dapat menjawab ketiga pertanyaan di atas dengan benar?',
                    'description' => 'Bicara dan bahasa'
                ],
                [
                    'category_id' => $categoryId16,
                    'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat menggosok giginya tanpa bantuan?',
                    'description' => 'Sosialisasi dan kemandirian'
                ],
                [
                    'category_id' => $categoryId16,
                    'question' => 'Tanyakan kepada orang tua atau pengasuh, apakah anak dapat menyiapkan dan mengambil makanan tanpa bantuan, termasuk menggunakan mangkok, sendok, menuangkan makanan dan susu ke mangkok tanpa banyak tumpah? Jawab ‘Ya’ jika anak dapat melakukannya, termasuk menuangkan susu dari beberapa jenis kotak atau wadah makanan.',
                    'description' => 'Sosialisasi dan kemandirian'
                ],
                [
                    'category_id' => $categoryId16,
                    'question' => 'Apakah anak dapat menangkap bola kecil sebesar bola tenis atau bola kasti hanya dengan menggunakan kedua tangannya?',
                    'description' => 'Gerak kasar'
                ],
                [
                    'category_id' => $categoryId16,
                    'question' => 'Tunjukkan kepada anak bagaimana cara berjalan di garis lurus dengan menempatkan tumit dari 1 kaki di depan jari kaki lain. Berjalanlah 8 langkah, lalu minta anak untuk melakukannya. Berikan contoh dan kesempatan sebanyak 3 kali bila perlu. Dapatkah anak melakukannya sebanyak 4 langkah atau lebih dengan meletakkan tumit tidak lebih dari 2,5 cm dari jari kaki lain tanpa berpegangan?',
                    'description' => 'Gerak kasar'
                ],
                [
                    'category_id' => $categoryId16,
                    'question' => 'Minta anak untuk berdiri 1 kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak kesempatan sebanyak 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 11 detik atau lebih?',
                    'description' => 'Gerak kasar'
                ]
            
        ];

        DB::table('questions')->insert($questions);
    }
}
