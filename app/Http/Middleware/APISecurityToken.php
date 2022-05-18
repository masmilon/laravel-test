<?php
namespace App\Http\Middleware;
use Closure;
//use App\Http\Traits\HelperTrait;
class APISecurityToken
{
   // use HelperTrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $access_token = $request->header('Authorization');
        if($access_token){
            if($access_token == 'G!n!l@b') {
                return $next($request);
            }
        }
        return response()->json(['success' => false, 'message' => "Access denied"], 401);

        // return $this->apiResponse(false, 'Access Denied', [], 401);
    }
}