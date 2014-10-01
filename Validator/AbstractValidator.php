<?php

namespace Validator;

/**
 * AbstractClass AbstractValidator
 *
 * @package Validator
 */
abstract class AbstractValidator implements ValidatorInterface
{
    /**
     * Remove all spaces and hyphens from the string.
     *
     * @param string $number
     * @return string
     */
    protected function filter($number)
    {
        return preg_replace('/\-+| +/', '', $number);
    }
} 
