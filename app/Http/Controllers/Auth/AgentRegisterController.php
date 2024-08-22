<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;

class AgentRegisterController extends Controller
{
    // Show the registration form for both types of agents
    public function showAgentRegisterForm()
    {
        return view('auth.agent-register');
    }

    // Handle individual agent registration
    public function registerIndividual(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:agents',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'nin' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $ninPath = $request->file('nin')->store('nin_documents', 'public');

        $agent = Agent::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'nin_document' => $ninPath,
            'password' => bcrypt($request->password),
            'agent_type' => 'individual',
        ]);

        // Additional logic here (e.g., sending confirmation emails)

        return redirect()->route('login')->with('success', 'Individual Agent registered successfully.');
    }

    // Handle company agent registration
    public function registerCompany(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:agents',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'cac' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $cacPath = $request->file('cac')->store('cac_documents', 'public');

        $agent = Agent::create([
            'name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'cac_document' => $cacPath,
            'password' => bcrypt($request->password),
            'agent_type' => 'company',
        ]);

        // Additional logic here (e.g., sending confirmation emails)

        return redirect()->route('login')->with('success', 'Company Agent registered successfully.');
    }
}
