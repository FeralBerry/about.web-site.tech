<?php

namespace App\Http\Controllers\Front\API;

use App\Models\SkillsDesc;
use App\Models\SkillsProgress;
use function PHPUnit\Framework\isEmpty;
class Skills
{
    public function desc(): \Illuminate\Database\Eloquent\Collection|string
    {
        $skills_desc = SkillsDesc::all()->take(1);
        if(!isEmpty($skills_desc)){
            return '';
        } else {
            return $skills_desc;
        }
    }
    public function progress(): \Illuminate\Database\Eloquent\Collection|string
    {
        $skills_progress = SkillsProgress::all();
        if(!isEmpty($skills_progress)){
            return '';
        } else {
            return $skills_progress;
        }
    }
}
