<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="relative overflow-hidden rounded-xl bg-white/90 dark:bg-gray-800 shadow-lg ring-1 ring-gray-900/5 dark:ring-white/10">
                <!-- decorative gradient flare -->
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-br from-teal-500/20 to-indigo-600/10">
                </div>

                <div class="relative flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 p-8">
                    <!-- message + icon -->
                    <div class="flex items-center gap-3">
                        <!-- check‑circle icon (Heroicons, Lucide, etc.) -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-10 w-10 flex-shrink-0 text-teal-600 dark:text-teal-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m7 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                            You&rsquo;re logged in!
                        </h2>
                    </div>

                    <!-- primary action -->
                    <a href="{{ route('tenants.index') }}"
                        class="inline-flex items-center gap-2 rounded-lg bg-teal-600 px-5 py-3 text-sm font-medium text-white shadow transition hover:bg-teal-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-teal-500 focus-visible:ring-offset-2 dark:ring-offset-gray-800">
                        <!-- plus icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                        <span>Add Tenant</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
