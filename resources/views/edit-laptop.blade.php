<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Laptop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <form method="POST" action="/laptops/{{ $laptop->id }}" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        @csrf
        <h2 class="text-xl font-bold mb-4">Edit Data Laptop</h2>

        <div class="flex flex-col gap-3">
            <div class="flex flex-col justify-center gap-2">
            <label class="font-medium text-gray-700">Input Brand</label>
            <input type="text" name="brand" class="border border-gray-300 rounded py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <label class="font-medium text-gray-700">Input Model</label>
            <input type="text" name="model" class="border border-gray-300 rounded py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <label class="font-medium text-gray-700">Input Processor</label>
            <input type="text" name="processor" class="border border-gray-300 rounded py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <label class="font-medium text-gray-700">Input RAM (GB)</label>
            <input type="number" name="ram" class="border border-gray-300 rounded py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <div class="mt-2 flex gap-2">
                <input type="submit" value="Save Laptop" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer transition">
                <a href="/" class="w-full bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded text-center transition">Batal</a>
            </div>
            </div>
        </div>
    </form>

</body>
</html>