# Small Blogsoftware in Laravel

## What is this?
Hi, my name is Marcel Schindler and I have been a webdeveloper for a long time. I usually worked on Webservices and never had the opportunity nor the necessarity of working with a full-featured-framework. I have a blog running at http://www.trancefish.de which is coded with my own little "Framework" which you can see over here: https://github.com/marcshake/tlog

Now I started to use Laravel in my workplace, because I heard so many good things about that framework. And it's so great. I love laravel so much, because it is just as complex as you want it to be. These sources here a *work in progress* because I am just creating a complete blog-software while writing a tutorial, which you can see soon on my website.

Whenever this program is *stable*, this text will be modified. Just take this tiny codes to see, how easy it is to actually *start* your own Laravel-production.

## Licence
GPL, I guess.

## Project Status
### Frontend
* We have a simple page listing up our Blogposts. 
* We can log in ``demo@demo.dem`` with password ``test`` 
* Mobile-first (thanks to skeleton and bootstrap)

### Backend
We can edit posts.
We can upload media somehow
We can create new posts
We can delete posts

## Installation

* Clone the repository
* Make sure, you have ``composer`` and ``nodejs`` installed
* copy ``.env.example`` to ``.env`` and edit your Database-Connection.
* run ``composer install``
* run ``npm run production`` to create the public js and css-files.
* run ``php artisan serve`` to start your local development server

## Closing words

Consider this a work in progress. I do use this in a live environment, but that may change everytime. 

## Planned

* Wanna go to postCSS