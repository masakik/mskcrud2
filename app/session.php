<?php
session_start();
if (empty($_SESSION['create_date'])) {
    $_SESSION['create_date'] = date('Y-m-d H:i:s');
} else {
    $log->info('New session started');
}
