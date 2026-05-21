<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Login | Ticket SMKN 1 Bulukerto</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-100 antialiased">
        <main class="min-h-screen lg:grid lg:grid-cols-2">
            <section class="relative hidden lg:block">
                <img
                    src="https://agramasgroup.com/images/sdd/sdd.jpg"
                    alt="Ilustrasi area sekolah"
                    class="h-full w-full object-cover"
                >
                <div class="absolute inset-0 bg-gradient-to-tr from-slate-900/60 via-slate-900/30 to-sky-500/30"></div>
                <div class="absolute inset-x-0 bottom-0 p-10 text-white">
                    <p class="text-sm uppercase tracking-[0.2em] text-sky-200">Ticketing System</p>
                    <h1 class="mt-3 max-w-md text-3xl font-semibold leading-tight">SMKN 1 Bulukerto</h1>
                    <p class="mt-3 max-w-md text-sm text-slate-100/90">Masuk ke sistem untuk mengelola tiket layanan dengan lebih cepat dan terstruktur.</p>
                </div>
            </section>

            <section class="flex items-center justify-center px-4 py-8 sm:px-6 lg:px-10">
                <div class="w-full max-w-md rounded-2xl bg-white p-6 shadow-xl ring-1 ring-slate-200 sm:p-8">
                    <div class="mb-6 text-center lg:text-left">
                        <p class="text-sm font-medium text-sky-700">Selamat datang kembali</p>
                        <h2 class="mt-1 text-2xl font-semibold text-slate-800">Login Akun</h2>
                    </div>

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-5">
                        @csrf

                        <div>
                            <x-input-label for="email" :value="__('Email')" class="text-slate-700" />
                            <x-text-input
                                id="email"
                                class="mt-1 block w-full border-slate-300 focus:border-sky-500 focus:ring-sky-500"
                                type="email"
                                name="email"
                                :value="old('email')"
                                required
                                autofocus
                                autocomplete="username"
                            />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="password" :value="__('Password')" class="text-slate-700" />
                            <x-text-input
                                id="password"
                                class="mt-1 block w-full border-slate-300 focus:border-sky-500 focus:ring-sky-500"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-between gap-3">
                            <label for="remember_me" class="inline-flex items-center text-sm text-slate-600">
                                <input
                                    id="remember_me"
                                    type="checkbox"
                                    class="rounded border-slate-300 text-sky-600 shadow-sm focus:ring-sky-500"
                                    name="remember"
                                >
                                <span class="ms-2">Ingat saya</span>
                            </label>

                            <span class="text-xs text-slate-500">Silakan hubungi admin jika lupa password</span>
                        </div>

                        <x-primary-button class="w-full justify-center bg-sky-600 py-3 text-sm font-semibold tracking-wide hover:bg-sky-700 focus:bg-sky-700 active:bg-sky-800">
                            Masuk
                        </x-primary-button>
                    </form>
                </div>
            </section>
        </main>
    </body>
</html>
