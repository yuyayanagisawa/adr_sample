<?php
namespace App\Domain\Sample;

use App\Domain\Sample\Repository\SampleRepository;

class Service
{
    public function __construct(
        SampleRepository $sampleRepo
    )
    {
        $this->sampleRepo = $sampleRepo;
    }

    public function getSample()
    {
        $res = $this->sampleRepo->findOrFail(4321);
        return $res;
    }
}