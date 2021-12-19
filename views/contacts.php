<?php session_start();?>
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
       <form action="?controller=users&action=sendEmail" method="POST" enctype="multipart/form-data">
            <div class="row">
               <div class="field">
                   <label>Topic: <input type="text" name="subject"></label>
               </div>
           </div>
           <div class="row">
               <div class="field">
                   <label>Message: <textarea placeholder="Message..." rows="10" cols="45" name="message" required></textarea><br></label>
               </div>
           </div>
           <div class="row">
               <div class="field">
                   <label><input type="hidden" name="headers" value=<?= $_SESSION['email'] ?>><br></label>
               </div>
           </div>
           <input type="submit" class="btn" value="Send"></input>
       </form>
</div>
</body>
</html>