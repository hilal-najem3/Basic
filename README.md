## About Basic

This laravel web application has been configured to have two guards `admin` and `web`. It is ready to use also with sociallite and email verifications.

## Steps To Do

- Download the repository
- Navigate to its folder
- Run `composer update`
- Rename `.env.example` to `.env`
- Update the data in `.env` as you need (database, mail, app name, app key, ...)
- Update `config/mail.php` as you need
- Add the social media you want you application to connect to in the following way:
```
			GOOGLE_CLIENT_ID=SOME_ID
			GOOGLE_CLIENT_SECRET=SECRET
			CALLBACK_URL_GOOGLE=YOUR_WEBSITE/login/goolge/callback
```
- You can also edit config/services.php for social media
- Update `AdminTableSeeder` in `database/seeds`
- Run `php artisan config:cache`
- Run `php artisan migrate --seed`
- **Finaly** run the app by `php artisan serve`
