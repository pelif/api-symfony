<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource; 
use Symfony\Component\Serializer\Annotation\Groups; 
use DateTime; 

/**
 * @ORM\Entity(repositoryClass="App\Repository\MovieRepository")
 * @ApiResource(attributes={"filters"={"movie.search_filter"},
 *      "normalization_context"={"groups"={"movies"}}
 *      })
 */
class Movie
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
     * 
     * @ORM\Column(type="string")
     * @Groups("movies")
     */
    private $title; 

    /**     
     * @var string
     * 
     * @ORM\Column(type="text")
     * @Groups("movies")
     */
    private $description; 

    /**     
     * @var \DateTime
     * 
     * @ORM\Column(type="date")
     * @Groups("movies")
     */
    private $release_date; 
    
    /**     
     * @var object
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="movies")
     * @Groups("movies")
     */
    private $category; 

    public function getId(): ?int
    {
        return $this->id;
    }    

    /**
     * Get the value of title
     *
     * @return  string
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param  string  $title
     *
     * @return  self
     */ 
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of release_date
     *
     * @return  \Datetime
     */ 
    public function getReleaseDate(): \DateTime
    {
        return $this->release_date;
    }

    /**
     * Set the value of release_date
     *
     * @param  \DateTime  $release_date
     *
     * @return  self
     */ 
    public function setReleaseDate(DateTime $release_date): self 
    {   
        $this->release_date = $release_date;

        return $this;
    }


    /**
     * Get the value of category
     *
     * @return  object
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @param  object  $category
     *
     * @return  self
     */ 
    public function setCategory(object $category)
    {
        $this->category = $category;

        return $this;
    }
}
