<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebhookController extends Controller
{
    public function update() {
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = (bool) env('MIDTRANS_IS_PRODUCTION');
        $notif = new \Midtrans\Notification();

        $transactionStatus = $notif->transaction_status;
        $transactionCode = $notif->order_id;
        $fraud = $notif->fraud_status;

        DB::beginTransaction();

        try {
            $status = null;
    

            if ($transactionStatus == 'capture') {
                if($fraud == 'accept'){
                    $status = 'success';
                }
            }
            else if ($transactionStatus == 'settlement'){
                 $status = 'success';
            }
            else if($transactionStatus == 'pending'){
                $status = 'pending';
            }
            else if ($transactionStatus == 'deny') {
                $status = 'denied';
            }
            else if ($transactionStatus == 'expire') {
                $status = 'expire';
            }
            else if ($transactionStatus == 'cancel') {
                $status = 'denied';
            }

            $transaction = Transaction::where('transaction_code', $transactionCode)->first();

            if ($transaction->status != 'success') {
                $tranasctionAmount = $transaction->amount;
                $userId = $transaction->user_id;

                $transaction->update([
                    'status' => $status
                ]);

                if ($status == 'success') {
                    Wallet::where('user_id', $userId)->increment('balance', $tranasctionAmount);
                }
            }

            DB::commit();

            return response()->json();
        } catch (\Throwable $th) {
            DB::rollBack();
            
            return response()->json([
                'message' => $th->getMessage()
            ]);
        }
    }
}
