<?php

if(!function_exists('apdatetime')){
    function apdatetime($string)
    {
        $search = [
            '/\bJan\b/',
            '/\bFeb\b/',
            '/\bMar\b/',
            '/\bApr\b/',
            '/\bMay\b/',
            '/\bJun\b/',
            '/\bJul\b/',
            '/\bAug\b/',
            '/\bSep\b/',
            '/\bOct\b/',
            '/\bNov\b/',
            '/\bDec\b/',
            '/\bAM\b/',
            '/\bPM\b/',
            '/\bam\b/',
            '/\bpm\b/',
        ];

        $replace = [
            'Jan.',
            'Feb.',
            'March',
            'April',
            'May',
            'June',
            'July',
            'Aug.',
            'Sept.',
            'Oct.',
            'Nov.',
            'Dec.',
            'a.m.',
            'p.m.',
            'a.m.',
            'p.m.',
        ];

        $string = preg_replace($search, $replace, $string);

        return $string;
    }
}