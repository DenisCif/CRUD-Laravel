<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function index()
    {
        $user = Usuarios::all();
        return view('usuarios.index', compact('user'));
    }


    public function show($id)
    {
        $user = Usuarios::find($id);

        return view('usuarios.show', compact('user'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre_completo' => 'required|string|max:255', // Debes usar 'nombre' en lugar de 'nombre_completo' si es el nombre del campo en el formulario
        ]);

        // Crea un nuevo usuario
        $user = new Usuarios();
        $user->nombre_completo = $request->input('nombre_completo'); // Asegúrate de que 'nombre' coincida con el nombre del campo en el formulario
        $user->save();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario creado con éxito.');
    }

    public function edit($id)
    {
        $user = Usuarios::find($id);

        return view('usuarios.edit', compact('user')); // Cambia 'users' por 'user'
    }

    public function update(Request $request, $id)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre_completo' => 'required|string|max:255',
        ]);

        // Actualiza el usuario existente
        $user = Usuarios::find($id);
        $user->nombre_completo = $request->input('nombre_completo');
        $user->save();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario actualizado con éxito.');
    }

    public function destroy($id)
    {
        // Encuentra el usuario por ID y elimínalo
        $user = Usuarios::find($id);

        if (!$user) {
            // Si el usuario no se encuentra, puedes manejarlo aquí (por ejemplo, mostrar un mensaje de error)
            return redirect()->route('usuarios.index')->with('error', 'Usuario no encontrado.');
        }

        // Elimina el usuario
        $user->delete();

        // Redirige de regreso a la lista de usuarios con un mensaje de éxito
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado con éxito.');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Realiza la búsqueda de usuarios por nombre que coincida con el término de búsqueda
        $users = Usuarios::where('nombre_completo', 'like', '%' . $searchTerm . '%')->get();
        // $users = Usuarios::where('nombre_completo', 'LIKE', "%$searchTerm%")->get();


        return view('usuarios.search', compact('users'));
    }

    // public function buscarPorNombreCompleto(Request $request)
    // {
    //     $nombreCompleto = $request->input('nombre_completo');

    //     $resultados = Usuarios::where('nombre_completo', 'LIKE', "%$nombreCompleto%")->get();

    //     // Realiza las acciones necesarias con los resultados obtenidos
    //     // ...

    //     return view('vista_resultados', ['resultados' => $resultados]);
    // }
}
