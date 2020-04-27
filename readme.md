# Small Blogsoftware in Laravel

LIVEDEMO at https://trancefish.de/

## What is this?
Hi, my name is Marcel Schindler and I have been a webdeveloper for a long time. I usually worked on Webservices and never had the opportunity nor the necessarity of working with a full-featured-framework. I have a blog running at http://www.trancefish.de which is coded with my own little "Framework" which you can see over here: https://github.com/marcshake/tlog

Now I started to use Laravel in my workplace, because I heard so many good things about that framework. And it's so great. I love laravel so much, because it is just as complex as you want it to be. These sources here a *work in progress* because I am just creating a complete blog-software while writing a tutorial, which you can see soon on my website.

Whenever this program is *stable*, this text will be modified. Just take this tiny codes to see, how easy it is to actually *start* your own Laravel-production.

## Licence
Nope. Not now. The usual licenses of the dependencies apply but these codes are totally not worth a licence at the moment.

## Project Status
### Frontend
* We have a simple page listing up our Blogposts. 
* We can log in ``demo@demo.dem`` with password ``test`` 
* Mobile-first (thanks to skeleton)

### Backend
We can edit posts.
We can upload media
We can create new posts
We can delete posts

## Installation

* Clone the repository
* Make sure, you have ``composer`` and ``nodejs`` installed
* copy ``.env.example`` to ``.env`` and edit your Database-Connection.
* In a bash you can start ``./deploy.sh`` which will install composer dependencies, setup node_modules, clears the caches, installs assets and even links the storage-directory
* OPTIONAL: run ``php artisan migrate:refresh --seed`` to install test-data (you won't be able to login without test-data anyways)
* run ``php artisan serve`` to start your local development server

There will be a real installation-routine, when the software is ready. I guess.

## Closing words

Consider this a work in progress. I do use this in a live environment, but that may change everytime. Thanks to [Jetbrains](https://www.jetbrains.com/?from=Larablog) for supporting me with PHP-Storm.
