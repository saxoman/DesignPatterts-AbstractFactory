<?php
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 9.2.19.
 * Time: 14.56
 */
namespace Sources\Interfaces;

interface Parser
{
    public function parse(string $input): array ;
}