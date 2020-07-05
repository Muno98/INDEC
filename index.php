<?php
include "admin/php/koneksi.php";
?>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Program UAS</title>

<body>
    <div class="header">
        <?php
        include "admin/html/header.php";
        ?>
    </div>
    <ul>
        <li><a href="index.php?page=home">Home</a></li>
        <li class="dropdown"><a href="#" class="dropbtn">Our Company</a>
            <div class="dropdown-content">
                <a href="index.php?page=ourvision">Our Vision</a>
                <a href="index.php?page=ourpeople">Our People</a>
                <a href="index.php?page=ourgroup">Our Group Companies</a>
                <a href="index.php?page=career">Career with us</a>
                <a href="index.php?page=certification">Certification</a>
            </div>
        <li><a href="index.php?page=products">Products</a></li>
        <li class="dropdown"><a href="#" class="dropbtn">Suport</a>
            <div class="dropdown-content">
                <a href="index.php?page=tectical">Tectical & Application</a>
                <a href="index.php?page=contact">Contact Us</a>
                <a href="index.php?page=lokasi">Lokasi</a>
            </div>
        <li><a href="index.php?page=distributor">Distributor</a></li>
        <li class="login"><a href="admin/html/login.php" style="float:right">Login</a></>
    </ul>
    <div class="topnav">
        <div>
            <?php
            include "admin/html/textberjalan.php";
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
                        include "admin/html/home.php";
                        break;
                    case 'about':
                        include "admin/html/about.php";
                        break;
                    case 'ourvision':
                        include "admin/html/ourvision.php";
                        break;
                    case 'ourpeople':
                        include "admin/html/ourpeople.php";
                        break;
                    case 'ourgroup':
                        include "admin/html/ourgroup.php";
                        break;
                    case 'career':
                        include "admin/html/career.php";
                        break;
                    case 'certification':
                        include "admin/html/certification.php";
                        break;
                    case 'tectical':
                        include "admin/html/tectical.php";
                        break;
                    case 'contact':
                        include "admin/html/contact.php";
                        break;
                    case 'products':
                        include "admin/html/products.php";
                        break;
                    case 'login':
                        include "admin/html/login.php";
                        break;
                    case 'distributor':
                        include "admin/html/distributor.php";
                        break;
                    case 'lokasi':
                        include "admin/html/lokasi.php";
                        break;
                    case 'main':
                        // default:include "admin/html/eror.php";
                }
                ?>
            </div>
        </div>
        <div class="rightcolum">
            <div class="card">
                <?php
                require "admin/html/about.php"
                ?>
            </div>
            <div class="card" align="center">
                <?php
                require "admin/html/sosmed.php"
                ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php
        include "admin/html/footer.php"
        ?>
    </div>
</body>
</head>