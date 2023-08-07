<?php

namespace app\models;

use app\core\Db;
class Movies {
  /**
  * Método para obtenção do dataset de todos os filmes
  *
  * @return   array
  */
  public static function getAllMovies() {
    $conn = new Db();
    $response = $conn->execQuery('SELECT id, title, imdb_rating, release_year, image, description, synopsis, author FROM movies');
    return $response;
  }

  /**
  * @param    int     
  *
  * @return   array
  */
  public static function findMovieById(int $id) 
  {
    $conn = new Db();
    $response = $conn->execQuery('SELECT id, title, imdb_rating, release_year, genres_id, image, description, synopsis, author FROM movies WHERE id = ?', array('i', array($id)));
    return $response;
  }

  public static function findMovieByTitle(string $search) 
  {
    $conn = new Db();
    $response = $conn->execQuery("SELECT id, title, imdb_rating, release_year, image, description, synopsis, author FROM movies WHERE title LIKE  CONCAT('%',?,'%')" , array('s', array($search)));
    return $response;
  }

  public static function deleteMovieById(int $id) {
      $conn = new Db();
      $response = $conn->execQuery('DELETE FROM movies WHERE id = ?', array('i', array($id)), true);
      return $response;
  }

    public static function storeMovie($title, $IMDB_rating, $release_year, $genre_id, $image, $description, $synopsis, $author) {
        $conn = new Db();
        $response = $conn->execQuery('INSERT INTO movies (title, imdb_rating, release_year, genres_id, image, description, synopsis, author) VALUES (?,?,?,?,?,?,?,?)', array('sssissss', array($title, $IMDB_rating, $release_year,$genre_id,$image,$description,$synopsis,$author)) , true);
        return $response;
    }

    public static function updateMovie($title, $IMDB_rating, $release_year, $genre_id, $description, $synopsis, $author, $id) {
        $conn = new Db();
        $response = $conn->execQuery('UPDATE movies set title = ?, imdb_rating = ?, release_year = ?, genres_id = ?, description = ?, synopsis = ?, author = ? where id = ?', array('sssisssi', array($title, $IMDB_rating, $release_year,$genre_id,$description,$synopsis,$author,$id)) , true);
        return $response;
    }
}