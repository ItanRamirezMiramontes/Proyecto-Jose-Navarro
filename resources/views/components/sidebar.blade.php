<aside class="w-full h-20 bg-gray-900 text-white fixed top-0 left-0 z-50 flex items-center justify-between px-4">
    <!-- Logo / Nombre de la tienda -->
    <div class="text-2xl font-bold">
        Mi Tienda
    </div>

    <!-- Navegación principal -->
    <nav class="flex space-x-4">
        <a href="/principio" class="px-3 py-2 rounded hover:bg-gray-800">
            Inicio
        </a>
        <a href="/catalogo" class="px-3 py-2 rounded hover:bg-gray-800">
            Tienda
        </a>
        <a href="/producto" class="px-3 py-2 rounded hover:bg-gray-800">
            Nuestros productos
        </a>
        <a href="" class="px-3 py-2 rounded hover:bg-gray-800">
            Carrito ({{ $cartCount ?? 0 }})
        </a>
        <a href="" class="px-3 py-2 rounded hover:bg-gray-800">
            Mis pedidos
        </a>
    </nav>

    <!-- Usuario -->
    <div class="flex items-center space-x-4">
        @auth
            <a href="" class="px-3 py-2 rounded hover:bg-gray-800">
                
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="px-3 py-2 rounded hover:bg-red-600">
                    Cerrar sesión
                </button>
            </form>
        @else
            <a href="" class="px-3 py-2 rounded hover:bg-gray-800">
                Iniciar sesión
            </a>
            <a href="" class="px-3 py-2 rounded hover:bg-gray-800">
                Registrarse
            </a>
        @endauth
    </div>
</aside>