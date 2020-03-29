<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource; 
use Symfony\Component\Serializer\Annotation\Groups; 

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 * @ApiResource(attributes={"normalization_context"={"groups"={"movies"}}
 * })
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("movies")
     */
    private $id;

    /**     
     * @var string
     * @ORM\Column(type="string")
     * @Groups("movies")
     */
    private $name; 

    /**     
     * @var object
     * @ORM\OneToMany(targetEntity="App\Entity\Movie", mappedBy="category")
     * @Groups("movies")
     */
    private $movies; 
    

    public function getId(): ?int
    {
        return $this->id;
    }



    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of movies
     *
     * @return  object
     */ 
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * Set the value of movies
     *
     * @param  object  $movies
     *
     * @return  self
     */ 
    public function setMovies(object $movies)
    {
        $this->movies = $movies;

        return $this;
    }
}
