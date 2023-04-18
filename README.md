## Laravel

1.  ### Laravel Component

    <code>php artisan make:component Header</code>
     <div>
     app/View/Components/Header.php -> header.blade.php -> RefreshController : The component is imported in welcome.php
     </div>

2.  ### HttpRequests and form validation

    <p>HttpRequestsController -> httprequests.blade.php</p>

3.  ### Session

    <p>SessionController</p>
    <p>Routes: Route::controller(SessionController::class)</p>

4.  ### Middleware

    <p> php artisan make:middleware CheckUser</p>
    <p> app/Http/middleware/CheckUser.php</p>
     <p>function run before every request</p>
    <p>registered in Kernel.php</p>

             In Kernel.php

    <div>
    <pre>
       protected $middleware=[
       register it here to apply it to all routes
       ]

    </pre>
    </div>
    <div>
    <pre>
       protected $middlewareGroups=[
        'web'=>[
            register it here to apply it to all web routes
           ],
        'api'=>[
           register it here to apply it to all api routes
             ]
             ]
    </pre>
    </div>
    <div>
    <pre>
         protected $middlewareAliases= [
         register it here to apply it to all routes
         ]
    </pre>
    </div>

5.  ###  QueryBuilder

      controller: QueryBuilderController
      views: Query

