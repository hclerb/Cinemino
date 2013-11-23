<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\Cinemino;
use Cinemino\SiteBundle\Form\CineminoType;

/**
 * Cinemino controller.
 *
 */
class CineminoController extends Controller
{
    /**
     * Lists all Cinemino entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CineminoSiteBundle:Cinemino')->findAll();

        return $this->render('CineminoSiteBundle:Cinemino:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Cinemino entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Cinemino')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cinemino entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Cinemino:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Cinemino entity.
     *
     */
    public function newAction()
    {
        $entity = new Cinemino();
        $form   = $this->createForm(new CineminoType(), $entity);

        return $this->render('CineminoSiteBundle:Cinemino:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Cinemino entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Cinemino();
        $form = $this->createForm(new CineminoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            if($entity->getFileAffiche()!=NULL){   
            $url = $entity->getFileAffiche();
            $entity->setAffiche($resize->UploadPhoto($url,"Cinemino/big",LgAfficheCoBig,HtAfficheCoBig)); 
            $resize->UploadPhoto($url,"Cinemino/small",LgAfficheCoSmall,HtAfficheCoSmall);
            $url->move("medias/Cinemino/brut",$url->getClientOriginalName());
            }
            if($entity->getFileLogo()!=NULL){   
            $url = $entity->getFileLogo();
            $entity->setLogo($resize->UploadPhoto($url,"Cinemino/big",LgLogoCoBig,HtLogoCoBig)); 
            $resize->UploadPhoto($url,"Cinemino/small",LgLogoCoSmall,HtLogoCoSmall);
            $url->move("medias/Cinemino/brut",$url->getClientOriginalName());
            }
            if($entity->getFileCouverture()!=NULL){   
            $url = $entity->getFileCouverture();
            $entity->setCouverture($resize->UploadPhoto($url,"Cinemino/big",LgCouvertureCoBig,HtCouvertureCoBig)); 
            $resize->UploadPhoto($url,"Cinemino/small",LgCouvertureCoSmall,HtCouvertureCoSmall);
            $url->move("medias/Cinemino/brut",$url->getClientOriginalName());
            }            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cinemino_show', array('id' => $entity->getId())));
        }

        return $this->render('CineminoSiteBundle:Cinemino:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cinemino entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Cinemino')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cinemino entity.');
        }

        $editForm = $this->createForm(new CineminoType(), $entity);

        return $this->render('CineminoSiteBundle:Cinemino:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
        ));
    }

    /**
     * Edits an existing Cinemino entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Cinemino')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cinemino entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CineminoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            if($entity->getFileAffiche()!=NULL){   
            $url = $entity->getFileAffiche();
            $entity->setAffiche($resize->UploadPhoto($url,"Cinemino/big",LgAfficheCoBig,HtAfficheCoBig)); 
            $resize->UploadPhoto($url,"Cinemino/small",LgAfficheCoSmall,HtAfficheCoSmall);
            $url->move("medias/Cinemino/brut",$url->getClientOriginalName());
            }
            if($entity->getFileLogo()!=NULL){   
            $url = $entity->getFileLogo();
            $entity->setLogo($resize->UploadPhoto($url,"Cinemino/big",LgLogoCoBig,HtLogoCoBig)); 
            $resize->UploadPhoto($url,"Cinemino/small",LgLogoCoSmall,HtLogoCoSmall);
            $url->move("medias/Cinemino/brut",$url->getClientOriginalName());
            }
            if($entity->getFileCouverture()!=NULL){   
            $url = $entity->getFileCouverture();
            $entity->setCouverture($resize->UploadPhoto($url,"Cinemino/big",LgCouvertureCoBig,HtCouvertureCoBig)); 
            $resize->UploadPhoto($url,"Cinemino/small",LgCouvertureCoSmall,HtCouvertureCoSmall);
            $url->move("medias/Cinemino/brut",$url->getClientOriginalName());
            }             
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cinemino'));
        }

        return $this->render('CineminoSiteBundle:Cinemino:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cinemino entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:Cinemino')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cinemino entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cinemino'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
