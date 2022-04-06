<?php

declare(strict_types=1);

namespace App;

use App\TennisGame1;
use App\TennisGameTest;

/**
 * TennisGame1 test case.
 */
class TennisGame1Test extends TennisGameTest 
{
    /**
     * Prepares the environment before running a test.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new TennisGame1('player1', 'player2');
    }

    /**
     * @dataProvider data
     */
    public function testScores(int $score1, int $score2, string $expectedResult): void
    {
        $this->seedScores($score1, $score2);
        $this->assertSame($expectedResult, $this->game->getScore());
    }
}
