<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserRatingController extends Controller
{
    public function index()
    {
    }

    public function addRatingProduct(Request $request)
    {
        $order = DB::table('transactions')->join('users', 'users.id', 'transactions.tst_user_id')
            ->where('transactions.tst_user_id', Auth::id())
            ->join('orders', 'orders.od_transaction_id', 'transactions.id')
            ->where('od_product_id', $request->product_id)
            ->get();
        if (count($order) != 0) {
            if ($request->ajax()) {
                $rating               = new Rating();
                $rating->r_user_id    = Auth::id();
                $rating->r_product_id = $request->product_id;
                $rating->r_number     = $request->review;
                $rating->r_content    = $request->content_review;
                $rating->created_at   = Carbon::now();
                $rating->save();

                if ($rating->id) {
                    $html = view('frontend.pages.product_detail.include._inc_rating_item', compact('rating'))->render();
                    $this->staticRatingProduct($request->product_id, $request->review);
                }
                return response([
                    'html'     => $html ?? null,
                    'messages' => 'Đánh giá sản phẩm thành công'
                ]);
            }
        } else {
            return response([
                'type' => 'warning',
                'messages' => 'Bạn chưa mua hàng!'
            ]);
        }
    }

    public function staticRatingProduct($productID, $number)
    {
        $product =  Product::find($productID);
        $product->pro_review_total++;
        $product->pro_review_star += $number;
        $product->save();

        $product->pro_age_review = round($product->pro_review_star / $product->pro_review_total, 0);
        $product->save();
    }
}
