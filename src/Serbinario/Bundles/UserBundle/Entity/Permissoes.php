<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 25/01/16
 * Time: 19:35
 */

namespace Serbinario\Bundles\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="permissoes")
 */
class Permissoes
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomePermissao;

    /**
     * @ORM\ManyToOne(targetEntity="Aplicacoes")
     * @ORM\JoinColumn(name="projeto_id", referencedColumnName="id")
     */
    private $aplicacao;
}