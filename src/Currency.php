<?php
namespace WanaKin\Currency;

class Currency
{
    /** @var string */
    protected $value;

    /** @var string */
    protected $code;

    /** @var int */
    protected $scale;

    /** @var MPHelper */
    protected $mp;

    /**
     * Constructor
     *
     * @param  string $initial The initial value of the currency
     * @param  string $code The currency code (e.g. USD)
     * @param  int $scale The scale for internal calculations (defaults to 4)
     */
    public function __construct($initial = '0.00', $code = 'USD', $scale = 4)
    {
        $this->value = $initial;
        $this->code = $code;
        $this->scale = $scale;

        // Create an MPHelper
        $this->mp = new MPHelper($scale);
    }

    /**
     * Get the currency code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->code;
    }

    /**
     * Serialize a string into a Currency instance
     *
     * @param  Currency|string $c The currency or string
     * @return Currency The currency instance
     */
    protected function resolve($c)
    {
        if ($c instanceof Currency) {
            return $c;
        } else {
            // Create a new currency instance with the given string as its value, using the same currency code and scale
            return new Currency($c, $this->code, $this->scale);
        }
    }

    /**
     * Return the value of a string or Currency instance
     *
     * @param  Currency|string $c
     * @return string The value
     */
    protected function resolveValue($c)
    {
        if ($c instanceof Currency) {
            return $c->peek($this->scale);
        } else {
            return $c;
        }
    }

    /**
     * Peek at the currency value
     *
     * @param  ?int $scale The precision to round to (defaults to the scale)
     * @return string The currency's value
     */
    public function peek($scale = null)
    {
        return $this->mp->round($this->value, $scale ?? $this->scale);
    }

    /**
     * Add to the currency
     *
     * @param  Currency|string $c The currency to add
     * @return void
     */
    public function add($c)
    {
        $this->value = $this->mp->add($this->peek(), $this->resolveValue($c));
    }

    /**
     * Substract from the currency
     *
     * @param  Currency $c The currency to substract
     * @return void
     */
    public function subtract($c)
    {
        $this->value = $this->mp->substract($this->peek(), $this->resolveValue($c));
    }

    /**
     * Check the safety (i.e. if both are the same type of currency)
     *
     * @param  Currency $c The currency to check
     * @return bool True if safe, false otherwise
     */
    public function safe($c)
    {
        return $this->getCurrencyCode() === $c->getCurrencyCode();
    }

    /**
     * Multiply by the given value
     *
     * @param  string $num The number to multiply by
     * @return string The product
     */
    public function multiply($num)
    {
        return $this->mp->multiply($this->peek(), $num);
    }
}
