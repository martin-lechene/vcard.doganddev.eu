<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraVCard</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body class="w-full">
{{-- Header beautiful TailWindCSS --}}
<header>
    <div class="bg-white shadow">
        <div class=" mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class=" text-center font-bold text-gray-900">
                LaraVCard
            </h1>
        </div>
    </div>
</header>

{{-- Link for create a vcard tailwindcsss --}}
{{--<a href="{{ route('vcard.create') }}" class="bg-blue-500 hover:bg-blue-700 text-dark font-bold py-2 px-4 rounded">Create VCard</a>--}}
{{--<a href="{{ route('vcard.create') }}">Create VCard</a>--}}


    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b ">
                            <tr>
                            <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                                Name
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                                Company
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                                Job
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                                Email
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                                Phone Pref.
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                                Phone
                            </th>
                            {{--                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">--}}
                            {{--                                Address name--}}
                            {{--                            </th>--}}
                            {{--                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">--}}
                            {{--                                Address extended--}}
                            {{--                            </th>--}}
                            {{--                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">--}}
                            {{--                                street--}}
                            {{--                            </th>--}}
                            {{--                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">--}}
                            {{--                                city--}}
                            {{--                            </th>--}}
                            {{--                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">--}}
                            {{--                                region--}}
                            {{--                            </th>--}}
                            {{--                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">--}}
                            {{--                                postal code--}}
                            {{--                            </th>--}}
                            {{--                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">--}}
                            {{--                                country--}}
                            {{--                            </th>--}}
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Address label
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                url
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                note
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                birthday
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                photo
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Action
                            </th>
                        </tr>
                        </thead class="border-b">
                        <tbody>
                            @foreach($vcards as $vcard)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->first_name !!} {!! $vcard->last_name !!}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->company !!}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->job_title !!}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->email !!}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->phone_pref_work_number !!}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->phone_work_number !!}</td>
                                {{--                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->address_name !!}</td>--}}
                                {{--                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->address_extended !!}</td>--}}
                                {{--                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->street !!}</td>--}}
                                {{--                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->city !!}</td>--}}
                                {{--                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->region !!}</td>--}}
                                {{--                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->postal_code !!}</td>--}}
                                {{--                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->country !!}</td>--}}
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->address_label !!}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->url !!}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->note !!}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->birthday !!}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{!! $vcard->photo !!}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    <a href="{{ route('vcard.edit', $vcard->id) }}" class="bg-gray-100 hover:shadow-lg hover:text-emerald-700 text-gray-900 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                    <form class="inline-block" action="{{ route('vcard.delete', $vcard->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2">Delete</button>
                                    </form>
                                    <a href="{{ route('vcard.downloadVcard', $vcard->id) }}" class="bg-gray-100 hover:shadow-lg hover:text-emerald-700 text-gray-900 hover:text-indigo-900 mb-2 mr-2">Download</a>
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
</body>
</html>
