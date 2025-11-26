<?php

namespace App\Http\Controllers\Front\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Blog
{
    private int $perpage = 3;
    private int $perpageBlog = 1;
    public function mainGet(Request $request){
        $count = $request['count'];
        $per_page = $this->perpage + $count;
        return DB::table('blog')->paginate($per_page);
    }
    public function get(): \Illuminate\Pagination\LengthAwarePaginator
    {
        return DB::table('blog')->paginate($this->perpageBlog);
    }
}
