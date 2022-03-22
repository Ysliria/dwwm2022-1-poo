<?php

class Guerrier extends Personnage implements PersonnageJoueurInterface
{
    use EpeeTrait;

    private int $attaqueDeBase = 10;

    public function attaqueCiblee(Personnage $cible): void
    {
        $cible->setPv($cible->getPv() - $this->attaqueDeBase);
        echo '<h2>Taper !</h2>';
    }

    public function soin():void
    {
        $this->setPv($this->getPv() + 5);
    }
}