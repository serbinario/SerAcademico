<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 26/02/16
 * Time: 11:28
 */

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Cursos
 *
 * @ORM\Table(name="cursos")
 * @ORM\Entity
 */
class Cursos
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
     * @SerializedName("curso")
     * @ORM\Column(name="turnos", type="string", length=45, nullable=true)
     */
    private $curso;

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
     * Set curso
     *
     * @param string $curso
     *
     * @return Cursos
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return string
     */
    public function getCurso()
    {
        return $this->curso;
    }
}
