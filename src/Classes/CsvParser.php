<?php
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 9.2.19.
 * Time: 14.58
 */
namespace Sources\Classes;

use Sources\Interfaces\Parser;

class CsvParser implements Parser
{
    const OPTION_CONTAINS_HEADER=true;
    const OPTION_CONTAINS_NO_HEADER = false;
    private $skipHeaderLine;

    public function parse(string $input): array
    {
        $headerWasParsed = false;
        $parsedLines = [];
        foreach (explode(PHP_EOL, $input) as $line){
            if (!$headerWasParsed && $this->skipHeaderLine === self::OPTION_CONTAINS_HEADER) {
                continue;
            }
            $parsedLines[] = str_getcsv($line);
        }
        return $parsedLines;
    }
}