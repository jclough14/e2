<?php

session_start();

if (isset($_SESSION['result'])) {

    $CPUShape = $_SESSION['CPUShape'];
    $result = $_SESSION['result'];
    $playerShape = $_SESSION['playerShape'];
    $showResults = true;
    $_SESSION['result'] = null;
} else {
    $showResults = false;
}
