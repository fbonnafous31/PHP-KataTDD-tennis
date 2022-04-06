<?php

declare(strict_types=1);

namespace TennisGame;

use App\TennisGameTest;
use App\TennisGame3;

/**
 * TennisGame1 test case.
 */
class TennisGame3Test extends TennisGameTest
{
    /**
     * Prepares the environment before running a test.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new TennisGame3('player1', 'player2');
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
