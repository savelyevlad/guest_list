<?php

namespace App\Entity;

use App\Repository\RecordRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecordRepository::class)
 */
class Record
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="idrecord", type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @ORM\Column(name="email", type="string", length=45)
     */
    private $mail;

    public function getEmail(): ?string
    {
        return $this->mail;
    }

    public function setEmail($mail) {
        $this->mail = $mail;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function __construct($name, $email, $content) {
        $this->name = $name;
        $this->mail = $email;
        $this->content = $content;
    }
}
