<?php

namespace Deg540\PHPTestingBoilerplate\Application;

class Ohce
{
    private Horario $hora;

    /**
     * @param Horario $hora
     */
    public function __construct(Horario $hora)
    {
        $this->hora = $hora;
    }

    public function saludo(string $name): string
    {
        $date = $this->hora->getHora();

        if($date>=6 && $date<12){
            return "Buenos dias ".explode(" ", $name)[1];
        }

        if($date>=12 && $date<20){
            return "Buenas tardes ".explode(" ", $name)[1];
        }

        return "Buenas noches ".explode(" ", $name)[1];
    }
}