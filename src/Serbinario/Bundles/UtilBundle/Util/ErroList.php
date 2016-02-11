<?php
namespace Serbinario\Bundles\UtilBundle\Util;


class ErroList extends \SplEnum
{
    const __default = 1;
    const NO_RESULT = 2;
    const EXCEPTION = 3;
    const FATAL_ERROR = 4;
    const UNIQUE_EXCEPTION = 5;
    const NOT_NULL_EXCEPTION = 6;
    const REQUEST_INVALID = 7;
    const PARAMETER_INVALID = 8;
}