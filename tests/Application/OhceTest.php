<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test\Application;

use Deg540\PHPTestingBoilerplate\Application\Horario;
use Mockery;
use Deg540\PHPTestingBoilerplate\Application\Ohce;
use PHPUnit\Framework\TestCase;

final class OhceTest extends TestCase
{
    private Horario $hora;
    private Ohce $ohce;

    protected function setUp(): void
    {
        parent::setUp();
        $this->hora = Mockery::mock(Horario::class);
        $this->ohce = new Ohce($this->hora);
    }


    /**
     * @test
     */
    public function shouldReturnBuenosDiasYourName()
    {

        $this->hora->allows()->getHora()->andReturns(11);

        $result = $this->ohce->saludo("ohce Pedro");

        $this->assertEquals("Buenos dias Pedro", $result);
    }

    /**
     * @test
     */
    public function shouldReturnBuenasNochesYourName()
    {
        $this->hora->allows()->getHora()->andReturns(21);

        $result = $this->ohce->saludo("ohce Pedro");

        $this->assertEquals("Buenas noches Pedro", $result);
    }

    /**
     * @test
     */
    public function shouldReturnBuenasTardesYourName()
    {
        $this->hora->allows()->getHora()->andReturns(17);

        $result = $this->ohce->saludo("ohce Pedro");

        $this->assertEquals("Buenas tardes Pedro", $result);
    }
}
