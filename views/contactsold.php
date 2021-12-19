<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       body{
           padding-top: 3rem;
       }
       .container {
           width: 400px;
       }
   </style>
</head>
<body>
<div class="container">
       <h3>Support</h3>
       <form action="?controller=users&action=sendEmail" method="post">
           <div class="row">
               <div class="field">
                   <label>To: <input type="hidden" name="from"><br></label>
               </div>
           </div>
           <div class="row">
               <div class="field">
                   <label>Topic: <input type="text" name="email"></label>
               </div>
           </div>
           <div class="row">
               <div class="field">
                   <label>Message: <input type="email" name="message"></label>
               </div>
           </div>
           <div class="row">
               <div class="field">
                   <label>Author: <input type="text" name="from"><br></label>
               </div>
           </div>
           <div class="row">
               <div class="field">
                   <label>From: <input type="hidden" name="from"><br></label>
               </div>
           </div>
           <input type="submit" class="btn" value="Send">
       </form>
       <!-- <div>
            <a href="?controller=users">List of all Users</a>
       </div> -->
</div>
</body>
</html>
//$to = "somebody@example.com";
//$subject = "My subject";
//$txt = "Hello world!";
//$headers = "From: webmaster@example.com" . "\r\n" .
//"CC: somebodyelse@example.com";



