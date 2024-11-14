<?php

function sl_debug_($variabelSomSkaDumpas)
{
  echo "<pre>";
  var_dump($variabelSomSkaDumpas);
  die("sl_debug was here");
}

function sl_get_header() {
  include('parts/header.php');
}


function sl_get_footer() {
  include('parts/footer.php');
};
