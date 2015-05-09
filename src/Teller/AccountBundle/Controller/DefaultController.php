<?php

namespace Teller\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Teller\AccountBundle\Entity\Account;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TellerAccountBundle:Default:index.html.twig');
    }

    public function addAction()
    {
        $account = new Account();

        $account->setReceivedMoney(12345);
        $account->setReceivedCurrency('Nrs');
        $account->setSentCurrency('DHS');
        $account->setSentRate(27.2);
        $account->setUserId(1);

        $total = 1 * 27.2;

        $account->setTotalTransferredMoney($total);


        $em = $this->getDoctrine()->getManager();
        $em->persist($account);
        $em->flush();

//        return new Response(
//            'Created Account id: '.$account->getId()
//        );

        echo 'here';
        die;
        //return $this->render('TellerAccountBundle:Default:index.html.twig');
    }
}
