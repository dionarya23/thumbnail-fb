<?php
if (empty($_GET['nama'])){
  header('Location: index.php');
}

/*
ini gambar untuk gambar silahkan anda ganti dengan url gambar yang anda punya
pastikan akhir dari url nya menggunakan .jpg .png
*/
$gambar = array(
  'http://3.bp.blogspot.com/-dbIcIlbu3XE/UfswjqR958I/AAAAAAAAL6o/aOVVPae6sXs/s1600/ikarajat_elokuvat_11.jpg',
  'http://3.bp.blogspot.com/-dbIcIlbu3XE/UfswjqR958I/AAAAAAAAL6o/aOVVPae6sXs/s1600/ikarajat_elokuvat_11.jpg',
  'http://www.clker.com/cliparts/W/k/a/m/h/4/angka-warna-md.png',
  'https://stat.ameba.jp/user_images/20170414/04/syusachiryou/79/0a/p/o0513072013913399453.png',
  'https://www.proprofs.com/api/ckeditor_images/2(412).png',
  'http://cdn07.dayviews.com/70/_u2/_u2/_u8/_u2/_u3/_u5/u2282359/57549_1249995647.jpg',
  'https://gosuk.files.wordpress.com/2012/05/indr41skandar10.jpg'
);

//Base URL itu alamat default, web kita contoh www.dion.com pastikan gunanakan http:// atau https://
function base_url(){
  return 'http://localhost/thumbnail-fb/'; // silahkan ganti sesuai alamat web yang anda punya
}

$rand = rand(0, 6);
 ?>


<!doctype html>
<html>
<head>
<title>Jumlah Mantan <?php echo $_GET['nama']; ?></title>
  <meta property="og:url" content="<?php echo base_url().$_GET['nama']; ?>" />
  <meta property="og:image" content="<?php echo $gambar[$rand]; ?>" />
</head>
<body>




</body>
</html>
