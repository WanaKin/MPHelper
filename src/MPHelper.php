<?php
namespace WanaKin\MP;

class MPHelper
{
    /**
     * The scale to keep for calculations. Defaults to 0, so be sure to set using the setScale method
     *
     * @var int
     */
    protected $scale;

    /**
     * Constructor
     *
     * @param  int $scale The initial scale to set
     */
    public function __construct($scale = 0)
    {
        $this->scale = $scale;
    }

    /**
     * Set the scale
     *
     * @param  int $scale The number of decimal places to keep
     * @return void
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
    }

    /**
     * Round a multiprecision number to a certain number of decimal places
     *
     * @param  string $num The multiprecision number to round
     * @param  int $places The number of decimal places to round to
     * @return string The rounded number
     */
    public function round($num, $places)
    {
        // Just in case PHP does some stupid type juggling
        $num = (string)$num;

        // Thanks to https://stackoverflow.com/a/55606171/8292439

        // This basically works by adding the precision + 0.000000...5
        // If the number is less than 5, then nothing will happen and it will be truncated
        // If the number is five or greater, the place to its left will increase by one
        if (strpos('.', $num) !== -1) {
            // For negative numbers
            if ($num[0] == '-') {
                return bcsub($num, '0.' . str_repeat('0', $places) . '5', $places);
            } else {
                // For positive numbers
                return bcadd($num, '0.' . str_repeat('0', $places) . '5', $places);
            }
        }
    }

    /**
     * Add a series of numbers
     *
     * @param  string ...$nums The numbers to add
     * @return string The sum of the given numbers
     */
    public function add(...$nums)
    {
        // Start the sum at 0
        $sum = '0';

        // Iterate through the numbers
        foreach ($nums as $num) {
            $sum = bcadd($sum, $num, $this->scale);
        }

        // Return the sum
        return $sum;
    }

    /**
     * Substract a series of number
     *
     * @param  string ...$nums The numbers to substract
     * @return string The difference of the number
     */
    public function substract(...$nums)
    {
        // Start at the first number
        $difference = $nums[0];

        // Iterate through the numbers and substract
        for ($i = 1; $i < count($nums); $i++) {
            $difference = bcsub($difference, $nums[$i], $this->scale);
        }

        return $difference;
    }

    /**
     * Multiply a series of numbers
     *
     * @param  string ...$nums The numbers to multiply
     * @return string The product of the numbers
     */
    public function multiply(...$nums)
    {
        // Start the product at 1
        $product = 1;

        // Iterate through the numbers
        foreach ($nums as $num) {
            $product = bcmul($product, $num, $this->scale);
        }

        // Return the product once it's calculated
        return $product;
    }

    /**
     * Divide a series of numbers (in order)
     *
     * @param  string ...$nums The numbers to divide
     * @return string The quotient
     */
    public function divide(...$nums)
    {
        // Start with the first number
        $quotient = $nums[0];

        // Divide by the rest of the numbers
        for ($i = 1; $i < count($nums); $i++) {
            $quotient = bcdiv($quotient, $nums[$i], $this->scale);
        }

        // Return the quotient
        return $quotient;
    }

    /**
     * Compare two numbers
     *
     * @param  string $num1 The first number to compare
     * @param  string $num2 The second number to compare
     * @return int 0 if the operands are equal, 1 if num1 > num2, -1 if num1 < num2
     */
    public function compare($num1, $num2)
    {
        return bccomp($num1, $num2, $this->scale);
    }

    /**
     * Get the modulus of an arbitrary precision number
     *
     * @param  string $num1 The number to mod
     * @param  string $num2 The number to mod against
     * @return string The modulus
     */
    public function mod($num1, $num2)
    {
        return bcmod($num1, $num2, $this->scale);
    }

    /**
     * Raise a number to another
     *
     * @param  string $num The number to raise to a power
     * @param  string $exponent The exponent to raise to
     * @return string The result
     */
    public function pow($num, $exponent)
    {
        return bcpow($num, $exponent, $this->scale);
    }

    /**
     * Get the square root of a number
     *
     * @param  string $num The number to find the square root of
     * @return string The result
     */
    public function sqrt($num)
    {
        return bcsqrt($num, $this->scale);
    }
}
