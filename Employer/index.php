<?php
session_start();
if (isset($_SESSION['$UserName_emp'])) {

} else {
    header('location:../index.php');
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />

    <title>GET WORKERS</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css2a/EmployerProfile1.css" />

    <style type="text/css">
        .style1 {
            color: #000066;
            font-weight: bold;
        }

        a {
            text-decoration: none;
        }

        #bc {
            background-color: #ADD8E6;

            box-shadow: 0px 0px 7px red, 0px 0px 4px blue;

        }

        #bl {
            background-color: #FFD1DC;
            box-shadow: 0px 0px 4px red, 0px 0px 7px blue;
        }

        #el {
            background-color: #90EE90;
            box-shadow: 0px 0px 4px red, 0px 0px 7px blue;
        }

        #pl {
            background-color: #87CEEB;
            box-shadow: 0px 0px 7px red, 0px 0px 4px blue;
        }

        #content {
            float: center;
            width: 732px;
            margin: 0;
            padding: 0 0 0 20px;
        }

        #heading {

            font-size: 33px;

        }

        button {
            width: 246px;
            height: 95px;
            margin: 10px 10px;
            font-size: 20px;

        }
    </style>
</head>

<body id="www-url-cz">

    <!-- Main -->
    <div id="main" class="box">
        <?php
        include "Header.php"
            ?>
        <?php
        include "menu.php"
            ?>
        <!-- Page (2 columns) -->
        <div id="page" class="box">
            <div id="page-in" class="box">

                <div id="strip" class="box noprint">

                    <!-- RSS feeds -->
                    <hr class="noscreen" />

                    <!-- Breadcrumbs -->
                    <p id="breadcrumbs">&nbsp;</p>
                    <hr class="noscreen" />

                </div> <!-- /strip -->

                <!-- Content -->
                <div id="content">
                    <!-- /article -->

                    <hr class="noscreen" />


                    <!-- /article -->

                    <hr class="noscreen" />

                    <!-- Article -->

                    <!-- /article -->

                    <hr class="noscreen" />

                    <!-- Article -->
                    <div class="article">

                        <!-- Article -->
                        <div class="article">
                            <h2 id="heading"><span> Select Work Type </span></h2>
                            <p>&nbsp;</p>
                            <div class="buttonsclass">
                                <button id="bc"><a href="Construction.php"><strong>CONSTRUCTION</strong></a></button>
                                <button id="bl"><a href="Labour.php"><strong>LABOUR</strong></a></button><br>
                                <button id="el"><a href="Electrician.php"><strong>ELECTRICIAN</strong></a></button>
                                <button id="pl"><a href="Plumbing.php"><strong>PLUMBER</strong></a></button>

                            </div>



                            <p class="btn-more box noprint">&nbsp;</p>
                        </div> <!-- /article -->

                        <hr class="noscreen" />

                    </div> <!-- /content -->



                </div> <!-- /page-in -->
            </div> <!-- /page -->


            <?php
            include "footer1.php"
                ?>
        </div> <!-- /main -->

</body>

</html>