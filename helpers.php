<?php
if (!function_exists('stars')) {
  function stars($rating) {
    return str_repeat("★", $rating) . str_repeat("☆", 5 - $rating);
  }
}
?>
