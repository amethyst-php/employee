<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\LegalEntityManager;
use Amethyst\Managers\OfficeManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class EmployeeSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true),
            Attributes\BelongsToAttribute::make('legal_entity_id')
                ->setRelationName('legal_entity')
                ->setRelationManager(LegalEntityManager::class),
            Attributes\BelongsToAttribute::make('office_id')
                ->setRelationName('office')
                ->setRelationManager(OfficeManager::class),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
