<?php

namespace App\Exceptions;
 
use Exception;
use Illuminate\Auth\AuthenticationException; //追加
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
 
class Handler extends ExceptionHandler
{

    /**
     * 認証していない場合にガードを見てそれぞれのログインページへ飛ばず
     *
     * @param \Illuminate\Http\Request $request
     * @param AuthenticationException $exception
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function unauthenticated($request, AuthenticationException $exception)
    {
        if($request->expectsJson()){
            return response()->json(['message' => $exception->getMessage()], 401);
        }
 
        if (in_array('admin', $exception->guards())) {
            return redirect()->guest(route('admin.login'));
        }
 
        return redirect()->guest(route('login'));
    }
}
