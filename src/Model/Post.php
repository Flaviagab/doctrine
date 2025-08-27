<?php

namespace App\Model;

use DateTime;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;

#[Entity]
class Post
{
    #[Column, Id, GeneratedValue]
    private int $id;

    #[Column, ManyToOne]
    private User $user;

    #[Column]
    private string $content;

    #[Column]
    private DateTime $postDate;


    public function __construct(User $user, string $content, DateTime $postDate)
    {
        $this->user = $user;
        $this->content = $content;
        $this->postDate = $postDate;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getPostDate(): DateTime
    {
        return $this->postDate;
    }
}
