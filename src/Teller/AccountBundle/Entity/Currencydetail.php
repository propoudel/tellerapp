<?php

namespace Teller\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currencydetail
 *
 * @ORM\Table(name="currencydetail")
 * @ORM\Entity
 */
class Currencydetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=100, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=100, nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="shortform", type="string", length=10, nullable=true)
     */
    private $shortform;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol", type="string", length=10, nullable=true)
     */
    private $symbol;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set country
     *
     * @param string $country
     * @return Currencydetail
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return Currencydetail
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set shortform
     *
     * @param string $shortform
     * @return Currencydetail
     */
    public function setShortform($shortform)
    {
        $this->shortform = $shortform;

        return $this;
    }

    /**
     * Get shortform
     *
     * @return string 
     */
    public function getShortform()
    {
        return $this->shortform;
    }

    /**
     * Set symbol
     *
     * @param string $symbol
     * @return Currencydetail
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Get symbol
     *
     * @return string 
     */
    public function getSymbol()
    {
        return $this->symbol;
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
