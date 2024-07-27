<?php
require('controllers/EgresoController.php');
require('controllers/IngresoController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/libs/tailwindcss.3.4.5.js"></script>
    <title>Budget Organizer 2: Gestor de Presupuesto</title>
</head>
<body class="bg-yellow-100">
    <h1 data-key="appName" class="text-center text-3xl font-bold p-4">Budget Organizer 2: Gestor de Presupuesto</h1>
    <div class="bg-white p-4">
        <h2 class="text-2xl font-bold text-center mb-2">Balance</h2>
        <div class="flex flex-row justify-center">
            <div class="bg-green-200 p-4 text-3xl font-bold rounded rounded-lg text-center">
                $<input type="number" value="0.00" id="balance" class="bg-transparent w-[15ch] text-center box-content"></input>
            </div>
        </div>
    </div>
    <div class="flex flex-row bg-white">
        <div class="flex flex-col p-4 w-1/2 bg-green-500/25">
            <h2 data-key="earnings" class="text-center text-xl font-semibold">Ingresos</h2>
            <div class="p-[1.5ch] my-2 bg-white rounded rounded-lg">
                <h3 class="text-lg font-semibold text-center mb-2">Nuevo Ingreso</h3>
                <form class="flex flex-row gap-x-1 justify-between items-center">
                    <div class="flex flex-col w-3/4">
                        <div class="flex flex-row justify-between gap-x-2 gap-y-1 flex-wrap">
                            <div class="flex flex-col w-[49%]">
                                <label for="ingreso-nombre" data-key="name" class="text-xs font-semibold">Nombre</label>
                                <input type="text" id="ingreso-nombre" name="ingreso-nombre" class="p-1 rounded border border-slate-600/25 font-semibold"/>
                            </div>
                            <div class="flex flex-col w-[49%]">
                                <label for="ingreso-valor" data-key="value" class="text-xs font-semibold">Valor</label>
                                <div class="flex flex-row justify-around items-center rounded border border-slate-600/25 pl-1 w-full font-semibold">
                                    $<input type="number" min="0" step="0.01" id="ingreso-valor" name="ingreso-valor" value="0.00" class="py-1"/>
                                </div>
                            </div>
                            <div class="flex flex-col w-full mt-1">
                                <label for="ingreso-detalle" data-key="details" class="text-xs font-semibold">Detalle</label>
                                <textarea rows="1" style="resize: none" id="ingreso-detalle" name="ingreso-detalle" class="p-1 rounded border border-slate-600/25"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-[23%]">
                        <button type="button" class="w-full py-8 px-1 bg-green-400 text-white font-bold rounded rounded-lg hover:outline hover:outline-3 hover:outline-offset-2 hover:outline-green-400">Agregar</button>
                    </div>
                </form>
            </div>
            <table id="tabla-ingresos" class="p-2 bg-white/75 rounded rounded-lg">
                <thead>
                    <th data-key="name">Nombre</th>
                    <th data-key="details">Detalle</th>
                    <th data-key="value">Valor</th>
                </thead>
                <tbody id="tabla-ingresos-body"></tbody>
            </table>
        </div>
        <div class="flex flex-col p-4 w-1/2 bg-red-500/25">
            <h2 data-key="spendings" class="text-center text-xl font-semibold">Egresos</h2>
            <div class="p-[1.5ch] my-2 bg-white rounded rounded-lg">
                <h3 class="text-lg font-semibold text-center mb-2">Nuevo Egreso</h3>
                <form class="flex flex-row gap-x-1 justify-between items-center">
                    <div class="flex flex-col w-3/4">
                        <div class="flex flex-row justify-between gap-x-2 gap-y-1 flex-wrap">
                            <div class="flex flex-col w-[49%]">
                                <label for="egreso-nombre" data-key="name" class="text-xs font-semibold">Nombre</label>
                                <input type="text" id="egreso-nombre" name="egreso-nombre" class="p-1 rounded border border-slate-600/25 font-semibold"/>
                            </div>
                            <div class="flex flex-col w-[49%]">
                                <label for="egreso-valor" data-key="value" class="text-xs font-semibold">Valor</label>
                                <div class="flex flex-row justify-around items-center rounded border border-slate-600/25 pl-1 w-full font-semibold">
                                    $<input type="number" min="0" step="0.01" id="egreso-valor" name="egreso-valor" value="0.00" class="py-1"/>
                                </div>
                            </div>
                            <div class="flex flex-col w-full mt-1">
                                <label for="egreso-detalle" data-key="details" class="text-xs font-semibold">Detalle</label>
                                <textarea rows="1" style="resize: none" id="egreso-detalle" name="egreso-detalle" class="p-1 rounded border border-slate-600/25"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-[23%]">
                        <button type="button" class="w-full py-8 px-1 bg-red-400 text-white font-bold rounded rounded-lg hover:outline hover:outline-3 hover:outline-offset-2 hover:outline-red-400">Agregar</button>
                    </div>
                </form>
            </div>
            <table id="tabla-egresos" class="p-2 bg-white/75 rounded rounded-lg">
                <thead>
                    <th data-key="name">Nombre</th>
                    <th data-key="details">Detalle</th>
                    <th data-key="value">Valor</th>
                </thead>
                <tbody id="tabla-egresos-body"></tbody>
            </table>
        </div>
    </div>
</body>
</html>