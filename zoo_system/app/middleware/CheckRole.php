
public function handle($request, Closure $next, $role) {
    if (!auth()->check() || auth()->user()->role !== $role) {
        return redirect('/login');
    }
    return $next($request);
}
