<?php

namespace App\Http\Controllers;

use App\Models\Find;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        $finds = (new FindController())->index();
        $total = (new FindController())->count();
        $count = (new FindController())->getTotal();
        $encontradas = (new FindController())->totalEncontradas();

        return view('index', [
            'pessoas' => $finds,
            'total' => $total,
            'count' => $count,
            'founded' => $encontradas,
        ]);
    }

    public function call_find()
    {
        return view('create');
    }

    public function inserirPessoas(Request $request)
    {
        $pcontroller = (new FindController())->store($request);
        $total = (new FindController())->count();
        $finds = (new FindController())->index();
        $count = (new FindController())->getTotal();
        $encontradas = (new FindController())->totalEncontradas();
        if (isset($pcontroller) && $pcontroller > 0) {
            return view('index', [
                'success' => 'Registro efectuado com sucesso',
                'total' => $total, 'pessoas' => $finds, 'count' => $count,
                'founded' => $encontradas
            ]);
        } else {
            return view('index', [
                'error' => 'Você não tem permissão para cadastrar uma pessoa desaparecida.',
                'total' => $total, 'pessoas' => $finds, 'count' => $count,
                'founded' => $encontradas
            ]);
        }
    }

    public function visualizarPessoas()
    {
        $pessoas = (new FindController())->index();
        return view('pessoas', ['pessoas' => $pessoas]);
    }

    public function concederPermissao()
    {
        $users = User::all();
       
       // dd($users);

        return view('permissao', [
            'users' => $users
        ]);
    }

    public function listar_usuarios()
    {
        $adminUsers = User::where('isAdmin', 1)->get();

        return view('listar_usuarios', [
            'users' => $adminUsers
        ]);
    }

    public function HabilitarUser(Request $request, $id)
    {

        $user = User::findOrFail($id);

        if (auth()->user()->isAdmin) {
            // Verificar se a permissão já foi concedida
            if (!$user->permissionGranted) {
                // Conceder permissão
                //dd($id);
                $user->update(['permissionGranted' => true]);
                // Redirecionar ou exibir mensagem de sucesso
                return back()->with('mensagemSucesso', 'Permissão concedida com sucesso.');
            } else {
                // Redirecionar ou exibir mensagem de que a permissão já foi concedida
                return back()->with('mensagemErro', 'A permissão já foi concedida anteriormente.');
            }
        } else {
            // Redirecionar ou exibir mensagem para usuários não autorizados
            return back()->with('mensagemErro', 'Você não tem permissão para conceder permissão de cadastro a usuários normais.');
        }
    }

    public function DesabilitarUser(Request $request, $id)
    {

        $user = User::findOrFail($id);

        if (auth()->user()->isAdmin) {
            // Verificar se a permissão já foi concedida
            if ($user->permissionGranted) {
                // Conceder permissão
                //dd($id);
                $user->update(['permissionGranted' => false]);

                // Redirecionar ou exibir mensagem de sucesso
                return back()->with('mensagemSucesso', 'Permissão concedida com sucesso.');
            } else {
                // Redirecionar ou exibir mensagem de que a permissão já foi concedida
                return back()->with('mensagemErro', 'A permissão já foi concedida anteriormente.');
            }
        } else {
            // Redirecionar ou exibir mensagem para usuários não autorizados
            return back()->with('mensagemErro', 'Você não tem permissão para conceder permissão de cadastro a usuários normais.');
        }
    }
    public function registrarPermissao(Request $request, $id)
    {

        $pessoa = (new FindController())->edit($id);
        $user = User::findOrFail($id);

        if (auth()->user()->isAdmin) {
            // Verificar se a permissão já foi concedida
            if ($user->permissionGranted) {
                // Conceder permissão
                //dd($id);
                $user->update(['permissionGranted' => false]);

                // Redirecionar ou exibir mensagem de sucesso
                return back()->with('mensagemSucesso', 'Permissão concedida com sucesso.');
            } else {
                // Redirecionar ou exibir mensagem de que a permissão já foi concedida
                return back()->with('mensagemErro', 'A permissão já foi concedida anteriormente.');
            }
        } else {
            // Redirecionar ou exibir mensagem para usuários não autorizados
            return back()->with('mensagemErro', 'Você não tem permissão para conceder permissão de cadastro a usuários normais.');
        }
    }

    public function visualizarPessoas_aparecidas()
    {
        $pessoas = (new FindController())->getEncontradas();
        return view('aparecidas', ['pessoas' => $pessoas]);
    }
    public function visualizarPessoas_desaparecidas()
    {
        $pessoas = (new FindController())->getDesaparecidos();
        return view('show', ['pessoas' => $pessoas]);
    }

    public function ListaParaAprovarPessoas_desaparecidas()
    {
        $pessoas = (new FindController())->getDesaparecidosParaAprovar();
        return view('ListaDePostparaAprovar', ['pessoas' => $pessoas]);
    }

    public function editarPessoas($id)
    {
        $pessoa = (new FindController())->edit($id);
        return view('edit', ['pessoa' => $pessoa]);
    }

    public function mostrarUmaPessoa($id)
    {
        $find = (new FindController())->show($id);
        return view('people', ['pessoa' => $find]);
    }

    public function editarPessoa(Request $request)
    {
        //$dados = (new FindController())->update($request);
        if ($dados = (new FindController())->update($request)) {
            return redirect('/home')->with([
                'success' => 'Pessoa editado com sucesso !!',
                'dados' => $dados
            ]);
        } else {
            return redirect('show')->with('ERRO', 'Você não tem permissão para editar esta pessoa desaparecida.');
        }
    }

    public function AprovarPessoaDesaparecida(Request $request)
    {
        //$dados = (new FindController())->update($request);
        if ($dados = (new FindController())->update_AprovarPessoaDesaparecida($request)) {
            return redirect('/home')->with([
                'success' => 'Pessoa editado com sucesso !!',
                'dados' => $dados
            ]);
        } else {
            return redirect('show/aprovar')->with('ERRO', 'Você não tem permissão para editar esta pessoa desaparecida.');
        }
    }

    public function ReproprovarPessoaDesaparecida(Request $request)
    {
        //$dados = (new FindController())->update($request);
        if ($dados = (new FindController())->update_ReprovarPessoaDesaparecida($request)) {
            return redirect('/home')->with([
                'success' => 'Pessoa editado com sucesso !!',
                'dados' => $dados
            ]);
        } else {
            return redirect('show')->with('ERRO', 'Você não tem permissão para editar esta pessoa desaparecida.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function check(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ],);

        if (Auth::attempt($credentials)) {
            $finds = (new FindController())->index();
            $total = (new FindController())->count();
            $count = (new FindController())->getTotal();
            $encontradas = (new FindController())->totalEncontradas();
            //$name = $request->email;

            return view('index', [
                'pessoas' => $finds,
                'total' => $total,
                'count' => $count,
                'founded' => $encontradas,
                //'name'=>$name
            ]);
        } else {
            return redirect()->back()->with('msg', 'Credenciais invalidas !!');
        }
    }

    public function metodoDeBuscaPorNome(Request $request)
    {
        $nome = $request->input('query');
        // Realize a lógica de busca usando Eloquent ou como preferir
        $usuarioEncontrado = Find::where('name', $nome)->first();
        //dd($usuarioEncontrado);
        if ($usuarioEncontrado) {

            // Redirecione para a rota apropriada
            return redirect()->route('pessoas.mostrarUmaPessoa', ['id' => $usuarioEncontrado->id]);
        } else {
            // Caso não encontrado, redirecione para alguma outra rota ou exiba uma mensagem

            return $this->index();
        }
    }
}
