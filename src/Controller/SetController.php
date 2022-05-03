<?php

namespace App\Controller;

use App\DTO\SetDTO;
use App\DTO\SetFormDTO;
use App\Entity\Sets;
use App\Mappers\SetMapper;
use App\Repository\SetRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Validator\ConstraintViolationList;

class SetController extends AbstractFOSRestController
{
    #[Post('/api/set')]
    #[ParamConverter('dto', converter:'fos_rest.request_body')]
    #[View]
    public function createSet ( SetFormDTO $dto, EntityManagerInterface $em, ConstraintViolationList $errors){
        if(count($errors)){
            throw new BadRequestHttpException();
        }
        $set = new Sets();
        SetMapper::SetFormDTO($set, $dto);
        $em->persist($set);
        $em->flush();
    }

    #[Get('/api/set')]
    #[QueryParam('status')]
    #[QueryParam('search')]
    #[QueryParam('theme')]
    #[View]
    public function listSet (SetRepository $repo, ParamFetcherInterface $fetcher){
        $sets = $repo->findWithParameters($fetcher);
        return array_map(
            fn($item)=>SetMapper::toSetDTO($item), $sets
        );
    }

    #[Get('/api/set/{id}')]
    #[View]
    public function detailSet (SetRepository $repo, int $id): SetDTO
    {
        $set = $repo->findOneWithStatus($id);
        return SetMapper::toSetDTO($set);
    }

    #[Put('/api/set/{id}')]
    #[ParamConverter('dto', converter:'fos_rest.request_body')]
    #[View]
    public function updateSet (SetFormDTO $dto, EntityManagerInterface $em, ConstraintViolationList $errors, SetRepository $repo, int $id){
        if(count($errors)){
            throw new BadRequestHttpException();
        }
        $set = $repo->find($id);
        SetMapper::SetFormDTO($set, $dto);
        $em->flush();
    }

    // #[Get('/api/homeCount')]
    // #[View]
    // public function countAllSets (SetRepository $repo){
    //     $count = $repo->countAll();
    //     dd($count);
    //     return  $count;



    // }

}