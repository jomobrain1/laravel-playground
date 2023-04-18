## Laravel

1.  ### Laravel Component

    php artisan make:component Header
    app/View/Components/Header.php -> header.blade.php -> RefreshController : The component is imported in welcome.php

2.  ### HttpRequests and form validation

    HttpRequestsController -> httprequests.blade.php

3.  ### Session

    SessionController
    Routes: Route::controller(SessionController::class)

4.  ### Middleware

    php artisan make:middleware CheckUser
    app/Http/middleware/CheckUser.php
    function run before every request
    registered in Kernel.php

             In Kernel.php

    protected $middleware=[
    register it here to apply it to all routes
    ]

    protected $middlewareGroups=[
    'web'=>[
    register it here to apply it to all web routes
    ],
    'api'=>[
    register it here to apply it to all api routes
    ]
    ]
    protected $middlewareAliases= [
    register it here to apply it to all routes
    ]
