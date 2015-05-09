<?php

namespace Teller\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Teller\AccountBundle\Entity\Account;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('TellerAccountBundle:Default:index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addAction()
    {
        try {
            $account = new Account();

            $account->setReceivedMoney($_POST['amount']);
            $account->setReceivedCurrency($_POST['currency']);
            $account->setSentCurrency($_POST['send_currency']);
            $account->setSentRate($_POST['rate']);
            $account->setUserId(1);
            $total = $_POST['amount'] * $_POST['rate'];
            $account->setTotalTransferredMoney($total);

            $em = $this->getDoctrine()->getManager();
            $em->persist($account);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Money Has been Transferred Successfully!!');
            return $this->redirectToRoute('teller_account_homepage');

        } catch(Exception $e) {
            $this->get('session')->getFlashBag()->add('notice', 'Money Has Not Been Transferred!!');
            return $this->redirectToRoute('teller_account_homepage');

            //return new RedirectResponse($this->generateUrl('dashboard'));
        }
    }

    public function reportAction(){
        return $this->render('TellerAccountBundle:Default:report.html.twig');
    }

    public function currencyAction(){
        return $this->render('TellerAccountBundle:Default:currency.html.twig');
    }
}
