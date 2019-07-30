<?php

	class Actor
	{
		private $id;
		private $first_name;
		private $last_name;
		private $rating;
		private $favorite_movie;

		public function __construct($first_name, $last_name)
		{
			$this->first_name = $first_name;
			$this->last_name = $last_name;
		}

		public function setId($id)
		{
			$this->id = $id;
		}

		public function getId()
		{
			return $this->$id;
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
    public function setRating($rating)
    {
      $this->rating = $rating;
    }

    public function getRating()
    {
      return $this->rating;
    }
    public function setFavorite_movie($favorite_movie)
    {
      $this->favorite_movie = $favorite_movie;
    }

    public function getFavorite_movie()
    {
			if($this->favorite_movie){
      	return $this->favorite_movie;}
			return "No tiene";

    }
	}
