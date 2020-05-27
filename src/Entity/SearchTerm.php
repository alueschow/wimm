<?php

namespace App\Entity;

class SearchTerm
{
    /**
     * @var string|null
     */
    private $term;

    /**
     * @return string|null
     */
    public function getTerm(): ?string
    {
        return $this->term;
    }

    /**
     * @param string|null $term
     */
    public function setTerm(?string $term): void
    {
        $this->term = $term;
    }

}
