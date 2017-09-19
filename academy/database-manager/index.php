<?php 

  $academy = true;
  include '../../partials/header.php';
  include '../videos.php'; 
  
  $video = $videos['database'];
  
  include '../video.php';
  include '../../partials/footer.php'; 

?>