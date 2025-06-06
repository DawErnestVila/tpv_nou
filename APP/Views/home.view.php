<div class="flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4 text-center">Entra el teu codi</h2>
        <form action="/user/checklogin" method="POST" enctype=multipart/form-data>
            <input maxlength="10" type="text" name="code" placeholder="Codi" class="w-full p-2 border border-gray-300 rounded mb-4" required>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Enviar</button>
        </form>
    </div>
</div>