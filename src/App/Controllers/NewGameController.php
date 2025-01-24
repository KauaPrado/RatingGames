<?php

namespace Ratinggames\App\Controllers;

use Ratinggames\App\Models\Entity\Game;
use Ratinggames\App\Repository\GameRepository;
use Ratinggames\Config\Database;
use PDO;

class NewGameController implements Controller
{
    private PDO $pdo;
    private GameRepository $gamerepository;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->gamerepository = new GameRepository($this->pdo);
    }

    public function processaRequisicao()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->showEditForm();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->NewGame();
        }
    }

    private function showEditForm()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $game = $this->gamerepository->getById($id);

            if (!$game) {
                header("Location: game-list.php");
                exit;
            }

            include 'views/edit-game.php';
        } else {
            header("Location: game-list.php");
            exit;
        }
    }

    private function NewGame()
    {
        
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        // if (!empty($_FILES['image']['name'])) {
        //     $imagePath = '../../public/images/' . basename($_FILES['image']['name']);
        //     move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
        // } else {
        //     $imagePath = $_POST['current_image'];
        // }

        $add = $this->gamerepository->add($title, $description, $image);

        if ($add) {
            header("Location: /");
            exit;
        } else {
            echo "Erro ao atualizar o jogo!";
        }
    }
}