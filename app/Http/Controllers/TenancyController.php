<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class TenancyController extends Controller
{
    public function index(Request $request)
    {
        $editTenant = $request->filled('edit')
            ? Tenant::findOrFail($request->query('edit'))
            : null;

        return view('backend.tenants.index', [
            'editTenant' => $editTenant,
            'tenants'    => Tenant::latest()->paginate(10),
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        try {

            $tenant = Tenant::create($data);

            $tenant->domains()->create([
                'domain' => $data['domain_name'] . '.' . config('app.domain'),
            ]);

            $tenant->run(function () use ($data) {
                User::create([
                    'name'     => 'Tenant Admin',
                    'email'    => $data['email'],
                    'password' => Hash::make($data['password']),
                    // add any extra user fields you need here
                ]);
            });



            return back()->with('success', 'Tenant created');
        } catch (\Throwable $e) {

            Log::error('Tenant create failed', ['error' => $e->getMessage()]);
            return back()->withErrors('Unable to create tenant. Please try again.');
        }
    }

    public function update(Request $request, Tenant $tenant)
    {
        $data = $this->validated($request, $tenant->id);

        // If password left blank, don’t change it
        if (blank($data['password'])) {
            unset($data['password']);
        }

        try {
            $tenant->update($data);
            return redirect()
                ->route('backend.tenants.index')
                ->with('success', 'Tenant updated');
        } catch (\Throwable $e) {
            Log::error('Tenant update failed', ['id' => $tenant->id, 'error' => $e->getMessage()]);
            return back()->withErrors('Unable to update tenant. Please try again.');
        }
    }

    public function destroy(Tenant $tenant)
    {
        try {
            $tenant->delete();
            return back()->with('success', 'Tenant deleted');
        } catch (\Throwable $e) {
            Log::error('Tenant delete failed', ['id' => $tenant->id, 'error' => $e->getMessage()]);
            return back()->withErrors('Unable to delete tenant. Please try again.');
        }
    }

    // ────────────────────────────────────────────────────────────────

    private function validated(Request $r, $ignoreId = null): array
    {
        // merge domain_name rule if you’re capturing it in the form
        return $r->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:tenants,email,' . $ignoreId,
            'password'    => $ignoreId ? 'nullable|min:6' : 'required|min:6',
            'data'        => 'nullable|json',
            'domain_name' => 'required|alpha_dash|max:50', // <─ add this in your form
        ]);
    }
}
