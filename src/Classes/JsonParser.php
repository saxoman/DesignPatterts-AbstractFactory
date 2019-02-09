<?php
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 9.2.19.
 * Time: 15.07
 */
namespace Sources\Classes;

use Sources\Interfaces\Parser;

class JsonParser implements Parser
{
    public function parse(string $input): array
    {
        return json_decode($input, true);
    }
}