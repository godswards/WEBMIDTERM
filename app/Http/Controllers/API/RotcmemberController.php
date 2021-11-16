<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AppBaseController;
use App\Models\Rotcmember;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Flash;
use Response;

class RotcmemberController extends Controller {
    public $successStatus = 200;

    public function getAllRotcmember(Request $request) {
        $token = $request['t'];
        $userid = $request['u'];
        
        $user = User:: where('id', $userid)->where('remember_token', $token)->first();

        if ($user !=null) {
            $rotcmember = Rotcmember::all();

            return response()->json($rotcmember, $this->successStatus);
        }else{
            return response()->json(['reponse' => 'Bad Call'], 501);


        }
    }   

    public function searchRotcmember(Request $request) {
        $params = $request['p'];
        $token = $request['t'];
        $userid = $request['u'];
        
        $user = User:: where('id', $userid)->where('remember_token', $token)->first();

        if ($user !=null) {
            $rotcmember = Rotcmember::where('description', 'LIKE', '%' . $params . '%' )
            ->orWhere('title', 'LIKE', '%' . $params . '%')
            ->get();

            if ($rotcmember != null) {
                return response()->json($rotcmember, $this->successStatus);
            } else {
                return response()->json(['response' => 'Rotcmember not found!'], 404);
            }
        } else {
            return response()->json(['reponse' => 'Bad Call'], 501);


        }
    }

}