<script src="https://cdn.tailwindcss.com"></script>

<!-- Sidebar -->
<aside class="w-full h-20 bg-gray-900 text-white fixed top-0 left-0 z-50 flex items-center justify-between px-4">
    <!-- Logo / Nombre de la tienda -->
    <div class="text-2xl font-bold">
        Mi Tienda
    </div>

    <!-- Navegación principal -->
    <nav class="flex space-x-4">
        <a href="/principio" class="px-3 py-2 rounded hover:bg-gray-800">Inicio</a>
        <a href="/tienda" class="px-3 py-2 rounded hover:bg-gray-800">Tienda</a>
        <a href="/producto" class="px-3 py-2 rounded hover:bg-gray-800">Nuestros productos</a>
        <!-- Enlace del carrito -->
        <a href="javascript:void(0)" id="open-cart" class="px-3 py-2 rounded hover:bg-gray-800">Carrito</a>
        <a href="" class="px-3 py-2 rounded hover:bg-gray-800">Mis pedidos</a>
    </nav>

    <!-- Usuario -->
    <div class="flex items-center space-x-4">
        @auth
            <a href="" class="px-3 py-2 rounded hover:bg-gray-800"></a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-3 py-2 rounded hover:bg-red-600">Cerrar sesión</button>
            </form>
        @else
            <a href="" class="px-3 py-2 rounded hover:bg-gray-800">Iniciar sesión</a>
            <a href="" class="px-3 py-2 rounded hover:bg-gray-800">Registrarse</a>
        @endauth
    </div>
</aside>

<!-- Drawer Modal -->
<div id="drawer" class="fixed inset-0 z-50 hidden overflow-hidden bg-transparent" aria-labelledby="drawer-title"
    role="dialog">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-gray-500/75 transition-opacity"></div>

    <!-- Panel -->
    <div class="absolute inset-0 flex pl-10 sm:pl-16">
        <div class="ml-auto max-w-md w-full transform transition-transform bg-white shadow-xl flex flex-col">
            <!-- Header -->
            <div class="flex items-start justify-between px-4 py-6">
                <h2 id="drawer-title" class="text-lg font-medium text-gray-900">Shopping cart</h2>
                <button type="button" class="text-gray-400 hover:text-gray-500"
                    onclick="document.getElementById('drawer').classList.add('hidden')">
                    <span class="sr-only">Close panel</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Cart Items -->
            <div class="flex-1 overflow-y-auto px-4 py-6">
                <ul class="-my-6 divide-y divide-gray-200">
                    <!-- Items de ejemplo -->
                    <li class="flex py-6">
                        <div class="w-24 h-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                            <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                alt="Salmon orange fabric pouch" class="w-full h-full object-cover" />
                        </div>
                        <div class="ml-4 flex flex-1 flex-col">
                            <div class="flex justify-between text-base font-medium text-gray-900">
                                <h3><a href="#">Throwback Hip Bag</a></h3>
                                <p>$90.00</p>
                            </div>
                            <p class="mt-1 text-sm text-gray-500">Salmon</p>
                            <div class="flex flex-1 items-end justify-between text-sm mt-2">
                                <p class="text-gray-500">Qty 1</p>
                                <button class="text-indigo-600 hover:text-indigo-500 font-medium">Remove</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Footer -->
            <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                <div class="flex justify-between text-base font-medium text-gray-900">
                    <p>Subtotal</p>
                    <p>$262.00</p>
                </div>
                <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                <div class="mt-6">
                    <a href="#"
                        class="flex items-center justify-center rounded-md bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow hover:bg-indigo-700">
                        Checkout
                    </a>
                </div>
                <div class="mt-6 flex justify-center text-sm text-gray-500">
                    <p>
                        or
                        <button class="ml-1 text-indigo-600 hover:text-indigo-500 font-medium"
                            onclick="document.getElementById('drawer').classList.add('hidden')">
                            Continue Shopping &rarr;
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script para abrir el drawer desde el sidebar -->
<script>
    const drawer = document.getElementById('drawer');
    const openCartLink = document.getElementById('open-cart');

    openCartLink.addEventListener('click', () => {
        drawer.classList.remove('hidden');
    });
</script>
