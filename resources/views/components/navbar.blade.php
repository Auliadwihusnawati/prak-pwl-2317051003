<nav class="bg-blue-600 text-white px-6 py-3 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        
        <a href="{{ url('/') }}" class="text-lg font-bold">
            MyApp
        </a>

        <ul class="flex space-x-6">
            <li><a href="{{ url('/') }}" class="hover:text-gray-200">Home</a></li>
            <li><a href="{{ route('users.index') }}" class="hover:text-gray-200">Users</a></li>
            <li><a href="{{ route('users.create') }}" class="hover:text-gray-200">Add User</a></li>
        </ul>
    </div>
</nav>
