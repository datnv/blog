<?php


namespace App\Services\Admin;


use App\Entity\Post;
use App\Repository\PostRepository;
use App\Services\BaseServices;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PostServices extends BaseServices
{

    public function newPostServices($data) {
        $repoPost = $this->entity->getRepository(Post::class);

        $newPost = [
            'pTitle'      => $data['title'],
            'pText'       => $data['content'],
            'pCategoryId' => $data['category'],
            'pTag'        => $data['tags'],
            // TODO
            'pInsertId'   => $this->container->getParameter('user.id'),
            'pUserId'     => $this->container->getParameter('user.id'),
            'pBlogId'     => $this->container->getParameter('blog.id'),
            'pMainImage'   => $data['mainImage'],
            //            'pMainImage' => $data['content'],
        ];

        try {
            $conn = $this->entity->getConnection();
            $conn->beginTransaction();
            // --- create new post
            $repoPost->createNewPost($newPost);

            $this->entity->flush();
            $conn->commit();
            $this->entity->clear();
        } catch (\Exception $e) {
            $conn->rollBack();
            $this->logger->error('newPostServices' . $e->getMessage());
            return false;
        }

        return true;
    }

}