<?php
function sendmail($company, $username, $password, $role)
{

  return '
  <html>

<body style="box-sizing: border-box; background: #ffffff;
background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%); height: 100%; margin: 0; background-repeat: no-repeat; background-attachment: fixed;
        background: url(backgroundimg.jpg);">

    <div class=content style=" @media (min-width:600px) {
    max-width: 100%;
      margin: 0 auto;
    }">
        <div class="wrapper-1" style="width: 100%;
    // height: 120vh;
    display: flex;
    flex-direction: column;
    background: #ffffff;
    background: linear-gradient(to bottom, #ffffff 0%, #e1e8ed 100%);
    box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
    height: initial;
        max-width: 100%;
        margin: 0 auto;
        margin-top: 50px;
  ">

            <div class="wrapper-2" style="padding: 30px;
      text-align: justify; background: #ffffff;
    background: linear-gradient(to bottom, #ffffff 0%, #e1e8ed 100%);">

              
                <h1 style="font-family: Kaushan Script;
        font-size: 3.5rem;
        letter-spacing: 3px;
        color: #005b6a;
        margin: 0;
        margin-bottom: 30px;
        text-align: center;  @media (min-width:360px) {
       font-size: 3.5rem;
      }">Thank you !</h1>
                <br>
                <p style="margin: 0;
        font-size: 1.3em;
        color: rgb(80, 79, 79);
        font-family: Source Sans Pro;
        letter-spacing: 1px;">
        Welcome to the' . $company . '!:

  <br>
  Login Url :<span style=" color: #ffa800;
          font-weight: 700;"> ' . base_url() . 'login. </span><br>
                  
  Your  Username is  - <span style=" color: #ffa800;
          font-weight: 700;">' . $username . '</span> <br>
  Your  Password is  - <span style=" color: #ffa800;
          font-weight: 700;">' . $password . '</span> <br>
  You are adding as  - <span style=" color: #ffa800;
          font-weight: 700;">' . $role . '</span> <br>
                </p>
               
                
                
                <br> <br>
                <div class="go-home" style="
        display: block !important;
        margin: 30px 0; @media (min-width:360px) {
      
        margin-bottom: 20px;
        margin-top: 30px;
     
    }">
                 
                </div>
            </div>
            
        </div>
    </div>
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
</body>

</html>';
}
