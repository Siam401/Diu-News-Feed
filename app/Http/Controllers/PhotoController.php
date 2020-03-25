<?php

namespace App\Http\Controllers;

use App\Sli;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\CssSelector\CssSelectorConverter;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $url= 'https://www.pinterest.com/search/pins/?q=cat&rs=typed&term_meta[]=cat%7Ctyped';
        $url = 'https://bikroy.com/bn/ads/bangladesh/mobile-phones?categoryType=ads';
        $client = new \GuzzleHttp\Client();
       // $res = $client->request('GET', $url);
        $res = $client->get('https://en.prothomalo.com/international');
        $crawler = new Crawler($res->getBody()->getContents());

        $current = $crawler->filter('.wrapper')->filter('.inner')->filter('.each_news')->each(function (Crawler $node, $i) {
            return $node;
        });
       // dd($current);
        foreach ($current as $new) {
            $title = $new->filter('.title')->text();
            $author = $new->filter('.author')->text();
            $content = $new->filter('.content_right')->text();
            $image = $new->filter('img')->attr('srcset');

//            $category = new Category();
//            $category->title = $title;
//            $category->save();
        }
       // dd($current);
        exit;
        //dd($current);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sli  $sli
     * @return \Illuminate\Http\Response
     */
    public function show(Sli $sli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sli  $sli
     * @return \Illuminate\Http\Response
     */
    public function edit(Sli $sli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sli  $sli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sli $sli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sli  $sli
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sli $sli)
    {
        //
    }
}
