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
    public function listAction(Request $request)
{
        $agents = $this->getDoctrine()
                ->getRepository('AppBundle:UserDetailsAgent')
                ->getAgents($this->getUser());

        return $this->render('agent/list.html.twig', [
                    'agents' => $agents
        ]);
    }

}
