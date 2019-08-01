<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 8/1/19
 * Time: 10:53
 */

namespace App\Controller\Api;

use App\Controller\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * @author akio <medue8@gmail.com>
 * Class Index
 * @package App\Controller\Client
 */
class Index extends Controller
{
    /**
     * @author akio <medue8@gmail.com>
     * @param Request $request
     * @param Response $response
     * @param array $args
     */
    public function index(Request $request, Response $response, array $args)
    {
       echo __METHOD__;
    }
}