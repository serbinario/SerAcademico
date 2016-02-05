<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auditivas
 *
 * @ORM\Table(name="auditivas")
 * @ORM\Entity
 */
class Auditivas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_auditivas", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuditivas;

    /**
     * @var string
     *
     * @ORM\Column(name="auditivas", type="string", length=45, nullable=true)
     */
    private $auditivas;



    /**
     * Get idAuditivas
     *
     * @return integer
     */
    public function getIdAuditivas()
    {
        return $this->idAuditivas;
    }

    /**
     * Set auditivas
     *
     * @param string $auditivas
     *
     * @return Auditivas
     */
    public function setAuditivas($auditivas)
    {
        $this->auditivas = $auditivas;

        return $this;
    }

    /**
     * Get auditivas
     *
     * @return string
     */
    public function getAuditivas()
    {
        return $this->auditivas;
    }
}
