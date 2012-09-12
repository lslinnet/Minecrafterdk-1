#Minecrafter.dk

This is Minecrafter.dk's website, writen in Symfony 2.1.0-RC1

####Setup:
===
* Get and install [Symfony](http://symfony.com/download) (2.1)
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