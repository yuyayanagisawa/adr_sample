<?php
namespace App\Domain\Sample\Repository;

use App\Models\Sample;
use DB;

class SampleRepository
{
    public function findOrFail(int $userId)
    {
        // ここでDBからデータ取得
        // ex) return Sample::findOrFail($id);
        $sampleData = "sample data";
        return $sampleData;
    }
}