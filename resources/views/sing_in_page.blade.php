<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WorkWise Html Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome-font-awesome.min.css')}}">
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">


    <style type="text/css">
        .birthday {
          display: flex;
          justify-content: center;
          width: 100%;
        }

        .field {
          margin: 10px 0;
        }

        .field label {
          font-size: 18px;
        }

        .field input[type='submit'] {
          font-family: "Raleway", sans-serif;
          font-size: 18px;
          padding: 20px 40px;
          border: none;
          background: #13354c;
          color: white;
          transition: 0.15s ease-in-out;
          cursor: pointer;
        }

        .field input[type='submit']:hover {
          background: white;
          color: #13354c;
          box-shadow: 0px 0px 25px 1px rgba(0, 0, 0, 0.5);
        }

        .field input[type='text'], .field input[type='password'], .field input[type='email'] {
          font-family: "Raleway", sans-serif;
          padding: 0px 0;
          width: 100%;
          font-size: 18px;
          outline: 0;
          border: none;
          background: none;
          border-bottom: 2px solid #ccc;
          transition: 0.15s ease-in-out;
        }

        .field input[type='text']:focus, .field input[type='password']:focus, .field input[type='email']:focus {
          border-bottom: 2px solid #13354c;
          box-shadow: 0px 7px 25px 1px rgba(0, 0, 0, 0.15);
        }

        .form_radio_btn {
          display: inline-block;
          margin-right: 10px;
        }

        .form_radio_btn input[type=radio] {
          display: none;
        }

        .form_radio_btn label {
          display: inline-block;
          cursor: pointer;
          padding: 0px 15px;
          line-height: 34px;
          border: 1px solid #999;
          border-radius: 6px;
          user-select: none;
        }

        /* Checked */
        .form_radio_btn input[type=radio]:checked + label {
          background: #95a4ae;
        }

        /* Hover */
        .form_radio_btn label:hover {
          color: #666;
        }

        /* Disabled */
        .form_radio_btn input[type=radio]:disabled + label {
          background: #95a4ae;
          color: #13354c;
        }

        .radio {
          display: flex;
          flex-wrap: wrap;
          margin-bottom: 6px;
          justify-content: center;
          height: 50px;
        }

    </style>
</head>
<body class="sign-in" oncontextmenu="return false;">
<div class="wrapper">
    <div class="sign-in-page">
        <div class="signin-popup">
            <div class="signin-pop">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cmp-info">
                            <div class="cm-logo">
                                <img src="images/cm-logo.png" alt="">
                                <p>Workwise,  is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
                            </div><!--cm-logo end-->
                            <img src="images/cm-main-img.png" alt="">
                        </div><!--cmp-info end-->
                    </div>
                    <div class="col-lg-6">
                        <div class="login-sec">
                            <ul class="sign-control">
                                <li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>
                                <li data-tab="tab-2"><a href="#" title="">Sign up</a></li>
                            </ul>
                            <div class="sign_in_sec current" id="tab-1">

                                <h3>Sign in</h3>
                                <form action="{{ url('/login') }}" method="post">

                                    {{ csrf_field() }}
                                    <div class="row">
                                        {{ $errors->first('status') }}
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                {{ $errors->first('email') }}
                                                <input type="text" name="email" placeholder="Email">
                                                <i class="la la-user"></i>
                                            </div><!--sn-field end-->
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                {{ $errors->first('password') }}
                                                <input type="password" name="password" placeholder="Password">
                                                <i class="la la-lock"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="checky-sec">
                                                <div class="fgt-sec">
                                                    <input type="checkbox" name="cc" id="c1">
                                                    <label for="c1">
                                                        <span></span>
                                                    </label>
                                                    <small>Remember me</small>
                                                </div><!--fgt-sec end-->
                                                <a href="#" title="">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <button type="submit" value="submit">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="login-resources">
                                    <h4>Login Via Social Account</h4>
                                    <ul>
                                        <li><a href="#" title="" class="fb"><i class="fa fa-facebook"></i>Login Via Facebook</a></li>
                                        <li><a href="#" title="" class="tw"><i class="fa fa-twitter"></i>Login Via Twitter</a></li>
                                    </ul>
                                </div><!--login-resources end-->
                            </div><!--sign_in_sec end-->
                            <div class="sign_in_sec" id="tab-2">
                                <div class="signup-tab">
                                    <i class="fa fa-long-arrow-left"></i>
                                    <h2>johndoe@example.com</h2>
                                    <ul>
                                        <li data-tab="tab-3" class="current">
                                            <a href="#" title="">Student</a>
                                        </li>
                                        <li data-tab="tab-4">
                                            <a href="#" title="">Employee</a>
                                        </li>
                                    </ul>
                                </div><!--signup-tab end-->
                                <div class="dff-tab current" id="tab-3">
                                    <form action="{{ url('/student_register') }}" method="post">

                                        {{ csrf_field() }}
                                        <input type="hidden" name="type" value="student">
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{ $errors->first('student_name') }}
                                                    <input type="text" value="{{ old('student_name') }}" name="student_name" placeholder="Name">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{ $errors->first('student_surname') }}
                                                    <input type="text" value="{{ old('student_surname') }}" name="student_surname" placeholder="Surname">
                                                    <i class="la la-globe"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{ $errors->first('student_email') }}
                                                    <input type="text" value="{{ old('student_email') }}" name="student_email" placeholder="Email">
                                                    <i class="la la-globe"></i>
                                                </div>
                                            </div>
                                            {{-- <div class="birthday">
                                                <div class='field'>
                                                    {{ $errors->first('student_day') }}
                                                    <select id='Sage_Day' value="{{ old('student_day') }}" name="student_day">
                                                        <option value="" selected="" disabled="">Օր</option>
                                                    </select>
                                                </div>
                                                <div class='field'>
                                                    {{ $errors->first('student_month') }}
                                                    <select id='Sage_Month' value="{{ old('student_month') }}" name="student_month">
                                                        <option value="" selected="" disabled="">Ամիս</option>
                                                        <option value="Հունվար">Հունվար</option>
                                                        <option value="Փետրվար">Փետրվար</option>
                                                        <option value="Մարտ">Մարտ</option>
                                                        <option value="Ապրիլ">Ապրիլ</option>
                                                        <option value="Մայիս">Մայիս</option>
                                                        <option value="Հունիս">Հունիս</option>
                                                        <option value="Հուլիս">Հուլիս</option>
                                                        <option value="Օգոստոս">Օգոստոս</option>
                                                        <option value="Սեպտեմբեր">Սեպտեմբեր</option>
                                                        <option value="Հոկտեմբեր">Հոկտեմբեր</option>
                                                        <option value="Նոյեմբեր">Նոյեմբեր</option>
                                                        <option value="Դեկտեմբեր">Դեկտեմբեր</option>
                                                    </select>
                                                </div>
                                                <div class='field'>
                                                    {{ $errors->first('student_year') }}
                                                    <select id='Sage_Year' value="{{ old('student_year') }}" name="student_year">
                                                        <option value="" selected="" disabled="">Տարի</option>
                                                    </select>
                                                </div>
                                            </div>                                            
                                            <div class='field'>
                                                <label for="birthdayy">Սեռը<span>*</span></label>
                                                <p class="err_gender"></p>
                                            </div> --}}
                                            {{-- <div class="radio">
                                                <div class="form_radio_btn">
                                                    <input id="radio-1" type="radio" name="radio" value="male">
                                                    <label for="radio-1">Արական</label>
                                                </div>
                                                <div class="form_radio_btn">
                                                    <input id="radio-2" type="radio" name="radio" value="female">
                                                    <label for="radio-2">Իգական</label>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{ $errors->first('student_personal_number') }}
                                                    <input type="text" value="{{ old('student_personal_number') }}" name="student_personal_number" placeholder="Personal number">
                                                    <i class="la la-globe"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{ $errors->first('student_faculty') }}
                                                    <select value="{{ old('student_faculty') }}" name="student_faculty">
                                                        <option></option>
                                                        <option>Category 1</option>
                                                        <option>Category 2</option>
                                                        <option>Category 3</option>
                                                        <option>Category 4</option>
                                                    </select>
                                                    <i class="la la-dropbox"></i>
                                                    <span><i class="fa fa-ellipsis-h"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{ $errors->first('student_profession') }}
                                                    <select value="{{ old('student_profession') }}" name="student_profession">
                                                        <option></option>
                                                        <option>Category 1</option>
                                                        <option>Category 2</option>
                                                        <option>Category 3</option>
                                                        <option>Category 4</option>
                                                    </select>
                                                    <i class="la la-dropbox"></i>
                                                    <span><i class="fa fa-ellipsis-h"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{ $errors->first('student_password') }}
                                                    <input type="password" value="{{ old('student_password') }}" name="student_password" placeholder="Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{ $errors->first('student_repeat_password') }}
                                                    <input type="password" value="{{ old('student_repeat_password') }}" name="student_repeat_password" placeholder="Repeat Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec st2">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c2">
                                                        <label for="c2">
                                                            <span></span>
                                                        </label>
                                                        <small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
                                                    </div><!--fgt-sec end-->
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Get Started</button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--dff-tab end-->
                                <div class="dff-tab" id="tab-4">
                                    <form action="{{ url('/employee_register') }}" method="post">

                                        {{ csrf_field() }}
                                        <input type="hidden" name="type" value="employee">
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="employee_name" placeholder="Name">
                                                    <i class="la la-building"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="employee_surname" placeholder="Surname">
                                                    <i class="la la-globe"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{ $errors->first('employee_email') }}
                                                    <input type="text" value="{{ old('employee_email') }}" name="employee_email" placeholder="Email">
                                                    <i class="la la-globe"></i>
                                                </div>
                                            </div>
                                            {{-- <div class="birthday">
                                                <div class='field'>
                                                    {{ $errors->first('employee_day') }}
                                                    <select id='Sage_Day' value="{{ old('employee_day') }}" name="employee_day">
                                                        <option value="" selected="" disabled="">Օր</option>
                                                    </select>
                                                </div>
                                                <div class='field'>
                                                    {{ $errors->first('employee_month') }}
                                                    <select id='Sage_Month' value="{{ old('employee_month') }}" name="employee_month">
                                                        <option value="" selected="" disabled="">Ամիս</option>
                                                        <option value="Հունվար">Հունվար</option>
                                                        <option value="Փետրվար">Փետրվար</option>
                                                        <option value="Մարտ">Մարտ</option>
                                                        <option value="Ապրիլ">Ապրիլ</option>
                                                        <option value="Մայիս">Մայիս</option>
                                                        <option value="Հունիս">Հունիս</option>
                                                        <option value="Հուլիս">Հուլիս</option>
                                                        <option value="Օգոստոս">Օգոստոս</option>
                                                        <option value="Սեպտեմբեր">Սեպտեմբեր</option>
                                                        <option value="Հոկտեմբեր">Հոկտեմբեր</option>
                                                        <option value="Նոյեմբեր">Նոյեմբեր</option>
                                                        <option value="Դեկտեմբեր">Դեկտեմբեր</option>
                                                    </select>
                                                </div>
                                                <div class='field'>
                                                    {{ $errors->first('employee_year') }}
                                                    <select id='Sage_Year' value="{{ old('employee_year') }}" name="employee_year">
                                                        <option value="" selected="" disabled="">Տարի</option>
                                                    </select>
                                                </div>
                                            </div>                                              
                                            <div class='field'>
                                                <label for="birthdayy">Սեռը<span>*</span></label>
                                                <p class="err_gender"></p>
                                            </div> --}}
                                            {{-- <div class="radio">
                                                <div class="form_radio_btn">
                                                    <input id="radio-1" type="radio" name="radio" value="male">
                                                    <label for="radio-1">Արական</label>
                                                </div>
                                                <div class="form_radio_btn">
                                                    <input id="radio-2" type="radio" name="radio" value="female">
                                                    <label for="radio-2">Իգական</label>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{ $errors->first('employee_profession') }}
                                                    <select value="{{ old('employee_profession') }}" name="employee_profession">
                                                        <option></option>
                                                        <option>Category 1</option>
                                                        <option>Category 2</option>
                                                        <option>Category 3</option>
                                                        <option>Category 4</option>
                                                    </select>
                                                    <i class="la la-dropbox"></i>
                                                    <span><i class="fa fa-ellipsis-h"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{ $errors->first('employee_password') }}
                                                    <input type="password" value="{{ old('employee_password') }}" name="employee_password" placeholder="Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{ $errors->first('employee_repeat_password') }}
                                                    <input type="password" value="{{ old('employee_repeat_password') }}" name="employee_repeat_password" placeholder="Repeat Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec st2">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c3">
                                                        <label for="c3">
                                                            <span></span>
                                                        </label>
                                                        <small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
                                                    </div><!--fgt-sec end-->
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Get Started</button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--dff-tab end-->
                            </div>
                        </div><!--login-sec end-->
                    </div>
                </div>
            </div><!--signin-pop end-->
        </div><!--signin-popup end-->
        <div class="footy-sec">
            <div class="container">
                <ul>
                    <li><a href="help-center.html" title="">Help Center</a></li>
                    <li><a href="about.html" title="">About</a></li>
                    <li><a href="#" title="">Privacy Policy</a></li>
                    <li><a href="#" title="">Community Guidelines</a></li>
                    <li><a href="#" title="">Cookies Policy</a></li>
                    <li><a href="#" title="">Career</a></li>
                    <li><a href="forum.html" title="">Forum</a></li>
                    <li><a href="#" title="">Language</a></li>
                    <li><a href="#" title="">Copyright Policy</a></li>
                </ul>
                <p><img src="images/copy-icon.png" alt="">Copyright 2019</p>
            </div>
        </div><!--footy-sec end-->
    </div><!--sign-in-page end-->

</div><!--theme-layout end-->

    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
    <script type="text/javascript" src="{{asset("js/bootstrap.min.js")}}"></script>
    <script type="text/javascript" src="{{asset('lib/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>
