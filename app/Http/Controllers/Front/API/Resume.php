<?php

namespace App\Http\Controllers\Front\API;
use App\Models\ResumeEdu;
use App\Models\ResumeWorkExp;
use function PHPUnit\Framework\isEmpty;
class Resume
{
    public function getEducation(){
        $resume_edu = ResumeEdu::all();
        if(!isEmpty($resume_edu)){
            return '';
        } else {
            return $resume_edu;
        }
    }
    public function getWorkExp(){
        $resume_work_exp = ResumeWorkExp::all();
        if(!isEmpty($resume_work_exp)){
            return '';
        } else {
            return $resume_work_exp;
        }
    }
}
