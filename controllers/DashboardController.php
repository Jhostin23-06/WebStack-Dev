<?php

namespace Controllers;

use Model\Evento;
use MVC\Router;
use Model\Usuario;
use Model\Registro;

class DashboardController {

    public static function index(Router $router) {
        if (!is_admin()) {
            header('Location: /');
        }
        if (!is_auth()) {
            header('Location: /login');
        }
        // obtener los ultimos registros
        $registros = Registro::get(5);
        foreach ($registros as $registro ) {
            $registro->usuario = Usuario::find($registro->usuario_id);
        }

        // calcular los ingresos
        $virtuales = Registro::total('paquete_id', 2);
        $presenciales = Registro::total('paquete_id', 1);
        $ingresos = ($virtuales * 187.10) + ($presenciales * 328);
        //obtener eventos con mas y menos lugares disponibles
        $menos_disponibles = Evento::ordenarLimite('disponibles', 'ASC', 3);
        $mas_disponibles = Evento::ordenarLimite('disponibles', 'DESC', 3);

        $router->render('admin/dashboard/index', [
            'titulo' => 'Panel de Administración',
            'registros' => $registros,
            'ingresos' => $ingresos,
            'menos_disponibles' => $menos_disponibles,
            'mas_disponibles' => $mas_disponibles
        ]);
    }
}