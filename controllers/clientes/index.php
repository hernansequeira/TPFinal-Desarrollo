<?php

include_once  '../../models/clientes.php';

$clientes =  Cliente::all();

include_once '../../views/clientes/index.view.php';