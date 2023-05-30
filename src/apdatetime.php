<?php

if(!function_exists('apdatetime')) {
    /**
     * @param $string
     * @return mixed
     */
    function apdatetime($string)
    {
        $monthSearch = [
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
            '/\bDec\b/'
        ];

        $monthReplace = [
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
            'Dec.'
        ];

        $string = preg_replace($monthSearch, $monthReplace, $string);

        $meridiemSearch = [
            '/\bAM\b/',
            '/\bPM\b/',
            '/\bam\b/',
            '/\bpm\b/',
        ];

        $meridiemReplace = [
            'a.m.',
            'p.m.',
            'a.m.',
            'p.m.'
        ];

        $string = preg_replace($meridiemSearch, $meridiemReplace, $string);

        $otherSearch = [
            '/\b:00 (a\.m\.|p\.m\.)/',
            '/\b12 (p\.m\.)/',
        ];

        $otherReplace = [
            ' $1',
            'noon',
        ];

        return preg_replace($otherSearch, $otherReplace, $string);
    }
}