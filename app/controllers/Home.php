<?php
use app\core\Controller;

class Home extends Controller {
  // invocação da view index.php de /home
  public function index() {
    $this->view('home/index');
  }
}

?>