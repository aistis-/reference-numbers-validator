<?php

namespace Validator;

/**
 * Class Number13Validator
 *
 * Validator for Reference system 13
 *
 * @package Validator
 */
class Number13Validator extends AbstractValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($number)
    {
        $number = $this->filter($number);

        if (13 !== strlen($number)) {
            return false;
        }

        $total = 0;

        for ($i = 0; $i < 13; $i++) {
            if ((false === isset($number{$i})) || (false === is_numeric($number{$i}))) {
                return false;
            }

            $total += intval($number{$i}) * ((0 === $i) % 2 ? 1 : 3);
        }

        $checkSum = (10 - $total % 10) % 10;

        if ((0 <= $checkSum) && (9 >= $checkSum)) {
            return true;
        }

        return false;
    }
} 
