<x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            User Manager
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        {{-- flash --}}
        @if (session('success'))
            <div class="p-3 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- form --}}
        <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
            <h3 class="text-lg font-medium mb-4">
                {{ $editTenant ? 'Edit Tenant #' . $editTenant->id : 'Add New Tenant' }}
            </h3>

            <form method="POST"
                action="{{ $editTenant ? route('tenants.update', $editTenant) : route('tenants.store') }}"
                class="grid gap-4 md:grid-cols-2">
                @csrf
                @if ($editTenant)
                    @method('PUT')
                @endif

                <div>
                    <label class="block text-sm font-medium">Name</label>
                    <input name="name" required value="{{ old('name', $editTenant->name ?? '') }}"
                        class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-gray-200">
                </div>
                <div>
                    <label class="block text-sm font-medium">Domain Name</label>
                    <input name="domain_name" required value="{{ old('domain_name') }}"
                        class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-gray-200">
                </div>

                <div>
                    <label class="block text-sm font-medium">Email</label>
                    <input name="email" type="email" required value="{{ old('email', $editTenant->email ?? '') }}"
                        class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-gray-200">
                </div>

                <div>
                    <label class="block text-sm font-medium">
                        {{ $editTenant ? 'New Password (leave blank to keep)' : 'Password' }}
                    </label>
                    <input name="password" type="password"
                        class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-gray-200">
                </div>

                <div>
                    <label class="block text-sm font-medium">Data (JSON)</label>
                    <textarea name="data" rows="3" class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-gray-200">{{ old('data', isset($editTenant) ? json_encode($editTenant->data, JSON_PRETTY_PRINT) : '{ "plan": "basic" }') }}</textarea>
                </div>

                <div class="md:col-span-2 flex gap-3 mt-4">
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded">
                        {{ $editTenant ? 'Update' : 'Create' }}
                    </button>

                    @if ($editTenant)
                        <a href="{{ route('tenants.index') }}" class="px-4 py-2 border rounded">Cancel Edit</a>
                    @endif
                </div>
            </form>
        </div>

        {{-- table --}}
        <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2 text-left">Name</th>
                        <th class="px-4 py-2 text-left">Email</th>
                        <th class="px-4 py-2 text-left">Plan</th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800">
                    @foreach ($tenants as $tenant)
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-2">{{ $tenant->id }}</td>
                            <td class="px-4 py-2">{{ $tenant->name }}</td>
                            <td class="px-4 py-2">{{ $tenant->email }}</td>
                            <td class="px-4 py-2">{{ $tenant->data['plan'] ?? '—' }}</td>
                            <td class="px-4 py-2 flex gap-3">
                                <a href="{{ route('tenants.index', ['edit' => $tenant->id]) }}"
                                    class="text-indigo-600 hover:underline">Edit</a>

                                <form action="{{ route('tenants.destroy', $tenant) }}" method="POST"
                                    onsubmit="return confirm('Delete tenant?');">
                                    @csrf @method('DELETE')
                                    <button class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-4">
                {{ $tenants->links() }}
            </div>
        </div>
    </div>
</x-tenant-app-layout>
