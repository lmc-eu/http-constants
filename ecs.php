<?php declare(strict_types=1);

use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/vendor/lmc/coding-standard/ecs.php');

    $services = $containerConfigurator->services();
    $services->set(PhpUnitTestAnnotationFixer::class)
        ->call('configure', [['style' => 'annotation']]);
};
