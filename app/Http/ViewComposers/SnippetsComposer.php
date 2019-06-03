<?php
namespace App\Http\ViewComposers;

use App\CmsPages;

class SnippetsComposer
{
    public function compose($view)
    {
        $view->with('snippets', CmsPages::getSnippets());
    }
}
