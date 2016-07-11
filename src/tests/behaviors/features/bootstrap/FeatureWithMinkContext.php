<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;

class FeatureWithMinkContext implements Context, SnippetAcceptingContext
{
    /**
     * @When I do something with mink with :arg
     */
    public function doSomething($arg)
    {
        echo "Do something with Mink with $arg";
    }

}
