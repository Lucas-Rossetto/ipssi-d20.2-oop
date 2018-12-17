<?php

declare(strict_types=1);

namespace App\Connect4\Service;

use Support\Renderer\Output;


public final class Saisie
{

    public function showWinnerMessage(){

        echo 'Vous avez gagné la partie !';

    }

    public function showLoserMessage(){

        echo 'Vous avez perdu !';

    }

    public function showYourTurnMessage(){

        echo 'A votre tour !';

    }

    public function showErrorWrongCaseMessage(){

        echo 'Désolé , la case que vous avez choisi n est pas disponible !';

    }

    public function showErrorImpossibleCaseMessage(){

        echo 'Désolé , la case que vous avez choisi n existe pas !';

    }
}