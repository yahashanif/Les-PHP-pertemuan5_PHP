<?php
$page=isset($_GET['page']) ? $_GET['page'] : 'home';
if ($page=='home') include 'home.php';
if ($page=='top_berita') include 'top_berita.php';
if ($page=='allberita') include 'berita.php';
if ($page=='input_berita') include 'input_berita.php';