<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generate()
    {
        $link = 'https://example.com'; // Replace this with any link
        $qr = QrCode::size(300)->generate($link);
        return view('qr', compact('qr'));
    }

    public function form()
{
    return view('qr-form');
}

public function generateFromInput(Request $request)
{
    $request->validate(['link' => 'required|url']);
    $qr = QrCode::size(300)->generate($request->link);
    return view('qr', compact('qr'));
}

}
