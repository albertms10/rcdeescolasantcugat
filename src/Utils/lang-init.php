<?php
session_start();
$_SESSION['lang'] = $_GET['lang'] ?? $_SESSION['lang'] ?? 'ca';
