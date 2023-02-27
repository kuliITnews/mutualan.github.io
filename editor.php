<?php
include "./conn/conn.php";
if ( isset($_POST["submit"])) {
  $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
  $nama_panggilan = htmlspecialchars($_POST['nama_panggilan']);
  $hobi = htmlspecialchars($_POST['hobi']);
  $pendidikan = htmlspecialchars($_POST['pendidikan']);
  $jurusan = htmlspecialchars($_POST['jurusan']);
  $alamat = htmlspecialchars($_POST['alamat']);
  $fb = htmlspecialchars($_POST['fb']);
  $wa = htmlspecialchars($_POST['wa']);
  $ig = htmlspecialchars($_POST['ig']);
  $gt = htmlspecialchars($_POST['gt']);
  $yt = htmlspecialchars($_POST['yt']);
  $catagori = htmlspecialchars($_POST['catagori']);
  $pesan = htmlspecialchars($_POST['pesan']);

  $rand = rand();
  $ekstensi =  array('png','jpg','jpeg','gif');
  $filename = $_FILES['NamaFile']['name'];
  $ukuran = $_FILES['NamaFile']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
  if(!in_array($ext,$ekstensi) ) {
    echo "<script> alert ('Postingan kamu gagal diuplod dikarenakan file yang kamu tidak boleh atau tidak ada fotonya.') </script>" .mysqli_error($conn);
          header("refresh: 3");
  }else{
    if($ukuran < 1044070){		
      $gambar = $rand.'_'.$filename;
      move_uploaded_file($_FILES['NamaFile']['tmp_name'], 'assets/'.$rand.'_'.$filename);
      mysqli_query($conn, "INSERT INTO profil VALUES ('', '$nama_lengkap', '$nama_panggilan', '$hobi', '$pendidikan', '$jurusan', '$alamat', '$fb', '$wa', '$ig', '$gt', '$yt', '$catagori', '$pesan', '$gambar')");
      echo "<script> alert ('Postingan kamu berhasil diuplod silahkan kembali ke halaman awal 🤗💕') </script>";
    }else{
      echo "<script> alert ('Postingan kamu gagal diuplod . foto yang kamu uplod ukurannya Besar banget 🤯 !!') </script>" .mysqli_error($conn);
          header("refresh: 8");
 
    }
  }
  
  
  
}
mysqli_close($conn);



  


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   <link rel="shortcut icon" href="img/image.jpg" type="image/x-icon">
   <link rel="stylesheet" href="font-awesome.min.css"> 
   <link rel="stylesheet" href="editor.css">
   <link rel="stylesheet" href="../style.css">
   <title>editor post</title>
</head>

<body>
  

  <section style="background-color: rgb(0, 0, 0);" class=" center col gap-32">
		<div  class="flex col gap-16 center">
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

			<strong>buat profil dan pesan kamu semenarik mungkin</strong>
		</div>

		<div class="toggle flex">
      <a href="/">
        <div style="background-color: green;" class="flex option ">
			<p style="color: black;">Home</p>
			</div>
    </a>
    <a href="/gelery">
			<div class="flex option">
				<p>Galery</p>
			</div>
    </a>
		</div>
	</section>
<div class="content">
  <section class="flex center col gap-32 get-started-body">
    <form action="" method="POST" enctype="multipart/form-data" class="w-full ">
    <div class=" flex col center gap-16">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
             Nama Lengkap :
            </label>
            <input name="nama_lengkap" class="input appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Rizki Putra Ramadhan">
          </div>
          <div class="w-full md:w-1/2 px-3  mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
             Nama Panggilan :
            </label>
            <input name="nama_panggilan" class="input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="bang iki">
          </div>
          <div class="w-full md:w-1/2 px-3  mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
             Hobi :
            </label>
            <input name="hobi" class="input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Coding">
          </div>
          <div class="w-full md:w-1/2 px-3  mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
             Pendidikan :
            </label>
            <input name="pendidikan" class="input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Mahasiswa Bina Sarana Informatika Tegal">
          </div>
          <div class="w-full md:w-1/2 px-3  mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-2" for="grid-last-name">
             Jurusan :
            </label>
            <input name="jurusan" class="mt-2 input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="System Informasi">
          </div>
          <div class="w-full md:w-1/2 px-3  mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-2" for="grid-last-name">
             Alamat :
            </label>
            <input name="alamat" class="mt-2 input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Bayumas jawa tengah">
          </div>
        </div>
        
        <div class="flex flex-wrap -mx-3 mt-5 mb-2">
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
              Facebook
            </label>
            <input name="fb" class="input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="ex : NamaFb">
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
              WhatsApp
            </label>
            <input name="wa" class="input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="ex : 6281329995238 jangan pake + ">
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
              Instagram
            </label>
            <input name="ig" class="input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="ex : @_sukherbyvir45">
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-2" for="grid-city">
              Github
            </label>
            <input name="gt" class="mt-2 input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Nama github kamu ex : githubsukher">
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-2" for="grid-city">
              Youtube
            </label>
            <input name="yt" class="mt-2 input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="ex : kuliITchannnel jangan pake https//... ">
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-2" for="grid-state">
              catagory
            </label>
            <div class="relative mt-2">
              <select name="catagori" class="block input appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option>Kenalan</option>
                <option>Bertanya</option>
                <option>Mencari Jodoh</option>
                <option>Mencari Teman</option>
                <option>share pengalaman</option>
                <option>Kata-Kata hari ini</option>
                <option>motivasi</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
             
            </div>
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-2" for="grid-city">
        <h6><strong> Buat Pesan Kamu </strong>  </h6>
        </label>
        <textarea id="content" name="pesan" rows="0"></textarea> 
      </div>
          <div class="flex items-center justify-center w-full">
          <label for="dropzone-file" class="input flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
              <div class="flex flex-col items-center justify-center pt-5 pb-6">
                  <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                  <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                  <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF</p>
                  <p class="text-xs text-gray-500 dark:text-gray-400">Apabila Gambar Tidak muncul, Tidak apa-apa Langsung uplod aja otomatis tersimpan kok</p>
              </div>
              <input name="NamaFile" id="dropzone-file" type="file" class="hidden input" />
          </label>
        </div> 
        </div>
        <div class="btn">
          <button name="submit" class="button " >upload  donk !!</button>
        </div>
      </form>
    </div>
   </div>
  </section>
</div>
  
</body>
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="610bc921-2b5e-4652-bdd4-76c0ceb2d0b4";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</script>
</html>









