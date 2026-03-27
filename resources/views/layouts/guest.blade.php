<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    {{-- Timeline --}}
    <link href="{{ asset('vendor/vis-timeline/css/vis-timeline-graph2d.min.css') }}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ asset('vendor/vis-timeline/js/vis-timeline-graph2d.min.js') }}"></script>
</head>

<body class="font-sans antialiased">

    <div class="flex flex-col h-screen bg-gray-50 dark:bg-gray-800">
        @livewire('navigation-menu-guest')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow flex-shrink-0">
                <div class="max-w-90% mx-auto py-4 px-4 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="flex-grow overflow-hidden">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
