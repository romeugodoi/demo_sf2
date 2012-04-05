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
		
		$view = View::create();
		$handler = $this->get('fos_rest.view_handler');
		
		if ('html' === $this->getRequest()->getRequestFormat())
			$view->setData(array('contacts' => $contacts));
		else
			$view->setData($contacts);
		
		//$view->setTemplate('ConnectContactBundle:Contact:getContacts.html.twig');
		
		return $view;
	}
}
