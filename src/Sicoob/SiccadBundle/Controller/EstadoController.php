<?php

namespace Sicoob\SiccadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sicoob\SiccadBundle\Entity\Estado;

use FOS\RestBundle\View\View;

/**
 * Estado controller.
 */
class EstadoController extends Controller
{
	public function getEstadosAction()
	{
		$em         = $this->get('doctrine')->getEntityManager();
		$contacts   = $em->getRepository('SicoobSiccadBundle:Estado')->findAll();
		
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
