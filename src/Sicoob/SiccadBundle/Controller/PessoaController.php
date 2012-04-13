<?php

namespace Sicoob\SiccadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sicoob\SiccadBundle\Entity\Pessoa;

use FOS\RestBundle\View\View;

/**
 * Pessoa controller.
 */
class PessoaController extends Controller
{
	public function getPessoasAction()
	{
		$em         = $this->get('doctrine')->getEntityManager();
		$contacts   = $em->getRepository('SicoobSiccadBundle:Pessoa')->findAll();
		
		$data = array(
			'success' => true, 
			'data'	  => $contacts, 
			'message' => ''
		);
		
		$view = View::create()
			->setStatusCode(200)
			->setData($data);
		
		return $this->get('fos_rest.view_handler')->handle($view);
	}
}
