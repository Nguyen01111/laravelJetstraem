public function handle($request, Closure $next)
{
    if (Auth()::user()->getAccountBalance() > 50000) {
        return $next($request);
    }
    return redirect('home')->with('message', __('Some error message'));
}