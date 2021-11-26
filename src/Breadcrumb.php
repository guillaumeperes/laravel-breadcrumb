<?php

namespace GuillaumePeres\Breadcrumb;

class Breadcrumb
{
    protected $breadcrumb = array();

    public function add(string $url, string $title)
    {
        $item = new StdClass();
        $item->url = $url;
        $item->title = $title;

        $this->breadcrumb[] = $item;
    }

    public function has()
    {
        return !empty($this->breadcrumb);
    }

    public function get()
    {

    }
}
