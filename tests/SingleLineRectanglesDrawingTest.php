<?php

declare(strict_types=1);

namespace RectanglesDrawerTdd\Test;

use PHPUnit\Framework\TestCase;

use RectanglesDrawerTdd\Rectangle;

class SingleLineRectanglesDrawingTest extends TestCase
{

    public function boxValuesProvider()
    {
        return [
            [
                "┌─┐".PHP_EOL.
                "│ │".PHP_EOL.
                "└─┘",
                1,1
            ],
            [
                "┌──┐".PHP_EOL.
                "│  │".PHP_EOL.
                "└──┘",
                1,2
            ],
            [
                "┌──┐".PHP_EOL.
                "│  │".PHP_EOL.
                "│  │".PHP_EOL.
                "└──┘",
                2,2       
            ],
            [
                "┌───┐".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "└───┘",
                3,3
            ],
            [
                "┌──────┐".PHP_EOL.
                "│      │".PHP_EOL.
                "│      │".PHP_EOL.
                "└──────┘",
                2,6
            ],
            [
                "┌───────────────┐".PHP_EOL.
                "│               │".PHP_EOL.
                "│               │".PHP_EOL.
                "└───────────────┘",
                3,15
            ],
            [
                "┌───┐".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "└───┘",
                4,3
            ]
           
        ];
    }

    /**
     * @dataProvider boxValuesProvider
     */
    public function testSidesLessThanOne($box, $row, $column)
    {
        $rectangle = new Rectangle($row, $column);
        $this->assertEquals($box, $rectangle->draw());
    }
    
}