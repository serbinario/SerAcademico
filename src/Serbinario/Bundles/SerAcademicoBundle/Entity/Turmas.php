<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 26/02/16
 * Time: 11:26
 */

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Turmas
 *
 * @ORM\Table(name="turmas")
 * @ORM\Entity
 */
class Turmas
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
     * @SerializedName("turma")
     * @ORM\Column(name="turnos", type="string", length=45, nullable=true)
     */
    private $turma;

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
     * Set turma
     *
     * @param string $turma
     *
     * @return Turmas
     */
    public function setTurma($turma)
    {
        $this->turma = $turma;

        return $this;
    }

    /**
     * Get turma
     *
     * @return string
     */
    public function getTurma()
    {
        return $this->turma;
    }
}
