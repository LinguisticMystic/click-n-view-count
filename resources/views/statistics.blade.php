@extends('layout')

@section('title')
    Banner statistics
@endsection

@section('content')

    <div class="flex flex-row">

    <div class="mx-10 w-80">
        <p class="text-lg font-bold leading-normal mt-0 mb-2 text-gray-800">Click count</p>
        <table class="rounded-t-lg m-5 w-full mx-auto bg-gray-500 text-white">
            <tr class="text-left border-b-2 border-gray-300">
                <th class="px-4 py-3">Banner ID</th>
                <th class="px-4 py-3">Total clicks</th>
            </tr>
            @foreach($clickStatistics as $statistic)
                <tr class="bg-gray-100 border-b border-gray-200 text-gray-900">
                    <td class="px-4 py-3">{{ $statistic->first()->banner_id }}</td>
                    <td class="px-4 py-3">{{ count($statistic) }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="mx-10 w-80">
        <p class="text-lg font-bold leading-normal mt-0 mb-2 text-gray-800">View count</p>
        <table class="rounded-t-lg m-5 w-full mx-auto bg-gray-500 text-white">
            <tr class="text-left border-b-2 border-gray-300">
                <th class="px-4 py-3">Banner ID</th>
                <th class="px-4 py-3">Total views</th>
            </tr>
            @foreach($viewStatistics as $statistic)
                <tr class="bg-gray-100 border-b border-gray-200 text-gray-900">
                    <td class="px-4 py-3">{{ $statistic->first()->banner_id }}</td>
                    <td class="px-4 py-3">{{ count($statistic) }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    </div>
@endsection