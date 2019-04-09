<?php 
class Cms5cab66e775bf2410720525_4ed3c4e97ae14fa879db76f454433168Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
