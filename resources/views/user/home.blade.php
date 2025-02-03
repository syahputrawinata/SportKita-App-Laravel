@extends('layout.template')
@section('content') 
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Selamat Datang di Webshop</h1>
            <p class="lead">Tempat terbaik untuk berbelanja online</p>
            <a href="#products" class="btn btn-light btn-lg">Lihat Produk</a>
        </div>
    </header>
    
    <section id="products" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Produk Unggulan</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Produk 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk 1</h5>
                            <p class="card-text">Deskripsi singkat produk.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Produk 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk 2</h5>
                            <p class="card-text">Deskripsi singkat produk.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Produk 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk 3</h5>
                            <p class="card-text">Deskripsi singkat produk.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Produk 4">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk 4</h5>
                            <p class="card-text">Deskripsi singkat produk.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="about" class="bg-light py-5">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p>Kami adalah platform e-commerce yang menyediakan berbagai produk berkualitas dengan harga terbaik.</p>
        </div>
    </section>
    
    <section id="contact" class="py-5">
        <div class="container text-center">
            <h2>Kontak Kami</h2>
            <p>Email: support@sportkita.com | Telepon: 0812-3456-7890</p>
        </div>
    </section>
    
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 SportKita. Semua Hak Dilindungi.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection    