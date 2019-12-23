<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Services;
use Illuminate\Support\Facades\Session;
class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $username = "nattyjay2@gmail.com";
    // private $apikey = "6610ced5cbccd626512a6479d21f0bdd617f74fe";
    private $url =  "http://api.smartsmssolutions.com/smsapi.php";
    private $password = "nattyjay2@gmail.com";

    private $sender = "GHORFEED";
    // private $flash = 0;

    public function index()
    {
        //
        
        $service = Services::all();
        return view('admin.serviceDetails.index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.serviceDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $input  = $request->all();
                if(Services::create($input)){
                  return response()->json(['success'=>11]);
                }else{
                  return response()->json(['failed'=>12]);
                }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      //return response()->json(['success'=>$id]);
       $service = Services::findOrFail($id);
       return view('admin.serviceDetails.update',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::findOrFail($id);
        return view('admin.serviceDetails.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Services::find($id);
        $input = $request->all();
              $smsResult = $this->send_sms('Approval Required ! Login to View','08060860316');
                $successes = substr($smsResult,0,2);
                    switch ($successes){
                            case 'OK':
                            $updated = $service->update($input);
                                if($updated){
                                    return response()->json(['success'=>55]);
                                }else{
                                    return response()->json(['success'=>66]);
                                }
                               //echo 441; // sucess here
                                break;
                            default:
                               switch ($smsResult) {
                                    case "2904":
                                        return response()->json(['success'=>442]); // message is empty
                                        break;
                                        case "2905":
                                        return response()->json(['success'=>443]); // message is empty
                                        break;
                                        case "2906":
                                        return response()->json(['success'=>444]); // 
                                        break;
                                        case "2907":
                                        return response()->json(['success'=>445]);// 
                                        break;
                                        case "2908":
                                        return response()->json(['success'=>446]); // 
                                        break;
                                        case "2909":
                                        return response()->json(['success'=>447]); // 
                                        break;
                                        case "2910":
                                        return response()->json(['success'=>448]); // 
                                        break;
                                        case "2911":
                                        return response()->json(['success'=>449]); // 
                                        break;
                                        case "2912":
                                        return response()->json(['success'=>450]); // 
                                        break;
                                        case "2913":
                                        return response()->json(['success'=>451]); // 
                                        break;
                                         case "2914":
                                        return response()->json(['success'=>452]); // 
                                        break;
                                         case "2915":
                                        return response()->json(['success'=>453]); // 
                                        break;
                                         case "2916":
                                        return response()->json(['success'=>454]); // 
                                        break;
                                    default:
                                        return response()->json(['success'=>455]); // somwthing went wrong or no internet connection
                                } // end of second switch statement is here
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $service = Services::findOrFail($id);
        $service->delete();
        Session::flash('deleted_user', 'User has been deleted');
        if($service){
            return redirect('/services');
        }
    }



      protected function process_post($url){
            $cSession = curl_init();
            curl_setopt($cSession,CURLOPT_URL,$url);
            curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($cSession,CURLOPT_HEADER, false); 
            $result=curl_exec($cSession);
            return $result;
            curl_close($cSession);
    }

   
    protected function send_sms($message,$recipients){
        $username = urlencode($this->username);
        $message = urlencode(substr($message, 0, 160));
        $sendername =   urlencode(substr($this->sender, 0, 11));
         $full_url = $this->url."?username=$this->username&password=$this->password&sender=$this->sender&recipient=$recipients&message=$message";
        $yeah = $this->process_post($full_url);
       return $yeah;
    
    } 

    public function getAllUsers($id){
         $users = User::findOrFail($id);
         return response()->json(['get'=>$users]);
    }

    public function send_message(Request $request){
        $message  = $request->input('messagesend');
        $phone  = $request->input('phone');
             $smsResult1 = $this->send_sms($message,$phone);
                $successes1 = substr($smsResult1,0,2);
                     switch ($successes1){
                            case 'OK':
                           return response()->json(['vomit'=>4411]);
                               //echo 441; // sucess here
                                break;
                            default:
                               switch ($smsResult) {
                                    case "2904":
                                        return response()->json(['vomit'=>4421]); // message is empty
                                        break;
                                        case "2905":
                                        return response()->json(['vomit'=>4431]); // message is empty
                                        break;
                                        case "2906":
                                        return response()->json(['vomit'=>4441]); // 
                                        break;
                                        case "2907":
                                        return response()->json(['vomit'=>4451]);// 
                                        break;
                                        case "2908":
                                        return response()->json(['vomit'=>4461]); // 
                                        break;
                                        case "2909":
                                        return response()->json(['vomit'=>4471]); // 
                                        break;
                                        case "2910":
                                        return response()->json(['vomit'=>4481]); // 
                                        break;
                                        case "2911":
                                        return response()->json(['vomit'=>4491]); // 
                                        break;
                                        case "2912":
                                        return response()->json(['vomit'=>4501]); // 
                                        break;
                                        case "2913":
                                        return response()->json(['vomit'=>4511]); // 
                                        break;
                                         case "2914":
                                        return response()->json(['vomit'=>4521]); // 
                                        break;
                                         case "2915":
                                        return response()->json(['vomit'=>4531]); // 
                                        break;
                                         case "2916":
                                        return response()->json(['vomit'=>4541]); // 
                                        break;
                                    default:
                                        return response()->json(['vomit'=>4551]); // somwthing went wrong or no internet connection
                                } // end of second switch statement is here
            }

                //  switch ($successes1){
                //             case 'SUCCESS':
                //            return response()->json(['vomit'=>4411]); 
                //                 break;
                //             default:
                //                switch ($smsResult1) {
                //                     case "MISSING_MESSAGE":
                //                         return response()->json(['vomit'=>4421]); // message is empty
                //                         break;
                //                         case "AUTH_FAILURE":
                //                         return response()->json(['vomit'=>4431]); // message is empty
                //                         break;
                //                         case "MISSING_USERNAME":
                //                         return response()->json(['vomit'=>4441]); // 
                //                         break;
                //                         case "MISSING_APIKEY":
                //                         return response()->json(['vomit'=>4451]);// 
                //                         break;
                //                         case "MISSING_SENDER":
                //                         return response()->json(['vomit'=>4461]); // 
                //                         break;
                //                         case "MISSING_RECIPIENT":
                //                         return response()->json(['vomit'=>4471]); // 
                //                         break;
                //                         case "INVALID_RECIPIENT":
                //                         return response()->json(['vomit'=>4481]); // 
                //                         break;
                //                         case "INVALID_MESSAGE":
                //                         return response()->json(['vomit'=>4491]); // 
                //                         break;
                //                         case "INVALID_SENDER":
                //                         return response()->json(['vomit'=>4501]); // 
                //                         break;
                //                         case "INSUFFICIENT_CREDIT":
                //                         return response()->json(['vomit'=>4511]); // 
                //                         break;
                //                          case "INVALID_REQUEST":
                //                         return response()->json(['vomit'=>4521]); // 
                //                         break;
                //                     default:
                //                         return response()->json(['vomit'=>4531]); // somwthing went wrong or no internet connection
                //                 } // end of second switch statement is here
                // }
                             
            }
}
