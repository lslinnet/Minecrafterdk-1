#Minecrafter.dk

This is Minecrafter.dk's website, writen in Symfony 2.1.0-RC1

If your wonna help out all the views have a little todo list at the bottom

####Setup:
===
* Get and install [Symfony](http://symfony.com/download) (2.1.*)
* Clone this repo to '/src'
* Add this code to '/app/AppKernel.php':

```
new Minecrafter\SiteBundle\MinecrafterdkSiteBundle(),
```

* Add this code to '/app/config/routing.php':

```
_root:
    resource: "@MinecrafterdkSiteBundle/Controller/SiteController.php"
    prefix:   /
    type:     annotation
```

* Run this command in the terminal:

```
php app/console assets:install --symlink --relative web
```
* Now go visit the site, and start coding!

===

####Install Symfony 2 with Composer:

Run this in your terminal:

```
curl -s https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

Cd to the folder you wish to install Symfony and run this in the terminal:

```
composer create-project symfony/framework-standard-edition minecrafter v2.1.1
```

Package site: http://packagist.org/packages/symfony/framework-standard-edition

For updating the Symfony packages you can now run:

```
composer update
```