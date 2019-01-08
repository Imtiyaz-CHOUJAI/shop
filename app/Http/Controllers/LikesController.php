<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Like;
use App\Dislike;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Like Shop.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function likeShop($id) {
        try {

            $existing_like = Like::whereShopId($id)->whereUserId(Auth::id())->first();
            
            if (is_null($existing_like)) {
                Like::create([
                    'shop_id' => $id,
                    'user_id' => Auth::id()
                ]);
            } else {
                if (is_null($existing_like->deleted_at)) {
                    $existing_like->delete();
                } else {
                    $existing_like->restore();
                }
            }
            $shop = Shop::with('likes')->findOrFail($id);
            // $shop = Shop::with(['likes'])->findorfail($id)->get();
            
            return $shop;

        } catch (ModelNotFoundException $e) {
            throw $e;
        }
    }

    /**
     * Dislike Shop.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function disLikeShop($id) {
        // @Todo
    }
}
