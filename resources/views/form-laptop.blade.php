<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    {{-- Tiap input harus punya name dan berbeda beda (Bagian penting dari form) --}}
    {{-- method POST buat kirim data dan action itu buat sabungin routenya --}}
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
    <form method="POST" action="{{ route('save-laptop') }}" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="flex flex-col justify-center gap-2">
            <label class="font-medium text-gray-700">Input Brand</label>
            <input type="text" name="brand" class="border border-gray-300 rounded py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <label class="font-medium text-gray-700">Input Model</label>
            <input type="text" name="model" class="border border-gray-300 rounded py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <label class="font-medium text-gray-700">Input Processor</label>
            <input type="text" name="processor" class="border border-gray-300 rounded py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <label class="font-medium text-gray-700">Input RAM (GB)</label>
            <input type="number" name="ram" class="border border-gray-300 rounded py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <div class="mt-2">
                <input type="submit" value="Save Laptop" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer transition">
            </div>
        </div>
    </form>
</div>
</body>
</html>