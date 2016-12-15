<?php namespace RonnyVo\RandomQuote;

class RandomQuote {

    protected $langKey = 'ronnyvo/randomquote::randomquote.quotes';

    public function get($key) {
        return $quotes = trans($this->langKey)[$key];
    }

    public function getRandom() {
        $quotes = trans($this->langKey);
        return $quotes[array_rand($quotes)];
    }
    
}