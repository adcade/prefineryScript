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

        $api = $this->ask("What's the API Url? [string]");
        $intStart = $this->ask("What number do you want to start with? [int]");
        $howMany = $this->ask("How many times do you want to run this curl? [int]");


        //Replaces API
        $this->taskReplaceInFile("./curlIt.php")
            ->from('varapi')
            ->to($api)
            ->run();

        //Replaces START
        $this->taskReplaceInFile("./curlIt.php")
            ->from('b = 0')
            ->to("b = {$intStart}")
            ->run();

        //Replaces NUMBER OF TIMES
        $this->taskReplaceInFile("./curlIt.php")
            ->from('y = 0')
            ->to("y = {$howMany}")
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
