<?php

namespace App\Factory;

use App\Entity\UniqueCodes;
use App\Repository\UniqueCodesRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<UniqueCodes>
 *
 * @method static UniqueCodes|Proxy createOne(array $attributes = [])
 * @method static UniqueCodes[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static UniqueCodes|Proxy find(object|array|mixed $criteria)
 * @method static UniqueCodes|Proxy findOrCreate(array $attributes)
 * @method static UniqueCodes|Proxy first(string $sortedField = 'id')
 * @method static UniqueCodes|Proxy last(string $sortedField = 'id')
 * @method static UniqueCodes|Proxy random(array $attributes = [])
 * @method static UniqueCodes|Proxy randomOrCreate(array $attributes = [])
 * @method static UniqueCodes[]|Proxy[] all()
 * @method static UniqueCodes[]|Proxy[] findBy(array $attributes)
 * @method static UniqueCodes[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static UniqueCodes[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static UniqueCodesRepository|RepositoryProxy repository()
 * @method UniqueCodes|Proxy create(array|callable $attributes = [])
 */
final class UniqueCodesFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'code' => self::faker()->numberBetween(1,10),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(UniqueCodes $uniqueCodes): void {})
        ;
    }

    protected static function getClass(): string
    {
        return UniqueCodes::class;
    }
}
