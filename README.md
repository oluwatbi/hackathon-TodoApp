# TodoApp
This is a simple **todoApp**

## Project setup
```
composer install
```

### copy the `.env.example` as `.env`
```
cp .env.example .env
```

* Create a database with database name as `todoApp` and fill the creadentials in the `.env` file

### Migrate the database
```
php artisan migrate
```

### Serve the application locally
```
php artisan serve
```

Once its completed. Open the app in your browser register a new user. Head to `http://localhost:8000` and start using it.
