<?php

namespace App\Controller\Admin;

use App\Entity\Product;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            SlugField::new('slug')->setTargetFieldName('name')->hideOnIndex(),
            TextEditorField::new('description')->hideOnIndex(),
            TextEditorField::new('moreInformations')->hideOnIndex(),
            MoneyField::new('price')->setCurrency('USD'),
            IntegerField::new('quantity'),
            TextField::new('tags'),
            BooleanField::new('isBestseller','Best seller'),
            BooleanField::new('isNewArrival','New arrival'),
            BooleanField::new('isFeatured','Featured'),
            BooleanField::new('isSpecialOffer','Special offer'),
            AssociationField::new('category'),
            ImageField::new('image')->setBasePath('public/assets/uploads/product/')
                                    ->setUploadDir('public/assets/uploads/product/')
                                    ->setUploadedFileNamePattern('[randomhash],[extension]')
                                    ->setRequired(false),
        ];
    }
    
}
