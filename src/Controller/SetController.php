<?php

namespace App\Controller;

use App\DTO\SetDTO;
use App\DTO\SetDTOtoSet;
use App\DTO\SetFormDTO;
use App\Entity\Sets;
use App\Mappers\SetMapper;
use App\Mappers\SetUpdateMapper;
use App\Repository\SetRepository;
use App\Repository\StatusesRepository;
use ContainerFaUg0wt\get_Console_Command_SecretsSet_LazyService;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Validator\ConstraintViolationList;

class SetController extends AbstractFOSRestController
{
    #[Get('/api/set')]
    #[View]
    public function listSet (SetRepository $repo){
        $sets = $repo->findAll();
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
    public function updateSet (SetFormDTO $dto, EntityManagerInterface $em, ConstraintViolationList $errors, SetRepository $repo, int $id, StatusesRepository $sRepo){
        if(count($errors)){
            throw new BadRequestHttpException();
        }
        $set = $repo->find($id);
        SetMapper::SetFormDTO($set, $dto);
        if($set->getStatus()->getId() !== $dto->getStatusId()){
            $set->setStatus($sRepo->find($dto->getStatusId()));
        }
        $em->flush();

    }

    #[Post('/api/set')]
    public function createSet ( SetFormDTO $dto, EntityManagerInterface $em, ConstraintViolationList $errors, StatusesRepository $sRepo){
        if(count($errors)){
            throw new BadRequestHttpException();
        }
        SetMapper::SetFormDTO($set, $dto);
        if($set->getStatus()->getId() !== $dto->getStatusId()){
            $set->setStatus($sRepo->find($dto->getStatusId()));
        }
        $em->flush();




    }



}