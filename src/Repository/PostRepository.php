<?php


namespace App\Repository;


use App\Constant\Constant;
use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PostRepository extends ServiceEntityRepository
{
    private $container;
    public function __construct(ManagerRegistry $registry, ContainerInterface $container)
    {
        $this->container = $container;
        parent::__construct($registry, Post::class);
    }


    public function createNewPost($postData)
    {
        $post = new Post();
        foreach ($postData as $key => $val) {
            $setStr = 'set' . ucfirst($key);
            if (!empty($val)) {
                call_user_func([$post,  $setStr], $val);
            }
        }
        $post->setPInsertDate(new \DateTime());
        $post->setPDelFlag(Constant::DEL_FLAG_USING);
//        $userId = $postData['pUserId'];
//        $blogId = $postData['pBlogId'];
//        $file = $postData['postImage'];
//        $directory = $this->container->getParameter('post_photos_directory') . '/' . $userId . $blogId;
//        $fileName = md5(uniqid()) . '.' . $file->guessExtension();
//        $file->move($directory, $fileName);
//        $post->setPPostImage($fileName);


        $this->getEntityManager()->persist($post);
    }



}