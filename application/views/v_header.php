<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $judul ?> | Web Programming</title>
    <link rel="stylesheet" type="text/CSS/" href="<? php echo base url() ?>assets/CSS/style.css">

</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Web Rakha.H</h1>
                <h3>Info Seputar Kampus BSI</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url().'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/blog' ?>">blog</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/about' ?>">about</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>