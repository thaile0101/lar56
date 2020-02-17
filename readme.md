## Setup

- Copy file .env.example and rename to file .env => setup up database.
- Run command 
    - composer install.
    - php artisan key:generate
    - php artisan migrate
    - php artisan db:seed
- Visit url
    - domain.com => view source => open link domain/news.rss => test rss
    - domain.com/xml => view xml to json
    
