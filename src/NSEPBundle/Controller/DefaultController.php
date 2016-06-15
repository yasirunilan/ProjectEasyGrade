<?php

namespace NSEPBundle\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use NSEPBundle\Entity\Submission;
use NSEPBundle\Entity\User;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Histogram;

class DefaultController extends Controller
{
    /**
     * This routes different users to different places in when login
     * @Route("/" , name="user_homepage")
     */
    public function indexAction()
    {
        $uname=$this->getUser()->getUsername();

        if($uname == 'adminuser'){
            //$rolelll=5;
            return $this->redirectToRoute('user_index');
        }
        else{
            //$rolelll=6;
            return $this->redirectToRoute('user_courses');
        }



        //return $this->render('NSEPBundle:Default:index.html.twig');
    }


    /**
     * Get user username
     * @return string $username
     */
    public function usernameAction()
    {
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $username = $user->getUsername();
        }
        return new Response($username);
    }


    /**
     * This generates graphs
     * @Route("/graph")
     */
    public function graphAction()
    {
        $histogram = new Histogram();
        $histogram->getData()->setArrayToDataTable([
            ['Population'],
            [12000000],
            [13000000],
            [100000000],
            [1000000000],
            [25000000],
            [600000],
            [6000000],
            [65000000],
            [210000000],
            [80000000],
        ]);
        $histogram->getOptions()->setTitle('Country Populations');
        $histogram->getOptions()->setWidth(900);
        $histogram->getOptions()->setHeight(500);
        $histogram->getOptions()->getLegend()->setPosition('none');
        $histogram->getOptions()->setColors(['#e7711c']);
        $histogram->getOptions()->getHistogram()->setLastBucketPercentile(10);
        $histogram->getOptions()->getHistogram()->setBucketSize(10000000);

        return $this->render('NSEPBundle:Default:index.html.twig', array('histogram' => $histogram));
    }

    /**
     * This generates graphs
     * @Route("/inlinegraph")
     */
    public function inlinegraphAction()
    {


        return $this->render('NSEPBundle:Default:graph.html.twig');
    }




}
