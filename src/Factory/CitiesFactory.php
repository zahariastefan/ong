<?php

namespace App\Factory;

use App\Entity\Cities;
use App\Repository\CitiesRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Cities>
 *
 * @method static Cities|Proxy createOne(array $attributes = [])
 * @method static Cities[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Cities|Proxy find(object|array|mixed $criteria)
 * @method static Cities|Proxy findOrCreate(array $attributes)
 * @method static Cities|Proxy first(string $sortedField = 'id')
 * @method static Cities|Proxy last(string $sortedField = 'id')
 * @method static Cities|Proxy random(array $attributes = [])
 * @method static Cities|Proxy randomOrCreate(array $attributes = [])
 * @method static Cities[]|Proxy[] all()
 * @method static Cities[]|Proxy[] findBy(array $attributes)
 * @method static Cities[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Cities[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static CitiesRepository|RepositoryProxy repository()
 * @method Cities|Proxy create(array|callable $attributes = [])
 */
final class CitiesFactory extends ModelFactory
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
            'city' => self::faker()->city(),
            'country' => self::faker()->country(),
            'added_at' => \DateTimeImmutable::createFromMutable(self::faker()->datetime()),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Cities $cities): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Cities::class;
    }
}
