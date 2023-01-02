<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\Page;

use setsMetadata;


class PageController extends Controller
{
 
    public function index()
    {
        $page = Homepage::firstOrFail();
        $data = []; // Sets the data from tabel homepages in a string $page
        $data['page'] = $page; // Get the data of $page
        return view('pages.welcome', $data); // Redirects $data to resources/views/website/pages.blade.php

    }

    public function show($slug) {
        $page = Page::forSlug($slug)->first();
        $this->setMetadata($page);
        return view('site.pages.page', ['page' => $page ]);
    }
}
