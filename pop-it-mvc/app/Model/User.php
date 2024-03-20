<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class User extends Model implements IdentityInterface
{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       /*'name',
       'surname',
       'patronymic',
       'gender',
       'date',
       'visa',
       'post',
       'subdivision',
       'type_of_employee',*/
       'login',
       'password',
       'link_to_the_role'
   ];

   protected static function booted()
   {
       static::created(function ($user) {
           $user->password = md5($user->password);
           $user->save();
       });
   }

   //Выборка пользователя по первичному ключу
   public function findIdentity(int $id)
   {
       return self::where('id', $id)->first();
   }

   //Возврат первичного ключа
   public function getId(): int
   {
       return $this->id;
   }

   //Возврат аутентифицированного пользователя
   public function attemptIdentity(array $credentials)
   {
       $user = self::where(['login' => $credentials['login'],
                            'password' => md5($credentials['password'])])->first();
   
       if ($user) {
           $user->link_to_the_role = 2; // Привязка ко второму значению в поле name_of_the_role
           $user->save();
       }
   
       return $user;
   }
}
