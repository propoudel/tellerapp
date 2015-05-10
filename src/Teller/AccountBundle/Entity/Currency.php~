<?php

namespace Teller\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 */
class Currency
{
    /**
     * @var string
     */
    private $fromCurrency;

    /**
     * @var string
     */
    private $toCurrency;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set fromCurrency
     *
     * @param string $fromCurrency
     * @return Currency
     */
    public function setFromCurrency($fromCurrency)
    {
        $this->fromCurrency = $fromCurrency;

        return $this;
    }

    /**
     * Get fromCurrency
     *
     * @return string 
     */
    public function getFromCurrency()
    {
        return $this->fromCurrency;
    }

    /**
     * Set toCurrency
     *
     * @param string $toCurrency
     * @return Currency
     */
    public function setToCurrency($toCurrency)
    {
        $this->toCurrency = $toCurrency;

        return $this;
    }

    /**
     * Get toCurrency
     *
     * @return string 
     */
    public function getToCurrency()
    {
        return $this->toCurrency;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
