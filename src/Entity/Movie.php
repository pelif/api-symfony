<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource; 

/**
 * @ORM\Entity(repositoryClass="App\Repository\MovieRepository")
 * @ApiResource
 */
class Movie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**     
     * @var string
     * 
     * @ORM\Column(type="string")
     */
    private $title; 

    /**     
     * @var string
     * 
     * @ORM\Column(type="text")
     */
    private $description; 

    /**     
     * @var \Datetime
     * 
     * @ORM\Column(type="date")
     */
    private $release_date; 

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
}
