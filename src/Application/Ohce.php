<?php

namespace Deg540\PHPTestingBoilerplate\Application;

class Ohce
{
    private Horario $hora;
    private string $name;

    /**
     * @param Horario $hora
     */
    public function __construct(Horario $hora)
    {
        $this->hora = $hora;
    }

    public function ohceResponse(string $request): string
    {
        if(str_starts_with($request, "ohce")){
            $date = $this->hora->getHora();
            $this->name = explode(" ", $request)[1];

            if($date>=6 && $date<12){
                return "Buenos dias ".$this->name;
            }

            if($date>=12 && $date<20){
                return "Buenas tardes ".$this->name;
            }

            return "Buenas noches ".$this->name;
        }

        if(strrev($request) == $request){
            return $request."\nBonitaPalabra";
        }

        if($request == "Stop!"){
            return "Adios ".$this->name;
        }

        return strrev($request);
    }

}