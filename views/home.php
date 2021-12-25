<?php
    session_start();
?>
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
<div id="response" class="container">
        <h3>Control Panel</h3>
      <form name="form">
           <div class="row">
               <div class="field">
                   <label>Email: </label>
                   <input type="email" name="email">
               </div>
           </div>
           <div class="row">
               <div class="field">
                   <label>Password: </label>
                   <input type="password" name="password"><br>
              </div>
           </div>
           <input id="submit" type="submit" class="btn" value="Login">
        </form>
        <script>
            const ADMIN_EMAIL = 'admin@admin.com'; // auth for admin
            const ADMIN_PASSWORD = '111111';
            let login = document.getElementById("submit");
            login.addEventListener("click",ev=>
            {
                ev.preventDefault();
                let fr = document.forms[0];
                
                var email  = fr.elements[0].value;
                var pass  = fr.elements[1].value;
                // console.log(fr.elements[0]);
                if( email===ADMIN_EMAIL && email===ADMIN_EMAIL) window.location.href='?controller=users';
                else
                {
                    fr.elements[0].value= "";
                    fr.elements[1].value= "";
                    let div = document.createElement('div');
                    div.innerHTML = "<strong style='color:red'>Не верно введены данные!</strong>";
                    fr.append(div);
                }
            });
        </script>
</div>
</body>
</html>
