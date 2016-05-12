<?php namespace App\Http\Middleware;

use Illuminate\Contracts\Routing\Middleware;
use Closure;
use Redirect;
use App\User;
use Auth;

class Propietario{
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

		$id=$request->segment(2);

		// Comprobamos si el usuario logueado coincide con el users/id que tenemos en la ruta.
		// Si no es así lo redireccionamos a users
		if (Auth::user()->id !== (int) $id)
			return Redirect::to('users');

		// Si coincide se envía a $next($request)
		// que sería la parte de la aplicación a la que tendría que ir.
		$respuesta=$next($request);

		// Se devuelve la respuesta.
		return ($respuesta);
	}
}
