<p>To start just run "docker-composer up" create .env file from .env.example and set configs from example below</p>
<p>DB_HOST="Your local address (command "ipconfig")"</p>
<p>DB_DATABASE=heads</p>
<p>DB_USERNAME=root</p>
<p>DB_PASSWORD=secret</p>
<p>OPEN_WEATHER_MAP_ID=27ae88cfe531c8c72d0521f557467fb7</p>
<p>JWT_SECRET="docker-compose exec php php /var/www/heads/artisan jwt:secret"
<p>Run command "docker run --rm -it --volume %cd%:/app prooph/composer:7.1 install -o --prefer-dist"</p>
<p>"docker-compose exec php php /var/www/heads/artisan key:generate"</p>
<p>"docker-compose exec php php /var/www/heads/artisan migrate --seed"</p>
<p>"docker-compose exec php php /var/www/heads/artisan command:schedule" - to get weather from Open Weather Map API</p>
<p>Set default guard to 'api' in config/auth.php to test API</p>