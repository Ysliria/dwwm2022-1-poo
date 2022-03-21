<?php

class Personnage
{
    private string $nom;
    private string $profession;
    private int $pv;
    private int $atk;

    /**
     * @throws Exception
     */
    public function __construct(string $nom, string $profession, int $pv, int $atk)
    {
        $this->setNom($nom);
        $this->setProfession($profession);
        $this->setPv($pv);
        $this->setAtk($atk);
    }

    public function cri(): void
    {
        echo 'Sir on en a gros !';
    }

    public function getProfession(): string
    {
        return $this->profession;
    }

    /**
     * @throws Exception
     */
    public function setProfession(string $profession): void
    {
        $professionDisponible = ['roi', 'reine', 'druide', 'chevalier'];

        if (!in_array(strtolower($profession), $professionDisponible)) {
            throw new Exception('Cette profession n\'existe pas !');
        }

        $this->profession = strtolower($profession);
    }

    public function getPv(): int
    {
        return $this->pv;
    }

    public function setPv(int $pv): void
    {
        $this->pv = abs($pv);
    }

    public function getAtk(): int
    {
        return $this->atk;
    }

    public function setAtk(int $atk): void
    {
        $this->atk = abs($atk);
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = ucfirst(strtolower($nom));
    }
}