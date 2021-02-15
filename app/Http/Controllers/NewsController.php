<?php

namespace App\Http\Controllers;

use App\Services\FakeNewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index(FakeNewsService $service)
	{
		return view('news.index', [
			'listNews' => $service->getNews()
		]);
	}
	public function show(FakeNewsService $service, int $id)
	{
		$allNews = $service->getNews();
		$news =  $allNews[$id] ?? "Not found";
        return view('news.show', [
        	'news' => $news
		]);
	}
}
