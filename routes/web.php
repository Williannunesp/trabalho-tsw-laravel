<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\PlacaController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login.login');
});

Route::get('/index', [ServicoController::class, 'show'])->name('index');
Route::get('/registration', [AuthController::class, 'registration'])->name('registrar');
Route::post('/register', [AuthController::class, 'register'])->name('register-user');
Route::get('/dashboard', [AuthController::class, 'inicio']);
Route::get('/login', [AuthController::class, 'home']);
Route::post('/signin', [AuthController::class, 'login'])->name('login-add');
Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');
Route::get('/usuarios', [AuthController::class, 'show'])->name('tela_usuario');


Route::get('/marca', [MarcaController::class, 'show'])->name("tela_marca");
Route::get('/marca/novo', [MarcaController::class, 'create'])->name("telac_marca");
Route::post('/marca/novo', [MarcaController::class, 'store'])->name("cadastrar_marca");
Route::delete('/marca/{id}', [MarcaController::class, 'destroy'])->name("remover_marca");
Route::get('/marca/editar/{id}', [MarcaController::class, 'edit'])->name("telaedit_marca");
Route::post('/marca/editar/{id}', [MarcaController::class, 'update'])->name("editar_marca");

Route::get('/veiculo', [VeiculoController::class, 'show'])->name("ver_veiculo");
Route::get('/veiculo/novo', [VeiculoController::class, 'create'])->name("telac_veiculo");
Route::post('/veiculo/novo', [VeiculoController::class, 'store'])->name("cadastrar_veiculo");
Route::get('/veiculo/editar/{id}', [VeiculoController::class, 'edit'])->name("telaedit_veiculo");
Route::post('/veiculo/editar/{id}', [VeiculoController::class, 'update'])->name("editar_veiculo");
Route::delete('/veiculo/excluir/{id}', [VeiculoController::class, 'destroy'])->name("excluir_veiculo");

Route::get('/cliente', [ClienteController::class, 'show'])->name("tela_cliente");
Route::get('/cliente/novo', [ClienteController::class, 'create'])->name("telac_cliente");
Route::post('/cliente/novo', [ClienteController::class, 'store'])->name("cadastrar_cliente");
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy'])->name("remover_cliente");
Route::get('/cliente/editar/{id}', [ClienteController::class, 'edit'])->name("telaedit_cliente");
Route::post('/cliente/editar/{id}', [ClienteController::class, 'update'])->name("editar_cliente");

Route::get('/placa', [PlacaController::class, 'show'])->name("ver_placa");
Route::get('/placa/novo', [PlacaController::class, 'create'])->name("telac_placa");
Route::post('/placa/novo', [PlacaController::class, 'store'])->name("cadastrar_placa");
Route::get('/placa/editar/{id}', [PlacaController::class, 'edit'])->name("telaedit_placa");
Route::post('/placa/editar/{id}', [PlacaController::class, 'update'])->name("editar_placa");
Route::delete('/placa/excluir/{id}', [PlacaController::class, 'destroy'])->name("excluir_placa");
Route::get('/placa/dados/{id}', [VeiculoController::class, 'index'])->name("dados_placa");

Route::get('/servico', [ServicoController::class, 'show'])->name("ver_servico");
Route::get('/servico/novo', [ServicoController::class, 'create'])->name("telac_servico");
Route::post('/servico/novo', [ServicoController::class, 'store'])->name("cadastrar_servico");
Route::get('/servico/editar/{id}', [ServicoController::class, 'edit'])->name("telaedit_servico");
Route::post('/servico/editar/{id}', [ServicoController::class, 'update'])->name("editar_servico");
Route::delete('/servico/excluir/{id}', [ServicoController::class, 'destroy'])->name("excluir_servico");
Route::get('/servico/situacao/{id}', [ServicoController::class, 'index'])->name("situacao_servico");

