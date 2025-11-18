<?php
// c:\Users\ifeol\Downloads\project-bolt-sb1-3amncemo\project\admin.php
session_start();
if (empty($_SESSION['authenticated']) || ($_SESSION['role'] ?? '') !== 'admin') { header('Location: sign-up.html'); exit; }
readfile(__DIR__ . '/admin.html');