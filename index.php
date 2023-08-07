<?php
  require './app/load.php';
  use app\core\App; // importação/aliasing com o operador use
  // a instrução acima é igual a: use app\core\App as App;
  use app\core\Controller;
  $app = new App();

//================================================================================
// NOTAS: 
//================================================================================
// Autoload function:
// > A técnica acima evita que sejam feitos "requires" para cada uma 
//   das classes.
// > O PHP pode fazer o carregamento das classes quando estas são necessárias.
//================================================================================
?>