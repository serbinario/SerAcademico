<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoresRacas
 *
 * @ORM\Table(name="cores_racas")
 * @ORM\Entity
 */
class CoresRacas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcores_racas", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcoresRacas;

    /**
     * @var string
     *
     * @ORM\Column(name="cores_racas", type="string", length=45, nullable=true)
     */
    private $coresRacas;



    /**
     * Get idcoresRacas
     *
     * @return integer
     */
    public function getIdcoresRacas()
    {
        return $this->idcoresRacas;
    }

    /**
     * Set coresRacas
     *
     * @param string $coresRacas
     *
     * @return CoresRacas
     */
    public function setCoresRacas($coresRacas)
    {
        $this->coresRacas = $coresRacas;

        return $this;
    }

    /**
     * Get coresRacas
     *
     * @return string
     */
    public function getCoresRacas()
    {
        return $this->coresRacas;
    }
}
