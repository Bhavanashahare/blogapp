
<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Auth;
class AuthController extends Controller
{
    Public function signup(Request $request){
        //  validation
        $validator = Validator::make($request->all(),[
            'name' =>'required',
            'email' => 'required|email' ,
            'password' => 'required',
            'c_password' => 'required|same:password',
            'roles'=>"required"
        ]);

        if($validator->fails()){
            $response =[
                'success'=> false,
                'message' => $validator->errors()
            ];
            return response()->json($response,400);
        }

        $input = $request->all();

        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;

        $response = [

            'success' => true,
            'data' =>$success,
            'message' => 'User register Successfully'
        ];
        console.log('da')
         return response()->json($response,200);
        }
        public function signin(Request $request){

            if(Auth::attempt(['email'=>$request->email,'password' =>$request->password])){

                $user = Auth::user();

                $success['token'] = $user->createToken('MyApp')->plainTextToken;
                // dd('da');
                $success['name'] = $user->name;

                $response = [

                    'success' => true,
                    'data' =>$success,
                    'message' => 'User login  Successfully'
                ];
                return response()->json($response,200);

            }
        }
    }


    // public function store(Request $request){
    //     $data=new Blog();
    //     $data->title=$request->title;
    //     $data->description=$request->description;
    //     $data->category_id=$request->category_id;
    //     if ($request->hasFile('image')) {
    //        $file = $request->image;
    //        $extension = $file->getClientOriginalExtension();
    //        $filename = time() . '.' . $extension;
    //        $file->move('uploads', $filename);
    //        $data->image = $filename;
    //    }
    //    $data->save();
    //    $response = [
    //     "success" => true,
    //     "data" => $data,
    //     "message" => " data Stored Successfully !"
    // ];
    // return response()->json($response, 201);

    // }
    // public function table(){
    //     $data=Blog::all();


    // $response = [
    //     "success" => true,
    //     "data" => $data,
    //     "message" => " data fetch  Successfully !"
    // ];
    //     return response()->json($response, 201);
    // }


    //  public function update(Request $request ,$id ){


    //     $data=Blog::find($id);
    //     $data->title = $request->title;
    //     $data->description = $request->description;
    //     if ($request->hasFile('image')) {
    //         $file = $request->image;
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $file->move('uploads', $filename);
    //         $data->image = $filename;
    //     }
    //     $data->category_id= $request->category_id;
    //     $data->save();
    //     $response = [
    //         "success" => true,
    //         "data" => $data,
    //         "message" => " data update Successfully !"
    //     ];
    //         return response()->json($response, 201);
    //     }



    // public function delete($id){
    //     $data=Blog::find($id);
    //     $data->delete();
    //     $response = [
    //         "success" => true,
    //         "data" => $data,
    //         "message" => " data delete  Successfully !"
    //     ];
    //         return response()->json($response, 201);
    //     }

    // }




