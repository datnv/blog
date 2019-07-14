<?php
// src/Controller/BlogController.php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Blog controller.
 */
class BlogController extends Controller
{
    /**
     * Show a blog entry
     *
     * @Route("/blog/{id}", name="blog")
     * @Method("GET")
     */
    public function show($id)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('App\Entity\Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        $comments = $em->getRepository('App:Comment')
            ->getCommentsForBlog($blog->getId());

        return $this->render('blog/show.html.twig', array(
            'blog'      => $blog,
            'comments'  => $comments
        ));


    }

}