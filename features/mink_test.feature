# language: en
Feature: Test of MinkExtension
  In order to run behat with Mink
  As a sample project

  Scenario: Test with Mink
    When I do something with mink with "tomorrow"

  Scenario: index.php
    Given index is shown
    Given wait 2
    Then header text is correct

  Scenario: index.php?foo=bar
    Given get parameter is passed
    Then handled text is shown
