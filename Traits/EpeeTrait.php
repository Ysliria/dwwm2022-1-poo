<?php

trait EpeeTrait
{
    private int $bonusDegat = 5;

    /**
     * Vous attaquez la cible ennemie à une fois.
     * @param Personnage $cible
     * @return void
     */
    public function botteFatale(Personnage $cible): void
    {
        $degats = $this->attaqueDeBase + $this->bonusDegat;

        $cible->setPv($cible->getPv() - $degats);
        echo '<h2>Botte fatale !</h2><br>';
    }

    /**
     * Vous attaquez la cible ennemie à deux reprises.
     * @param Personnage $cible
     * @return void
     */
    public function attaqueLuniSolaire(Personnage $cible): void
    {
        $degats = $this->attaqueDeBase + ($this->bonusDegat * 2);

        $cible->setPv($cible->getPv() - $degats);
        echo '<h2>Lunisolaire</h2><br>';
    }
}