<?php


namespace meftunh\Press\Tests;


class InitialTest
{
    public function parsedown_test()
    {
//        $this->assertTrue(true);
    $this->assertEquals('<h1>Heading</h1>', (new \League\CommonMark\Parser\MarkdownParser)->parse('# Heading'));




    }
}