<?php 

  function show($carbon, $format = "j M Y"){

    return $carbon->translatedFormat($format);
  }

?>