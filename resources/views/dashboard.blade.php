<x-app-layout>
    {{-- <x:notify-messages /> --}}
    <x-slot name="header">
        @if(session('success'))
            <script>
                toastr.success("{{ session('success') }}");
            </script>
        @endif
        <div class="flex justify-between bg-dark">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <!-- Modal toggle -->
            <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                <i  class="bi bi-plus-circle-fill"></i> Add Ticket
            </button>
            
            <!-- Main modal -->
            <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <form action="{{ route('tickets.store') }}" method="POST">
                            @csrf
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Add New Ticket
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                @include('modal.form')
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button  type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
  
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Order
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Agent
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kota
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Lokasi
                                    </th> --}}
                                    <th scope="col" class="px-6 py-3">
                                        Waktu
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal Order
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kursi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        {{$loop->iteration}}
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $item->agent_name }} {{ $item->agent_code }} <br>
                                        Rp.{{ number_format($item->price) }},-
                                    </td>
                                    <td class="px-6 py-4">
                                        <table>
                                            <tr>
                                                <td>{{ $item->start_city }}</td>
                                                <td> - </td>
                                                <td>{{ $item->end_city }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $item->start_location }}</td>
                                                <td> - </td>
                                                <td>{{ $item->end_location }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    {{-- <td class="px-6 py-4">
                                        Yes
                                    </td> --}}
                                    <td class="px-6 py-4">
                                        <table>
                                            <tr>
                                                <td>{{ $item->start_date }}</td>
                                                <td> --- </td>
                                                <td>{{ $item->end_date }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $item->start_time }}</td>
                                                <td> --- </td>
                                                <td>{{ $item->end_time }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->order_date }} <br>
                                        {{ $item->order_time }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->chair_no }}
                                    </td>
                                    <td class="flex items-center px-6 py-6 align-center gap-5">
                                        <a href="{{ route('tickets.show', $item->id) }}" target="_blank" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline me-3"><i class="bi bi-printer"></i> Cetak </a>
                                        {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3"><i class="bi bi-trash"></i></a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
