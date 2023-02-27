<?php
include "./conn/conn.php";
error_reporting(0);


$cari = $_POST['cari'];
    if ($cari != '') {
    $profil = mysqli_query($conn, "SELECT * FROM profil WHERE nama_lengkap LIKE '%".$cari."%' or catagori LIKE '%".$cari."%' or nama_panggilan LIKE '%".$cari."%'");
    $ada = "hasil pencarian : ";
    } else {
    $profil = mysqli_query($conn, "SELECT * FROM profil ORDER BY id DESC");
  }
$cout = mysqli_num_rows($profil);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Lambangan | kuli IT</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="../img/image.jpg" type="image/x-icon">
</head>

<body>
	<nav class="flex space-between pX-128 pY-16" id="nav">
		<a href="/">
			<div class="flex gap-8">
				<svg xmlns="http://www.w3.org/2000/svg" width="35" height="38" viewBox="0 0 35 38" fill="none">
			<path d="M0.878784 28.1818L0.878787 9.39392L10.2727 14.6128V23.0151L17.7879 27.2424L25.303 23.0151V14.6128L34.697 9.39392V28.1818L17.7879 37.5757L0.878784 28.1818Z" fill="blsck"></path>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M5.57576 12.0034L0.878784 9.39394L17.7879 0L34.697 9.39394L30 12.0034V25.8333L17.7879 32.8788L5.57575 25.8333L5.57576 12.0034ZM29.4912 12.2861L25.303 14.6128V14.5606L17.7879 10.3333L10.2727 14.5606V14.6128L6.08459 12.2861V25.5443L17.7879 32.2962L29.4912 25.5443V12.2861Z" fill="#F7F8F8"></path>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M5.57576 12.0034L0.878784 9.39394L17.7879 0L34.697 9.39394L30 12.0034V25.8333L17.7879 32.8788L5.57575 25.8333L5.57576 12.0034ZM29.4912 12.2861L25.303 14.6128V14.5606L17.7879 10.3333L10.2727 14.5606V14.6128L6.08459 12.2861V25.5443L17.7879 32.2962L29.4912 25.5443V12.2861Z" fill="green"></path>
			<defs>
			<linearGradient id="paint0_linear_6_17" x1="17.7879" y1="0" x2="17.7879" y2="32.8788" gradientUnits="userSpaceOnUse">
			<stop stop-color="#3F1D9E"/>
			<stop offset="1" stop-color="#3F1D9E" stop-opacity="0.32"></stop>
			</linearGradient>
			</defs>
		</svg>
				<h4 style="color: green;">Kuli IT</h4>
			</div>
		</a>

		<div class="flex gap-32">
			<a href="/">Home</a>

			<a href="member">Teman-Teman</a>

			<a href="galery">Gallery</a>
		
			<a href="editor">Form Post</a>
		</div>

		<div class="flex gap-16">
			<div class="flex gap-16 buttons">
				<a href="/login/login" class="button small">Login</a>
			</div>

			<a class="button secondary small hamburger menu-icon-open" onclick="nav();" id="menu-icon">
		<ion-icon name="menu-outline"></ion-icon>
			</a>

			<a class="button secondary small hamburger" onclick="nav();" id="close-icon">
			<ion-icon name="close-outline"></ion-icon>
			</a>
		</div>
	</nav>

	<section class="landing">
		<div class="flex col gap-32">
			<div class="flex col gap-16 center">
				<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 35 38" fill="none">
					<path d="M0.878784 28.1818L0.878787 9.39392L10.2727 14.6128V23.0151L17.7879 27.2424L25.303 23.0151V14.6128L34.697 9.39392V28.1818L17.7879 37.5757L0.878784 28.1818Z" fill="blsck"></path>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M5.57576 12.0034L0.878784 9.39394L17.7879 0L34.697 9.39394L30 12.0034V25.8333L17.7879 32.8788L5.57575 25.8333L5.57576 12.0034ZM29.4912 12.2861L25.303 14.6128V14.5606L17.7879 10.3333L10.2727 14.5606V14.6128L6.08459 12.2861V25.5443L17.7879 32.2962L29.4912 25.5443V12.2861Z" fill="#F7F8F8"></path>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M5.57576 12.0034L0.878784 9.39394L17.7879 0L34.697 9.39394L30 12.0034V25.8333L17.7879 32.8788L5.57575 25.8333L5.57576 12.0034ZM29.4912 12.2861L25.303 14.6128V14.5606L17.7879 10.3333L10.2727 14.5606V14.6128L6.08459 12.2861V25.5443L17.7879 32.2962L29.4912 25.5443V12.2861Z" fill="green"></path>
					<defs>
					<linearGradient id="paint0_linear_6_17" x1="17.7879" y1="0" x2="17.7879" y2="32.8788" gradientUnits="userSpaceOnUse">
					<stop stop-color="#3F1D9E"/>
					<stop offset="1" stop-color="#3F1D9E" stop-opacity="0.32"></stop>
					</linearGradient>
					</defs>
				</svg>
				<h1>Lambangan Medsos By Kuli IT </h1>
	
				<p>Haii 👋👋 bestii..., apa kabar..? . kenalin nih project baru dari Kuli IT yaitu Mutualan. Kalian bisa saling kenalan dan membuat profile disini atau posting keluh kesah kalian yahh... silahkan dicoba sayyy 💕😉  </p>
			</div>

			<a href="editor" class="button">New profile ↠</a> 
      
		</div>	
    </div>
	</section>

	<section class="features center">
		<div class="flex col gap-16 center">
			<h2>Sudah Posting belom ?</h2>
      <p>Inilah sebagian Teman-Teman kita yang sudah membuat postingan disini. <br> Yuk kenalan dengan kami dengan click read more dan buat profil kamu ... Tunggu apa lagi <a style="font-weight: bold; font-style: italic; color: green;" href="/editor">Klik Disini</a></p>

		</div>

		<div class="flex wrap gap-32">
		<?php 
		while($data = mysqli_fetch_array($profil)) { 
		?>
			<div class="flex left col container bounce gap-16 p-32">
				<div class="flex center container small highest p-8">
          <img src="assets/<?= $data["foto"] ?>" alt="" width="100" height="100" style="border-radius: 100px;">
				</div>
				<div class="flex left col gap-8">
					<h4><?=$data["nama_lengkap"] ?> ( <?=$data["nama_panggilan"] ?> )</h4>
		
					<p>∅ <?=$data["catagori"] ?></p>
         		 <a href="read?id=<?= $data['id']; ?>"><button style="width: 110px; height: 40px; font-size: 15px; padding: 5px;">read post</button></a>
				</div>
			</div>
			<?php } ?>
			
			</div>
		</div>
	</section>

	

	<section class="feature flex row">
		<h2>Hahh🤷‍♀️  Lambangan ?</h2>

		<div class="flex col gap-64 left">
			<div class="flex center gap-32">
				<div class="flex center container small highest p-8">
					<ion-icon name="sad-outline"></ion-icon>
				</div>
				
				<div class="flex col gap-8 left">
					<h4>Apa si Lambangan itu  ? </h4>
          <p>Yaitu Kata dari Bahasa jawa ngapak yang kalau diterjemah adalah Tukeran / Saling tukar menukar. </p>
				</div>
			</div>

			<div class="flex center gap-32">
				<div class="flex center container small highest p-8">
          <ion-icon name="sparkles-outline"></ion-icon>
				</div>
				
				<div class="flex col gap-8 left">
					<h4>Apa manfaatnya ?</h4>
	         <p>Manfaatnya, Kita bisa saling bertukar media sosial disini mulai dari instagram, whatsApp, facebook dan lainnya. Kalian juga bisa menaruh skills kita disitus ini atau curhat masalah kamu lohh!!.</p>
				</div>
			</div>
			<div class="flex center gap-32">
				<div class="flex center container small highest p-8">
					<ion-icon name="walk-outline"></ion-icon>
				</div>

				<div class="flex col gap-8 left">
					<h4>Gratis Nggakk ^_~ ?</h4>
          <p>Tenang aja .. Gratis kok, Juga ngga ribet buatnya, cuma ngisi form uplod, ngga perlu login segala macem. Anggap aja ini situs kita. <br> tunggu apa lagi.. YUKK.. Buat postingan</p>
				</div>
			</div>
		</div>
	</section>

  <section class="testimonials center col" id="testimonials">
		<div class="flex col gap-16">
			<h2>Team servise Kuli IT</h2>

			<p>Kuli IT adalah satu nama yang dibuat oleh rizki dan sudah menerima banyak client-client yang minta jasa kepada kuli IT terutama jasa make in website baik blogger, wp, portofolio, atau yang berkaitan dengan teknologi, kami siap sedia menghandle permintaan.</p>
		</div>

		<div class="container flex p-32 gap-32 col left">
			<div class="container small highest">
        <img src="img/image.jpg" alt="" width="100%" style="border-radius: 10px;">
      </div>
			<div class="flex col left gap-8">

				<div class="flex center gap-8">
					<h4>Rizki Putra Ramadhan</h4>

					<p>•</p>

					<p>Web Dev</p>
				</div>
          <p>mahasiswa dari universitas bina sarana informatika tegal D3 system informasi, kelahiran Banyumas 03 november 2004 bertempat tinggal didesa tipar rawalo banyumas jawa tengah indonesia galaxy</p>
          <p>pesan : Tetaplah maem nggihh....</p>
			    <div class="flex">
            <a  href=""><ion-icon style="width: 30px; padding: 2px;" name="logo-whatsapp"></ion-icon></a>
            <a  href=""><ion-icon style="width: 30px; padding: 2px;" name="logo-facebook"></ion-icon></a>
            <a  href=""><ion-icon style="width: 30px; padding: 2px;" name="logo-instagram"></ion-icon></a>
            <a  href=""><ion-icon style="width: 30px; padding: 2px;" name="logo-github"></ion-icon></a>
          
          </div>
        </div>
		</div>

		
		</div>
	</section>
	<footer class="flex center"> 
		<div class="flex gap-64 flex-start space-between wrap">
			<div class="flex col space-between left gap-32">
				<div class="flex col gap-16 left">
					<a href="/">
						<div class="flex row gap-16 left center">
							<svg xmlns="http://www.w3.org/2000/svg" width="35" height="38" viewBox="0 0 35 38" fill="none">
                <path d="M0.878784 28.1818L0.878787 9.39392L10.2727 14.6128V23.0151L17.7879 27.2424L25.303 23.0151V14.6128L34.697 9.39392V28.1818L17.7879 37.5757L0.878784 28.1818Z" fill="blsck"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.57576 12.0034L0.878784 9.39394L17.7879 0L34.697 9.39394L30 12.0034V25.8333L17.7879 32.8788L5.57575 25.8333L5.57576 12.0034ZM29.4912 12.2861L25.303 14.6128V14.5606L17.7879 10.3333L10.2727 14.5606V14.6128L6.08459 12.2861V25.5443L17.7879 32.2962L29.4912 25.5443V12.2861Z" fill="#F7F8F8"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.57576 12.0034L0.878784 9.39394L17.7879 0L34.697 9.39394L30 12.0034V25.8333L17.7879 32.8788L5.57575 25.8333L5.57576 12.0034ZM29.4912 12.2861L25.303 14.6128V14.5606L17.7879 10.3333L10.2727 14.5606V14.6128L6.08459 12.2861V25.5443L17.7879 32.2962L29.4912 25.5443V12.2861Z" fill="green"></path>
                <defs>
                <linearGradient id="paint0_linear_6_17" x1="17.7879" y1="0" x2="17.7879" y2="32.8788" gradientUnits="userSpaceOnUse">
                <stop stop-color="#3F1D9E"/>
                <stop offset="1" stop-color="#3F1D9E" stop-opacity="0.32"></stop>
                </linearGradient>
                </defs>
              </svg>
	
							<h3 style="color: green;">Kuli IT</h3>
						</div>			
					</a>
          <p style="text-align: center;"> © lambangan by Kuli IT 2023 v1.0</p>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="610bc921-2b5e-4652-bdd4-76c0ceb2d0b4";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  <script src="script.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>