<?php

namespace Teller\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Teller\AccountBundle\Entity\Account;
use Teller\AccountBundle\Entity\Currencydetail;
use Doctrine\Entity;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TellerAccountBundle:Default:index.html.twig');
    }

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

    public function currencyAction() {

        // Custom Query Done
        // Ref : http://stackoverflow.com/questions/12862389/symfony2-doctrine-create-custom-sql-query
        /* $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM account AS a JOIN USER AS u ON u.id = a.user_id");
        //$statement->bindValue('id', 123);
        $statement->execute();
        $results = $statement->fetchAll();

        print_r($results); die;
        */
        // Executed Successfully

        $repository = $this->getDoctrine()
            ->getRepository('TellerAccountBundle:Currencydetail');

        $query = $repository->createQueryBuilder('p')
            ->getQuery();

        $currencies = $query->getResult();

        $data = array(
            'currencies' => $currencies
        );

        print_r($currencies);
        die;

        return $this->render('TellerAccountBundle:Default:currency.html.twig', $data);
    }
}
