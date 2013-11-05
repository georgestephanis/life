<?php

include( 'game.php' );

class The_Tests_Of_Life extends PHPUnit_Framework_TestCase {

	function test_does_a_clear_board_stay_clear() {
		$initial = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$correct = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$wrong = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '          O         ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$game = new The_Game_Of_Life( $initial );
		$this->assertEquals(    $game->tidy_board( $correct ), $game->turn( $initial ) );
		$this->assertNotEquals( $game->tidy_board( $wrong ),   $game->turn( $initial ) );
	}

	function test_does_an_almost_empty_board_clear_up() {
		$initial = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '          O         ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '     O              ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$correct = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$wrong = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '          O         ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '     O              ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$game = new The_Game_Of_Life( $initial );
		$this->assertEquals(    $game->tidy_board( $correct ), $game->turn( $initial ) );
		$this->assertNotEquals( $game->tidy_board( $wrong ),   $game->turn( $initial ) );
	}

	function test_do_safe_ones_stay_alive() {
		$initial = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '         OO         ' ),
			str_split( '        O  O        ' ),
			str_split( '         OO         ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$correct = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '         OO         ' ),
			str_split( '        O  O        ' ),
			str_split( '         OO         ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$wrong = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$game = new The_Game_Of_Life( $initial );
		$this->assertEquals(    $game->tidy_board( $correct ), $game->turn( $initial ) );
		$this->assertNotEquals( $game->tidy_board( $wrong ),   $game->turn( $initial ) );
	}

	function test_do_new_ones_generate_properly() {
		$initial = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '          O         ' ),
			str_split( '         O O        ' ),
			str_split( '          O         ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$correct = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '          O         ' ),
			str_split( '         OOO        ' ),
			str_split( '          O         ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$wrong = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '          O         ' ),
			str_split( '         O O        ' ),
			str_split( '          O         ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$game = new The_Game_Of_Life( $initial );
		$this->assertEquals(    $game->tidy_board( $correct ), $game->turn( $initial ) );
		$this->assertNotEquals( $game->tidy_board( $wrong ),   $game->turn( $initial ) );
	}

	function test_tricky() {
		$initial = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '       OOO          ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$correct = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '        O           ' ),
			str_split( '        O           ' ),
			str_split( '        O           ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$wrong = array(
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '        O           ' ),
			str_split( '       OOO          ' ),
			str_split( '        O           ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
			str_split( '                    ' ),
		);
		$game = new The_Game_Of_Life( $initial );
		$this->assertEquals(    $game->tidy_board( $correct ), $game->turn( $initial ) );
		$this->assertNotEquals( $game->tidy_board( $wrong ),   $game->turn( $initial ) );
	}

}