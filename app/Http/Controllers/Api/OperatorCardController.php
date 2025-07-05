<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OperatorCard;
use Illuminate\Http\Request;

class OperatorCardController extends Controller
{
    public function index(Request $request) 
    {
        $limit = $request->query('limit') ? $request->query('limit') : 10;

        $operatorCards = OperatorCard::with('dataPlans:name,price,operator_card_id')
                                ->where('status', 'active')
                                ->paginate($limit); 

        return response()->json($operatorCards);
    }
}
