<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Pow! Cómics - Tienda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .text-shadow {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col">

    <div class="relative flex flex-col flex-grow" 
         style="background-image: url('Fondo 1.png'); 
                background-size: auto;
                background-repeat: repeat;
                background-position: center;">
        
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>

        <nav class="relative z-10 bg-black p-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-shadow">¡<span class="text-yellow-400">Pow</span>! Cómics</div>
            
            <div class="flex items-center space-x-6">
                <a href="#" class="text-white hover:text-yellow-400">Cómics</a>
                <a href="#" class="text-white hover:text-yellow-400">Mis Pedidos</a>
                <a href="#" class="text-white hover:text-yellow-400">Mis Compras</a>
                <a href="#" class="text-white hover:text-yellow-400">Mi Membresía</a>
                <a href="#" class="text-white hover:text-yellow-400">Mi perfil</a>
                <a href="#" class="text-white hover:text-yellow-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18l-1.5 9H5.5L4 3z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4zm1-8h10M5 6h12" />
                    </svg>
                </a>
                                
                <div class="relative">
                    <input type="text" placeholder="Buscar..." class="px-4 py-2 rounded text-black">
                    <button class="absolute right-2 top-2 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24">
                            <path d="M23 21l-6-6m2-6a9 9 0 1 0-9 9 9 9 0 0 0 9-9z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        

        <div class="fixed bottom-5 right-5 bg-yellow-500 text-black p-4 rounded-lg shadow-xl z-50 max-w-xs animate-bounce">
            <p class="font-semibold">¡Hola! 👋</p>
            <p class="text-sm">¿Tienes dudas o sugerencias?</p>
            <a href="{{ route('contacto.formulario') }}"
            class="mt-2 inline-block bg-black text-white px-4 py-1 rounded hover:bg-gray-800 font-semibold text-sm">
            Contáctanos
            </a>
        </div>



        <div class="relative z-10 flex flex-grow p-6 space-x-6">
            <aside class="w-64 bg-gray-800 p-6 rounded-lg shadow-lg hidden lg:block">
                <h2 class="text-lg font-bold mb-4 text-white">Filtros</h2>
                
                <div class="mb-4">
                    <h3 class="font-semibold mb-2">Categoría</h3>
                    <ul class="space-y-2">
                        <li><input type="checkbox" checked> Universos</li>
                        <li><input type="checkbox"> Deportes</li>
                        <li><input type="checkbox"> Entretenimiento</li>
                    </ul>

                    <h3 class="font-semibold mb-2">Precios</h3>
                    <ul class="space-y-2">
                        <li><input type="checkbox" checked> Menos de $199</li>
                        <li><input type="checkbox"> $200 a $500</li>
                        <li><input type="checkbox"> $500 a $999</li>
                        <li><input type="checkbox"> Más de $1,000</li>
                    </ul>

                    <h3 class="font-semibold mb-2">Año</h3>
                    <ul class="space-y-2">
                        <li><input type="checkbox"> 2019 y más</li>
                        <li><input type="checkbox" checked> 2020</li>
                        <li><input type="checkbox"> 2021</li>
                        <li><input type="checkbox"> 2022</li>
                        <li><input type="checkbox"> 2023</li>
                        <li><input type="checkbox"> 2024</li>
                        <li><input type="checkbox"> 2025</li>
                    </ul>

                    <h3 class="font-semibold mb-2">Frecuencia</h3>
                    <ul class="space-y-2">
                        <li><input type="checkbox"checked> 10</li>
                        <li><input type="checkbox"> 15</li>
                        <li><input type="checkbox"> 20</li>
                        <li><input type="checkbox"> 50</li>
                        <li><input type="checkbox"> 100</li>
                        <li><input type="checkbox"> 150</li>
                        <li><input type="checkbox"> 200</li>
                    </ul>
                </div>
            </aside>

            <main class="flex-grow grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white text-black p-6 rounded-lg shadow-lg flex flex-col items-center" id="1">
                    <img src="{{ asset('imagenes/Deadpool Vol.05.jpg') }}" alt="Deadpool Vol.05" class="w-64 h-80 rounded mb-4 object-cover">
                    <h3 class="font-bold text-lg">Deadpool Vol.05</h3>
                    <p class="text-gray-700 text-lg">$299.00</p>
                    <span class="text-yellow-500 font-semibold">Pre-Venta</span>
                    <a href="#" class="mt-4 bg-yellow-400 text-black px-4 py-2 rounded select-product">Ver más</a>
                </div>

                <div class="bg-white text-black p-6 rounded-lg shadow-lg flex flex-col items-center" id="2">
                    <img src="{{ asset('imagenes/Incredible Hulk Vol.01.jpg') }}" alt="Incredible Hulk Vol.01" class="w-64 h-80 rounded mb-4 object-cover">
                    <h3 class="font-bold text-lg">Incredible Hulk Vol.01</h3>
                    <p class="text-gray-700 text-lg">$399.00</p>
                    <span class="text-yellow-500 font-semibold">Pre-Venta</span>
                    <a href="#" class="mt-4 bg-yellow-400 text-black px-4 py-2 rounded select-product">Ver más</a>
                </div>

                <div class="bg-white text-black p-6 rounded-lg shadow-lg flex flex-col items-center" id="3">
                    <img src="{{ asset('imagenes/Star Wars De Gillen & Pak.jpeg') }}" alt="Star Wars" class="w-64 h-80 rounded mb-4 object-cover">
                    <h3 class="font-bold text-lg">Star Wars De Gillen & Pak</h3>
                    <p class="text-gray-700 text-lg">$1,533.00</p>
                    <a href="#" class="mt-4 bg-yellow-400 text-black px-4 py-2 rounded select-product">Ver más</a>
                </div>
                
                <div class="bg-white text-black p-6 rounded-lg shadow-lg flex flex-col items-center" id="4">
                    <img src="{{ asset('imagenes/The Amazing Spider-Man.jpeg') }}" alt="The Amazing Spider-Man #25" class="w-64 h-80 rounded mb-4 object-cover">
                    <h3 class="font-bold text-lg">The Amazing Spider-Man #25</h3>
                    <p class="text-gray-700 text-lg">$79.00</p>
                    <a href="#" class="mt-4 bg-yellow-400 text-black px-4 py-2 rounded select-product">Ver más</a>
                </div>

                <div class="bg-white text-black p-6 rounded-lg shadow-lg flex flex-col items-center" id="5">
                    <img src="{{ asset('imagenes/Punisher De Mike Baron.jpeg') }}" alt="Punisher De Mike Baron" class="w-64 h-80 rounded mb-4 object-cover">
                    <h3 class="font-bold text-lg">Punisher De Mike Baron</h3>
                    <p class="text-gray-700 text-lg">$579.00</p>
                    <a href="#" class="mt-4 bg-yellow-400 text-black px-4 py-2 rounded select-product">Ver más</a>
                </div>

                <div class="bg-white text-black p-6 rounded-lg shadow-lg flex flex-col items-center" id="6">
                    <img src="{{ asset('imagenes/Daredevil Vol.01.jpeg') }}" alt="Daredevil Vol.01" class="w-64 h-80 rounded mb-4 object-cover">
                    <h3 class="font-bold text-lg">Daredevil Vol.01</h3>
                    <p class="text-gray-700 text-lg">$1,235.00</p>
                    <span class="text-yellow-500 font-semibold">Pre-Venta</span>
                    <a href="#" class="mt-4 bg-yellow-400 text-black px-4 py-2 rounded select-product">Ver más</a>
                </div>
            </main>
        </div>
    </div>



    <footer class="bg-white py-4 border-t">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="flex space-x-4 mb-4 md:mb-0">
          <a href="#" class="text-gray-600 hover:text-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
              <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
            </svg>
          </a>
          <a href="#" class="text-gray-600 hover:text-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
          </a>
          <a href="#" class="text-gray-600 hover:text-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube">
              <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
              <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
            </svg>
          </a>
        </div>
        <nav class="grid grid-cols-2 gap-4 text-sm text-gray-600">
          <a href="#" class="hover:text-black">Preventas Exclusivas</a>
          <a href="#" class="hover:text-black">DC Comics</a>
          <a href="#" class="hover:text-black">Marvel Comics</a>
          <a href="#" class="hover:text-black">Panini Comics</a>
          <a href="#" class="hover:text-black">Catálogos</a>
          <a href="#" class="hover:text-black">Artículos Exclusivos</a>
        </nav>
      </div>
    </div>
  </footer>
</body>
</html>