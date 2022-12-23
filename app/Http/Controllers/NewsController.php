<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Header;
use App\Models\Footer;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

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

        // header_id and footer_id is 1 because of the seeder

        return view('pages.show_news', compact('news'));
    }

    // show all news
    public function showAllNews()
    {
        $news = News::all();
        $header = Header::where('id', 1)->first(); 
        $footer = Footer::where('id', 1)->first();
        //  if $category is selected show all news from that categrory
        


        


        return view('pages.news', compact('news', 'header', 'footer'));

    }

     


    



    
 


    
}
