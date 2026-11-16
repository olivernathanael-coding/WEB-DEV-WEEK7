<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8">
    <table class="border-collapse border border-gray-400">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2">Brand</th>
                <th class="border border-gray-300 px-4 py-2">Model</th>
                <th class="border border-gray-300 px-4 py-2">Processor</th>
                <th class="border border-gray-300 px-4 py-2">RAM</th>
                <th class="border border-gray-300 px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptops as $laptop)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $laptop->brand }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $laptop->model }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $laptop->processor }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $laptop->ram }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    <div class="flex gap-2">
                        <a href="/laptops/{{ $laptop->id }}/edit" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded cursor-pointer transition">
                        Edit
                        </a>
                        <form method="POST" action="{{ route('delete-laptop', $laptop) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer transition">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>