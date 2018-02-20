<?php
namespace NCbrtBundle\Command;
/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

/**
 * Description of ReportHistoryCommand
 *
 * @author cncuser
 */
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class ReportHistoryCommand extends Command {
    protected function configure()
    {
    $this
        ->addArgument('servername', InputArgument::REQUIRED, 
                'The servername to determine backup schedule')
        // the name of the command (the part after "bin/console")
        ->setName('backup:history')

        // the short description shown while running "php bin/console list"
        ->setDescription('Analizes the backup history and generates a time patern.')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('Analizes the backup history and generates a time patern.');        
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Getting schedule',
            '============',
            '',
        ]);
        $serverName = $input->getArgument('servername');
        $output->writeln('Server name: '. $serverName);
        if ($serverName == 'all' || $serverName == 'ALL' || $serverName == All){
            
        } elseif (is_string ($serverName)) {
            
        } else {
            $output->writeln('This is NOT a correct server name format');
        }
    }
    private function getAllServerInProduction(){
//        $em = $this->getD
    }
}
