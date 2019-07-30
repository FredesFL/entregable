<?php
// Ej. 3 Agregar la clase actor con atributos y métodos

class Actor
{
  private $id;
  private $first_name;
  private $last_name;
  private $favorite_movie_id;
  private $rating;


public function __construct ($first_name, $last_name, $favorite_movie_id, $rating)
{
  $this->first_name = $first_name;
  $this->last_name = $last_name;
  $this->favorite_movie_id = $favorite_movie_id;
  $this->rating = $rating;

}

public function setId($id)
{
  $this->id = $id;
}

public function getId()
{
  return $this->id;
}

public function setFirst_name($first_name)
{
  $this->first_name = $first_name;
}

public function getFirst_name()
{
  return $this->first_name;
}

public function setLast_name($last_name)
{
  $this->last_name = $last_name;
}

public function getLast_name()
{
  return $this->last_name;
}

public function getFavorite_movie_id()
{
  return $this->favorite_movie_id;
}

public function setFavorite_movie_id($favorite_movie_id)
{
  $this->favorite_movie_id = $favorite_movie_id;
}

public function getRating()
{
  return $this->rating;
}

public function setRating($rating)
{
  $this->rating = $rating;
}

}



 ?>
