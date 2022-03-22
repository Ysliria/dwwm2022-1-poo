<?php

class CrabeDestructeur extends Personnage implements PersonnageNonJoueurInterface
{
    private int $attaqueDeBase = 8;

    public function brulure(Personnage $cible): void
    {
        $cible->setPv($cible->getPv() - $this->attaqueDeBase);
        echo '<h2>Kruiiiguiuur Primordius !</h2><br>';
    }

    public function agonie(Personnage $cible): void
    {
        $cible->setPv($cible->getPv() - $this->attaqueDeBase);
        $this->attaqueDeBase += 4;
    }
}