<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenerateLinkController extends Controller {

    public function __invoke(Request $request)
    {
        $validated = $this->validate($request, [
            'amount' => 'required',
            'merchant_email' => 'required|email',
            'customer_email' => 'nullable|email',
            'reference' => 'nullable',
            'editable' => 'nullable|boolean'
        ]);

        $customerEmailAddress = urlencode($validated['customer_email'] ?? '');
        $merchantEmailAddress = urlencode($validated['merchant_email']);
        $amount = urlencode($validated['amount']);
        $reference = urlencode($validated['reference'] ?? '');
        $editable = urldecode(isset($validated['editable']) && $validated['editable'] ? 1 : 0);
    
        $params = urlencode(base64_encode('search=' . $merchantEmailAddress . '&amount=' . $amount . '&reference=' . $reference . '&l=' . !$editable));
    
        return response()->json([
            'link' => 'https://www.paynow.co.zw/payment/link/'. $customerEmailAddress . '?q=' . $params 
        ], 200);
    }
}