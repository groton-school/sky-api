<?php

namespace GrotonSchool\SKY\Build;

use Battis\OpenAPI\Generator;
use Battis\OpenAPI\Generator\Classes\EndpointFactory;
use DI\ContainerBuilder;
use Psr\Log\LoggerInterface;

use function DI\get;

class Runner
{
    public static function run()
    {
        $builder = new ContainerBuilder();
        $builder->addDefinitions([
            LoggerInterface::class => fn() => Generator::getDefaultLogger(),
            Generator::class => get(GroupingGenerator::class),
            EndpointFactory::class => get(ListEndpointFactory::class),
        ]);
        $container = $builder->build();
        $generator = $container->get(Generator::class);

        foreach (
            [
                'var/2022-04-01_preview/Altru/alt-adnmg.json' =>
                    'packages/altru-administration/src',
                'var/2022-04-01_preview/Altru/alt-anamg.json' =>
                    'packages/altru-analysis/src',
                'var/2022-04-01_preview/Altru/alt-conmg.json' =>
                    'packages/altru-constituent/src',
                'var/2022-04-01_preview/Church Management/nxt-data-integration.json' =>
                    'packages/nxt-data-integration/src',
                'var/2022-04-01_preview/Education Management/afe-rostr.json' =>
                    'packages/oneroster/src',
                'var/2022-04-01_preview/Education Management/school.json' =>
                    'packages/school/src',
            ]
            as $specPath => $basePath
        ) {
            $generator->generate($specPath, $basePath, 'Blackbaud\\SKY', true);
        }
    }
}
