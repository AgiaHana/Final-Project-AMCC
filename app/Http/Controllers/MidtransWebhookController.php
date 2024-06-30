<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Midtrans\Config;
use Midtrans\Notification;
use App\Models\Transaction;

class MidtransWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        // Konfigurasi Midtrans dari file konfigurasi
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Ambil payload dari request
        $payload = $request->getContent();

        // Buat instance Notification dari payload
        $notification = new Notification();

        // Parse notification
        $notification->parseNotification($payload);

        // Ambil data transaksi
        $transactionStatus = $notification->transaction_status;
        $orderId = $notification->order_id;

        // Lakukan sesuatu berdasarkan status transaksi
        Log::info('Midtrans Webhook received for order ' . $orderId . ', status: ' . $transactionStatus);

        $transaction = Transaction::where('id', $orderId)->first();
        if ($transaction) {
            $transaction->transaction_status = $transactionStatus;
            $transaction->save();
        }

        // Balas dengan response HTTP 200 OK
        return response('OK', 200);
    }
}
