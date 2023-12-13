<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:300,400,500,600" rel="stylesheet">
  <title>Oprec</title>
</head>
<style>
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:2.5em;
  padding-bottom: 1em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	font-weight: bold;
	font-size: 1em;
  text-align: center;
  color: #185875;
}

.container td {
	font-weight: normal;
	font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	-moz-box-shadow: 0 2px 2px -2px #0E1119;
	box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	text-align: left;
	overflow: hidden;
	width: 80%;
  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	padding-bottom: 2%;
	padding-top: 2%;
  padding-left:1%; 
  padding-right: 5%; 
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
   -webkit-box-shadow: 0 6px 6px -6px #0E1119;
	 -moz-box-shadow: 0 6px 6px -6px #0E1119;
	 box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	transition-duration: 0.4s;
	transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}

/** Seacrh: **/

*, *:before, *:after {
  -webkit-tap-highlight-color: transparent;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  user-select: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  padding: 0;
  margin: 0;
}
a, a:visited, a:hover {
  color: inherit;
  text-decoration: none;
}
main {
  position: absolute;
  top: 0;
  left: 0;
  margin: 0 auto;
  padding: 0 26px;
  width: 100%;
  height: 100%;
  background: rgba(154,57,163,1);
  background: -moz-linear-gradient(-45deg, rgba(154,57,163,1) 0%, rgba(65,103,168,1) 100%);
  background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(154,57,163,1)), color-stop(100%, rgba(65,103,168,1)));
  background: -webkit-linear-gradient(-45deg, rgba(154,57,163,1) 0%, rgba(65,103,168,1) 100%);
  background: -o-linear-gradient(-45deg, rgba(154,57,163,1) 0%, rgba(65,103,168,1) 100%);
  background: -ms-linear-gradient(-45deg, rgba(154,57,163,1) 0%, rgba(65,103,168,1) 100%);
  background: linear-gradient(135deg, rgba(154,57,163,1) 0%, rgba(65,103,168,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9a39a3', endColorstr='#4167a8', GradientType=1 );
}

.searchcontainer {
  position: relative;
  margin: calc(75px + 2vh + 2vw) auto 0 auto;
  padding: 0;
  width: 100%;
  max-width: 840px;
}
.search-box {
  position: relative;
  width: 100%;
  max-width: 360px;
  height: 60px;
  border-radius: 120px;
  margin: 0 auto;
}
.search-icon, .go-icon {
  position: absolute;
  top: 0;
  height: 60px;
  width: 86px;
  line-height: 61px;
  text-align: center;
}
.search-icon {
  left: 0;
  pointer-events: none;
  font-size: 1.22em;
  will-change: transform;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform-origin: center center;
  -webkit-transform-origin: center center;
  -moz-transform-origin: center center;
  -o-transform-origin: center center;
  transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -webkit-transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -moz-transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -o-transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
}
.si-rotate {
  transform: rotate(0deg);
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
}
.go-icon {
  right: 0;
  pointer-events: none;
  font-size: 1.38em;
  will-change: opacity;
  cursor: default;
  opacity: 0;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -webkit-transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -moz-transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -o-transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
}
.go-in {
  opacity: 1;
  pointer-events: all;
  cursor: pointer;
  transform: rotate(0);
  -webkit-transform: rotate(0);
  -moz-transform: rotate(0);
  -o-transform: rotate(0);
  transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -webkit-transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -moz-transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -o-transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
}
.search-border {
  display: block;
  width: 100%;
  max-width: 360px;
  height: 60px;
}
.border {
  fill: none;
  stroke: #FFFFFF;
  stroke-width: 5;
  stroke-miterlimit: 10;
}
.border {
  stroke-dasharray: 740;
  stroke-dashoffset: 0;
  transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
  -webkit-transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
  -moz-transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
  -o-transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
}
.border-searching .border {
  stroke-dasharray: 740;
  stroke-dashoffset: 459;
  transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
  -webkit-transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
  -moz-transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
  -o-transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
}
#search {
  font-family: 'Montserrat Alternates', sans-serif;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 120px;
  border: none;
  background: rgba(255,255,255,0);
  padding: 0 68px 0 68px;
  color: #FFFFFF;
  font-size: 1.32em;
  font-weight: 400;
  letter-spacing: -0.015em;
  outline: none;
}
#search::-webkit-input-placeholder {color: #FFFFFF;}
#search::-moz-placeholder {color: #FFFFFF;}
#search:-ms-input-placeholder {color: #FFFFFF;}
#search:-moz-placeholder {color: #FFFFFF;}
#search::-moz-selection {color: #FFFFFF; background: rgba(0,0,0,0.25);}
#search::selection {color: #FFFFFF; background: rgba(0,0,0,0.25);}
</style>

<body>
<?php
include "koneksi.php";

// Ambil data dari database
$query = "SELECT `email`, `nama_lengkap`, `ttl`, `domisili`, `no_wa`, `status`, `asal`, `departemen`, `alasan` FROM `reqruitment` WHERE 1";
$data = mysqli_query($koneksi, $query);

// Buat form pencarian
echo "<div class='searchcontainer'>";
		echo "<h1>Tabel Database Oprec</h1>";
		echo "<h2>Cari data pendaftar</h2>";
		echo "<div class='search-box'>";
			echo "<div class='search-icon'><i class='fa fa-search search-icon'></i></div>";
			echo "<form action='' class='search-form' method='GET'>";
			echo "<input type='text' placeholder='Cari nama...' id='search' autocomplete='off'>";
			echo "</form>";
			echo "<svg class='search-border' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:a='http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/' x='0px' y='0px' viewBox='0 0 671 111' style='enable-background:new 0 0 671 111;' xml:space='preserve'>";
      echo "<path class='border' d='M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280'/>";
      echo "<path class='border' d='M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280'/>";
      echo "</svg>";
			echo "<div class='go-icon'><i class='fa fa-arrow-right'></i></div>";
		echo "</div>";
    echo "</div>";

// Tampilkan data

if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = "SELECT * FROM reqruitment WHERE nama_lengkap LIKE '%$cari%'";
    $data = mysqli_query($koneksi, $query);
}

if (mysqli_num_rows($data) > 0) {
    // Tampilkan data dalam tabel
    echo "<table class='container'>";
	  echo "<thead>";
		echo "<tr>";
		echo "<th><h1>No</h1></th>";
    echo "<th><h1>Email</h1></th>";
		echo "<th><h1>Nama Lengkap</h1></th>";
    echo "<th><h1>Tempat, Tanggal Lahir</h1></th>";
    echo "<th><h1>Domisili</h1></th>";
		echo "<th><h1>Departemen yang dipilih</h1></th>";
		echo "</tr>";
	  echo "</thead>";
    $i = 1;
    while ($row = mysqli_fetch_assoc($data)) {
    echo "<tbody>";
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>{$row['email']}</td>";
    echo "<td>{$row['nama_lengkap']}</td>";
    echo "<td>{$row['ttl']}</td>";
    echo "<td>{$row['domisili']}</td>";
    echo "<td>{$row['departemen']}</td>";
    echo "</tr>";
    echo "</tbody>";
    $i++;
    }
    echo "</table>";
} else {
    echo "Data tidak ditemukan";
}

// Tutup koneksi
mysqli_close($koneksi);

?>
</body>
</html>
