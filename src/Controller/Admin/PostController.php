<?php


namespace App\Controller\Admin;


use App\Controller\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class PostController extends BaseController
{
    /**
     * @Route("/adm/post/new", name="admin_post_new")
     */
    public function newPost(Request $request)
    {
        $errorMsg = [];
        if ($request->isMethod('POST')) {
            // TODO validate form
            $data = $request->request->all();
            $file = $request->files->get('mainImage');
            $fileName = null;
            if ($file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            }
            $data['mainImage'] = $fileName;
            $repoService = $this->container->get('adm.service.post');
            // --- create new post
            $result = $repoService->newPostServices($data);
            // TODO return list post
            if ($result) {
                if ($file) {
                    $userId = $this->getParameter('user.id');
                    $blogId = $this->getParameter('blog.id');
                    $directory = $this->getParameter('post_photos_directory') . '/' . $userId . $blogId;
                    $file->move($directory, $fileName);
                }

                echo "OK!";exit;
            } else {
                echo "Loi cmnr!!";exit;
            }

            $errorMsg = ['msg' => 'system error!'];
        }
        return $this->render('admin/post/new_post.html.twig');
    }


}