<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 7/31/19
 * Time: 11:36
 */

namespace App\Controller;

use App\Entity\Data;
use Doctrine\ORM\EntityManager;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * @author akio <medue8@gmail.com>
 * Class TestDoctrine
 * @package App\Controller
 */
class TestDoctrine
{

    /**
     * @author akio <medue8@gmail.com>
     * @var EntityManager
     */
    protected $em;

    /**
     * @author akio <medue8@gmail.com>
     * TestDoctrine constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->em = $container[EntityManager::class];
    }

    /**
     * @author akio <medue8@gmail.com>
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function addData(Request $request, Response $response, $args)
    {
        if(empty($args['age']))
        {
            return $response;
        }
        $this->em->beginTransaction();
        try{
            $data = new Data();
            $data->setAge($args['age']);
            $this->em->persist($data);
            $this->em->flush();
            $this->em->commit();
        } catch (\Exception $e){
            $this->em->rollback();
            print_r($e->getMessage());
        }
    }

    /**
     * @author akio <medue8@gmail.com>
     * @link https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/dql-doctrine-query-language.html#doctrine-query-language
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function findData(Request $request, Response $response, $args)
    {
        if(empty($args['id'])){
            return $response;
        }

        $id = $args['id'];
        $query = $this->em->createQuery("select d.id from App\Entity\Data d where d.id = :id");
        $query->setParameter('id', $id);
        $result = $query->getResult();
        print_r($result);
    }
}