<?php
namespace App\Http\Actions\Sample;

use App\Http\Actions\Action;
use App\Domain\Sample\Service;
use App\Http\Responder\SampleResponder;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

final class SampleAction extends Action
{
    private $domain;
    private $sampleResponder;

    public function __construct(
        Service $service,
        SampleResponder $sampleResponder
    )
    {
        $this->domain = $service;
        $this->sampleResponder = $sampleResponder;
    }

    /**
     * 認証中のユーザー情報取得
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function __invoke(Request $request): Response
    {
        return $this->sampleResponder->response(
            $this->domain->getSample()
        );
    }
}