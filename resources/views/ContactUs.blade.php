@extends("Master")
@section('preeti')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <section class="contact">
        <div class="content">
            
            <h2> Contact Us</h2>
            <p>Kindly visite our website for best Experiance .our website -Loveshree267@gmail.com  & contact number -8957682900</p>

        </div>
        <div class="conatiner">
            <div class="contactinfo">
        <div class="box">
            <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
            <div class="text">
                <h3>Address</h3>
                <p>2768 Prem Mandir road ,<br> Vrindavan ,Mathura<br>Uttar Pradesh</p>
            </div>
        </div>
        <div class="box">
            <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
            <div class="text">
                <h3>Email</h3>
                <p>Loveshree267@gmail.com </p>
            </div>
        </div>


        <div class="box">
            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
            <div class="text">
                <h3>Phone</h3>
                <p>FAx: 98287871 ,<br> Mob: +91 27863872,382293329<</p>
            </div>
        </div>
            </div>
                <div class="contactform">
                    <form action="" method="post">
                        @csrf

                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="name" required placeholder=" Full Name">

                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" required placeholder=" Email">

                        </div>
                        <div class="inputBox">
                            <textarea required name="query" placeholder=" Type your message..."></textarea>

                        </div>
                        <div class="inputBox">
                           <button class="btn btn-info">send</button>

                        </div>

                    </form>
                </div>


        </div>

    </section>

<style>

*
{
    margin:0px;
    padding: 0px;
    box-sizing: border-box;
     font-family: 'poppins',sans-serif;

}
body{
    background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0.3)),url('images/shopping.jpg');
    background-size: cover;
}
.contact{
    position: relative;
    min-height:100vh;
    padding:50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
  flex-direction: column;
}
.contactinfo .text{
    color:white;
}
.contact .content
{
    text-align: center;
    color:white;
    font-size:25px;
}
.contact .content h2 {
    font-size: 40px;
    font-weight: bolder;
}

.contactinfo
{
  float:left;
    height:400px;
    width:400px;
}
.contactinfo .box
{
     display: flex;
}
.contactinfo .box .text h3{
    color:lightcoral;
}

.contactinfo .box .icon
{
    height:40px;
    width:40px;
    border-radius: 50%;
    background: white;
    text-align: center;
    font-size: 25px;
}
.contactinfo .box .icon i{
    margin-top:10px;
}
.contactinfo .box h3
{
    color:darkcyan;
    margin-left:10px;
}
.contactform
{
    float:left;
    min-height:400px;
    width:400px;
    background:rgba(0,0,0,0.1);
    padding:30px;
    color:white;
}
.contactform h2
{
    font-weight: bold;
    padding-bottom: 10px;
}
.contactform input
{
    border:none;
    border-bottom:2px solid black;
    padding-top:20px;
    margin:10px auto;
    width:340px;
   font-weight: bold;

    background:transparent;

}
.contactform textarea
{
    border:none;
    border-bottom:2px solid black;
    padding-top:20px;
    width:340px;
    color:white;
    background: transparent;

}
.contactform button
{
    margin-top:20px;
    margin-left:130px;
    width:80px;
}


</style>


@endsection
