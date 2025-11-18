<?php
// c:\Users\ifeol\Downloads\project-bolt-sb1-3amncemo\project\dashboard.php
session_start();
if (empty($_SESSION['authenticated'])) { header('Location: sign-up.html'); exit; }
$role = $_SESSION['role'] ?? '';
if ($role === 'admin') { header('Location: admin.php'); exit; }
if ($role === 'dispatcher') { header('Location: dispatcher.php'); exit; }
readfile(__DIR__ . '/dashboard.html');