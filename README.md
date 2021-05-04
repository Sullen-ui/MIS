1. Создание БД (+)
2. Создание связей и отношений (+)
3. Создание вьюшек
4. Подключение форм
5. Описание моделей и контроллеров

..аутентификация

----------------------------------------------------------------------------------------------------------------------------------------------


Аутентификация

composer require laravel/ui

php artisan ui vue --auth

npm install && npm run dev

npm run dev



1.Создаем роуты /home и /email-confirm

	В миграцию добавить поле email_status =  (0/1)
			0 - /email-confirm
			1 - /home

	php artisan migrate:refresh

2. Создать посредника

	php artisan make:middleware Confirmed

	приписать его к /home 

	php artisan make:middleware Noconfirmed

	приписать его к /email-confirm 

3.Создать контроллер для страниц

	php artisan make:controller PagesController


Kernel -  добавляем путь к посреднику

4.PagesController вьюшки прописать в методах

5.Создать вьюшки

6.
use Auth
В мидлах сделать проверку поля email_status


  a). Если email_status = 0 
		return redirect()->route('email');


  б). Если email_status = 1
		return redirect()->route('home');


---------------------------------------------------------------------------
Правильный пул

composer install

env - переименовать

php artisan key:generate

php artisan serve             ----------------------------->>>>>>>>>>
