<?php

namespace App\Entity;

use App\Repository\UserVotesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=UserVotesRepository::class)
 */
class UserVotes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $vote = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $target_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $like_nr;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unlike_nr;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deleted_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getVote(): ?int
    {
        return $this->vote;
    }

    public function setVote(int $vote): self
    {
        $this->vote = $vote;

        return $this;
    }

    public function getTargetId(): ?int
    {
        return $this->target_id;
    }

    public function setTargetId(int $target_id): self
    {
        $this->target_id = $target_id;

        return $this;
    }

    public function getLikeNr(): ?int
    {
        return $this->like_nr;
    }

    public function setLikeNr(?int $like_nr): self
    {
        $this->like_nr = $like_nr;

        return $this;
    }

    public function getUnlikeNr(): ?int
    {
        return $this->unlike_nr;
    }

    public function setUnlikeNr(?int $unlike_nr): self
    {
        $this->unlike_nr = $unlike_nr;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deleted_at;
    }

    public function setDeletedAt(?\DateTimeInterface $deleted_at): self
    {
        $this->deleted_at = $deleted_at;

        return $this;
    }
}
