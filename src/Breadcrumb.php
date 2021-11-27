<?php

namespace GuillaumePeres\Breadcrumb;

class Breadcrumb
{
    protected $enabled = false;
    protected $breadcrumb = array();

    public function add(string $url, string $title)
    {
        $this->enable(true);
        $this->breadcrumb[$url] = $title;
    }

    public function enable(bool $enabled = true)
    {
        $this->enabled = true;
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

    public function has()
    {
        return !empty($this->breadcrumb);
    }

    public function get()
    {
        return $this->breadcrumb;
    }
}
