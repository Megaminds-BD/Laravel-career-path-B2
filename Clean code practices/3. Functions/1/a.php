<?php

class Article
{
    public $status;

    public function isNotPublished(): bool
    {
        return $this->status === 'Draft';
    }
}

$article = new Article();

if ($article->isNotPublished()) {
    // Do something
}

if (!$article->isNotPublished()) {
    // Do something
}
