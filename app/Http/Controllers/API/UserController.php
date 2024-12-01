<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Register a new user
    public function register(Request $request)
    {
        try {
            // Validate request
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'max:255', 'unique:users'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['nullable', 'string', 'max:255'],
                'password' => ['required', 'string', Password::min(8)],
            ]);

            // Create user
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            // Create a token for the user
            $tokenResult = $user->createToken('authToken')->plainTextToken;

            // Return success response
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'User Registered');

        } catch (\Exception $e) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $e
            ], 'Authentication Failed', 500);
        }
    }

    // Login an existing user
    public function login(Request $request)
    {
        try {
            // Validate login request
            $request->validate([
                'email' => 'email|required',
                'password' => 'required',
            ]);

            // Attempt login with credentials
            if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return ResponseFormatter::error([
                    'message' => 'Unauthorized'
                ], 'Authentication Failed', 401);
            }

            // Get user data
            $user = User::where('email', $request->email)->first();

            // Create a token for the user
            $tokenResult = $user->createToken('authToken')->plainTextToken;

            // Return success response
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'User Authenticated');

        } catch (\Exception $e) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $e
            ], 'Authentication Failed', 500);
        }
    }

    // Fetch logged-in user's profile
    public function fetch(Request $request)
    {
        return ResponseFormatter::success($request->user(), 'User profile fetched successfully');
    }

    // Update logged-in user's profile
    public function updateProfile(Request $request)
    {
        try {
            $user = $request->user(); // Get the authenticated user
            $data = $request->all(); // Get all the input data

            // Update user profile data
            $user->update($data);

            return ResponseFormatter::success($user, 'User profile updated successfully');

        } catch (\Exception $e) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $e
            ], 'Update Failed', 500);
        }
    }

    // Logout the user by deleting the current token
    public function logout(Request $request)
    {
        try {
            // Revoke the current access token
            $request->user()->currentAccessToken()->delete();

            return ResponseFormatter::success(null, 'Logged out successfully');
        } catch (\Exception $e) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $e
            ], 'Logout Failed', 500);
        }
    }
}
