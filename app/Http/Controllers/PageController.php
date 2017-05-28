<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Theme;
use App\Block;
use App\Post;

class PageController extends Controller
{

    public function showIndexTemplate()
    {
        $block = DB::table('blocks')->where('page','index')->get();
        $footer_1 = DB::table('blocks')->where('page', 'footer_1')->get();
        $footer_2 = DB::table('blocks')->where('page', 'footer_2')->get();
        $footer_3 = DB::table('blocks')->where('page', 'footer_3')->get();
        $footer_4 = DB::table('blocks')->where('page', 'footer_4')->get();

        $face = DB::table('options')->where('name', 'facebook')->get();
        $twit = DB::table('options')->where('name', 'twitter')->get();
        $link = DB::table('options')->where('name', 'linkedin')->get();
        $inst = DB::table('options')->where('name', 'instagram')->get();

        return Theme::view('index', compact('block', 'footer_1', 'footer_2', 'footer_3', 'footer_4', 'face', 'twit', 'link', 'inst'));
    }

    public function showAboutTemplate()
    {
      $block = DB::table('blocks')->where('page', 'about')->get();
      $footer_1 = DB::table('blocks')->where('page', 'footer_1')->get();
      $footer_2 = DB::table('blocks')->where('page', 'footer_2')->get();
      $footer_3 = DB::table('blocks')->where('page', 'footer_3')->get();
      $footer_4 = DB::table('blocks')->where('page', 'footer_4')->get();

      $face = DB::table('options')->where('name', 'facebook')->get();
      $twit = DB::table('options')->where('name', 'twitter')->get();
      $link = DB::table('options')->where('name', 'linkedin')->get();
      $inst = DB::table('options')->where('name', 'instagram')->get();

      return Theme::view('about', compact('block', 'footer_1', 'footer_2', 'footer_3', 'footer_4', 'face', 'twit', 'link', 'inst'));
    }

    public function showPromoTemplate()
    {
      $block = DB::table('blocks')->where('page', 'promo')->get();
      $footer_1 = DB::table('blocks')->where('page', 'footer_1')->get();
      $footer_2 = DB::table('blocks')->where('page', 'footer_2')->get();
      $footer_3 = DB::table('blocks')->where('page', 'footer_3')->get();
      $footer_4 = DB::table('blocks')->where('page', 'footer_4')->get();

      $face = DB::table('options')->where('name', 'facebook')->get();
      $twit = DB::table('options')->where('name', 'twitter')->get();
      $link = DB::table('options')->where('name', 'linkedin')->get();
      $inst = DB::table('options')->where('name', 'instagram')->get();

      return Theme::view('promo', compact('block', 'footer_1', 'footer_2', 'footer_3', 'footer_4', 'face', 'twit', 'link', 'inst'));

    }

    public function showBlogTemplate()
    {
      $footer_1 = DB::table('blocks')->where('page', 'footer_1')->get();
      $footer_2 = DB::table('blocks')->where('page', 'footer_2')->get();
      $footer_3 = DB::table('blocks')->where('page', 'footer_3')->get();
      $footer_4 = DB::table('blocks')->where('page', 'footer_4')->get();

      $face = DB::table('options')->where('name', 'facebook')->get();
      $twit = DB::table('options')->where('name', 'twitter')->get();
      $link = DB::table('options')->where('name', 'linkedin')->get();
      $inst = DB::table('options')->where('name', 'instagram')->get();

      $block = Post::paginate(10);

      return Theme::view('blog', compact('block', 'footer_1', 'footer_2', 'footer_3', 'footer_4', 'face', 'twit', 'link', 'inst'));

    }

    public function showContactTemplate()
    {
      $block = DB::table('blocks')->where('page', 'contact')->get();
      $footer_1 = DB::table('blocks')->where('page', 'footer_1')->get();
      $footer_2 = DB::table('blocks')->where('page', 'footer_2')->get();
      $footer_3 = DB::table('blocks')->where('page', 'footer_3')->get();
      $footer_4 = DB::table('blocks')->where('page', 'footer_4')->get();

      $face = DB::table('options')->where('name', 'facebook')->get();
      $twit = DB::table('options')->where('name', 'twitter')->get();
      $link = DB::table('options')->where('name', 'linkedin')->get();
      $inst = DB::table('options')->where('name', 'instagram')->get();

      return Theme::view('contact', compact('block', 'footer_1', 'footer_2', 'footer_3', 'footer_4', 'face', 'twit', 'link', 'inst'));

    }

}
