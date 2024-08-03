<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Http\Resources\GeneralResource;
use App\Service\UserService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

        /**
     * @OA\Post(
     *     path="/api/v1/login",
     *     tags={"Users"},
     *     summary="Login",
     *     description="Login",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/User")
     *         ),
     *     ),
     * )
     */
    public function login(AuthRequest $request)
    {
        return $this->userService->login($request->validated());
    }

        /**
     * @OA\Post(
     *     path="/api/v1/logout",
     *     tags={"Users"},
     *     summary="Logout",
     *     description="Logout",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/User")
     *         ),
     *     ),
     * )
     */
    public function logout()
    {
        auth()->logout();
        return new GeneralResource(['message' => 'success']);
    }
}
