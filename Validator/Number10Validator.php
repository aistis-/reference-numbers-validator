<?php

namespace Validator;

/**
 * Class Number10Validator
 *
 * Validator for Reference system 10
 *
 * @package Validator
 */
class Number10Validator extends AbstractValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($number)
    {
        $number = $this->filter($number);

        if (10 !== strlen($number)) {
            return false;
        }

        $total = 0;

        for ($i = 0; $i < 9; $i++) {
            if ((false === isset($number{$i})) || (false === is_numeric($number{$i}))) {
                return false;
            }

            $total += intval($number{$i}) * ($i + 1);
        }

        $checkSum = $total % 11;

        if (($checkSum == $number{9}) || ((10 === $checkSum) && ('X' === $number{9}))) {
            return true;
        }

        return false;
    }
} 
