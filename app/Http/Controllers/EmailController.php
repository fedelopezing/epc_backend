<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendProjectEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'project' => 'required|string|max:255',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'project' => $request->project,
        ];

        try {
            Mail::send('emails.project-notification', $data, function($message) use ($data) {
                $message->to('presupuestos@epc.com.py')
                        ->subject('Presupuesto Web');
            });

            return response()->json([
                'success' => true,
                'message' => 'Email sent successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send email',
                'error' => $e->getMessage()
            ], 500);
        }
    }
} 