<?php

namespace Panzer\Bundle\PollBundle\Model;

/**
 * Interface PollInterface
 *
 * @package Panzer\Bundle\PollBundle\Model
 */
interface PollInterface
{
    /**
     * @param array $options
     *
     * @return self
     */
    public function setOptions($options);

    /**
     * @param Option $option
     *
     * @return self
     */
    public function addOption($option);

    /**
     * @param Option $option
     *
     * @return self
     */
    public function removeOption($option);
}