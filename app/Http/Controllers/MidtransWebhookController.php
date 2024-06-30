<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Transaction;

class MidtransWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->input('order_id') . $request->input('status_code') . $request->input('gross_amount') . $serverKey);
        if ($hashed !== $request->input('signature_key')) {
            Log::error('Invalid signature key');
            return response()->json([
                'status_code' => 401,
                'message' => 'Invalid signature key',
            ], 401);
        }

        $transaction = Transaction::where('order_id', $request->input('order_id'))->first();
        if ($transaction) {
            if ($request->input('transaction_status') == 'capture' || $request->input('transaction_status') == 'settlement') {
                $transaction->update([
                    'transaction_status' => $request->input('transaction_status'),
                ]);
            } else if ($request->input('transaction_status') == 'deny' || $request->input('transaction_status') == 'cancel' || $request->input('transaction_status') == 'expire') {
                $transaction->update([
                    'transaction_status' => $request->input('transaction_status'),
                ]);
            }

            Log::info('Transaction status updated');

            return response()->json([
                'status_code' => 200,
                'message' => 'OK',
            ], 200);
        } else {
            Log::error('Transaction not found');
            return response()->json([
                'status_code' => 404,
                'message' => 'Transaction not found',
            ], 404);
        }
    }
}
