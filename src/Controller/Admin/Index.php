<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 8/1/19
 * Time: 10:52
 */

namespace App\Controller\Admin;

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
     * @param $args
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function index(Request $request, Response $response, $args)
    {
        $assign['name'] = 'akio';
        $assign['age']  = 27;
        $assign['six']  = 'man';
        return $this->render($response, '/admin/index.html', $assign);
    }

    /**
     * @author akio <medue8@gmail.com>
     * @param Request $request
     * @param Response $response
     * @param $args
     */
    public function userInfo(Request $request, Response $response, $args)
    {
        var_dump(1111);exit;
    }
}