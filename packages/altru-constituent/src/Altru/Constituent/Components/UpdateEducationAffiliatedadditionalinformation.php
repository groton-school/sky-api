<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UpdateEducationAffiliatedadditionalinformation
 *
 * @property string $id id
 * @property string $academiccatalogcollege The college/school. This simple
 *   list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/70f445a9-9efd-436e-a724-4be727219dd5?parameters=academiccatalogdegreeid,{academiccatalogdegreeid}.
 * @property string $academiccatalogdivision The division. This simple list
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/6d688d29-3846-4285-8bf7-2e24c29acef1?parameters=academiccatalogcollegeid,{academiccatalogcollegeid}.
 * @property string $academiccatalogdepartment The department. This simple
 *   list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/1093fae2-baf1-4488-9332-74d9193741ca?parameters=academiccatalogcollegeid,{academiccatalogcollegeid}&amp;parameters=academiccatalogdivisionid,{academiccatalogdivisionid}.
 * @property string $academiccatalogsubdepartment The sub department. This
 *   simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/b1da0663-f912-4533-abc2-de27bcbe8b10?parameters=academiccatalogdepartmentid,{academiccatalogdepartmentid}.
 * @property string $academiccatalogdegreetype The degree type. This simple
 *   list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/02026401-2351-4e56-832c-299c9426c649?parameters=academiccatalogdepartmentid,{academiccatalogdepartmentid}&amp;parameters=academiccatalogsubdepartmentid,{academiccatalogsubdepartmentid}.
 *
 * @api
 */
class UpdateEducationAffiliatedadditionalinformation extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "academiccatalogcollege" => "string",
        "academiccatalogdivision" => "string",
        "academiccatalogdepartment" => "string",
        "academiccatalogsubdepartment" => "string",
        "academiccatalogdegreetype" => "string",
    ];
}
