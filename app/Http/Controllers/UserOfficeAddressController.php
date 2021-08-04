<?php

namespace App\Http\Controllers;

use App\Models\UserOfficeAddress;
use Illuminate\Http\Request;

class UserOfficeAddressController extends Controller
{
    public function show()
    {
        $addresses = UserOfficeAddress::query()->orderBy('street')->get();

        return view('user_office_address', [
            'addresses' => $addresses
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'city' => 'required|string',
            'area' => 'required|string',
            'street' => 'string',
            'house' => 'integer',
            'info' => 'string'
        ]);

        UserOfficeAddress::create([
            'name' => $validated['name'],
            'city' => $validated['city'],
            'area' => $validated['area'],
            'street' => $validated['street'],
            'house' => $validated['house'],
            'info' => $validated['info']
        ]);

        return view('user_office_address');
    }
}
