<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Class AgentController
 */
class AgentController extends Controller {

    /**
     * @Route("/agent/list", name="agent_list")
     * @Security("has_role('ROLE_MANAGER')")
     */
    public function listAction(Request $request) {
        $agents = $this->getDoctrine()
                ->getRepository('AppBundle:UserDetailsAgent')
                ->getAgents($this->getUser(), true);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $agents, $request->query->getInt('page', 1)/* page number */, 10/* limit per page */
        );

        return $this->render('agent/list.html.twig', [
                    'agents' => $pagination
        ]);
    }

}
