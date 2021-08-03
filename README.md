# BlogPop
BlogPop is a blogging application that allows users to write to their heart's content. It allows users to view the posts of other users, search for posts according to topics, and make connections with other users.

## Running Instructions
**Prerequisite Softwares:** PHP, Composer, PostgreSQL

Using the terminal, switch to the project directory and then execute the following commands
```
cd blog-pop
php artisan serve
``` 
This sets up the website running on the localhost most likely using the port 8000. Make sure you have a postgreSQL or a similar relational database server available. You can configure the .env file according to the database of your choice.

## Motivation
The main intention behind developing this project was to learn the PHP laravel framwork to develop full stack dynamic websites. Moreover, I wanted to develop a project that had a proper backend database and this application uses PostgreSQL database with multiple models and relationships between various models which is why I decided to work on this project. 

## Requirements
- The user should be able to sign up and login using Email
- Each form should have cross-site request forgery protection
- An unauthenticated user should be able to view posts without the ability to like and unlike posts
- Only authenticated users should be able to post and like/unlike posts
- An authenticated user should be able to like a post only once
- A user should be able to delete the posts contributed by them

