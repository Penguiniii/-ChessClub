<?php

namespace App\Factory;

use App\Entity\CardDetails;
use App\Repository\CardDetailsRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<CardDetails>
 *
 * @method static CardDetails|Proxy createOne(array $attributes = [])
 * @method static CardDetails[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static CardDetails|Proxy find(object|array|mixed $criteria)
 * @method static CardDetails|Proxy findOrCreate(array $attributes)
 * @method static CardDetails|Proxy first(string $sortedField = 'id')
 * @method static CardDetails|Proxy last(string $sortedField = 'id')
 * @method static CardDetails|Proxy random(array $attributes = [])
 * @method static CardDetails|Proxy randomOrCreate(array $attributes = [])
 * @method static CardDetails[]|Proxy[] all()
 * @method static CardDetails[]|Proxy[] findBy(array $attributes)
 * @method static CardDetails[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static CardDetails[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static CardDetailsRepository|RepositoryProxy repository()
 * @method CardDetails|Proxy create(array|callable $attributes = [])
 */
final class CardDetailsFactory extends ModelFactory
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
            'NameOnCard' => self::faker()->text(),
            'CardNumber' => self::faker()->randomNumber(),
            'exiryDate' => self::faker()->datetime(),
            'CCV' => self::faker()->randomNumber(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(CardDetails $cardDetails): void {})
        ;
    }

    protected static function getClass(): string
    {
        return CardDetails::class;
    }
}
