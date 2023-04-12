<?php

namespace App\Http\Controllers\API\v1\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        try {
            DB::beginTransaction();

            $user = User::updateOrCreate(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                ],
                [
                    'password' => bcrypt($request->password),
                ]
            );

            DB::commit();
            return response()->json(['data' => $user], 201);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['errors' => $th->getMessage()], 400);
        }
    }
}
