<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Rotcmember;
use Flash;
use Response;

class UserController extends Controller {

    public $successStatus = 200;

    public function testQuerry() {
        $rotcmember = Rotcmember::all();

        if (count($rotcmember) > 0){
            return response()->json($rotcmember, $this->sucessStatus);
        } else {
            return response()->json(['Error'  => 'There is no Rotc member in the list'], 404);
        }
        
    }
}
?>