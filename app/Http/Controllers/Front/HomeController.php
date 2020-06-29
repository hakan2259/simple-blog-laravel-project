<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Prophecy\Argument\Token\CallbackToken;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    public function __construct()
    {
        view()->share("categories", Category::orderBy("order_id", "asc")->get());
        view()->share("mostread", Post::orderBy("hit", "desc")->limit(4)->get());
        view()->share("onecikan", Post::orderBy("hit", "desc")->skip(4)->take(2)->get());
        view()->share("recentposts", Post::orderBy("id", "desc")->limit(4)->get());


    }

    public function index()
    {

        $data["manset"] = Post::orderBy("id", "desc")->limit(2)->get();
        $data["posts"] = Post::orderBy("id", "desc")->skip(2)->paginate(8);
        return view("frontend.home", $data);
    }

    public function blog($category, $slug)
    {

        $category = Category::whereSlug($category)->first() ?? abort(403, "Böyle bir sayfa bulunamadi!");
        $post = Post::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403, "Böyle bir sayfa bulunamadi!");
        $data['post'] = $post;
        $post->increment('hit');
        return view('frontend.blog-post', $data);


    }

    public function category($slug)
    {

        $category = Category::whereSlug($slug)->first() ?? abort(403, "Böyle bir sayfa bulunamadi!");
        $data["category"] = $category;
        $data["post"] = Post::where("category_id", $category->id)->orderBy("created_at", "desc")->paginate(8);

        return view('frontend.category', $data);
    }

    public function about()
    {

        return view('frontend.otherPage.about');
    }

    public function carton()
    {
        return view('frontend.otherPage.cartoon');
    }

    public function contact()
    {
        return view('frontend.otherPage.contact');
    }

    public function contactpost(Request $request)
    {
       $rules = [
           "name" => 'min:3',
           "message" => 'min:10'
       ];

       $validatedData = Validator::make($request->post(),$rules);
       if($validatedData->fails()){
           return redirect()->route('contact')->withErrors($validatedData)->withInput();
       }

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route("contact")->with("success","Mesajınız Başarılı Bir Şekilde İletildi. İyi Günler Dileriz.");


    }

    public function archive()
    {
        return view('frontend.otherPage.archive');
    }


}
