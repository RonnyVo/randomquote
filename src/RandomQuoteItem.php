<?php namespace RonnyVo\RandomQuote;

class RandomQuoteItem {

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function render($attributes) {

        $data = $this->data;

        $dataAuthor = $data[0];
        $dataContent = $data[1];

        $defaultAttributes = array(
            'wrapper_el' => 'span',
            'content_el' => 'p',
            'content_class' => array(),
            'author_el' => 'h1',
            'author_class' => array()
        );

        $attributes = array_merge($defaultAttributes, $attributes);

        $renderedHtml = null;

        $renderedHtml .= sprintf('<%w>',$attributes['wrapper_el']);

        $contentClass = '';
        if (!empty($attributes['content_class'])) {
            $contentClass = sprintf('class="%c"',implode(' ', $attributes['content_class']));
        }
        $renderedHtml .= sprintf('<%e %c>%d</%e>',$attributes['content_el'], $contentClass, $dataContent);

        $authorClass = '';
        if (!empty($attributes['author_class'])) {
            $authorClass = sprintf('class="%c"',implode(' ', $attributes['author_class']));
        }
        $renderedHtml .= sprintf('<%e %c>%d</%e>',$attributes['author_el'], $authorClass, $dataAuthor);

        $renderedHtml .= sprintf('</%w>',$attributes['wrapper_el']);

        return $renderedHtml;
    }
    
}