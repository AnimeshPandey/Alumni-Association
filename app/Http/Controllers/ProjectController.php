<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Student;
use App\Achievement;
use App\Project;


class ProjectController extends Controller
{
    
     public function ProfileForm(){

     		
     			
     
     		if(Auth::user() != null){
     		
     			return view('profile');
     		}

     		else
     			 return redirect('login');
     }
     public function ProfileNow(Request $data){

     	

     		$stud = new Student;
     		$stud->name = $data->name;
     		$stud->roll_no = $data->roll;
     		$stud->gender=$data->gen;
     		$stud->specialisation=$data->specs;
     		$stud->phone_num=$data->phonenum;


     		// $stud->phone no=$data->phonenum;

     		$stud->fb=$data->fb;
     		$stud->linkedIn=$data->linkedIn;

 $stud->save();




      $s1=new Achievement;
      $s1->roll_no = $data->roll;
      $s1->achievements = $data->ach;



 $s1->save(); 



   $s2= new Project;
   $s2->roll_no = $data->roll;
     $s2->project_name= $data->proj1;
       $s2->project_desc= $data->proj2;

       $s2->save();


     		
		       // 	$user=User::findOrFail(Auth::user()->id);
		       // 	$tid = \App\Report::all()->last()->rid;
		       //  $report = new Report;
		       //  $report->message = $data->message;
		     

		      	// $report->college_name= $data->college_name;
		      	// $report->locality = $data->locality;
		       //  $report->pincode = $data->pincode;
		      	//   $report->city = $data->city;
		       //    $report->state = $data->state;
		       //  $report->degree = $data->degree;
		       //  $report->category = $data->category;
		       //  $report->branch = $data->branch;
		       //  $report->course_name = $data->level;
		    
		       //  $report->id = $user->id;
        		

		        // $report->save(); //saving in db

		        
		       // $id = $report->rid;

		    

		        
		       // saving in db
                  // return $report->ticket; 


// 		        return view('redirect',compact('ticket'));

// 		        return $ticket.'is ur ticket no.';
// 		        return 'your report is filed, Thank You'.$ticket.'is your ticket number';

// 	}
//     public function ReportStatus(Request $data){

//     }

// 	public function CheckStatus(Request $request){
			
// 				//$user = array();

// 				$user=User::where('email','LIKE',$request->input('email'))->get();
//                //return $user;     			

//      			foreach($user as $u)
//      			{
//                    //return $u->id;
//      			$rep = Report::where('id','=',$u->id)->where('ticket','LIKE',$request->input('ticket'))->get();
//      			//break;

//      			}
     			
//      			if(($rep[0]->status)==0)
//                         {
//                             $r = 'not resolved';
//                             return view('ticket',compact('rep','r'));
//      		             }
//                 else if(($rep[0]->status)==1)
//                         {
//                             $r = 'resolved';
//                             return view('ticket',compact('rep','r'));
//                          }
//      		}
		
// 	public function repindex(){
//     	$reports = Report::all();
//     	return view('report.repinfo',compact('reports'));
//     }

//     public function repnewReport(){
    	
//     	return view('report.repinsert');
//     }


//     public function repedit($id){
//     	$reports = Report::where('rid',$id)->first()->get();
//     	return view('report.repupdate',compact($reports->status));
//     }


//     public function repdelete($id){
//     	University::where('rid',$id)->delete();
//     	return back();
    	
//     }


//     public function repsave(ReportRequest $request){
//     	for($i=0;$i<20;$i++){

//     		$r = new Report;

//     		$r->locality=$request->input('locality');
//             $r->state=$request->input('state');
//              $r->city=$request->input('city');
                       
//                         $r->status=$request->input('status');
                       
//                         $r->locality=$request->input('locality');
                       
//                         $r->ticket=$request->input('ticket');
                       
                       
//                         $r->message=$request->input('message');
                       
//                         $r->branch=$request->input('branch');
                       
//                         $r->course_name=$request->input('course_name');
//                         $r->college_name=$request->input('college_name');
//                         $r->degree=$request->input('degree');

                       


// 			$r->save();

// 		}
// 		return back()->withInput();
// 	}
 }
}
