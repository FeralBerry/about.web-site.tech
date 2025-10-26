<?php

namespace App\Http\Controllers\Front\API;

use App\Models\Portfolio as P;
use App\Models\PortfolioImg;

class Portfolio
{
    public function get(): \Illuminate\Database\Eloquent\Collection|array
    {
        $portfolio = P::all();
        $portfolio_img = PortfolioImg::all();
        for($i = 0;$i < count($portfolio);$i++){
            $arr = [];
            foreach ($portfolio_img as $p){
                if($portfolio[$i]->id == $p->portfolio_id){
                    $arr[] = $p;
                }
            }
            $portfolio[$i]['imgs'] = $arr;
        }
        return $portfolio;
    }
}
