<?php

namespace App\Controller;

use App\Entity\Image;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class ImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Image::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Mes Images')
            ->setPageTitle(Crud::PAGE_NEW, 'Ajouter une image')
            ->setPageTitle(Crud::PAGE_EDIT, 'Modifier une image');
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            FormField::addTab('Image Details'),
            TextField::new('altText', 'Description/Alt Text'),
            FormField::addFieldset('File Management'),
        ];

        if (Crud::PAGE_INDEX === $pageName) {
            $fields[] = IdField::new('id');
            $fields[] = TextField::new('filePath', 'Current Image');
        } else {
            $fields[] = Field::new('imageFile', 'Upload New Image')
                ->setFormType(VichImageType::class);
        }

        return $fields;
    }
}
