<?php


namespace App\Services;


use App\Repository\PostRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class BaseServices
{
    protected $container;
    protected $entity;
    protected $logger;

    public function __construct(ContainerInterface $container, EntityManagerInterface $entity, LoggerInterface $logger)
    {
        $this->container = $container;
        $this->entity    = $entity;
        $this->logger    = $logger;
    }

    public function test()
    {
        $this->entity->getRepository(PostRepository::class);

        try {
            $conn = $this->entity->getConnection();
            $conn->beginTransaction();

            $conn->commit();
        } catch (\Exception $exception) {
            $conn->rollBack();

            $this->logger->error('TEST' . $exception->getMessage());

        }



    }


}