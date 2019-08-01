<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 8/1/19
 * Time: 15:31
 */

namespace App\Controller;

use Psr\Container\ContainerInterface;
use Slim\Views\Twig;

/**
 * @author akio <medue8@gmail.com>
 * Class Controller
 * @package App\Controller
 */
class Controller
{
    /**
     * @author akio <medue8@gmail.com>
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @author akio <medue8@gmail.com>
     * @var Twig
     */
    protected $view;

    /**
     * @author akio <medue8@gmail.com>
     * Index constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->view = $this->container->get('view');
    }

    /**
     * @author akio <medue8@gmail.com>
     * @param $id
     * @return mixed
     */
    protected function get($id)
    {
        return $this->container->get($id);
    }

    /**
     * @author akio <medue8@gmail.com>
     * @param $response
     * @param $temp_path
     * @param array $params
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function render($response, $temp_path, $params = [])
    {
        try{
            return $this->view->render($response, $temp_path, $params);
        } catch (\Exception $e){
            print_r($e->getMessage());exit;
        }
    }

    protected function apiResponse($code = 0, $message = '', array $data = [])
    {

    }
}