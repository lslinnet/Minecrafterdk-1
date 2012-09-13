Minecrafter.dk
==============

This is Minecrafter.dk's website, writen in Symfony 2.1.0-RC1

If you want to help out there is a small to do list at the buttom of this page.

Setup
-----

Dependencies management is done with [Composer](http://getcomposer.org). So if you do not
already use it. You can install it with the following command.

    curl -s https://getcomposer.org/installer | php

You now have access to composer and can run it with `php composer.phar`. For more advanced installiation
steps check the official documentation.

You can make composer globally with the following command. (Only working on linux or osx)

    sudo mv composer.phar /usr/local/bin/composer

Clone this repository with git and install composer dependencies and you are good to go.

    git clone https://github.com/Minecrafterdk/Minecrafterdk
    cd Minecrafterdk
    php composer.phar install    /    composer install (if you did the globel thing)

Edit your information about the database etc in `app/config/parameters.yml`. If that file does not exists
you should copy `app/config/parameters.yml.dist`.

If this is the first install you should proberly create the database and install some assets.

    php app/console doctrine:database:create
    php app/console doctrine:schema:create
    php app/console assets:install --symlink web

To see the site live you can use the built in development server.

    cd Minecrafterdk
    php app/console server:start

It will output the address and port where it is running. Have fun!
