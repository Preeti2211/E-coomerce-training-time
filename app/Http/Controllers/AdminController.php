<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{
    //
    public function Home_Dash(Request $request)
    {
        if($request->session()->has("aid")) {
            return view('Admin_zone.Home_Dash');
        }
        else
        {
            echo "<script>alert('Login First then Goto next zone ');window.location.href='/logi'</script>";
        }
    }
    public function Feedback()
    {
        $revi= DB::select('select * from review');
        return view('Admin_zone.Feedback',
            ['review'=>$revi]);

    }
    public function EnquiryMgmt()
    {
     $enq=  DB::select('select * from contactus');

        return view('Admin_zone.EnquiryMgmt',
            ['contactus'=>$enq]);
    }
   public function LoginInfo()
   {
       $log= DB::select('select * from tbl_login');
       return view('Admin_zone.LoginInfo',
           ['tbl_login'=>$log]);

   }
    public function Cart(Request $request)
    {

        $pro=  DB::select('select * from ad_product');

        return view('Admin_zone.Cart',
            ['ad_product'=>$pro]);

    }
    public function ChangPassword(Request $request)
    {
        if($request->session()->has("aid")) {
            return view('Admin_zone.ChangPassword');
        }
        else
        {
            echo "<script>alert('Login First then Goto next zone ');window.location.href='/logi'</script>";
        }

    }
    public function ChangPassData(Request $request)
    {
        if($request->session()->has("aid")) {
           $npass=$request->input("npass");
           $cpass=$request->input("cpass");
           if($npass==$cpass)
           {
               $email=$request->session()->get("aid");
         DB::update("update tbl_login set password=? where email=?",[$npass,$email]);

               //sending mail code starts here

               $data = array('email'=>$email,'passwd'=>$npass);

               Mail::send(['text'=>'changemail'], $data, function($message) use ($email) {

                   $message->to($email, 'Mail From My Ecommerce Portal')->subject('Mail Regarding for Change Password');
                   $message->from('ps9685185@gmail.com','twwmxojgjzgngnhr');

               });
               //end here ....


  echo "<script>alert('Password changed successfully');window.location.href='/logi'</script>";
           }
           else{
               echo "<script>alert('Password is not matched ');window.location.href='/chPass'</script>";
           }
        }
        else
        {
            echo "<script>alert('Login First then Goto next zone ');window.location.href='/logi'</script>";
        }

    }
    public function LogOut(Request $request)
    {
        try {

           $request->session()->forget("aid");
             echo "<script>alert('Logout');window.location.href='/logi'</script>";
        }
        catch (Exception)
        {
            echo "<script>alert('Went Something wrong');window.location.href='/LogOut'</script>";
        }

    }
   public function Notification(Request $request)
    {
        if($request->session()->has("aid")) {
            return view('Admin_zone.NotiFication');
        }
        else
        {
            echo "<script>alert('Login First then Goto next zone ');window.location.href='/logi'</script>";
        }

    }
    public function Product(Request $request)
    {
        if($request->session()->has("aid")) {
            return view('Admin_zone.Product');
        }
        else
        {
            echo "<script>alert('Login First then Goto next zone ');window.location.href='/logi'</script>";
        }

    }
    public function Review(Request $request)
    {
        if($request->session()->has("aid")) {
            return view('Admin_zone.Review');
        }
        else
        {
            echo "<script>alert('Login First then Goto next zone ');window.location.href='/logi'</script>";
        }

    }
    public function dashborad(Request $request)
    {
        if($request->session()->has("aid")) {
            return view('Admin_zone.dashborad');
        }
        else
        {
            echo "<script>alert('Login First then Goto next zone ');window.location.href='/logi'</script>";
        }

    }
    public function AddProduct(Request $request)
    {
        if($request->session()->has("aid")) {
            return view('Admin_zone.AddProduct');
        }
        else
        {
            echo "<script>alert('Login First then Goto next zone ');window.location.href='/logi'</script>";
        }

    }


public function deleteRecord($id)
{
    DB::delete("delete from contactus where id=?",[$id]);
    echo "<script>alert('Record deleted');window.location.href='/enquri'</script>";
}


public function CartSave(Request $request)
{
        $proName=$request->input('proName');
        $price=$request->input('price');
        $pic=$request->file('pic');
        $categary=$request->input('categary');
        $fname=$pic->getClientOriginalName();
    //Move Uploaded File
    $destinationPath = 'products';
    $pic->move($destinationPath,$fname);


//        echo "proName".$proName."price".$price."pic".$pic."categary".$categary;
    DB::table('ad_product')->insert(['proName'=>$proName,'price'=>$price,'pic'=>$fname,'categary'=>$categary]);
    echo"<script>alert('Product save succesfully');window.location.href='/AddPro'</script>";
}
    public function deletProduct($id)
    {
        DB::delete("delete from ad_product  where id=?",[$id]);
        echo "<script>alert('Record deleted');window.location.href='/cart'</script>";
    }
}
