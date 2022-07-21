<?php

namespace App\Factory;

use App\Entity\Activities;
use App\Repository\ActivitiesRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Activities>
 *
 * @method static Activities|Proxy createOne(array $attributes = [])
 * @method static Activities[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Activities|Proxy find(object|array|mixed $criteria)
 * @method static Activities|Proxy findOrCreate(array $attributes)
 * @method static Activities|Proxy first(string $sortedField = 'id')
 * @method static Activities|Proxy last(string $sortedField = 'id')
 * @method static Activities|Proxy random(array $attributes = [])
 * @method static Activities|Proxy randomOrCreate(array $attributes = [])
 * @method static Activities[]|Proxy[] all()
 * @method static Activities[]|Proxy[] findBy(array $attributes)
 * @method static Activities[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Activities[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static ActivitiesRepository|RepositoryProxy repository()
 * @method Activities|Proxy create(array|callable $attributes = [])
 */
final class ActivitiesFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        $sports = 'soccer,basketball,tennis,baseball,golf,running,volleyball,badminton,swimming,boxing,table tennis,skiing,ice skating,roller skating,cricket,rugby,pool,darts,football,bowling,ice hockey,surfing,karate,horse racing,snowboarding,skateboarding,cycling,archery,fishing,gymnastics,figure skating,rock climbing,sumo wrestling,taekwondo,fencing,water skiing,jet skiing,weight lifting,scuba diving,judo,wind surfing,kickboxing,sky diving,hang gliding,bungee jumping';
        $array_sports = explode(',',$sports);
        $randomOffset = array_rand($array_sports);
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'activity' => $array_sports[$randomOffset],
            'price' => self::faker()->numberBetween(10,150)
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Activities $activities): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Activities::class;
    }
}
