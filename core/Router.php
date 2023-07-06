<?php

namespace Core;

use BoxyBird\Inertia\Inertia;

class Router
{

    protected static $routes = [];



    /**
     * Add a route to the routes array
     * 
     * @param string $method - the method of the route
     * @param string $uri - the uri of the route
     * @param string|function $action - the action of the route
     * 
     * @return void
     * */
    private static function addRoute($method, $uri, $action = null)
    {

        // only the params that use { } will be added to the params array
        $params = explode('/', $uri);


        // keep all the params that use { }
        $params = array_filter($params, function ($param) {
            return strpos($param, '{') !== false;
        });

        if (is_callable($action)) {
            $action = $action;
        } else {
            $action = function () use ($action) {
                return $action;
            };
        }


        self::$routes[] = [
            'method' => $method,
            'uri' => $uri,
            'action' => $action,
            'params' => $params,
        ];
    }

    /**
     * Add a GET route to the routes array
     * 
     * @param string $uri - the uri of the route
     * @param string|function $action - the action of the route
     * 
     * @return void
     * */
    public static function get($uri, $action)
    {
        //refactor this to use a self function
        self::addRoute('GET', $uri, $action);
    }

    /**
     * Add a POST route to the routes array
     * 
     * @param string $uri - the uri of the route
     * @param string|function $action - the action of the route
     * 
     * @return void
     * */
    public static function post($uri, $action)
    {
        self::addRoute('POST', $uri, $action);
    }

    /**
     * Add a PUT route to the routes array
     * 
     * @param string $uri - the uri of the route
     * @param string|function $action - the action of the route
     * 
     * @return void
     * */
    public static function put($uri, $action)
    {
        self::addRoute('PUT', $uri, $action);
    }

    /**
     * Add a DELETE route to the routes array
     * 
     * @param string $uri - the uri of the route
     * @param string|function $action - the action of the route
     * 
     * @return void
     * */
    public static function delete($uri, $action)
    {
        self::addRoute('DELETE', $uri, $action);
    }

    /**
     * Add a PATCH route to the routes array
     * 
     * @param string $uri - the uri of the route
     * @param string|function $action - the action of the route
     * 
     * @return void
     * */
    public static function patch($uri, $action)
    {
        self::addRoute('PATCH', $uri, $action);
    }

    /**
     * Add a OPTIONS route to the routes array
     * 
     * @param string $uri - the uri of the route
     * @param string|function $action - the action of the route
     * 
     * @return void
     * */
    public static function options($uri, $action)
    {
        self::addRoute('OPTIONS', $uri, $action);
    }

    /**
     * Add a HEAD route to the routes array
     * 
     * @param string $uri - the uri of the route
     * @param string|function $action - the action of the route
     * 
     * @return void
     * */
    public static function head($uri, $action)
    {
        self::addRoute('HEAD', $uri, $action);
    }


    /**
     * Add a route to the routes array
     * 
     * @param string $uri - the uri of the route
     * @param string|function $action - the action of the route
     * 
     * @return void
     * */
    public static function route($uri, $method)
    {
        $current_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        //dd($current_uri);
        //die();

        foreach (self::$routes as $route) {
            if ($route['uri'] === $_SERVER['REQUEST_URI'] && $route['method'] === strtoupper($method)) {
                return $route['action'];
            }
        }
    }


    //use this for debugging, to see what routes are available
    public static function getRoutes()
    {
        return self::$routes;
    }

    protected static function abort($code = 404)
    {
        http_response_code($code);

        Inertia::render('404', [
            'code' => $code,
            'message' => 'Page not found',
        ]);

        die();
    }
}
