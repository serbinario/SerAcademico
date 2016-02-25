<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

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
     * @SerializedName("id")
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @SerializedName("auditivas")
     * @ORM\Column(name="auditivas", type="string", length=45, nullable=true)
     */
    private $auditivas;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
