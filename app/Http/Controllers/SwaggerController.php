<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *     title="API Documentation",
 *     version="1.0.0",
 *     description="This is a sample API documentation."
 * )
 *
 * @OA\SecurityScheme(
 *     type="http",
 *     description="Use a JWT token to authorize",
 *     name="Authorization",
 *     in="header",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     securityScheme="bearerAuth",
 * )
 */
class SwaggerController extends Controller
{
}
