<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 8/1/19
 * Time: 10:52
 */

namespace App\Controller\Client;

use Slim\Http\Request;
use Slim\Http\Response;
use Psr\Container\ContainerInterface;

/**
 * @author akio <medue8@gmail.com>
 * Class Index
 * @package App\Controller\Client
 */
class Index
{

    /**
     * @author akio <medue8@gmail.com>
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @author akio <medue8@gmail.com>
     * Index constructor.
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
     */
    public function index(Request $request, Response $response, array $args)
    {
        echo __METHOD__;
    }
}