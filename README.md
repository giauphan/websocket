##Chat app using Ably Broadcaster+Echo

Demo web-chat app using Ably Broadcaster+Echo based on laravel.

##Features

* Public chat rooms for a guest user.
* Laravel built-in user authentication (registration + login).
* Private chat rooms with presence for authenticated users.
* Typing indicator for private rooms.
* Join multiple rooms simultaneously.

##Requirements

1. PHP version >= 8.0
2. Node.js >= 18.x.x.

##SETUP

1. Clone the repository
```
git clone https://github.com/giauphan/websocket.git websocket
cd websocket
```

2. Create the .env file in the project root. Copy contents from .env.example into .env.
3. Set [ABLY_KEY](https://faqs.ably.com/setting-up-and-managing-api-keys) in .env file .
```
ABLY_KEY=ROOT_API_KEY_COPIED_FROM_ABLY_WEB_DASHBOARD
ABLY_DISABLE_PUBLIC_CHANNELS=false
ABLY_TOKEN_EXPIRY=3600
ABLY_SYNC_SERVER_TIME=false
```

4. Install dependencies.
```
composer install
npm i 
```

5. Create simple sqlite db file.
 ```
  touch database/database.sqlite // On linux
  New-Item database\\database.sqlite -type file // On windows poweshell
 ```

6. Set DB_DATABASE in .env file . 
```
DB_DATABASE=/Path/to/database/db.sqlite
```

7. Generate application encryption key.
```
  php artisan key:generate
```

8. Run all of db migrations.
```
php artisan migrate
```

9. Start  server.
```
php artisan serve

npm run dev
```

10. Access the web app via http://127.0.0.1:8000.

## Screenshots

**Public room**

<img src="docs/images/roomchat.png" alt=" room chat example">
