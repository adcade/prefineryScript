<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    /**
     * Asks and obtains $project, $feature, and $shortName. Copies over required scripts, makes directories and touches files
     *
     * @internal param string $project
     * @internal param string $feature
     * @internal param string $robo
     */
    public function curl()
    {
        /**
         * @var string $project
         */
        $howMany = $this->ask("How many times do you want to run this curl? [int]");

        //Replaces items in Run.sh
        $this->taskReplaceInFile("./Run.sh")
            ->from('for ((n=0;n<1;n++))')
            ->to("for ((n=0;n<{$howMany};n++))")
            ->run();
    }

    public function run()
    {
        $a = 0;
        $b = $a++;

        $this->taskExec("curl -H \"Accept: application/json\" -H \"Content-type: application/json\" -X POST -d ' {\"tester\":{\"email\":\"justin+{$b}@prefinery.com\",\"status\":\"applied\",\"profile\":{\"first_name\": \"Justin\", \"last_name\": \"Britten\"},\"responses\":{\"response\":[{\"question_id\":\"23874\", \"answer\":\"a text response\"},{\"question_id\":\"23871\", \"answer\":\"1\"},{\"question_id\":\"23872\", \"answer\":\"0,2\"},{\"question_id\":\"23873\", \"answer\":\"9\"}]}}}' https://account.prefinery.com/api/v2/betas/1/testers.json?api_key=secret")
            ->run();
    }
}