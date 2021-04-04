<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boxinternet
 *
 * @ORM\Table(name="boxinternet")
 * @ORM\Entity
 */
class Boxinternet
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
