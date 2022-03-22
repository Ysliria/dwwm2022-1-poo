<?php

class Personnage
{
    const ATK_BASE = 10;

    private string $nom;
    private int $pv;

    public function __construct(string $nom, int $pv)
    {
        $this->setNom($nom);
        $this->setPv($pv);
    }

    /**
     * @return void
     */
    public function cri(): void
    {
        echo 'Sir on en a gros !';
    }

    /**
     * @return int
     */
    public function getPv(): int
    {
        return $this->pv;
    }

    /**
     * @param int $pv
     * @return void
     */
    public function setPv(int $pv): void
    {
        $this->pv = abs($pv);
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return void
     */
    public function setNom(string $nom): void
    {
        $this->nom = ucfirst(strtolower($nom));
    }
}