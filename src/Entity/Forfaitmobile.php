<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forfaitmobile
 *
 * @ORM\Table(name="forfaitmobile")
 * @ORM\Entity
 */
class Forfaitmobile
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
