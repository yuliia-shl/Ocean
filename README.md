# ocean
Teamwork number 3 (Vika, Julya and Nastya)

Макап https://www.rssc.com/
1.1 Главная страница сайта
1.1.1. Меню - позиция fixed:
а) кнопка Home: ссылка на Главную, слайдер (4 фотки):
б) Find a Cruise слева: добавляется иконка корзины
отдельная страница с карточками круизов.
в) лого по середине -вырезаем чей-то логотип;
г) contact us - якорь вниз с блоком контакты.
д) REQUEST INFORMATION,
э) my account (чувачек).
1.1.2. Слайдер (4 картинки)
1.2. Find a Cruise слева:
Категории Канада, Европа, Америка - в выпадающем списке над карточками круизов
отдельная страница с карточками круизов (по 3 шт) - где
-картинка,
-Название круиза,
-дата начала круиза,
-кол-во дней,
-цена,
-Назначение (Канада, Европа, Америка),
При нажатии кнопки заказать круиз попадает в корзину.
Добавляем пагинацию.
1.3. Отдельная страница с круизом:
-кнопка заказать,
-картинка с картой и
-хлебные крошки) и
-кнопка Заказать.
1.4. Отдельная страница REQUEST INFORMATION:
-имя
-телефон
-почта
-вопрос
1.5. Отдельная страница с логином my account:
-почта
-пароль
Если верифицирован - то логинится, если нет, перекидывает на страницу верификации
Don't have an account? CREATE AN ACCOUNT.
1.6. Отдельная страница с регистрацией
-имя
-телефон
-почта
-пароль1
-пароль2
-вернуться на логин
1.7. Отдельная страница с верификацией
-если письмо с кодом верификации не пришло, введите почту
-вернуться на логин
1.8. Отдельная страница Админки
Структура папок.
Название проекта - Ocean
.index.php // home
.request_info.php // форма обратной связи
.contacts.php
/assets: /css, /js
/admin
/img //папка с картинками
/modules:
-/сruise: .basket.php, category.php,
-/basket: .add_basket.php,
-/telegram:
/parts
/users: .login.php, .logout.php, .register, .verification.php
Структура БД.
Установить и настроить Git
Тема bootstrap