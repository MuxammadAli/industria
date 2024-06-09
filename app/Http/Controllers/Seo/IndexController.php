<?php

namespace App\Http\Controllers\Seo;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Post;
use App\Models\Settings;

class IndexController extends Controller
{
    public function defaultPage()
    {
        $title = '';
        $seoTitle = Settings::where('slug', 'meta_title')->first();
        if ($seoTitle instanceof Settings) {
            $title = $seoTitle->value;
        }
        return view('default', compact('title'));
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $title = $page->title;
        $description = $page->description;
        $main_image = @$page->mainImage->thumbnails['low']['src'];
        $publish_time = $page->created_at->format('Y-m-d H:i:s');
        $main_url = route('page', ['slug'=>$slug]);
        $content = $page->content;

        if (empty($title)) {
            $seoTitle = Settings::where('alias', 'meta_title')->first();
            if ($seoTitle instanceof Settings) {
                $title = $seoTitle->value;
            }
        }

        if (empty($description)) {
            $seoDescription = Settings::where('alias', 'meta_description')->first();
            if ($seoDescription instanceof Settings) {
                $description = $seoDescription->value;
            }
        }

        return view('insta-view', compact('title', 'description','main_image','main_url','publish_time', 'content'));
    }
    
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $title = $post->title;
        $description = $post->description;
        $main_image = @$post->mainImage->thumbnails['low']['src'];
        $publish_time = $post->created_at->format('Y-m-d H:i:s');
        $main_url = route('post', ['slug'=>$slug]);
        $content = $post->content;

        if (empty($title)) {
            $seoTitle = Settings::where('alias', 'meta_title')->first();
            if ($seoTitle instanceof Settings) {
                $title = $seoTitle->value;
            }
        }

        if (empty($description)) {
            $seoDescription = Settings::where('alias', 'meta_description')->first();
            if ($seoDescription instanceof Settings) {
                $description = $seoDescription->value;
            }
        }

        return view('insta-view', compact('title', 'description','main_image','main_url','publish_time', 'content'));
    }
}
