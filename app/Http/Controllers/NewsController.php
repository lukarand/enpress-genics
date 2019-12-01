<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Term;
use App\Models\TermRelationship;
use App\Models\Taxonomy;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->all();
        $per_page = get_option('posts_per_page', 6);
        $page = (int)$request->get('page', 1);

        if ($sticky = get_option('sticky_posts', [])) {
            $sticky = Post::find(current($sticky));
        }

        $posts = Post::type('post')
            ->published()
            ->where('id', '!=', $sticky ? $sticky->id : -1)
            ->filterBy('category', $request->category);

        $years = clone $posts;
        $years->select(\DB::raw('DISTINCT YEAR(post_date) AS `year`'))
              ->orderBy('year', 'desc');

        if ($request->year) {
            $posts->where('post_date', 'LIKE', "{$request->year}%");
        }

        if (strlen($request->q) > 2) {
            $posts->where('post_title', 'LIKE', "%{$request->q}%");
        }

        $total = ceil($posts->count() / $per_page);

        $posts->offset($per_page*($page-1))
              ->limit($per_page)
              ->orderBy('post_date', 'desc');

        $pager = create_pager($total, $page, $query);


        return view('news', compact('sticky', 'posts', 'categories', 'page', 'pager', 'total', 'query', 'years'));
    }

    public function post($slug)
    {
        $news = false;
        if (get_option('page_for_posts')) {
            $news = Post::find(get_option('page_for_posts'));
        }

        $post = Post::root($slug);

        if ($sticky = get_option('sticky_posts', [])) {
            $sticky = Post::find(current($sticky));
        }

        return view('post', [
            'image' => $post->featuredImage('large'),
            'date' => $post->date(),
            'title' => $post->title,
            'content' => $post->content(),
        ]);
    }
}


