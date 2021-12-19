<?php

class IndexController
{
   public function __construct($db)
   {
       
   }

   public function index()
   {
       // виклик відображення
       include_once 'views/home.php';
   }

   public function support()
   {
       // виклик відображення
       include_once 'views/contacts.php';
   }

   public function auth()
   {
       // виклик відображення
       include_once 'auth.php';
   }

   public function logout()
   {
       // виклик відображення
       include_once 'logout.php';
   }
}
