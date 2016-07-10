<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Testwork\Hook\Scope\AfterSuiteScope;
use Behat\Testwork\Hook\Scope\BeforeSuiteScope;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given set private value with :private
     */
    public function setPrivate($private)
    {
        $this->private = $private;
    }

    /**
     * @When I do something with :argument
     */
    public function doSomething($argument)
    {
        echo "called with $argument \n";
    }

    /**
     * @When add snippets
     */
    public function addSnippets()
    {
        echo "thourgh";
    }
}
