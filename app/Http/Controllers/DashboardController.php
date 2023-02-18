<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{

		$income = Transaction::where('transaction_status', 'SUCCESS')->sum('transaction_total');
		$count = Transaction::count();
		$items = Transaction::orderBy('id', 'DESC')->take(5)->get();

		$pie = [

			"PENDING" => Transaction::where('transaction_status', "PENDING"),
			"SUCCESS" => Transaction::where('transaction_status', "SUCCESS"),
			"FAILED"  => Transaction::where('transaction_status', "FAILED"),

		];
    return view('product.index', compact(['income','count','items','pie']));
		
	}
}
