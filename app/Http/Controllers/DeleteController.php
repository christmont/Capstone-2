<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Language;
use App\Education;
use App\Involvement;
use App\Category;
use App\Position;
use App\courttype;
use App\Court;
use App\Lawsuit;
use App\Employee;
use App\Religion;
use App\Citizenship;
use App\Service;
use App\casetype;
use App\Status;
use App\Schedule;
use App\Branch;
use App\requeststat;
use App\Decision;
use App\Reason;
use App\scheduletype;

class DeleteController extends Controller
{
    public function scheduletypedelete($id)
    {
       
        $scheduletype = scheduletype::find($id);
        
        $scheduletype->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/scheduletype/show');
    }
     public function reasondelete($id)
    {
       
        $reason = Reason::find($id);
        
        $reason->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/reason/show');
    }
    public function languagedelete($id)
    {
       
        $language = Language::find($id);
        
        $language->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/language/show');
    }
    public function natdelete($id)
    {
       
        $service = Service::find($id);
        
        $service->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/natureofrequest/show');
    }
    public function casetypedelete($id)
    {
       
        $casetype = CaseType::find($id);
        
        $casetype->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/casetype/show');
    }
     public function casestatusdelete($id)
    {
       
        $status = Status::find($id);
        
        $status->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/casestatus/show');
    }
    public function citizendelete($id)
    {
       
        $citizenship = Citizenship::find($id);
        
        $citizenship->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/citizenship/show');
    }
    public function empdelete($id)
    {
       
        $employee = Employee::find($id);
        
        $employee->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/employee/show');
    }
    public function educdelete($id)
    {
       
        $educ = Education::find($id);
        
        $educ->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/education/show');
    }
    public function invodelete($id)
    {
       
        $invo = Involvement::find($id);
        
        $invo->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/caseinvolvement/show');
    }
     public function posdelete($id)
    {
       
        $pos = Position::find($id);
        
        $pos->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/position/show');
    }
    public function reldelete($id)
    {
       
        $rel = Religion::find($id);
        
        $rel->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/religion/show');
    }
     public function ccdelete($id)
    {
       
        $cc = Category::find($id);
        
        $cc->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/casecategory/show');
    }
      public function ctdelete($id)
    {
       
        $ct = courttype::find($id);
        
        $ct->delete();

        return redirect('/courttype/show');
    }
      public function coudelete($id)
    {
       
        $cou = Court::find($id);
        
        $cou->delete();

        return redirect('/court/show');
    }
     public function scheddelete($id)
    {
       
        $sched = Schedule::find($id);
        
        $sched->delete();

        return redirect('/schedule/show');
    }
     public function casedelete($id)
    {
       
        $lawsuit = Lawsuit::find($id);
        
        $lawsuit->delete();
        return redirect('/lawsuit/show');
    }
    public function decisiondelete($id)
    {
       
        $decision = Decision::find($id);
        
        $decision->delete();
        return redirect('/decision/show');
    }
    public function branchdelete($id)
    {
       
        $branch = Branch::find($id);
        
        $branch->delete();
        return redirect('/branch/show');
    }
    public function reqstatdelete($id)
    {
       
        $reqstat = requeststat::find($id);
        
        $reqstat->delete();
        return redirect('/reqstat/show');
    }



}
