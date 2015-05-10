<?php

namespace Teller\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

/**
 * Account
 */
class Account extends EntityRepository
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $receivedMoney;

    /**
     * @var integer
     */
    private $receivedCurrency;

    /**
     * @var string
     */
    private $sentCurrency;

    /**
     * @var string
     */
    private $sentRate;

    /**
     * @var integer
     */
    private $totalTransferredMoney;

    /**
     * @var integer
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

    public function findAllOrderedByName()
    {
        die;
        print_r($this->getEntityManager()
            ->createQuery(
                'SELECT p FROM TellerAccountBundle:Account p ORDER BY p.id ASC'
            )
            ->getResult()); die;
    }
}
