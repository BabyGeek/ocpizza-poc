<?php
namespace App\Providers;

class AlimentsProvider extends \Faker\Provider\Base
{
    protected static $vegetableNames = array(
        'Oignon',
        'Ail',
        'Tomate',
        'Pomme de terre',
        'Carotte',
        'Poivron',
        'Basil',
        'Persil',
        'Brocoli',
        'Blé',
        'Épinard',
        'Champignon',
        'Gingembre',
        'Chilie',
        'Romarin',
        'Concombre',
        'Cornichon',
        'Avocat',
        'Citrouille',
        'Menthe',
        'Aubergine',
        'Poireau'
    );

    protected static $fruitNames = array(
        'Citron',
        'Pomme',
        'Banane',
        'Fraise',
        'Orange',
        'Ananas',
        'Myrtille',
        'Raisin',
        'Noix de coco',
        'Framboise',
        'Mangue',
        'Poire',
        'Mûre',
        'Cerise',
        'Pastèque',
        'Melon',
        'Kiwi',
        'Papaye',
        'Goyave',
        'Litchi'
    );

    protected static $meatNames = array(
        'Poulet',
        'Bacon',
        'Saucisse',
        'Boeuf',
        'Jambon',
        'Porc',
        'Dinde',
        'Paupiette',
        'Kebab',
    );

    protected static $sauceNames = array(
        'Sauce tomate',
        'Concentré de tomate',
        'Mayonaise',
        'Sauce barbecue',
        'Ketchup'
    );

    /**
     * A random Food Name.
     * @return string
     */
    public function foodName()
    {
        return static::randomElement(array_merge(static::$meatNames, static::$vegetableNames, static::$sauceNames, static::$fruitNames));
    }
}