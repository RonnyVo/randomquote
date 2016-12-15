<?php namespace RonnyVo\RandomQuote;

class RandomQuote {

    protected $langKey = 'ronnyvo/randomquote::randomquote.quotes';

    public function get($key) {
        $quote = trans($this->langKey)[$key];
        return new RandomQuoteItem($quote);
    }

    public function getRandom() {
        $quotes = trans($this->langKey);
        $quote = $quotes[array_rand($quotes)];
        return new RandomQuoteItem($quote);
    }
    
}