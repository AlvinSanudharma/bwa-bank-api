<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function index(Request $request) {
        $limit = $request->query('limit') ? $request->query('limit') : 10;
        
        $user = auth()->user();

        $relations = [
            'paymentMethod:id,name,code,thumbnail',
            'transactionType:id,name,code,action,thumbnail',
        ];

        $transactions = Transaction::with($relations)
                                    ->where('user_id', $user->id)
                                    ->where('status', 'success')
                                    ->orderBy('id', 'desc')
                                    ->paginate($limit);

        $transactions->getCollection()->transform(function($item) {
            $paymentMethod = $item->paymentMethod;
            if (!Str::startsWith($paymentMethod->thumbnail, ['http://', 'https://'])) {
                $item->paymentMethod->thumbnail = $paymentMethod->thumbnail ? url('banks/' . $paymentMethod->thumbnail) : '';
            }


            $transactionType = $item->transactionType;
             if (!Str::startsWith($transactionType->thumbnail, ['http://', 'https://'])) {
                $item->transactionType->thumbnail = $transactionType->thumbnail ? url('transaction-types/' . $transactionType->thumbnail) : '';
            }

            return $item;
        });

        return response()->json($transactions);
    }
}
