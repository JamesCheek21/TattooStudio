<?php

if(isset($_POST['submit'])){

  $artist = $_POST['artist'];

  $file = $_FILES['file'];

  print_r($file);

}
