<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Achievement;
use App\Project;

use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Support\Facades\Redirect;


Use DB;
class SearchController extends Controller


      {


      	 public function search(Request $request)  

      	 {
          

             $q=$request->input('roll_no');
		   //$r=$request->input('roll_no');
            
		   //  if($q==NULL && $r==NULL)

		   // 	{ 

		   // 		$studs=NULL;
		   // 	return view('searchresults',compact('studs'));


     //  	 }

      	   

      	   	    $studs=Student::where('name','LIKE','%'.$q.'%')->get();
                //return $studs;

      	   	    return view('layouts.searchresults',compact('studs'));

      	   
      }




      public function details($roll_no)
            {

      
              $join= DB::table('students')

              


                   ->join('works_ats','students.roll_no','=','works_ats.roll_no')->get();

              $a=$join->where('roll_no',$roll_no);

                    // ->join('donates_tos','students.roll_no','=','donates_tos.roll_no')
                     // ->join('projects','students.roll_no','=','projects.roll_no')

                    $join4= DB::table('students')
                      
                       ->join('studies_ats','students.roll_no','=','studies_ats.roll_no')->get();

                       $b=$join4->where('roll_no',$roll_no);
                       





              $stu_del=$join->where('roll_no','=',$roll_no);

                 //return $join;

                $ach_del=Achievement::where('roll_no','=',$roll_no)->get();

                $pro_del=Project::where('roll_no','=',$roll_no)->get();






                $join1=DB::table('donates_tos')


                ->join('clubs','donates_tos.club_id','=','clubs.club_id')->get();

            
                 $club_del=$join1->where('roll_no',$roll_no);

              // return $udel;
              // $ucat=Ucategory::where('roll_no','=',$stu_del[0]->roll_no)->get();

                // $udet=Udetail::where('roll_no','=',$ud[0]->uid)->get();

                   
                     $join2=DB::table('studies_ats')


                ->join('institutes','studies_ats.ins_id','=','institutes.insti_id')->get();


                    $std_del=$join2->where('roll_no',$roll_no);


                      $join3=DB::table('works_ats')


                ->join('employees','employees.emp_id','=','works_ats.emp_id')->get();


                    $emp_del=$join3->where('roll_no',$roll_no);

             //  return $stu_del[0];


                return view('layouts.details',compact('stu_del','club_del','std_del','emp_del','ach_del','pro_del','a','b'));








            }

}