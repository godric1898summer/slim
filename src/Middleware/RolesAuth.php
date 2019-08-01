<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 8/1/19
 * Time: 10:53
 */

namespace App\Middleware;

use Doctrine\ORM\EntityManager;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * @author akio <medue8@gmail.com>
 * 角色认证
 * Class Auth
 * @package App\Middleware
 */
class RolesAuth
{
    /**
     * @author akio <medue8@gmail.com>
     * @var ContainerInterface
     */
    private $container;

    /**
     * @author akio <medue8@gmail.com>
     * @var EntityManager
     */
    private $em;

    /**
     * @author akio <medue8@gmail.com>
     * Auth constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        $this->em = $this->container[EntityManager::class];
    }

    /**
     * @author akio <medue8@gmail.com>
     * @param Request $request
     * @param Response $response
     * @param $next
     * @return Response
     */
    public function certification(Request $request, Response $response)
    {
        // 后面添加登录、和认证
        // 假设有个uid = 1的用户
        // 这里演示角色认证中间件，主要是中间件的使用
        // 下面的request uid数据为假设数据
        $user_id = $request->getParam('uid', 1);

        $userQuery = $this->em->createQuery('SELECT u.roles_ids FROM App\Entity\User u WHERE u.id = :id');
        $userQuery->setParameter('id', $user_id);
        $roles_ids = $userQuery->getResult();
        if(!empty($roles_ids)){
            $response->withStatus(401);
        }
        return $response;
    }
}