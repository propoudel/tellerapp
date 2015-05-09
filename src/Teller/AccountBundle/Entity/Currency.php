<?php

namespace Teller\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 *
 * @ORM\Table(name="currency")
 * @ORM\Entity
 */
class Currency
{
    /**
     * @var string
     *
     * @ORM\Column(name="from_currency", type="string", length=55, nullable=true)
     */
    private $fromCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="to_currency", type="string", length=55, nullable=true)
     */
    private $toCurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
