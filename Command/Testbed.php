<?php
namespace Forgeonline\Base\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\App\Filesystem\DirectoryList;

class Testbed extends AbstractCommand
{
    protected function configure()
    {
        $this->setName('sz:basetest');
        $this->setDescription('A CLI for stepzero.solutions testing commands');
        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
		$objectManager = $this->getObjectManager();
		$this->testTable($input, $output);
    }
	
	protected function testTable($input, $output){
		$objectManager = $this->getObjectManager();
		$this->pxpay = $objectManager->get('Forgeonline\Base\Model\Google\Calendar');
		$output->writeln( $this->pxpay->setCalandarConnection() );
	}

}