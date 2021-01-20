<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\WriteRequest;
use App\Mail\WriteMail;
use App\Models\Article;
use App\Models\Catalog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    /**
     * @param UserCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create_user(UserCreateRequest $request){
        $data=$request->validated();
        $data['password']=Hash::make($data['password']);
        User::create($data);
        return response()->redirectToRoute('home');
    }

    /**
     * @param LoginRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function login(LoginRequest $request){
        $data=$request->validated();
        if (Auth::attempt($data)){
            return response()->redirectToRoute('home');
        }else{
            return view('login',["error"=>"Неверный логин или пароль"]);
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function catalog_show(){
        return view('catalog',['catalog'=>Catalog::all()]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function article_show(){
        return view('article',['article'=>Article::all()]);
    }

    /**
     * @param WriteRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function write_message(WriteRequest $request){
        $data=$request->validated();
        Mail::to('alekseyt.ognevoy@mail.ru')->send(new WriteMail($data));
        return response()->redirectToRoute('home');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function main_page(){
        $user=Auth::user();
        if(isset($user)){
            return view('index',['user'=>true]);
        }else{
            return view('index',['user'=>false]);
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(){
        $user=Auth::user();
        if(isset($user)){
            Auth::logout();
        }
        return response()->redirectToRoute('home');
    }
}
