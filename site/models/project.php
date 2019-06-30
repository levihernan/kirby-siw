<?php 

// site/models/event.php

class ProjectPage extends Page
{
    public function serialize()
    {
        return [
            'uid'     => $this->uid(),
            'url'     => $this->url(),
            'title'   => $this->title()->html()->toString(),
            'location'   => $this->location()->html()->toString(),
            'intro'    => $this->intro()->kirbytext()->value,
            'text'    => $this->text()->kirbytext()->value,
            'tags' => $this->tags()->value,
        ];
    }
    public function tagsComma()
    {
        return (string) implode(', ', $this->tags());
    }
}