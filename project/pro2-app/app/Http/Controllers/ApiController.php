<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class ApiController extends Controller
{
    public function getALLUsers() {
        $Users = User::get()->toJson(JSON_PRETTY_PRINT);
        return response($Users, 200);
    }
    public function createUser(Request $request) {
        $User = new User;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = $request->password;
        // $User->note = $request->note;
        $User->save();

        return response()->json([
            "message" => "User record created"
        ], 201);
    }
    public function getUser($id) {
        if (User::where('id', $id)->exists()) {
            $User = User::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($User, 200);
        } else {
            return response()->json([
                "message" => "User not found"
            ], 404);
        }
    }
    public function updateUser(Request $request, $id) {
        if (User::where('id', $id)->exists()) {
            $User = User::find($id);
            $User->name = is_null($request->name) ? $User->name : $request->name;
            $User->email = $request->email;
            $User->password = $request->password;
            // $User->note = is_null($request->note) ? $User->note : $request->note;
            $User->save();

            return response()->json([
                "message" => "records updated succesfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "User not found"
            ], 404);
        }
    }
    public function deleteUser($id) {
        if(User::where('id', $id)->exists()) {
            $User = User::find($id);
            $User->delete();

            return response()->json([
                "message" => "User deleted"
            ], 200);
        } else {
            return response()->json([
                "message" => "User not found"
            ], 404);
        }
    }

    public function getALLPosts() {
        $Posts = Post::get()->toJson(JSON_PRETTY_PRINT);
        return response($Posts, 200);
    }
    public function createPost(Request $request) {
        $Post = new Post;
        $Post->body = $request->body;
        // $Post->note = $request->note;
        $Post->save();

        return response()->json([
            "message" => "User record created"
        ], 201);
    }
    public function getPost($id) {
        if (Post::where('id', $id)->exists()) {
            $Post = Post::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($Post, 200);
        } else {
            return response()->json([
                "message" => "User not found"
            ], 404);
        }
    }
    public function updatePost(Request $request, $id) {
        if (Post::where('id', $id)->exists()) {
            $Post = Post::find($id);
            $Post->body = is_null($request->body) ? $Post->body : $request->body;
            // $User->note = is_null($request->note) ? $User->note : $request->note;
            $Post->save();

            return response()->json([
                "message" => "records updated succesfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "User not found"
            ], 404);
        }
    }
    public function deletePost($id) {
        if(Post::where('id', $id)->exists()) {
            $Post = Post::find($id);
            $Post->delete();

            return response()->json([
                "message" => "User deleted"
            ], 200);
        } else {
            return response()->json([
                "message" => "User not found"
            ], 404);
        }
    }
}
