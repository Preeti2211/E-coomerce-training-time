<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    //
    public function OurServices()
    {
        return view( 'OurServices' );
    }
    public function Registraion()
    {
        return view('Registraion');
    }
    public function ImageGallary()
    {

        return view('ImageGallary');
    }
    public function Notification()
    {
        return view('Notification');
    }
    public function ContactUs()
    {
        return view('ContactUs');
    }
    public function Login()
    {
        return view('Login');
    }
   public function OurCancellation()
   {
       return view('OurCancellation');
   }
    public function ReturnOrder()
    {
        return view('ReturnOrder');
    }
    public function Complaint()
    {
        return view('Complaint');
    }
    public function form_con()
    {
        return view('form_con');
    }
    public function BestSellar()
    {
        return view('BestSellar');
    }
    public function NewItem()
    {
        return view('NewItem');
    }
    public function Movers()
    {
        return view('Movers');
    }
    public function wished()
    {
        return view('wished');
    }
    public function Gift()
    {
        return view('Gift');
    }
    public function top_offer()
    {
        return view('top_offer');
    }
    public function Laptop()
    {
        return view('Laptop');
    }
    public function Toys_Beauty()
    {
        return view('Toys_Beauty');
    }
  public function Grocery()
  {
      return view('Grocery');
  }
  public function tradinal()
  {
      return view('tradinal');
  }
  public function Appliance()
  {
      return view('Appliance');
  }
  public function travel()
  {
     return view('travel');
  }

    public function savecontact(Request $request)
    {

        $name=$request->input("name");
        $email=$request->input('email');
        $query=$request->input("query");

        //echo"name ".$name." <br/>email ".$email."<br/>query ".$query;
        DB::table('contactus')->insert(["name"=>$name,
            "email"=>$email,"query"=>$query]);


        //sending mail code starts here

        $data = array('name'=>$name);

        Mail::send(['text'=>'mail'], $data, function($message) use ($email) {

            $message->to($email, 'Mail From My Ecommerce Portal')->subject('Laravel Testing Mail');
            $message->from('ps9685185@gmail.com','twwmxojgjzgngnhr');

        });
       //end here ....


        echo"<script>alert('Record saved in to database');window.location.href='/contact'</script>";
    }
    public function savelogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $arr= DB::select("select * from tbl_login where email=? and password=?",[$email,$password]);

        if(empty($arr))
        {
           echo "<script>alert('invalid use' +
 'rid or password')
           window.location.href='/logi'</script>";
        }
        else{
            //set value into session
            $request->session()->put("aid",$email);
           echo "<script>alert('login successful')
window.location.href='/da'</script>";
        }

//      echo "email ".$email."<br/>password ".$password;
//        DB::table('tbl_login')->insert(['email'=>$email,
//            "password"=>$password]);
//        echo"<script>alert('thanks for login');window.location.href='/logi'</script>";
    }
    public function savereview(Request $request)
    {
//        $request->name;
//        $request->email;\
        $name=$request->input('name');
        $email=$request->input('email');
        $msg=$request->input('msg');
        $star=$request->input('hdn');
        $array=array('name'=>$name,'email'=>$email,'msg'=>$msg,'rating'=>$star);   //associative array
       DB::table('review')->insert($array);
       echo "<script>alert('thanks for review');window.location.href='/review'</script>";

    }

    public function saveac(Request $request)
    {
        $name = $request->input('name');
        $faName = $request->input('faName');
        $mob = $request->input('mob');
        $mail = $request->input('email');
        $gender = $request->input('g');
        $password = $request->input('password');
        $hdn = $request->input('hdn');
        $captcha = $request->input('captcha');

        if ($hdn == $captcha) {
            DB::table('create_ac')->insert(['name' => $name, 'faName' => $faName, 'mob' => $mob, 'email' => $mail,
                'gender' => $gender, "password" => $password, 'captcha' => $captcha]);
            echo "<script>alert('thanks for Registraion');window.location.href='/regist'</script>";
        }
        else
        {
            echo "<script>alert('Invalid Captcha Code');window.location.href='/regist'</script>";
        }
    }

    public  function sendUserMail()
    {

        $data = array('name'=>"Preeti singh");

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('online.mtechnology@gmail.com', 'My Ecommerce Portal')->subject('Laravel Testing Mail');
            $message->from('ps9685185@gmail.com','twwmxojgjzgngnhr');

        });
        echo "Basic Email Sent. Check your inbox.";

    }
    public  function  displayProd(Request $request)
    {
        $pname=$request->input("search");
        if($pname!="")
        {
            $prod=DB::select("select * from ad_product where proName= ?",[$pname]);
            if(empty($prod))
              echo "<script>  alert('This Product is not available into your product list');window.location.href='/'</script>";
            else
            return view('Ame_Home',['prod'=>$prod]);

        }
    }

}
