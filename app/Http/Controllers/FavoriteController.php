<?php

namespace App\Http\Controllers;

use App\Repositories\Favorites\FavoriteRepository;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    protected $favorite;
    public function __construct(FavoriteRepository $favorite)
    {
        $this->middleware('auth'); // هذا من أجل حماية الدوال بحيث لا يُمكن الوصول لها إلا في حالة مُستخدم مسجل

        $this->favorite=$favorite;
    }
    
    public function index()
    {
        $userfav=$this->favorite->all();

        return view('ads.userfavorites',compact('userfav'));
    }
    public function store(Request $request)
    {
        $this->favorite->store($request);
        
        
    }
    public function destroy($id)
    {
        $this->favorite->delete($id);
    }
}
