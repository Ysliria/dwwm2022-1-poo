<?php

interface PersonnageNonJoueurInterface
{
    public function agonie(Personnage $cible): void;
}