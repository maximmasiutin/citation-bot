<?php

/*
 * Current tests that are failing.
 */

// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase') &&
    class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', 'PHPUnit\Framework\TestCase');
}
$SLOW_MODE = TRUE;
 

class WikipediaBotTest extends PHPUnit\Framework\TestCase {

  protected function setUp() {
    global $api;
    $api = new WikipediaBot();
  }

  protected function tearDown() {
    global $api;
    unset($api);
  }
  
  public function testReadExpandWrite() {
    $page = new TestPage();
    $page->get_text_from('User:Blocked Testing Account/readtest');
    $this->assertEquals('This page tests bots', $page->parsed_text());
    
    $page = new TestPage();
    $writeTestPage = 'User:Blocked Testing Account/writetest';
    $page->get_text_from($writeTestPage);
    $trialCitation = '{{Cite journal | title Bot Testing | ' .
      'doi_broken_date=1986-01-01 | doi = 10.1038/nature09068}}';
    $page->overwrite_text($trialCitation);
    $this->assertFalse(@$page->write("Testing bot write function")); // False because Travis IPs are blocked from editing
    
    $page->get_text_from($writeTestPage);
    $this->assertEquals($trialCitation, $page->parsed_text());
    $page->expand_text();
    $this->assertTrue(strpos($page->edit_summary(), 'journal, ') > 3);
    $this->assertTrue(strpos($page->edit_summary(), ' Removed ') > 3);
    $page->write();
    
    $page->get_text_from($writeTestPage);
    print $page->parsed_text();
    $this->assertTrue(strpos($page->parsed_text(), 'Nature') > 5);
  }
  
}

