<?php

namespace App\Entity;

use App\Repository\TotalVotesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TotalVotesRepository::class)
 */
class TotalVotes
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
    private $target_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $like_nr;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unlike_nr;

    public function getId(): ?int
    {
        return $this->id;
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
}
