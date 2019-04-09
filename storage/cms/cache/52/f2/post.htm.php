<?php 
class Cms5cab6a88e309d451578829_d9330d4fa8e26aeb1775f2a7d6b2c4d1Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
