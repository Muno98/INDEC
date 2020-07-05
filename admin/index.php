<?php
session_start();
if (isset($_SESSION['admin'])) {
} else {

    echo "<script>alert('anda belum login')</script>";
    echo "<script>location='html/login.php'</script>";
}
include 'php/koneksi.php';
?>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Program UAS - Administrator</title>

<body>
    <div class="header">
        <?php
        include "html/header.php";
        ?>
    </div>
    <ul>
        <li><a href="index.php?page=home">Home</a></li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Our Company Settings</a>
            <div class="dropdown-content">
                <a href="index.php?page=ourvision">Our Vision</a>
                <a href="index.php?page=ourpeople">Our People</a>
                <a href="index.php?page=ourgroup">Our Group Companies</a>
                <a href="index.php?page=career">Career with us</a>
                <a href="index.php?page=certification">Certification</a>
            </div>
        <li><a href="index.php?page=products">Products</a></li>
        <li class="dropdown"><a href="index.php?page=support" class="dropbtn">Support</a>

        <li><a href="index.php?page=distributor">Distributor</a></li>
        <li class="login"><a href="html/login.php" style="float:right">Login</a></>
        <li class="login"><a href="html/logout.php" style="float:right">logout</a></>
    </ul>
    <div class="topnav">
        <div>
            <?php
            include "html/textberjalan.php";
            ?>
        </div>
    </div>
    <div class="row">
        <div class="leftcolum">
            <div class="card">
                <?php
                $page = (isset($_GET['page'])) ? $_GET['page'] : "main";
                switch ($page) {
                    case 'home':
                        include "php/home.php";
                        break;
                    case 'ourvision':
                        include "php/ourvision.php";
                        break;
                    case 'edit_vision':
                        include "php/ubah_vision.php";
                        break;
                    case 'hapus_vision':
                        include "php/hapus_vision.php";
                        break;
                    case 'tambah_vision':
                        include "php/tambah_vision.php";
                        break;
                    case 'ourpeople':
                        include "php/people.php";
                        break;
                    case 'support':
                        include "php/support.php";
                        break;
                    case 'about':
                        include "html/about.php";
                        break;
                    case 'ourgroup':
                        include "php/group.php";
                        break;
                    case 'tambah_group':
                        include "php/tambah_group.php";
                        break;
                    case 'ubah_group':
                        include "php/ubah_group.php";
                        break;
                    case 'hapus_group':
                        include "php/hapus_group.php";
                        break;
                    case 'career':
                        include "html/career.php";
                        break;
                    case 'certification':
                        include "php/certification.php";
                        break;
                    case 'tambah_certificate':
                        include "php/tambah_certificate.php";
                        break;
                    case 'ubah_certificate':
                        include "php/ubah_certificate.php";
                        break;
                    case 'hapus_certificate':
                        include "php/hapus_certificate.php";
                        break;
                    case 'tectical':
                        include "html/tectical.php";
                        break;
                    case 'contact':
                        include "html/contact.php";
                        break;
                    case 'products':
                        include "php/products.php";
                        break;
                    case 'tambah_product':
                        include "php/tambah_product.php";
                        break;
                    case 'hapus_product':
                        include "php/hapus_product.php";
                        break;
                    case 'ubah_product':
                        include "php/ubah_product.php";
                        break;
                    case 'login':
                        include "html/login.php";
                        break;
                    case 'distributor':
                        include "php/distributor.php";
                        break;
                    case 'tambah_distributor':
                        include "php/tambah_distributor.php";
                        break;
                    case 'ubah_distributor':
                        include "php/ubah_distributor.php";
                        break;
                    case 'hapus_distributor':
                        include "php/hapus_distributor.php";
                        break;
                    case 'lokasi':
                        include "html/lokasi.php";
                        break;
                    case 'main':
                        // default:include "html/eror.php";
                }
                ?>
            </div>
        </div>
        <div class="rightcolum">
            <div class="card">
                <?php
                require "html/about.php"
                ?>
            </div>
            <div class="card" align="center">
                <?php
                require "html/sosmed.php"
                ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php
        include "html/footer.php"
        ?>
    </div>
</body>
</head>