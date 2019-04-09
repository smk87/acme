<?php 
class Cms5cac4f81e2d68271302525_b17c95d1a2cdc1611ba1a83d3d4db7eaClass extends Cms\Classes\PageCode
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
