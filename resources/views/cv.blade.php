<!DOCTYPE html>
<html>
<head>
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            display: flex;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .sidebar {
            flex: 1;
            padding-right: 20px;
            border-right: 1px solid #ccc;
        }
        .content {
            flex: 2;
            padding-left: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .name {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        .title {
            font-size: 18px;
            color: #777;
        }
        .section {
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ccc;
        }
        .section-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        .section-content {
            font-size: 16px;
            line-height: 1.6;
        }
        .section-content ul {
            margin-left: 20px;
            list-style-type: disc;
        }
        .contact {
            margin-top: 20px;
            text-align: center;
        }
        .contact a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }
        .contact a:hover {
            color: #007bff;
        }

        .profile-img {
            width: 200px;
            height: 200px;
            margin-left: 60px;
            border-radius: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="header">
                <div class="name">Mochammad Faeyza A</div>
                <div class="title">CV</div>
            </div>
            <img src="{{asset('img/paeja.jpg')}}" class="profile-img">
            
            <div class="section">
                <div class="section-title">Contact</div>
                <div class="section-content contact">
                    <li>Email: <a href="mailto:faeyza@example.com">faeyza@example.com</a></li>
                    <li>Phone: <a href="tel:(123) 456-7890">(123) 455-7789</a></li>
                    <li>Website: <a href="http://www.faeyza.com">www.faeyza.com</a></li>
                </div>
            </div>
        </div>
        
        <div class="content">
            <div class="section">
                <div class="section-title">Tentang Saya</div>
                <div class="section-content">
                   <li> Mochammad Faeyza A Adalah Seorang Anak Yang Memiliki Cukup Ilmu,Memiliki Hobi Bermain Game,Bermain Sepak Bola Dan Berenang,Dia Pun Senang Mengoleksi Diecast Seperti Mobil Hotwheels Dan Semacamnya
                </div>
            </div>
            
            <div class="section">
                <div class="section-title">Riwayat Pendidikan</div>
                <div class="section-content">
                    <li>Mochammad Faeyza A Memulai Pendidikan dari Memulai TK(Taman Kanak Kanak)Di TK Hamka,SD(Sekolah Dasar)Di SD MIMHA,SMP(Sekolah Menengah Pertama)Di SMP PGII,Dan Sekarang Sedang Melakukan Pendidikan SMK(Sekolah Menengah Kejurusan)DI SMK N 2 Bandung</strong></p>
                    <p></li>
                    <div class="section-title">Identitas</div>
                    <li>Nama : Mochammad Faeyza A</li>
                    <li>Tempat Tanggal Lahir : Bandung,22 November 2006</li>
                    <li>Alamat : Jalan Permata Inten NO 8 Cisaranten Kulon KOTA BANDUNG</li>
                    <li>Hobby : Bermain Game,Bermain Bola</li>
                    <li>Cita cita : Sukses Dimasa Muda</li>
                </div>
            </div>

            <div class="section-title">Prestasi</div>
            <div class="section-content">
                     <li>Mendapat Juara 2 Turnamen Futsal Kelas 3 Sd</li>
                     <li>Mendapat Juara 3 Turnamen Futsal Kelas 4 Sd</li>
                     <li>Ranking Ke 2 Kelas 2 SD</li>
                     <li>Ranking Ke 2 Kelas 3 SD</li>


            
            <div class="section">
                <div class="section-title">Skill</div>
                <div class="section-content">
                    <ul>
                        <li>Bisa Melakukan Hal Yang Mungkin Orang Lain TIdak Bisa(Random)</li>
                        <li>Jago Bermain Game</li>
                        <li>Bermain Futsal</li>
                        <li>Membongkar Sesuatu Seperti Motor DLL</li>
                        <li>Jogging</li>

            <div class="section-title">Motto Hidup</div>

                        <li>Satu Musuh Terlalu Banyak,Seribu Teman Terlalu SSedikit</li>
                </div>
            </div>
        </div>
    </div>
</body>
</html>