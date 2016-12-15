<?php namespace RonnyVo\RandomQuote;

class RandomQuote {

    public function get($key) {
        return $quotes = trans('quote.quotes')[$key];
    }

    public function getRandom() {
        $quotes = trans('quote.quotes');
        return $quotes[array_rand($quotes)];
    }
    
}