<?php
namespace App\Http\Controllers;
use App\BlogPosts;
use App\Category;
use App\CmsPages;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Mail\Markdown;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\MarkdownConverter;
use League\HTMLToMarkdown\HtmlConverter;
/**
 * Class AdminController
 *
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adminPanel', ['beitraege' => BlogPosts::where('trashed', null)->count(), 'seiten' => CmsPages::count()]);
    }
    /**
     * Get a list of blogentries
     *
     * @return void
     */
    public function list(Request $request)
    {
        $wip = $request->input('dev');
        $posts = BlogPosts::overview($wip);
        return view('admin.adminListBlogs', ['collection' => $posts]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminEditor');
    }

    /**
     * @param $request
     * @param $contents
     */
    public function handleTags($request, $contents)
    {
        if ($request->tags) {
            $array = false;
            if (!strstr($request->tags, ',')) {
                $request->tags . ',';
            }
            $vals = explode(',', $request->tags);
            foreach ($vals as $val) {
                $test = trim($val);
                if (!empty($test)) {
                    $test = strtolower($test);
                    $tags = Tags::firstOrCreate(['tag' => $test]);
                    $array[] = $tags->id;
                }
            }
            if ($array) {
                $contents->tags()->sync($array);
            }
        }
    }
    /**
     * @param $request
     * @param $contents
     */
    public function handleCategories($request, $contents)
    {
        if ($request->kategorie) {
            $array = false;
            if (!strstr($request->kategorie, ',')) {
                $request->kategorie . ',';
            }
            $vals = explode(',', $request->kategorie);
            foreach ($vals as $val) {
                $test = trim($val);
                if (!empty($test)) {
                    $tags = Category::firstOrCreate(['name' => $test]);
                    $array[] = $tags->id;
                }
            }
            if ($array) {
                $contents->categories()->sync($array);
            }
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contents = BlogPosts::findOrFail($id);
        if($contents->contentsmd == null) {
            $tmp = new HtmlConverter(['header_style'=>'atx']);
            $markdown = $tmp->convert($contents->contents);
            $contents->contentsmd = $markdown;
            $contents->save();
        }
        $html = new CommonMarkConverter();
        $contents->parsed = $html->convertToHtml($contents->contentsmd);        
        return view('admin.adminEditor', ['contents' => $contents]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contents = BlogPosts::findOrFail($id);
        $contents->title = $request->title;        
        $contents->contentsmd = $request->contents;
        $contents->mainImage = $request->mainImage;
        $contents->description = $request->description;
        $this->handleTags($request, $contents);
        $this->handleCategories($request, $contents);
        $contents->touch();
        $contents->save();
        return redirect('admin/edit/' . $id)->with('status', 'Changes saved!');
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function cache()
    {
        \Artisan::call('cache:clear');
        return redirect('admin')->with('status', 'Cache Cleared');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entry = BlogPosts::findOrFail($id);
        $entry->trashed = 1;
        $entry->save();
        return redirect('admin/blogs')->with('status', 'Dropped Entry');
    }
    /**
     * Change visibility of Post
     *
     * @param  [type] $id
     * @return void
     */
    public function status($id)
    {
        $entry = BlogPosts::findOrFail($id);
        $vis = $entry->visible == 1 ? 0 : 1;
        $entry->visible = $vis;
        $entry->touch();
        $entry->save();
        return redirect('admin/blogs')->with('status', 'Changed Visibility');
    }
}
