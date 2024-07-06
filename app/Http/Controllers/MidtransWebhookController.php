<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Transaction;

class MidtransWebhookController extends Controller
{
    public function handleWebhook(Request $req)
    {
        try {
            $notification_body = json_decode($req->getContent(), true);
            $order_id = $notification_body['order_id'];
            $transaction_id = $notification_body['transaction_id'];
            $status_code = $notification_body['status_code'];

            // Find the transaction by order_id 
            $transaction = Transaction::where('order_id', $order_id)->first();

            if (!$transaction) {
                return response()->json(['code' => 0, 'message' => 'Terjadi kesalahan | Pembayaran tidak valid'], 404);
            }

            // Update the transaction status based on the status_code
            switch ($status_code) {
                case '200':
                    $transaction->transaction_status = "SUCCESS";
                    break;
                case '201':
                    $transaction->transaction_status = "PENDING";
                    break;
                case '202':
                    $transaction->transaction_status = "CANCEL";
                    break;
                default:
                    return response()->json(['code' => 0, 'message' => 'Status tidak dikenal'], 400);
            }

            $transaction->save();

            return response('Ok', 200)->header('Content-Type', 'text/plain');
        } catch (\Exception $e) {
            // Log the exception message for debugging
            Log::error('Webhook error: ' . $e->getMessage());
            return response('Error', 500)->header('Content-Type', 'text/plain');
        }
    }
}
