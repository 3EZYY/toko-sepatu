<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - Wshooes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/oder_confirmation.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8b5cf6',
                        secondary: '#1e3a8a',
                        accent: '#a78bfa',
                    }
                }
            }
        }
    </script>
</head>
<body>
    <!-- Header -->
    <header class="bg-gradient-to-r from-primary to-secondary text-white shadow-lg">
        <div class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-shoe-prints text-2xl text-accent"></i>
                    <h1 class="text-2xl font-bold">Wshooes</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm font-medium">Order Confirmation</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Confirmation Message -->
        <div class="max-w-4xl mx-auto bg-white rounded-lg confirmation-card p-8 mb-12 text-center">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-check-circle text-4xl text-green-500"></i>
            </div>
            <h1 class="text-3xl font-bold text-secondary mb-4">Terima Kasih Atas Pembelian Anda!</h1>
            <p class="text-gray-600 mb-6">Pesanan Anda telah berhasil diproses. Kami akan mengirimkan detail pesanan ke email Anda.</p>
            
            <div class="bg-primary bg-opacity-10 rounded-lg p-6 mb-8">
                <p class="text-gray-700 mb-2">Nomor Pesanan:</p>
                <p class="text-2xl font-bold text-primary">WSH-20230615-001</p>
            </div>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-secondary text-white px-6 py-3 rounded-lg font-medium hover:bg-opacity-90 transition-all">
                    Lacak Pesanan
                </a>
                <a href="index.html" class="bg-white border border-secondary text-secondary px-6 py-3 rounded-lg font-medium hover:bg-gray-50 transition-all">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
        
        <!-- Order Summary -->
        <div class="max-w-4xl mx-auto bg-white rounded-lg confirmation-card p-8 mb-12">
            <h2 class="text-xl font-bold text-secondary mb-6">Ringkasan Pesanan</h2>
            
            <div class="border-b border-gray-200 pb-6 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="font-medium text-secondary mb-3">Alamat Pengiriman</h3>
                        <p class="text-gray-700">John Doe</p>
                        <p class="text-gray-700">Jl. Merdeka No. 123</p>
                        <p class="text-gray-700">Jakarta Selatan, 12345</p>
                        <p class="text-gray-700">Indonesia</p>
                        <p class="text-gray-700">+62 812 3456 7890</p>
                    </div>
                    <div>
                        <h3 class="font-medium text-secondary mb-3">Metode Pengiriman</h3>
                        <p class="text-gray-700">Reguler - JNE</p>
                        <p class="text-gray-700">Estimasi tiba: 3-5 hari kerja</p>
                        
                        <h3 class="font-medium text-secondary mt-4 mb-3">Metode Pembayaran</h3>
                        <p class="text-gray-700">Kartu Kredit - Visa</p>
                        <p class="text-gray-700">**** **** **** 3456</p>
                    </div>
                </div>
            </div>
            
            <div class="mb-6">
                <h3 class="font-medium text-secondary mb-4">Produk Anda</h3>
                <div class="space-y-4">
                    <div class="flex items-start border-b border-gray-100 pb-4">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" 
                             alt="Running Shoes" class="w-16 h-16 rounded-lg object-cover">
                        <div class="ml-4 flex-1">
                            <p class="font-medium">Wshooes Runner Pro</p>
                            <p class="text-sm text-gray-500">Size: 42, Color: Black</p>
                            <p class="text-sm text-gray-500">Qty: 1</p>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">Rp 1.299.000</p>
                        </div>
                    </div>
                    <div class="flex items-start border-b border-gray-100 pb-4">
                        <img src="https://images.unsplash.com/photo-1600269452121-1f5d1414f7ce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" 
                             alt="Casual Shoes" class="w-16 h-16 rounded-lg object-cover">
                        <div class="ml-4 flex-1">
                            <p class="font-medium">Wshooes Urban Classic</p>
                            <p class="text-sm text-gray-500">Size: 41, Color: White</p>
                            <p class="text-sm text-gray-500">Qty: 2</p>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">Rp 1.798.000</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-200 pt-4">
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600">Subtotal</span>
                    <span class="font-medium">Rp 4.696.000</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600">Ongkos Kirim</span>
                    <span class="font-medium">Rp 25.000</span>
                </div>
                <div class="flex justify-between text-lg font-bold text-secondary">
                    <span>Total</span>
                    <span>Rp 4.721.000</span>
                </div>
            </div>
        </div>
        
        <!-- Recommended Products -->
        <div class="max-w-4xl mx-auto">
            <h2 class="text-xl font-bold text-secondary mb-6">Anda Mungkin Juga Suka</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg product-card p-4 shadow-md">
                    <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" 
                         alt="Sports Shoes" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="font-medium text-secondary">Wshooes Air Max</h3>
                    <p class="text-sm text-gray-500 mb-2">Running Shoes</p>
                    <p class="font-bold text-primary">Rp 1.499.000</p>
                    <button class="w-full mt-3 bg-secondary text-white py-2 rounded-lg text-sm font-medium hover:bg-opacity-90 transition-all">
                        Tambah ke Keranjang
                    </button>
                </div>
                
                <div class="bg-white rounded-lg product-card p-4 shadow-md">
                    <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" 
                         alt="Casual Shoes" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="font-medium text-secondary">Wshooes Street Style</h3>
                    <p class="text-sm text-gray-500 mb-2">Casual Shoes</p>
                    <p class="font-bold text-primary">Rp 899.000</p>
                    <button class="w-full mt-3 bg-secondary text-white py-2 rounded-lg text-sm font-medium hover:bg-opacity-90 transition-all">
                        Tambah ke Keranjang
                    </button>
                </div>
                
                <div class="bg-white rounded-lg product-card p-4 shadow-md">
                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" 
                         alt="Basketball Shoes" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="font-medium text-secondary">Wshooes Dunk Pro</h3>
                    <p class="text-sm text-gray-500 mb-2">Basketball Shoes</p>
                    <p class="font-bold text-primary">Rp 1.299.000</p>
                    <button class="w-full mt-3 bg-secondary text-white py-2 rounded-lg text-sm font-medium hover:bg-opacity-90 transition-all">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-secondary text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-shoe-prints text-2xl text-accent"></i>
                        <h3 class="text-xl font-bold">Wshooes</h3>
                    </div>
                    <p class="text-gray-300">Sepatu berkualitas dengan desain modern untuk gaya hidup aktif Anda.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Produk</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Bantuan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Pengiriman</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Pengembalian</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Status Pesanan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Hubungi Kami</h4>
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-accent"></i>
                            <span class="text-gray-300">Jl. Sepatu No. 123, Jakarta</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-phone text-accent"></i>
                            <span class="text-gray-300">+62 123 4567 890</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-envelope text-accent"></i>
                            <span class="text-gray-300">info@wshooes.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-600 mt-8 pt-6 text-center text-gray-300">
                <p>&copy; 2023 Wshooes. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="Js/oder_confirmation.js"></script>
</body>
</html>