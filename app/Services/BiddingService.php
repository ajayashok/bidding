<?php
namespace App\Services;

use App\Repositories\BiddingRepository;

class BiddingService
{
    protected $biddingRepository;

    public function __construct(BiddingRepository $biddingRepository)
    {
        $this->biddingRepository = $biddingRepository;
    }

    public function getQuotationData()
    {
        return $this->biddingRepository->getData(); 
    }
}
