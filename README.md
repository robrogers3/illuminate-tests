# illuminate-tests for use in covetfashion server code

Include are examples of using several of the illimunate 4.1 packages for use in our code base.

## These include:
 * container: an IOC container we can use
 * database: like doctrine but vastly simpler
 * events: listen and fire and exec
 * support: array, Collections, String functions and methods; plus more than I can list.
 * translation: well, what is sounds like en, nl, de ..
 * validator: why I got started with this mess

## In order to check these out:
 * composer install <-- yep
 * cd to the appropriate package directory
 * run php -S localhost:8080 (on your mac)
 * e.g. cd validation; php -S localhost:8080

Note if you don't run php -S in the directory, it won't work.

## Some Prerequisites for using the db package
 * create a db called illuminate
 * add a table called users (id, name, ...)
 * add a couple users
 * sql included you can run, base dir.

## Wonderfulness
 * database: that's about all the code you need. no mapping, no annotations.
 ** $user = Capsule::table('users')->where('id', 1)->get();
 ** $users = User::all();
 * support: they are all amazing. Str::plural, str_limit, array_get, last, array_pull, array_set, with
 * Collections, Fluent: [http://www.gufran.me/post/laravel-illuminate-support-package-introduction/]
 * validation: 'email' => 'required|email|unique:users' <-- yep, checks db table too!

## Final Notes

You'll see that this composer.json is exactly like our current one plus the illimuinate packages.
I'll test this one abit with our code. It be great if you do too!




