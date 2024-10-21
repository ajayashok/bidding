<?php

namespace App\Http\Controllers;

use App\Services\BiddingService;

class BiddingController extends Controller
{
    protected $biddingService;

    public function __construct(BiddingService $biddingService)
    {
       $this->biddingService = $biddingService;
    }

    public function index(){
        
        $getData = $this->biddingService->getQuotationData();
       
        return view('index',compact('getData'));
    }
}
