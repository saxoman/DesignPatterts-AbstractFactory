<?php
namespace Sources\Test;

use PHPUnit\Framework\TestCase;
use Sources\Classes\CsvParser;
use Sources\Classes\JsonParser;
use Sources\ParserFactory;

/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 9.2.19.
 * Time: 15.12
 */

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateCsvParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createCsvParser(CsvParser::OPTION_CONTAINS_HEADER);

        $this->assertInstanceOf(CsvParser::class, $parser);
    }

    public function testCanCreateJsonParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createJsonParser();

        $this->assertInstanceOf(JsonParser::class, $parser);
    }
}