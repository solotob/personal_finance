<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Categories::all();
        $transactions = Transaction::orderBy('created_at', 'DESC')->paginate('10');
        $tran = Transaction::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();//all();
        return view('home', ['categories' => $categories, 'transactions' => $transactions, 'tran' =>$tran]);
    }


}
