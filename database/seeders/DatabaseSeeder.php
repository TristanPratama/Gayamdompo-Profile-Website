<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Official;
use App\Models\Council;
use App\Models\Infrastructure;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Article::factory(10)->create();
        // Official::factory(20)->create();
        // Council::factory(20)->create();
        // Infrastructure::factory(10)->create();

        DB::table('profiles')->insert([
            'geografis' => '<p>Kelurahan Gayamdompo merupakan salah satu kelurahan di Provinsi Jawa Tengah yang terletak di Kecamatan Karanganyar Kabupaten Karanganyar, dengan kondisi geografis sebagai berikut: </p>
                            <ol>
                                <li> Tipologi Kelurahan :
                                    <ul>
                                    <li> Persawahan </li>
                                    <li> Perladangan </li>
                                    <li> Perkebunan </li>
                                    <li> Peternakan </li>
                                    <li> Kerajinan dan Industri Kecil </li>
                                    <li> Jasa dan Perdagangan </li>
                                    </ul>
                                </li>
                                <li> Luas Wilayah : 369.351 km<sup>2</sup></li>
                                <li> Batas Wilayah :
                                    <ul>
                                    <li> Sebelah Utara : Kelurahan Delingan </li>
                                    <li> Sebelah Selatan : Desa Gantiwarno </li>
                                    <li> Sebelah Barat : Kelurahan Popongan</li>
                                    <li> Sebelah Timur : Desa Bangsri </li>
                                    </ul>
                                </li>
                                <li> Orbitasi (Jarak dari Pusat Pemerintah) :
                                    <ul>
                                    <li> Jarak dari Pusat Pemerintah Kecamatan : 7 KM </li>
                                    <li> Jarak dari Pusat Pemerintah Kota : 7 KM </li>
                                    <li> Jarak dari Kota /Ibukota Kabupaten : 7 KM </li>
                                    <li> Jarak dari Ibukota Provinsi : 135 KM </li>
                                    </ul>
                                </li>
                            </ol>',
            'ekonomi' =>    '<p>
                                Gambaran umum mengenai kondisi ekonomi masyarakat Kelurahan Gayamdompo dapat dilihat dari potensi sumber daya yang ada, seperti sumber daya alam, sumber daya manusia, sumber daya kelembagaan, dan sumber daya sarana dan prasarana.
                            </p>
                            <p>
                                Potensi sumber daya alam berupa persawahan, perladangan, perkebunan dan peternakan merupakan potensi sumber daya unggulan yang mendominasi aktivitas masyarakat, selain itu sebagian masyarakatnya bekerja sebagai pengrajin, pelaku UMKM, pedagang, karyawan swasta, dan pegawai negeri sipil.
                            </P>
                            ',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin1@gayamdompo.com',
            'password' => Hash::make('admin123')
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin2@gayamdompo.com',
            'password' => Hash::make('admin123')
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin3@gayamdompo.com',
            'password' => Hash::make('admin123')
        ]);

        DB::table('visions')->insert([
            'visi' => 'Berjuang Bersama Memajukan Karanganyar',
            'misi' => ' Pembangunan infrastruktur menyeluruh. <br>
                        Pemberdayaan perekonomian rakyat. <br>
                        Pendidikan gratis SD/SMP dan kesehatan gratis. <br>
                        Pembangunan desa sebagai pusat pertumbuhan. <br>
                        Peningkatan kualitas keagamaan, sosial, dan budaya, pemberdayaan perempuan, pemuda, dan olahraga.'
        ]);

        // Struktur Pemerintahan Kelurahan 
        DB::table('officials')->insert([
            'nama' => 'Yudistira Ardhinugroho, SE. MM.',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Kepala Kelurahan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Sri Wahyuni, SE. MM.',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'P',
            'jabatan' => 'Sekretaris Kelurahan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Sulardi',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'P',
            'jabatan' => 'Bendahara Kelurahan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Tri Hastuti, SE',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'P',
            'jabatan' => 'Kasi PMD dan KESOS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Rini Mulyaningsih, SE',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'P',
            'jabatan' => 'Kasi Pemerintahan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Wagiyono',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Kasi Keamanan dan Ketertiban',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Nur Yuni W, SE',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'P',
            'jabatan' => 'Staff Administrasi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Tri Hardoyo, SE',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Staff Administrasi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Budhi Yuwono',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Staff Administrasi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Tri Sugiyasti, SE',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'P',
            'jabatan' => 'Staff Pelayanan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Tri Wahyudi, SPt',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Staff Pelayanan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Wahyu Ardi SP',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Staff Pelayanan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Mulyana, SP',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Korling Mojoroto',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Tri Setyaningrum, SE',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'P',
            'jabatan' => 'Korling Dawungan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Eko Puji Santoso',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Korling Sengon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Suharno',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Korling Karan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Heri Supriyanto',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Korling Tawang',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Struktur Pemerintahan Kelurahan 
        DB::table('councils')->insert([
            'nama' => 'Sumidi',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Ketua',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('councils')->insert([
            'nama' => 'Nata',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Wakil Ketua',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('councils')->insert([
            'nama' => 'Dalimin, S.Ag',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Sekretaris',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('councils')->insert([
            'nama' => 'Joko Waluyo',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Bendahara',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('councils')->insert([
            'nama' => 'Sularso',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Seksi Pembangunan dan Ekonomi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('councils')->insert([
            'nama' => 'Anshor Afandi, S.Ag',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Seksi Pendidikan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('councils')->insert([
            'nama' => 'Drs. Joko Supriyanto',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Seksi Agama',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('councils')->insert([
            'nama' => 'Agus Setyawan, SKM',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Seksi Kesehatan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('councils')->insert([
            'nama' => 'Wasingun',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Seksi Lingkungan Hidup',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('councils')->insert([
            'nama' => 'Purwanto',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Seksi Keamanan dan Ketertiban',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('councils')->insert([
            'nama' => 'Eko Puji Santoso',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Seksi Kesejahteraan Sosial',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Kelembagaan
        DB::table('unions')->insert([
            'nama' => 'Rukun Tetangga (RT)',
            'uri' => Str::random(30),
            'keterangan' => '
                                <p>Rukun Tetangga (RT) merupakan lembaga yang bertugas membantu pelaksanaan pemerintahan. Kelurahan Gayamdompo memiliki RT berjumlah 42.</p>
                                <ul>
                                    <li>Ketua RT 01 RW 01 : Suyono (Dukuhan)</li>
                                    <li>Ketua RT 02 RW 01 : Sariman (Puntuk)</li>
                                    <li>Ketua RT 03 RW 01 : Samino (Mojoroto)</li>
                                    <li>Ketua RT 04 RW 01 : Suyamto (Jenggleng)</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 02 : Daryono (Gandu)</li>
                                    <li>Ketua RT 02 RW 02 : Sukidi (Duren)</li>
                                    <li>Ketua RT 03 RW 02 : Sukadi (Sembung)</li>
                                    <li>Ketua RT 04 RW 02 : Supardiyanto (Jenggleng)</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 03 : Miran (Jenggrik)</li>
                                    <li>Ketua RT 02 RW 03 : Tukiyatmono (Tawang)</li>
                                    <li>Ketua RT 03 RW 03 : Tukimin, S.Pd. (Bondet)</li>
                                    <li>Ketua RT 04 RW 03 : Sularmin (Bondet)</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 04 : Sartono (Ngepos)</li>
                                    <li>Ketua RT 02 RW 04 : Haryadi (Ngepos)</li>
                                    <li>Ketua RT 03 RW 04 : Wagiyo (Pakelan)</li>
                                    <li>Ketua RT 04 RW 04 : Suyono (Tempel)</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 05 : Sutarso (Tegalsari)</li>
                                    <li>Ketua RT 02 RW 05 : Ngadiyanto (Tegalsari)</li>
                                    <li>Ketua RT 03 RW 05 : Ngadiyono (Tegalsari)</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 06 : Tarmin Padmo Wiyono (Padon)</li>
                                    <li>Ketua RT 02 RW 06 : Sularto (Padon)</li>
                                    <li>Ketua RT 03 RW 06 : Suharno (Padon)</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 07 : Sukir (Kelipan)</li>
                                    <li>Ketua RT 02 RW 07 : Giyatmo (Dawungan)</li>
                                    <li>Ketua RT 03 RW 07 : Suparno (Dani)</li>
                                    <li>Ketua RT 04 RW 07 : Joko Diyono (Kelipan)</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 08 : Paimin (Sengon)</li>
                                    <li>Ketua RT 02 RW 08 : Suparno (Sengon)</li>
                                    <li>Ketua RT 03 RW 08 : Sugiman (Sengon)</li>
                                    <li>Ketua RT 04 RW 08 : Wakidi (Sengon)</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 09 : Sugiyanto (Sengon)</li>
                                    <li>Ketua RT 02 RW 09 : Sadimin Tholib (Sengon)</li>
                                    <li>Ketua RT 03 RW 09 : Tumin (Sengon)</li>
                                    <li>Ketua RT 04 RW 09 : Sudomo (Sengon)</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 10 : Suwandi (Karan Joho)</li>
                                    <li>Ketua RT 02 RW 10 : Burhanun A.M (Karan Kidul)</li>
                                    <li>Ketua RT 03 RW 10 : Dalimin, S.Ag (Karan)</li>
                                    <li>Ketua RT 04 RW 10 : Bajuri (Karan)</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 11 : Wakidi (Karan)</li>
                                    <li>Ketua RT 02 RW 11 : Paidi Setiono (Karan)</li>
                                    <li>Ketua RT 03 RW 11 : Kemis Dulrohim (Ngoro-oro)</li>
                                    <li>Ketua RT 04 RW 11 : Tukimin (Geneng)</li>
                                </ul>
                            ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('unions')->insert([
            'nama' => 'Rukun Warga (RW)',
            'uri' => Str::random(30),
            'keterangan' => '
                            <p>Rukun Warga merupakan lembaga yang bertugas mengkoordinir RT-RT di wilayahnya. Kelurahan Gayamdompo memiliki RW berjumlah 11.</p>
                            <ul>
                                <li>Ketua RW 01 : Sutarno (Dukuhan)</li>
                                <li>Ketua RW 02 : Tukimin (Gandu)</li>
                                <li>Ketua RW 03 : Tukimin, S.Pd (Tawang)</li>
                                <li>Ketua RW 04 : Suyono (Ngepos)</li>
                                <li>Ketua RW 05 : Widodo (Tegalsari)</li>
                                <li>Ketua RW 06 : Rosiman Prasetyo (Padon)</li>
                                <li>Ketua RW 07 : Joko Diono (Kelipan)</li>
                                <li>Ketua RW 08 : Kardi (Sengon)</li>
                                <li>Ketua RW 09 : Joko Haryanto (Sengon)</li>
                                <li>Ketua RW 10 : Basar (Karan)</li>
                                <li>Ketua RW 11 : Sumardi (Karan)</li>
                            </ul>
                            <p>Pengurus Rukun Tetangga mempunyai tugas 
                                <ol>
                                    <li>Keputusan musyawarah warga</li>
                                    <li>Menyampaikan mengenai laporan kegiatan organisasi paling sedikit 6 ( enam ) bulan sekali kepada anggota melalui musyawarah anggota</li>
                                    <li>Menyampaikan hal-hal yang terjadi dalam masyarakat yang dianggap perlu mendapatkan penyelesaian Lurah.</li>
                                </ol>
                            </P>
                            ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('unions')->insert([
            'nama' => 'Karang Taruna',
            'uri' => Str::random(30),
            'keterangan' => '
                            <p>Pengurus Lembaga Karang Taruna Kelurahan mempunyai fungsi :  
                            <ol>
                                <li>Pelopor pembangunan dan pembaharuan di wilayah Kelurahan</li>
                                <li>Pembinaan persatuan dan kesatuan pemuda</li>
                                <li>Melaksankan usaha-usaha pencegahan kenakalan remaja dan penyalahgunaan narkotika, serta aktif dalam kegiatan pembaharuan bangsa dikalangan masyarakat</li>
                                <li>Memelihara dan memupuk kebersamaan dan rasa kesetia kawanan sosial</li>
                            </ol>
                            </P>
                            <p>Berikut adalah Pengurus Lembaga Karang Taruna Kelurahan Gayamdompo </p>
                            <ul>
                                <li>Suwardi, S.H (Pengarah)</li>
                                <li>Agus Suryadi (Ketua)</li>
                                <li>Ngadi (Wakil Ketua)</li>
                                <li>Aprilia (Sekretaris)</li>
                                <li>Andika Haryani Putra (Anggota)</li>
                                <li>Heru Budi Siswanto (Anggota)</li>
                                <li>Gatot Widiyanto (Anggota)</li>
                                <li>Setyo Harjanto (Anggota)</li>
                            </ul>
                            ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('unions')->insert([
            'nama' => 'Pemberdayaan dan Kesejahteraan Keluarga (PKK)',
            'uri' => Str::random(30),
            'keterangan' => '
                            <p>Tim Penggerak Pemberdayaan dan Kesejahteraan Keluarga Kelurahan mempunyai tugas :  
                                <ol>
                                    <li>Menyusun rencana kerja PKK sebagai penjabaran hasil Rakerda Kabupaten</li>
                                    <li>Melaksanakan kegiatan sesuai jadwal yang disepakati</li>
                                    <li>Menyuluh dan menggerakkan kelompok-kelompok PKK RW, RT dan dasa wisma agar dapat mewujudkan kegiatan-kegiatan yang telah disusun dan disepakati</li>
                                    <li>Menggali, menggerakkan dan mengembangkan potensi masyarakat khususnya keluarga untuk meningkatkan kesejahteraan keluarga sesuai dengan kebijakan yang telah ditetapkan</li>
                                    <li>Melaksanakan kegiatan penyuluhan kepada keluarga-keluarga   yang mencakup kegiatan bimbingan, motivasi, dalam upaya mencapai keluarga sejahtera dan bimbingan mengenai pelaksanaan program kerja </li> 
                                    <li>Berpartisipasi dalam pelaksanaan program instansi yang berkaitan dengan kesejahteraan keluarga di Kelurahan </li> 
                                    <li>Melaksanakan tertib administrasi </li>
                                    <li>Mengadakan konsultasi dengan ketua dan anggota dewan penyantun </li>
                                </ol>
                            </P>
                            <p>Berikut adalah Pengurus Penggerak Pemberdayaan dan Kesejahteraan Keluarga Kelurahan Gayamdompo </p>
                            <ul>
                            <li>Suwardi, S.H (Ketua Dewan Penyantun)</li>
                            <li>Siti Marfu’ ah (Ketua)</li>
                            <li>Menik (Wakil Ketua I)</li>
                            <li>Mirah/Ny. Wardi (Wakil Ketua II)</li>
                            <li>Sutari (Sekretaris I)</li>
                            <li>Tri Sugiyasti, SE (Sekretaris II)</li>
                            <li>Siti Jariyah (Bendahara I)</li>
                            <li>Rini Mulyaningsih, A.Md (Bendahara II)</li>
                            <li>Wagini Purnomo (Ketua Pokja I)</li>
                            <li>Nur Yuni Wardani (Sekretaris Pokja I)</li>
                            <li>Rukini (Anggota)</li>
                            <li>Sri Mulyani (Anggota)</li>
                            <li>Lilis Suryani (Ketua Pokja II)</li>
                            <li>Wiwik Kurniawati (Sekretaris Pokja II)</li>
                            <li>Dwi Purwanti (Anggota)</li>
                            <li>Wiji Sulardi (Anggota)</li>
                            <li>Harsiti (Ketua Pokja III)</li>
                            <li>Sri Larno (Sekretaris Pokja III)</li>
                            <li>Yuniarti (Anggota)</li>
                            <li>Patmini (Anggota)</li>
                            <li>Tri Hartini (Ketua Pokja IV)</li>
                            <li>Sayekti (Sekretaris Pokja IV)</li>
                            <li>Andriyani (Anggota)</li>
                            <li>Emi Suhaemi (Anggota)</li>
                            </ul>
                            ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('unions')->insert([
            'nama' => 'Posyandu',
            'uri' => Str::random(30),
            'keterangan' => '
                            <p>Dalam melaksanakan tugasnya Pengurus Kelompok Posyandu Kelurahan Gayamdompo Kecamatan Karanganyar mempunyai tugas dan tanggungjawab sebagai berikut : 
                                <ol>
                                    <li>Melaksanakan kegiatan Kelompok Posyandu yang berpedoman pada Petunjuk Pelaksanaan Hasil Rakernas VIII PKK Tahun 2015.</li>
                                    <li>Merencanakan, melaksanakan dan melaporkan kegiatan Posyandu kepada Ketua Tim Penggerak PKK Kelurahan Gayamdompo.</li>
                                    <li>Menertibkan administrasi Kelompok Posyandu sesuai dengan Petunjuk.</li>
                                </ol>
                            </P>
                            <p>Berikut adalah Pengurus Kelompok Posyandu Kelurahan Gayamdompo</p>
                            <ul>Mawar (Mojoroto)
                                <li>Sularmi : Meja I (Pendaftaran)</li>
                                <li>Sri Lestari : Meja II (Pengukuran TB)</li>
                                <li>Sri Utami : Penimbangan</li>
                                <li>Siti Jariyah : Meja III (Pencatatan)</li>
                                <li>Dwi Hartanti : Meja III (Pencatatan)</li>
                                <li>Sri Mulyani : Meja IV (Pemberian PMT)</li>
                                <li>Wiwik Kurniawati : Meja V (Pelayanan & Penyuluhan)</li>
                            </ul>
                            <ul>Melati (Tawang)
                                <li>Harsiti : Meja I (Pendaftaran)</li>
                                <li>Tri Handayani : Meja II (Pengukuran TB)</li>
                                <li>Sarwi : Meja II (Penimbangan)</li>
                                <li>Titik Irawati : Meja III (Pencatatan)</li>
                                <li>Rukini : Meja III (Pencatatan)</li>
                                <li>Sri Mulyani : Meja IV (Pelayanan & Penyuluhan)</li>
                                <li>Padmini : Meja IV (Pelayanan & Penyuluhan)</li>
                                <li>Endah Sri Hastuti : Meja V (Pemberian PMT)</li>
                            </ul>
                            <ul>Cempaka (Dawungan)
                                <li>Ari Wiwik : Meja I (Pendaftaran)</li>
                                <li>Sri Sularmi : Meja II (Pengukuran TB)</li>
                                <li>Sutari : Meja II (Penimbangan)</li>
                                <li>Sukamti : Meja III (Pencatatan)</li>
                                <li>Darwanti : Meja III (Pencatatan)</li>
                                <li>Sri Sadiyani : Meja IV (Pelayanan & Penyuluhan)</li>
                                <li>Tri Setyaningrum : Meja V (Pemberian PMT)</li>
                            </ul>
                            <ul>Menur (Sengon)
                                <li>Sunarsi : Meja I (Pendaftaran)</li>
                                <li>Suwarni : Meja II (Pengukuran TB)</li>
                                <li>Ngadiyem : Meja II (Penimbangan)</li>
                                <li>Andriyani : Meja III (Pencatatan)</li>
                                <li>Sungatmi : Meja III (Pencatatan)</li>
                                <li>Sayekti : Meja IV (Pelayanan & Penyuluhan)</li>
                                <li>Siti Handayani : Meja V (Pemberian PMT)</li>
                            </ul>
                            <ul>Delima (Karan)
                                <li>Nurkaryatiningsih : Meja I (Pendaftaran)</li>
                                <li>Sri Mulyani : Meja II (Pengukuran TB)</li>
                                <li>Sumarni : Meja II (Penimbangan)</li>
                                <li>Fara R : Meja III (Pencatatan)</li>
                                <li>Suparti : Meja III (Pencatatan)</li>
                                <li>Tatik : Meja IV (Pelayanan & Penyuluhan)</li>
                                <li>Ninik Budiastuti : Meja V (Pemberian PMT)</li>
                            </ul>
                            ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('unions')->insert([
            'nama' => 'Linmas',
            'uri' => Str::random(30),
            'keterangan' => '
                            <p>Pengurus Satuan Perlindungan Masyarakat Kelurahan ini mempunyai fungsi : 
                                <ol>
                                    <li>Membantu dalam penanggulangan bencana</li>
                                    <li>Membantu keamanan, ketentraman dan ketertiban Masyarakat</li>
                                    <li>Membantu dalam kegiatan sosial kemasyarakatan</li>
                                    <li>Membantu penanganan ketentraman, ketertiban dan keamanan dalam penyelenggaraan pemilu</li>
                                    <li>Membantu upaya pertahanan Negara</li>
                                </ol>
                            </P>
                            <p>Berikut adalah Pengurus Kelompok Posyandu Kelurahan Gayamdompo</p>
                            <ul>
                                <li>Suwardi, SH. (Kepala Satuan)</li>
                                <li>Sujatno (Kasat Tugas)</li>
                                <li>Giyatmo (Danru I)</li>
                                <li>Ngadimin (Danru II)</li>
                                <li>Sunardi (Anggota)</li>
                                <li>Samidi (Anggota)</li>
                                <li>Sutarmin (Anggota)</li>
                                <li>Sartono (Anggota)</li>
                                <li>Sukiranto (Anggota)</li>
                                <li>Parnoto (Anggota)</li>
                                <li>Sujito (Anggota)</li>
                                <li>Gunawan (Anggota)</li>
                                <li>Wagiyo (Anggota)</li>
                                <li>Pardiyanto (Anggota)</li>
                                <li>Sunarso (Anggota)</li>
                                <li>Sumin (Anggota)</li>
                                <li>Wijiyanto (Anggota)</li>
                                <li>Sutarso (Anggota)</li>
                                <li>Suparno (Anggota)</li>
                                <li>Purwanto (Anggota)</li>
                                <li>Sutardi (Anggota)</li>
                                <li>Sutarman (Anggota)</li>
                                <li>Suparno (Anggota)</li>
                                <li>Didik Riyanto (Anggota)</li>
                                <li>Agus Sumarno (Anggota)</li>
                                <li>Sukemi (Anggota)</li>
                                <li>Marsudi (Anggota)</li>
                                <li>Sukimin (Anggota)</li>
                                <li>Sukatno (Anggota)</li>
                                <li>Sunarto (Anggota)</li>
                                <li>Parwoto (Anggota)</li>
                                <li>Sulardi (Anggota)</li>
                                <li>Sukadi, SE (Anggota)</li>
                                <li>Sudomo (Anggota)</li>
                                <li>Sukir (Anggota)</li>
                                <li>Sukiman (Anggota)</li>
                                <li>Sularno (Anggota)</li>
                                <li>Sumidi (Anggota)</li>
                                <li>Kasidi (Anggota)</li>
                                <li>Eko Puji Santoso (Anggota)</li>
                                <li>Mulyono, SP (Anggota)</li>
                                <li>Heru Juniadi (Anggota)</li>
                                <li>Sunarno (Anggota)</li>
                                <li>Virnanda W. P (Anggota)</li>
                                <li>Maryanto (Anggota)</li>
                                <li>Suharno (Anggota)</li>
                                <li>Budhi Yuwono (Anggota)</li>
                            </ul>
                            ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
 
        // Data Umum
        DB::table('generals')->insert([
            'uri' => Str::random(30),
            'kategori' => 'Kependudukan',
            'spesifik' => 'Kartu Keluarga',
            'jumlah' => 2125,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('generals')->insert([
            'uri' => Str::random(30),
            'kategori' => 'Kependudukan',
            'spesifik' => 'Rumah',
            'jumlah' => 1519,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('generals')->insert([
            'uri' => Str::random(30),
            'kategori' => 'Kependudukan',
            'spesifik' => 'Warga',
            'jumlah' => 6243,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('generals')->insert([
            'uri' => Str::random(30),
            'kategori' => 'Kependudukan',
            'spesifik' => 'Laki-laki',
            'jumlah' => 3100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('generals')->insert([
            'uri' => Str::random(30),
            'kategori' => 'Kependudukan',
            'spesifik' => 'Perempuan',
            'jumlah' => 3143,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Data Sarana dan Prasarana
        DB::table('infrastructures')->insert([
            'sarana' => 'Kantor Kelurahan',
            'uri' => Str::random(30),
            'jumlah' => 1,
            'satuan' => 'unit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('infrastructures')->insert([
            'sarana' => 'Pendidikan Anak Usia Dini',
            'uri' => Str::random(30),
            'jumlah' => 5,
            'satuan' => 'unit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('infrastructures')->insert([
            'sarana' => 'Taman Kanak-Kanak',
            'uri' => Str::random(30),
            'jumlah' => 4,
            'satuan' => 'unit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('infrastructures')->insert([
            'sarana' => 'Sekolah Dasar (SD) / Madrasah ibtidaiyah (MI)',
            'uri' => Str::random(30),
            'jumlah' => 3,
            'satuan' => 'unit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('infrastructures')->insert([
            'sarana' => 'Masjid',
            'uri' => Str::random(30),
            'jumlah' => 11,
            'satuan' => 'unit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Articles
        DB::table('articles')->insert([
            'judul' => 'Tugu Ngipik',
            'preview' => 'Warga Karanganyar mungkin banyak yang tidak menyangka jika tugu yang ada di perbatasan antara Kecamatan Karanganyar dan Karangpandan tersebut',
            'uri' => Str::random(30),
            'teks' => '
                        <p>
                            Warga Karanganyar mungkin banyak yang tidak menyangka jika tugu yang ada di perbatasan antara Kecamatan Karanganyar dan Karangpandan tersebut memiliki arti sejarah dibaliknya. Kebanyakan hanya melihat tugu tersebut sebagai penanda wilayah yang berada di tepi jalan.
                        </p>
                        <p>
                            Namun, nyatanya tugu yang kerap disebut Ngipik atau Gayamdompo tersebut menyimpan nilai sejarah di balik keberadaannya. Ornamen yang ada di tugu tersebut dari bawah, badan, hingga pilarnya menyimpan berbagai filosofi. Namun, secara keseluruhan, keberadaan Tugu Ngipik merupakan wujud peringatan ulang tahun ke-56 Mangkunegara VII.
                        </p>
                        <p>
                            Kabid Kebudayaan Disdikbud Karanganyar, Sawaldi, menjelaskan berdasarkan pencarian fakta sejarah saat penelitian objek Tugu Ngipik terdapat ornamen bangunan yang memiliki arti. Mulai dari bagian kaki tugu terdapat lengkung-lengkung berjumlah 56 buah. Sedangkan, bagian atas tugu juga terdapat lengkung berjumlah delapan dan cekungan di bagian pilar sebanyak tujuh buah. Angka tersebut menunjukan usia ulang tahun Mangkunegara VII saat itu.
                        </p>
                        <p>
                            “Di pilar itu ada tulisan aksara jawa yang menunjukan tahun 1815-1871, ada tahun masehi juga dengan angka latin 1885-1940. Di sisi sebaliknya terdapat tulisan Sapta Windoe, yang merupakan sengkalan yang berarti 56,” jelas Sawaldi kepada Solopos.com, Sabtu (24/10/2020).
                        </p>
                        <p>
                            Jika diartikan dan dihitung jumlahnya pada setiap makna ornamen, menurut Sawaldi, secara sejarah tugu tersebut merupakan tugu pangetan dalem atau tugu peringatan ulang tahun ke-56 Mangkunegara VII. Ornamen lengkung 8 buah dan cekung tujuh buah apabila dikalikan akan menunjukan angka 56 dan angka 56 pada dasar tugu yang menunjukan usia Mangkunegara VII saat kelahirannya diperingati.
                        </p>
                        <p>
                            “Jadi keberadaan tugu tersebut memang sejarahnya jelas saat ini. Itu untuk peringatan ulang tahun Mangkunegara VII yang memang dibangun atas perintahnya. Tugu tersebut dulunya diletakan di wilayah perkebunan kekuasaan Mangkunegara VII yang saat ini sudah berubah wilayahnya,” jelas dia.
                        </p>
                        <p>
                            Saat ini Tugu Ngipik tengah dalam proses oleh Disdikbud Karanganyar untuk diselamatkan sebagai Benda Cagar Budaya (BCB) tingkat kabupaten yang sudah direkomendasikan pada 2019 lalu.
                        </p>
                    ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('articles')->insert([
            'judul' => 'Penerimaan Mahasiswa KKN UNS 2023 (Juli - Agustus)',
            'preview' => 'Proses penerimaan mahasiswa untuk program Kuliah Kerja Nyata (KKN) di Kelurahan Gayamdompo saat ini sedikit berbeda dari pada sebelumnya',
            'uri' => Str::random(30),
            'teks' => '
                        <p>
                            Proses penerimaan mahasiswa untuk program Kuliah Kerja Nyata (KKN) di Kelurahan Gayamdompo saat ini sedikit berbeda dari pada sebelumnya dikarenakan pada periode ini Kelurahan Gayamdompo menerima tiga kelompok mahasiswa KKN dari satu Universitas yang sama yaitu Universitas Sebelas Maret. Masing-masing kelompok KKN UNS tersebut antara lain : Kelompok 66 yang bertempat pada dusun Mojoroto mempunyai tema "Membangun Desa", Kelompok 92 yang bertempat pada dusun Sengon mempunyai tema "UMKM Naik Kelas", dan Kelompok 120 yang bertempat pada dusun Ndawungan mempunyai tema "FKIP Mengajar". 
                        </p>
                        <p>
                            Program KKN sendiri merupakan salah satu kegiatan penting dalam lingkup pendidikan tinggi yang bertujuan untuk memberikan pengalaman langsung kepada mahasiswa dalam mengaplikasikan ilmu pengetahuan dan keterampilan mereka dalam membantu masyarakat.
                        </p>
                        <p>
                            Dalam upaya meningkatkan kualitas pelayanan dan kontribusi kepada masyarakat setempat, Kelurahan Gayamdompo bersama dengan Universitas Sebelas Maret telah bekerja sama untuk mengadakan program KKN. Program ini diharapkan tidak hanya memberikan manfaat bagi kelurahan dan masyarakat, tetapi juga memberikan kesempatan bagi mahasiswa untuk belajar dari situasi nyata di lapangan.
                        </p>
                        <p>
                            Diharapkan bahwa program KKN ini akan menciptakan sinergi positif antara perguruan tinggi dan masyarakat dalam mengatasi berbagai tantangan dan peluang yang ada di Kelurahan Gayamdompo. Program ini juga diharapkan menjadi salah satu langkah dalam mempersiapkan mahasiswa untuk menjadi individu yang lebih bertanggung jawab dan sadar akan lingkungannya.
                        </p>
                        <p>
                            Dengan semangat yang tinggi, mahasiswa dan Kelurahan Gayamdompo bersama-sama mengawal program KKN ini untuk mencapai hasil yang maksimal dan memberikan dampak positif bagi semua pihak yang terlibat.
                        </p>
                    ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('articles')->insert([
            'judul' => 'Program Kerja KKN UNS 2023 (Juli - Agustus)',
            'preview' => 'Dalam kurun waktu Juli-Agustus 2023, mahasiswa KKN UNS telah aktif terlibat dalam berbagai kegiatan positif di Sekolah Dasar Negeri 2 Gayamdompo.',
            'uri' => Str::random(30),
            'teks' => '
                        <p>
                            Dalam kurun waktu Juli-Agustus 2023, mahasiswa KKN UNS telah aktif terlibat dalam berbagai kegiatan positif di Sekolah Dasar Negeri 2 Gayamdompo. Berbagai program yang dilakukan oleh mereka mencakup berbagai aspek, mulai dari pendidikan, sosial, hingga kesehatan.
                        </p>
                        <p>
                            Salah satu programnya adalah Pendampingan Pengajaran, di mana mahasiswa KKN memberikan tambahan pelajaran di bidang-bidang seperti Bahasa Jawa, dan Ilmu Sejarah. Bimbingan ini tidak hanya membantu meningkatkan pemahaman siswa terhadap pelajaran, tetapi juga memberikan motivasi tambahan bagi mereka untuk berprestasi lebih baik.
                        </p>
                        <p>
                            Selain itu, mahasiswa KKN juga telah mengadakan kegiatan sosialisasi seperti Sosialisasi Pengembangan Budaya Menabung dan Sosialisasi Etika Bermedia Sosial, di mana mereka melakukan penyuluhan kepada para siswa agar menumbuhkan budaya menabung dan menumbuhkan sikap, etika yang baik dalam bersosial media.
                        </p>
                        <p>
                            Pentingnya pendidikan tentang kesehatan juga ditekankan dalam kegiatan KKN ini. Mahasiswa KKN telah mengadakan kegiatan Sosialisasi Taat Peraturan Membuang Sampah, di mana mereka memberikan penyuluhan tentang, pentingnya membuang sampah pada tempatnya, dan praktik kebersihan kepada siswa. Hal ini diharapkan akan membantu siswa mengembangkan gaya hidup sehat sejak dini.
                        </p>
                        <p>
                            Para mahasiswa KKN juga berperan aktif dalam mendukung kegiatan ekstrakurikuler di sekolah, seperti Tapak Suci dan Pramuka, di mana mereka berbagi pengetahuan dan keterampilan mereka kepada siswa dalam berbagai bidang minat. Ini tidak hanya membantu mengembangkan bakat dan minat siswa, tetapi juga membentuk hubungan yang positif antara mahasiswa KKN dan siswa.
                        </p>
                        <p>
                            Melalui kegiatan KKN ini, mahasiswa tidak hanya mendapatkan pengalaman yang berharga dalam penerapan ilmu pengetahuan mereka dalam dunia nyata, tetapi juga memberikan contoh inspiratif tentang pentingnya berkontribusi bagi masyarakat. Diharapkan bahwa semangat ini akan terus menginspirasi generasi muda untuk turut serta dalam upaya memajukan pendidikan dan kesejahteraan masyarakat.
                        </p>
                    ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
