<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 7/30/19
 * Time: 16:23
 */

namespace App\Controller;

use Psr\Container\ContainerInterface;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * @author akio <medue8@gmail.com>
 * Class IndexController
 * @package App\Controller
 */
class Index
{

    /**
     * @author akio <medue8@gmail.com>
     * @var ContainerInterface
     */
    protected $container;

    /**
     * IndexController constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @author akio <medue8@gmail.com>
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function index(Request $request, Response $response, array $args)
    {
        echo __METHOD__;
        return $response;
    }
}