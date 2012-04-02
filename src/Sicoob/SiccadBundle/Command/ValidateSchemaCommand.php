<?php
/**
 * @see http://www.mon-code.net/article/26/ajouter-les-lignes-de-commande-doctrine2-symfony2
 */
namespace Sicoob\SiccadBundle\Command;
 
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\DoctrineBundle\Command\Proxy\DoctrineCommandHelper;
use Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand as ValidateSchemaCommandBase;
 
class ValidateSchemaCommand extends ValidateSchemaCommandBase
{
 
	/**
	 * (non-PHPdoc)
	 * @see Tools/Console/Command/Doctrine\ORM\Tools\Console\Command.ValidateSchemaCommand::configure()
	 * 
	 * Modifie le Nom de la commande pour quelle soit dans le namespace Doctrine
	 * Ajoute le Helper em pour l'entity manager qui n'est pas définis dans la class Doctrine
	 * @author ulrich, 09/09/11
	 */
	protected function configure()
	{
		parent::configure();
		$this->setName('doctrine:orm:validate-schema');
		$this->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command');
	}
 
	/**
	 * (non-PHPdoc)
	 * @see Tools/Console/Command/Doctrine\ORM\Tools\Console\Command.ValidateSchemaCommand::execute()
	 * 
	 * Ajoute le Helper em pour l'entity manager qui n'est pas définis dans la class Doctrine
	 * @author ulrich, 09/09/11
	 */
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		DoctrineCommandHelper::setApplicationEntityManager($this->getApplication(), $input->getOption('em'));
 
        return parent::execute($input, $output);
	}
	
	public static function getParent()
	{
		
	}
}