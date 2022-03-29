<?php

declare(strict_types=1);

namespace Wakebit\CycleBridge\TestApp\Entity;

use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;

/**
 * @Entity
 */
final class Customer
{
    /**
     * @Column(type="primary")
     *
     * @var int
     */
    private $id;

    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $name;
}
