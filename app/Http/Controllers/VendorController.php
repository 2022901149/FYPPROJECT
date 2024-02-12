<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function index(): JsonResponse
    {
        // Fetch all vendors
        $vendors = Vendor::all();

        // Return vendors as JSON response
        return response()->json($vendors);
    }

    public function vendor()
    {
        // Render the vendor registration view
        return view('vendor');
    }
    
    public function vendorRegister(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'vendorName' => 'required',
            'businessName' => 'required',
            'businessType' => 'required',
            'services' => 'required',
            'serviceDescription' => 'required',
            'price' => 'required|numeric', // Assuming price is required and should be numeric
            'phone' => 'required',
            'address' => 'required',
            'additionalInfo' => 'nullable',
        ]);

        // Create a new vendor instance
        $vendor = new Vendor;

        // Set the vendor attributes based on the form data
        $vendor->fill($validatedData);

        // Save the vendor to the database
        $vendor->save();

        // Flash success message to the session
        session()->flash('success', 'Successfully registered!');

        // Redirect back to the vendor registration page
        return redirect()->route('vendor');
    }

    public function getVendors()
    {
        // Fetch all vendors
        $vendors = Vendor::all();

        // Return vendors as JSON response
        return response()->json($vendors);
    }
}
