<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Header;
use App\Models\Footer;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;
use illuminate\DatabaseEloquent\Collection\paginate;

class NewsController extends Controller
{
    //

    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($slug)
    {
       
        $news = $this->repository->forSlug($slug);
        abort_unless($news, 404, 'news ');
      $category = $news->category_id ? Category::where('id', $news->category_id)->first() : null;



        // header_id and footer_id is 1 because of the seeder

        return view('pages.show_news', compact('news', 'category' ));
    }

    public function category($id)
{
    $header = Header::where('id', 1)->first(); 
    $footer = Footer::where('id', 1)->first();
    $category = Category::find($id);
    $news = $category->news;

    return view('pages.category', compact('category', 'news', 'header', 'footer'));
}
    
    // show all news
    public function showAllNews()
    {
        $news = News::all();
        // add pagination to news
        $news = News::paginate(4);

        $header = Header::where('id', 1)->first(); 
        $footer = Footer::where('id', 1)->first();
        //  if $category is selected show all news from that categrory
   
        return view('pages.news', compact('news', 'header', 'footer'));

    }

     


    



    
 


    
}
