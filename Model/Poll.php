<?php

namespace Panzer\Bundle\PollBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Poll
 *
 * @package Panzer\Bundle\PollBundle\Model
 *
 * @ORM\MappedSuperclass()
 */
abstract class Poll implements PollInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Option", mappedBy="poll")
     */
    protected $options;
} 