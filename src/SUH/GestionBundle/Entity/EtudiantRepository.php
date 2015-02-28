<?php

namespace SUH\GestionBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EtudiantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EtudiantRepository extends EntityRepository
{
    public function getListeEtudiantsParNomOuPrenom($chaine)
    {
        return $this->_em->createQueryBuilder()
                ->select('e.id')
                ->from($this->_entityName,'e')
                ->where('e.nomEtudiant LIKE :nom')
                ->setParameter('nom', $chaine)
                ->orWhere('e.prenomEtudiant LIKE :prenom')
                ->setParameter('prenom', '%'.$chaine.'%')
                ->addSelect('e.nomEtudiant','e.prenomEtudiant')
                ->orderBy('e.nomEtudiant')
                ->addOrderBy('e.prenomEtudiant')
                ->getQuery()
                ->getResult();       
    }
}
