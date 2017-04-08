LaraFly
--

<p align="center">
    <img src="https://laravel.com/assets/img/components/logo-laravel.svg">
    <img style="max-height:80pt;" src="https://www.patternfly.org/assets/img/patternfly-orb.svg">
</p>

<p align="center">
    <a href="https://packagist.org/packages/laravel/framework">Laravel (MIT)</a> |
    <a href="https://www.patternfly.org/">Patternfly (CC BY 4.0)</a>
</p>

## Laravel 5.4 [Modern PHP Application Framework] + Patternfly 3.20 [Enterprise UI Framework]
This project consists in a clean Laravel 5.4 installation with auth scaffolded and Patternfly 3.20 required via npm (and installed trough laravel mix)

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## About PatternFly
PatternFly is a community project that promotes design commonality and improved user experience. Its offerings include open source code, patterns, style guides and an active community that helps support it all.
- [Code](https://www.patternfly.org/download/)
- [Pattern Library](https://www.patternfly.org/pattern-library/)
- [Community](https://www.patternfly.org/community/)
- [Styles](https://www.patternfly.org/styles/)

## How to use it
Since this project originated in order to have a quickstart of laravel + patternfly, everything is available out of the box after installation, here are the steps:

- Clone/download the project to a local directory
- Prepare the project directory for web access and be sure to have a [Homestead](https://laravel.com/docs/5.4/homestead) compatible environment (nginx, php composer, etc)
- cd to project root
- Run: composer install
- Run: cp .env.example .env 
- Run: php artisan key:generate
- Configure the Laravel environment file (database name, user, host).
- Run php artisan migrate.
- Go to your browser and to your configured domain you should see the laravel welcome view.
- Go to http://{your_domain}/register and register a new user to login and see the home

## Notes

- This is a Laravel installation, so do not require on top of another laravel installation.
- The mix scripts have already been ran, so the compiled css and js files are already in the public folder
- Once the composer install and php artisan migrate commands have been ran the project should be accesible and work in a browser
- A few patternfly components have been copied directly from patternfly.org website to the home view to show that it works, you can build/copy the ones you need

## How can I integrate into existing laravel app?
If you already have a Laravel 5.4 application, you can look into these files:
- The only added npm dev-dependencies here are patternfly 3.20.0 and script-loader 0.7.0 [package.json](https://github.com/so2platform/LaraFly/blob/master/package.json)
- The main mix file that declares the "build process" [webpack.mix.js](https://github.com/so2platform/LaraFly/blob/master/webpack.mix.js)
- The script which requires patternfly's dependencies [resources/assets/js/patternfly.js](https://github.com/so2platform/LaraFly/blob/master/resources/assets/js/patternfly.js) (note that the normal laravel bootstrap.js file is integrated into this one, which includes axios, lodash, vue, etc)
- After configuring your installation similar to this, you should run npm run dev (or production) and add the css and js files to your layout

## How it looks?
Really cool!
<img src="http://dev3tec.s3.amazonaws.com/laraFly.png">


## Contributing
Contributions are welcome and will be fully credited.
We accept contributions via Pull Requests on Github.

## Credits
- alberto1el
- Issue reporters:
    - [netinteractive](https://github.com/netinteractive)
    - [aznain](https://github.com/aznain)
- Pull requests:
    - [atefBB](https://github.com/atefBB)

## License
The MIT License (MIT).
