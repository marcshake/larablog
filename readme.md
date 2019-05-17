# Small Blogsoftware in Laravel

[![Build Status](https://travis-ci.org/marcshake/larablog.svg?branch=master)](https://travis-ci.org/marcshake/larablog)

**This software is not intended to be used in a live environment. This repository is public, because I am working at this project LIVE and it is going to be improved on a daily basis. DO NOT USE THIS ON A PRODUCTION ENVIRONMENT!!!**

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

**Warning: When installing this software, the Database will be reset and reseeded as long as this is not a stable branch**

* Clone the repository
* copy ``.env.example`` to ``.env`` and edit your Database-Connection.
* In a bash you can start ``./deploy.sh`` which will install composer dependencies, setup node_modules, clears the caches, installs assets and even links the storage-directory
* OPTIONAL: run ``php artisan migrate:refresh --seed`` to install test-data (you won't be able to login without test-data anyways)
* run ``php artisan serve`` to start your local development server

There will be a real installation-routine, when the software is ready.

## Closing words

Please be always aware that this program is not for using in production environments. I have put that online to improve my laravel-skills and let you be part of it. 
