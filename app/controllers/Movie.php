<?php
use app\core\Controller;
  
class Movie extends Controller {
 

  public function index() {
    $Movies = $this->model('Movies'); // é retornado o model Movies()
    $data = $Movies::getAllMovies();
    /*
    $Movies = new Movies();
    $data = $Movies->getAllMovies();
    ------------------------------------------------------
    $Movies = "Movies";
    $data = $Movies::getAllMovies();
    */
    $this->view('movie/index', ['movies' => $data]);
  }

  /**
  * Invocação da view get.php
  *
  * @param  int   $id   Id. movie
  */
  public function get($id = null) {
        if (is_numeric($id)) {
          $Movies = $this->model('Movies');
          $data = $Movies::findMovieById($id);
          $this->view('movie/get', ['movies' => $data]);
        } else {
          $this->pageNotFound();
        }
      }

    public function add() {

        $this->view('movie/add');

    }

    public function delete($id = null) {
        if (is_numeric($id)) {
            $Movies = $this->model('Movies');
            $Movies::deleteMovieById($id);
            $data = $Movies::getAllMovies();
            $this->view('movie/index', ['movies' => $data]);
            
        } else {
            $this->pageNotFound();
        }
    }

    public function create() {
          $this->view('movie/create');
  }

    public function update($id = null) {
        if (is_numeric($id)) {
            $Movies = $this->model('Movies');
            $data = $Movies::findMovieById($id);
            $this->view('movie/update', ['movies' => $data]);

        } else {
            $this->pageNotFound();
        }

    }
    public function saveUpdate($id=null)
    {
        if (is_numeric($id)) {
            $title = $_POST["title"];
            $IMDB_rating = $_POST["IMDB_rating"];
            $release_year = $_POST["release_year"];
            $genre_id = $_POST["genre_id"];
            $description = $_POST["description"];
            $synopsis = $_POST["synopsis"];
            $author = $_POST["author"];

            $Movies = $this->model('Movies');
            $data = $Movies::updateMovie($title, $IMDB_rating, $release_year, $genre_id, $description, $synopsis, $author, $id);
            header('Location: http://localhost/PW/TrabPW01/movie/update/'.$id);
            $this->view('movie/update/'.$id, ['movies' => $data]);

        } else {
            $this->pageNotFound();
        }
    }

    public function store() {

        $title = $_POST["title"];
        $IMDB_rating = $_POST["IMDB_rating"];
        $release_year = $_POST["release_year"];
        $genre_id = $_POST["genre_id"];
        $description = $_POST["description"];
        $image = $_FILES['image']['tmp_name'];
        $synopsis = $_POST["synopsis"];
        $author = $_POST["author"];
        $img = file_get_contents( $image);
        $data = base64_encode($img);

        $Movies = $this->model('Movies');
        $Movies::storeMovie($title, $IMDB_rating, $release_year, $genre_id, $data, $description, $synopsis, $author);

        $this->view('movie/add');

    }
}
?>