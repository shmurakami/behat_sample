<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;

class FeatureWithMinkContext extends MinkContext
{
    /**
     * @When I do something with mink with :arg
     */
    public function doSomething($arg)
    {
        echo "Do something with Mink with $arg";
    }

    /**
     * @Given index is shown
     */
    public function indexPageIsShown()
    {
        $this->visit("index.php");
    }

    /**
     * @Given /^wait (\d+)$/
     */
    public function wait($second)
    {
//        sleep($second);
    }

    /**
     * @Then header text is correct
     */
    public function headerIsShown()
    {
        $this->assertPageNotMatchesText('/foo = bar/');
        $this->assertPageMatchesText("/Behat Test/");
        $this->assertPageMatchesText("/sample/");
    }

    /**
     * @Given /^get parameter is passed$/
     */
    public function getParameterIsPassed()
    {
        $this->visit('index.php?foo=bar');
    }

    /**
     * @Then /^handled text is shown$/
     */
    public function handledTextIsShown()
    {
        $this->assertPageMatchesText("/Behat Test/");
        $this->assertPageMatchesText('/foo = bar/');
    }

}
