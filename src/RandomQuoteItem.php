<?php namespace RonnyVo\RandomQuote;

class RandomQuoteItem {

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function render($attributes = array()) {

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

        $renderedHtml .= sprintf('<%s>',$attributes['wrapper_el']);

        $contentClass = '';
        if (!empty($attributes['content_class'])) {
            $contentClass = sprintf('class="%s"',implode(' ', $attributes['content_class']));
        }
        $renderedHtml .= sprintf('<%s %s>%s</%s>',$attributes['content_el'], $contentClass, $dataContent, $attributes['content_el']);

        $authorClass = '';
        if (!empty($attributes['author_class'])) {
            $authorClass = sprintf('class="%s"',implode(' ', $attributes['author_class']));
        }
        $renderedHtml .= sprintf('<%s %s>%s</%s>',$attributes['author_el'], $authorClass, $dataAuthor, $attributes['author_el']);

        $renderedHtml .= sprintf('</%s>',$attributes['wrapper_el']);

        return $renderedHtml;
    }
    
}