<?php
namespace Stepzerosolutions\Base\Command;

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
//		$this->pxpay = $objectManager->get('\Stepzerosolutions\Timeslotbooking\Model\ResourceModel\AvailabilityRepository');
//		$this->pxpay = $objectManager->get('Stepzerosolutions\Timeslotbooking\Model\Indexer\Bookings');
		$this->pxpay = $objectManager->get('Stepzerosolutions\Timeslotbooking\Model\Observer');
		/*
		\Stepzerosolutions\Timeslotbooking\Model\Session*/
		//$this->bookingsquoteModel = $objectManager->create('\Stepzerosolutions\Timeslotbooking\Model\Optionstimeslot');
		/*$this->bookingsquoteRepository = $objectManager->create('\Stepzerosolutions\Timeslotbooking\Api\BookingsquoteRepositoryInterface');
		$this->bookingsquoteDataFactory = $objectManager->create('\Stepzerosolutions\Timeslotbooking\Api\Data\BookingsquoteInterfaceFactory');
		$this->bookingsFactory = $objectManager->create('\Stepzerosolutions\Timeslotbooking\Api\Data\BookingsquoteInterfaceFactory');
		$this->optionTimeslotModel = $objectManager->create('\Stepzerosolutions\Timeslotbooking\Model\Optionstimeslot');
	
		$bookingquotedata = $this->bookingsquoteModel->getBookingsquoteByFilter( 1,1 );			
		if ( $bookingquotedata ) {
			$bookingQuote = $this->bookingsquoteRepository->getById( $bookingquotedata->getId() );
		} else {
			$bookingQuote = $this->bookingsquoteDataFactory->create();
		}

		//$date = "22-01-2016";
		//$obm->setPostDate($date) ;
//		$obm->load();
		//$sl = $obm->generateDaysSlots();
		//$dataa = $obm->getCollection()
		//->getBookingProductsitem(1)
		//->joinTimeslots();
		//$m = $obm->create()->addGroupOptionselection(2);
		
				
		$this->bookingsquoteModel->setBookingid( 6 );
		$this->bookingsquoteModel->setProductname( 'Product Name' );
		$this->bookingsquoteModel->setName("Nuwinda");
		$this->bookingsquoteModel->setParticipanttype( "adult" );
		$this->bookingsquoteModel->setDescription( "cepa" );*/
		$output->writeln( "A" );
//		$output->writeln( $this->pxpay->executeFull() );
	}

}