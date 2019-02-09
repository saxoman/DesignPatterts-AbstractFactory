<?php
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 9.2.19.
 * Time: 15.09
 */
namespace Sources;
use Sources\Classes\CsvParser;
use Sources\Classes\JsonParser;

/**
 * Class ParserFactory
 * @package Sources
 */
class ParserFactory
{

    public function createCsvParser(bool $skipHeaderLine): CsvParser
    {
        return new CsvParser($skipHeaderLine);
    }

    public function createJsonParser(): JsonParser
    {
        return new JsonParser();
    }
}