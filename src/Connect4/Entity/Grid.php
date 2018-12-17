<?php

namespace App\Connect4\Entity;


class Grid {


    protected $rows = 6;
    protected $columns = 7;
    protected $board_array = array();
    protected $current_player = 0;


    protected $moves = 0;

    function __construct( $rows = 6, $cols = 7){

        $this->setDimensions( $rows, $cols );
    }


    protected function initializeGameBoard(){


        $_board_array = array();

        for($i = 0; $i < $this->getRows() ; $i ++ ){

            $_board_array[$i] = array();

            for($j = 0; $j < $this->getColumns() ; $j ++ ){


                $_board_array[$i][$j] = -1;

            }

        }

        $this->setCurrentBoard($_board_array);

    }

    protected function printBoard(){

        print '<p>Player '. $this->getCurrentPlayer() .': Move No. ' . $this->moves . '</p>';

        print '<table>';

        $_board_array = $this->getCurrentBoard();

        for($i = 0; $i < $this->getRows() ; $i ++ ){

            print '<tr>';

            for($j = 0; $j < $this->getColumns() ; $j ++ ){

                $_class = "";

                if( $_board_array[$i][$j] === 1 ){
                    $_class = "player-1";

                }else if( $_board_array[$i][$j] === 2 ){
                    $_class = "player-2";

                }

                print '<td class="'.$_class.'" >' . $_board_array[$i][$j] . '</td>';

            }

            print '</tr>';

        }

        print '</table>';
    }

    protected function getCurrentBoard(){

        return $this->board_array;

    }

    protected function setCurrentBoard( $board_array ){

        $this->board_array = $board_array;

    }

    protected function setDimensions($rows = 6, $cols = 7){

        if(!isset($rows)) return;

        $this->setRows($rows);
        $this->setColumns($cols===null?$rows:$cols);

    }

    public function setRows($rows = 6){

        $this->rows = $rows;

    }

    public function getRows(){

        return $this->rows;

    }

    public function setColumns($col = 7){

        $this->columns = $col;

    }

    public function getColumns(){

        return $this->columns;

    }

    public function getCurrentPlayer(){

        return $this->current_player;

    }

}
?>