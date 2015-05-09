<?php

namespace Teller\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="account")
 * @ORM\Entity
 */
class Account
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="received_money", type="integer", nullable=true)
     */
    private $receivedMoney;

    /**
     * @var integer
     *
     * @ORM\Column(name="received_currency", type="integer", nullable=true)
     */
    private $receivedCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="sent_currency", type="string", length=100, nullable=true)
     */
    private $sentCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="sent_rate", type="string", length=100, nullable=true)
     */
    private $sentRate;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_transferred_money", type="integer", nullable=true)
     */
    private $totalTransferredMoney;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set userId
     *
     * @param integer $userId
     * @return Account
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set receivedMoney
     *
     * @param integer $receivedMoney
     * @return Account
     */
    public function setReceivedMoney($receivedMoney)
    {
        $this->receivedMoney = $receivedMoney;

        return $this;
    }

    /**
     * Get receivedMoney
     *
     * @return integer 
     */
    public function getReceivedMoney()
    {
        return $this->receivedMoney;
    }

    /**
     * Set receivedCurrency
     *
     * @param integer $receivedCurrency
     * @return Account
     */
    public function setReceivedCurrency($receivedCurrency)
    {
        $this->receivedCurrency = $receivedCurrency;

        return $this;
    }

    /**
     * Get receivedCurrency
     *
     * @return integer 
     */
    public function getReceivedCurrency()
    {
        return $this->receivedCurrency;
    }

    /**
     * Set sentCurrency
     *
     * @param string $sentCurrency
     * @return Account
     */
    public function setSentCurrency($sentCurrency)
    {
        $this->sentCurrency = $sentCurrency;

        return $this;
    }

    /**
     * Get sentCurrency
     *
     * @return string 
     */
    public function getSentCurrency()
    {
        return $this->sentCurrency;
    }

    /**
     * Set sentRate
     *
     * @param string $sentRate
     * @return Account
     */
    public function setSentRate($sentRate)
    {
        $this->sentRate = $sentRate;

        return $this;
    }

    /**
     * Get sentRate
     *
     * @return string 
     */
    public function getSentRate()
    {
        return $this->sentRate;
    }

    /**
     * Set totalTransferredMoney
     *
     * @param integer $totalTransferredMoney
     * @return Account
     */
    public function setTotalTransferredMoney($totalTransferredMoney)
    {
        $this->totalTransferredMoney = $totalTransferredMoney;

        return $this;
    }

    /**
     * Get totalTransferredMoney
     *
     * @return integer 
     */
    public function getTotalTransferredMoney()
    {
        return $this->totalTransferredMoney;
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
