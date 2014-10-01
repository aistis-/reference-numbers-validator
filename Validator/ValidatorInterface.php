<?php

namespace Validator;

/**
 * Interface ValidatorInterface
 *
 * @package Validator
 */
interface ValidatorInterface
{
    /**
     * Validates if the given string is valid according to the reference system.
     *
     * @param string $number
     * @return boolean
     */
    public function validate($number);
}
