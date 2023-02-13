<?php
  $url = $_GET['url'];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $data = curl_exec($ch);
  curl_close($ch);
  echo $data;
  if (!isset($_GET['url'])) {
    die("No URL provided");
  }
  $url = $_GET['url'];
  $url = (strpos($_GET['url'], "http") === false) ? "http://" . $_GET['url'] : $_GET['url'];
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36");
?>