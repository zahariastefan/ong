<?php

namespace App\Factory;

use App\Entity\Cauze;
use App\Repository\CauzeRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Cauze>
 *
 * @method static Cauze|Proxy createOne(array $attributes = [])
 * @method static Cauze[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Cauze|Proxy find(object|array|mixed $criteria)
 * @method static Cauze|Proxy findOrCreate(array $attributes)
 * @method static Cauze|Proxy first(string $sortedField = 'id')
 * @method static Cauze|Proxy last(string $sortedField = 'id')
 * @method static Cauze|Proxy random(array $attributes = [])
 * @method static Cauze|Proxy randomOrCreate(array $attributes = [])
 * @method static Cauze[]|Proxy[] all()
 * @method static Cauze[]|Proxy[] findBy(array $attributes)
 * @method static Cauze[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Cauze[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static CauzeRepository|RepositoryProxy repository()
 * @method Cauze|Proxy create(array|callable $attributes = [])
 */
final class CauzeFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            'title' => self::faker()->text(10),
            'price' => self::faker()->numberBetween(100,500)
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Cauze $cauze): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Cauze::class;
    }
}
