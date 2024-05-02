<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillsController extends Controller
{
    public function AllBills(){
        return view('frontend.bills.all_bills');
    }

    public function AddBills(){
        return view('frontend.bills.add_bills');
    }

    public function CreditCollection(){
        return view('frontend.bills.credit_collection');
    }
}
