<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Src\Validator\Validator;

class Site
{ 
    public function index(Request $request): string
    {
       $posts = Post::where('id', $request->id)->get();
       return (new View())->render('site.post', ['posts' => $posts]);
    }    

   public function hello(): string
   {
       return new View('site.hello', ['message' => 'hello working']);
   }

  /* public function signup(Request $request): string
   {
      if ($request->method === 'POST' && User::create($request->all())) {
          app()->route->redirect('/login');
      }
      return new View('site.signup');
   }*/

   public function signup(Request $request): string
{
   if ($request->method === 'POST') {

       $validator = new Validator($request->all(), [
           'name' => ['required'],
           'login' => ['required', 'unique:users,login'],
           'password' => ['required']
       ], [
           'required' => 'Поле :field пусто',
           'unique' => 'Поле :field должно быть уникально'
       ]);

       if($validator->fails()){
           return new View('site.signup',
               ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
       }

       if (User::create($request->all())) {
           app()->route->redirect('/login');
       }
   }
   return new View('site.signup');
}

   
   public function login(Request $request): string
{
   //Если просто обращение к странице, то отобразить форму
   if ($request->method === 'GET') {
       return new View('site.login');
   }

   //Если удалось аутентифицировать пользователя, то редирект
   if (Auth::attempt($request->all())) {
       app()->route->redirect('/hello');
   }
   //Если аутентификация не удалась, то сообщение об ошибке
   return new View('site.login', ['message' => 'Неправильные логин или пароль']);
}

public function logout(): void
{
   Auth::logout();
   app()->route->redirect('/hello');
}

public function colculate_compos(Request $request): string
{
   //Если просто обращение к странице, то отобразить форму
   if ($request->method === 'GET') {
       return new View('site.colculate_compos');
   }

   //Если удалось аутентифицировать пользователя, то редирект
   if (Auth::attempt($request->all())) {
       app()->route->redirect('/colculate_compos');
   }

   //Если аутентификация не удалась, то сообщение об ошибке
   return new View('site.hello', ['message' => 'hello working']);
}

public function department_sel(Request $request): string
{
   //Если просто обращение к странице, то отобразить форму
   $users = User::all();
   //Если удалось аутентифицировать пользователя, то редирект
   if (Auth::attempt($request->all())) {
       app()->route->redirect('/department_sel');
    }
    
    function __calculateAge($users){
        $srvozrast = 0;
        $i = 0;
        if(!empty($users)) {
            foreach ($users as $user) {
                $date = $user->date;
                $birthDate = new \DateTime($date);
                $currentDate = new \DateTime();
                $age = $currentDate->diff($birthDate)->y;
                $srvozrast += $age;
                $i += 1;
            }
            if($i === 0){
                return 0;
            }
            $srvozrast = $srvozrast / $i;
            return $srvozrast;
        }
    }
    $srvozras = __calculateAge($users);
    //Если аутентификация не удалась, то сообщение об ошибке
    return new View('site.department_sel', ['message' => 'hello working', "srvozrast"=>$srvozras]);
}

public function tier(Request $request): string
{
    //Если просто обращение к странице, то отобразить форму
    if ($request->method === 'GET') {
        return new View('site.tier');
    }
    
   //Если удалось аутентифицировать пользователя, то редирект
   if (Auth::attempt($request->all())) {
       app()->route->redirect('/tier');
   }
   //Если аутентификация не удалась, то сообщение об ошибке
   return new View('site.hello', ['message' => 'hello working']);
}
   
public function Add_employee(Request $request): string
{
   //Если просто обращение к странице, то отобразить форму
   if ($request->method === 'GET') {
       return new View('site.Add_employee');
   }

   //Если удалось аутентифицировать пользователя, то редирект
   if (Auth::attempt($request->all())) {
       app()->route->redirect('/Add_employee');
   }
   //Если аутентификация не удалась, то сообщение об ошибке
   return new View('site.hello', ['message' => 'hello working']);
}

public function employee(Request $request): string
{
   //Если просто обращение к странице, то отобразить форму
   if ($request->method === 'GET') {
       return new View('site.employee');
   }

   //Если удалось аутентифицировать пользователя, то редирект
   if (Auth::attempt($request->all())) {
       app()->route->redirect('/employee');
   }
   //Если аутентификация не удалась, то сообщение об ошибке
   return new View('site.hello', ['message' => 'hello working']);
}



}