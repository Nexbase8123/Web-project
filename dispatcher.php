<?php
// c:\Users\ifeol\Downloads\project-bolt-sb1-3amncemo\project\dispatcher.php
session_start();
if (empty($_SESSION['authenticated']) || ($_SESSION['role'] ?? '') !== 'dispatcher') { header('Location: dashboard.php'); exit; }
readfile(__DIR__ . '/dispatcher.html');