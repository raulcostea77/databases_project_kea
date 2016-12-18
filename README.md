

### Installation

CD in the root directory

# Install composer dependencies
composer install

# Create and fill in the [`.env`](.env.example) file with the app url and database credentials
cp .env.example .env

# Generate an application key
php artisan key:generate

# Install Node JS depencies
npm install

# Run gulp to compile styles and scripts
# Run `gulp watch` if you want gulp to automatically watch for changes
gulp

# Start a local server.
# You can either use WAMP, MAMP, etc.
# or you can start the built-in server:
php artisan serve
```

### Optional installation steps and recommendations

```bash
# Run database migrations (install auth tables)
# Run this command only if you want to use 
# Laravel's built-in authentication.
php artisan migrate

# scaffold auth files
php artisan make:auth

# I recommend you give your app a custom namespace
php artisan app:name "YourAppName"
```



