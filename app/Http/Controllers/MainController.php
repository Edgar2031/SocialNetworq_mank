<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Delivery_Addresses;
use App\Messages;
use App\Myshops;
use App\Products_categories_admin;
use App\Products;
use App\Products_images;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Validator;
use DB;
use Hash;
use Session;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use App;
use App\UsersModel;



class MainController extends Controller
{
    public function sing_in_page()
    {
        return view('sing_in_page');
    }

    public function index()
    {
        return view('home');
    }

    // logout
    public function logout()
    {
        // Session::flush();
        return Redirect::to('index');
    }

    // student register
    public function student_register(Request $data){
        $validator = Validator::make(
           $data->all(),
            array(
                'student_name' => 'required|string|min:3|max:12',
                'student_surname' => 'required|string|min:3|max:12',
                'student_email' => 'required|email',
                // 'student_day' => 'nullable|integer|min:16',
                // 'student_month' => 'nullable|string|max:10',
                // 'student_year' => 'nullable|integer|min:16',
                'student_personal_number' => 'required|min:5',
                // 'student_faculty' => 'string|max:10',
                // 'student_profession' => 'nullable|string|min:16',
                'student_password' => 'required|min:6|max:12',
                'student_repeat_password' => 'required|same:student_password'
            )
        );

        $users = UsersModel::where('email', $data->student_email)->first();
        $validator->after(function($validator) use($users){
            if ($users) {
                $validator->errors()->add('student_email', 'urish mailov porceq');       
            }
        });

        if ($validator->fails()) {
            // Переданные данные не прошли проверку
            return Redirect::to('/')
                            ->withErrors($validator)
                            ->withInput();
        }else {
            $add_users = new UsersModel();
            $add_users->name = $data->student_name;
            $add_users->surname = $data->student_surname; 
            $add_users->email = $data->student_email;
            $add_users->day_month_year = $data->student_day . $data->student_month . $data->student_year;
            $add_users->personal_number = $data->student_personal_number;
            $add_users->faculty = $data->student_faculty;
            $add_users->profession = $data->student_profession;
            $add_users->password = Hash::make($data->student_password);
            $add_users->type = $data->type;
            $add_users->save();


            $url = array('name' => $add_users->name, 'id' => $add_users->id, 'hash' => md5($add_users->email . $add_users->id));
            Mail::send('mail_blade/gmail', $url, function($m) use($add_users){
                $m->from('onlinedastest@gmail.com', 'sayti anune');
                $m->to($add_users->email, "$add_users->name $add_users->surname")
                    ->subject('Account verification');
            });
            return Redirect::to('/');
        }
    }

    // employee register
    public function employee_register(Request $data){
        $validator = Validator::make(
           $data->all(),
            array(
                'employee_name' => 'required|string|min:3|max:12',
                'employee_surname' => 'required|string|min:3|max:12',
                'employee_email' => 'required|email',
                // 'employee_day' => 'nullable|integer|min:16',
                // 'employee_month' => 'nullable|string|max:10',
                // 'employee_year' => 'nullable|integer|min:16',
                // 'employee_profession' => 'nullable|string|min:16',
                'employee_password' => 'required|min:6|max:12',
                'employee_repeat_password' => 'required|same:employee_password'
            )
        );

        $users = UsersModel::where('email', $data->employee_email)->first();
        $validator->after(function($validator) use($users){
            if ($users) {
                $validator->errors()->add('employee_email', 'urish mailov porceq');       
            }
        });

        if ($validator->fails()) {
            // Переданные данные не прошли проверку
            return Redirect::to('/')
                            ->withErrors($validator)
                            ->withInput();
        }else {
            $add_users = new UsersModel();
            $add_users->name = $data->employee_name;
            $add_users->surname = $data->employee_surname; 
            $add_users->email = $data->employee_email;
            $add_users->day_month_year = $data->employee_day . $data->employee_month . $data->employee_year;
            $add_users->profession = $data->employee_profession;
            $add_users->password = Hash::make($data->employee_password);
            $add_users->type = $data->type;
            $add_users->save();



            $url = array('name' => $add_users->name, 'id' => $add_users->id, 'hash' => md5($add_users->email . $add_users->id));
            Mail::send('mail_blade/gmail', $url, function($m) use($add_users){
                $m->from('onlinedastest@gmail.com', 'sayti anune');
                $m->to($add_users->email, "$add_users->name $add_users->surname")
                    ->subject('Account verification');
            });
            return Redirect::to('/');
        }
    }


    // login
    public function login(Request $data){
        $validator = Validator::make(
            $data->all(),
            array(
                'email' => 'required',
                'password' => 'required',
            )
        );
            
        $users = UsersModel::where('email', $data['email'])->first();
        $validator->after(function($validator) use($users, $data){
            if (!$users) {

                $validator->errors()->add('email', 'chka tenc mail');   

            }else if (!Hash::check($data['password'], $users['password'])){

                $validator->errors()->add('password', 'sxal password');   

            }else if ($users['status'] == 0) {

                $validator->errors()->add('status', 'status = 0');

            }
        });

        if ($validator->fails()) {
            // Переданные данные не прошли проверку
            return Redirect::to('/')
                            ->withErrors($validator)
                            ->withInput();         
        }else {     
            $user_data = array(
                'email'  => $data->get('email'),
                'password' => $data->get('password')
            );

            if(Auth::attempt($user_data))
            {
                $users = Auth::user();
            }

            return view('home');
            
        }       

    }

    public function g_verify($hash, $id){
        $users = UsersModel::where('id', $id)->first();
        if ($users) {
            if (md5($users->email . $users->id) == $hash) {
                UsersModel::where('id', $id)->update(['status' => 1]);
                return Redirect::to('/');
            }
        }
    }








}
