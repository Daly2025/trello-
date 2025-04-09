<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\User;


class MainController extends Controller{
    public function index(...$params){
        
        $this->view("login");
    }

    public function login(...$params)
    {
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $user = User::where("username", $_POST["username"])->first();

            if ($user && password_verify($_POST["password"], $user->password)) {
                session_start(); // Inicia la sesión.
                $_SESSION["user_id"] = $user->id; // Asigna el ID del usuario a la sesión.
                $_SESSION["username"] = $user->username;

                // Redirige al panel de administrador u otro lugar.
                header("Location: " . base_url() . "admin");
                exit();
            } else {
                // Muestra un error si las credenciales son incorrectas.
                $error = "Usuario o contraseña incorrectos.";
                $this->view("login", ["error" => $error]);
            }
        } else {
            // Redirige al inicio de sesión si los datos no están completos.
            header("Location: " . base_url() . "login");
            exit();
        }
    }

    /**
     * Carga la página de registro.
     */
    public function register(...$params)
    {
        $this->view("register"); // Carga la vista "register.php".
    }

    /**
     * Maneja el registro de nuevos usuarios.
     */
    public function processRegister($request)
    {
        // Verifica que los datos requeridos estén presentes.
        if (isset($request['name'], $request['username'], $request['email'], $request['password'])) {
            $user = new User();
            $user->name = $request['name'];
            $user->username = $request['username'];
            $user->email = $request['email'];
            $user->password = password_hash($request['password'], PASSWORD_DEFAULT); // Encripta la contraseña.
            $user->role = $request['role'] ?? 'collaborator'; // Asigna el rol predeterminado si no se especifica.
            $user->save(); // Guarda el usuario en la base de datos.

            echo "Registro exitoso. Ahora puedes iniciar sesión.";
        } else {
            echo "Error: Faltan campos obligatorios para el registro.";
        }
    }
}


?>