<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    /**
     * Asks and obtains $intStart and $howMany.
     *
     * @internal param string $intStart
     * @internal param string $howMany
     */
    public function init()
    {
        /**
         * @var string $project
         */
        $intStart = $this->ask("What number do you want to start with? [int]");
        $howMany = $this->ask("How many times do you want to run this curl? [int]");

        //Replaces items in Run.sh
        $this->taskReplaceInFile("./curlIt.php")
            ->from('x <= 0')
            ->to("x <= {$howMany}")
            ->run();

        //Replaces items in Run.sh
        $this->taskReplaceInFile("./curlIt.php")
            ->from('b = 0')
            ->to("b = {$intStart}")
            ->run();
    }

    /**
     * Runs curlIt.php
     */
    public function run()
    {
        $this->taskExec('php ./curlIt.php')
            ->printed(true)
            ->run();
    }

}