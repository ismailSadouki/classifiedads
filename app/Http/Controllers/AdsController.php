<?php

namespace App\Http\Controllers;

use App\Repositories\ {
    Ads\AdsInterface,
    Favorites\FavoriteInterface,
};
use Illuminate\Http\Request;
use App\Http\Requests\AdRequest;

class AdsController extends Controller
{
    protected $ads;

    protected $favorite;


    public function __construct(AdsInterface $ads, FavoriteInterface $favorite)
    {
        $this->middleware('auth',['only'=>['create','store','edit']]);

        $this->ads=$ads;

        $this->favorite=$favorite;
    }

    public function all()
    {
        $ads=$this->ads->all();
    }

    public function edit($id)
    {
        $ad=$this->ads->getById($id);
        
        if(\Gate::allows('edit-ad',$ad)){
            return view('ads.edit', compact('ad'));
        }

        abort(403);
    }

    public function update(Request $request, $id)
    {
        $this->ads->update($request,$id);

        return back()->with('success','تم التعديل بنجاح');
    }

    public function create()
    {
        return view('ads.create');
    }

    public function store(AdRequest $request)
    {
        $this->ads->store($request);
        return back()->with('success','تم إضافة الإعلان ');
    }

    public function destroy($id)
    {
        $this->ads->delete($id);

        return back()->with('success', 'تم حذف الإعلان');
    }

    public function getUserAds()
    {
        $ads=$this->ads->getByUser();

        return view('ads.userAds',['userAds' => $ads]);
    }

    public function getByCategory($id)
    {
        $ads=$this->ads->getByCategory($id);

        return view('ads.adsByCategory', compact('ads'));
    }

    public function show($id) {
        $ad=$this->ads->getDetails($id);

        
            if(\Auth::check()){
                $favorited=$this->favorite->show($id);
                return view('ads.show', compact('ad'),compact('favorited')); 
            }elseif(\Auth::guest()){
                return view('ads.show', compact('ad'));
            }
    }

    public function search(Request $request){
        $ads=$this->ads->search($request);

        return view('ads.search',compact('ads')); 
    }

    public function getCommonAds()
    {
        $ads=$this->ads->getCommonAds();

        return view('index',compact('ads'));
    }
    
}
