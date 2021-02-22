<?php
namespace App\Http\ViewComposers;

use App\CmsPages;

class SnippetsComposer
{
    public function compose($view)
    {
        $view->with('snippets', CmsPages::getSnippets());
        $view->with('MAINMENU', CmsPages::getMainMenu());
        $view->with('BLOGREPEAT', CmsPages::getBlogRepeat());
    }
}
