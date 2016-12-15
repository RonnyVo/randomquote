<?php namespace RonnyVo\RandomQuote;

class RandomQuote {

    public function get($key) {
        return $quotes = trans('randomquote.quotes')[$key];
    }

    public function getRandom() {
        $quotes = trans('randomquote.quotes');
        return $quotes[array_rand($quotes)];
    }
    
}