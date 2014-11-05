<?php

namespace Panzer\Bundle\PollBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Option
 *
 * @package Panzer\Bundle\PollBundle\Model
 *
 * @ORM\MappedSuperclass()
 */
class Option
{
    /**
     * @var int
     *
     */
    protected $id;

    /**
     * @var Poll
     *
     * @ORM\ManyToOne(targetEntity="Poll")
     */
    protected $poll;
} 