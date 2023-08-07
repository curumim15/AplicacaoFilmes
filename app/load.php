<?php
spl_autoload_register(function ($filename) {
  $file = $filename . '.php';
  $file = str_replace('\\', '/', $file);
  if (file_exists($file)) {
    require $file;
  } else {
    echo "Debug: Erro na importação do ficheiro (rever caminho...)";
  }
});

//================================================================================
// NOTAS: 
//================================================================================
// spl = Standard PHP Library
// spl_autoload_register é invocado quando uma nova classe é declarada/necessária
//================================================================================
?>