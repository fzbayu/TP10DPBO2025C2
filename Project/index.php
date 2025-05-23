<?php
require_once 'viewmodel/PemainViewModel.php';
require_once 'viewmodel/PosisiViewModel.php';
require_once 'viewmodel/KlubViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'pemain';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity == 'pemain') {
    $viewModel = new PemainViewModel();

    if ($action == 'list') {
        $PemainList = $viewModel->getPemainList();
        require_once 'view/PemainView.php';

    } elseif ($action == 'add') {
        $klub = $viewModel->getKlub();
        $posisi = $viewModel->getPosisi();
        require_once 'view/addPemainView.php';

    } elseif ($action == 'edit') {
        $pemain = $viewModel->getPemainById($_GET['id']);
        $klub = $viewModel->getKlub();
        $posisi = $viewModel->getPosisi();
        require_once 'view/editPemainView.php';

    } elseif ($action == 'save') {
        $viewModel->bindInput($_POST);
        $viewModel->addPemain();
        header('Location: index.php?entity=pemain');

    } elseif ($action == 'update') {
        $viewModel->bindInput($_POST);
        $viewModel->updatePemain($_GET['id']);
        header('Location: index.php?entity=pemain');

    } elseif ($action == 'delete') {
        $viewModel->deletePemain($_GET['id']);
        header('Location: index.php?entity=pemain');
    }
}
elseif ($entity == 'klub') {
    $viewModel = new KlubViewModel();

    if ($action == 'list') {
        $KlubList = $viewModel->getKlubList();
        require_once 'view/KlubView.php';

    } elseif ($action == 'add') {
        require_once 'view/addKlubView.php';

    } elseif ($action == 'edit') {
        $klub = $viewModel->getKlubById($_GET['id']);
        require_once 'view/editKlubView.php';

    } elseif ($action == 'save') {
        $viewModel->bindInput($_POST);
        $viewModel->addKlub();
        header('Location: index.php?entity=klub');

    } elseif ($action == 'update') {
        $viewModel->bindInput($_POST);
        $viewModel->updateKlub($_GET['id']);
        header('Location: index.php?entity=klub');

    } elseif ($action == 'delete') {
        $viewModel->deleteKlub($_GET['id']);
        header('Location: index.php?entity=klub');
    }

} elseif ($entity == 'posisi') {
    $viewModel = new PosisiViewModel();

    if ($action == 'list') {
        $PosisiList = $viewModel->getPosisiList();
        require_once 'view/PosisiView.php';

    } elseif ($action == 'add') {
        require_once 'view/addPosisiView.php';

    } elseif ($action == 'edit') {
        $posisi = $viewModel->getPosisiById($_GET['id']);
        require_once 'view/editPosisiView.php';

    } elseif ($action == 'save') {
        $viewModel->bindInput($_POST);
        $viewModel->addPosisi();
        header('Location: index.php?entity=posisi');

    } elseif ($action == 'update') {
        $viewModel->bindInput($_POST);
        $viewModel->updatePosisi($_GET['id']);
        header('Location: index.php?entity=posisi');

    } elseif ($action == 'delete') {
        $viewModel->deletePosisi($_GET['id']);
        header('Location: index.php?entity=posisi');
    }
}
?>
