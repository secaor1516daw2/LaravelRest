<?php namespace App\Http\Middleware;

use Illuminate\Contracts\Routing\Middleware;
use Closure;
use Redirect;
use App\User;

class Existe{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// Parte del middleware dónde se modifica la solicitud entrante

		// Aquí comprobaremos si el usuario que estamos comprobando existe.
		$id=$request->segment(2);
		$user= User::find($id);

		// Si no existe el usuario que se pone como parámetro se manda a la página de users.
		if ($user==null)
			return Redirect::to('users');

		// Si el usuario existe se envía a $next($request)
		// que sería la parte de la aplicación a la que tendría que ir.
		$respuesta=$next($request);


		// Se devuelve la respuesta.
		return ($respuesta);
	}
}

