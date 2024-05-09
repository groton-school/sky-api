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
                'var/alt-adnmg.json' => 'packages/altru-administration/src',
                'var/alt-anamg.json' => 'packages/altru-analysis/src',
                'var/alt-conmg.json' => 'packages/altru-constituent/src',
                'var/nxt-data-integration.json' =>
                    'packages/nxt-data-integration/src',
                'var/afe-rostr.json' => 'packages/oneroster/src',
                'var/school.json' => 'packages/school/src',
            ]
            as $specPath => $basePath
        ) {
            $generator->generate($specPath, $basePath, 'Blackbaud\\SKY', true);
        }
    }
}
