@extends('layouts.admin')

@section('content')
{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promosi Minggu Ini</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px;
        }
        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 24px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }
        .header h2 {
            font-size: 1.25rem;
            font-weight: 600;
        }
        .header a {
            color: #3b82f6;
            text-decoration: none;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 16px;
        }
        .product {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 16px;
            text-align: center;
        }
        .product img {
            width: 100%;
            height: 100px;
            object-fit: contain;
            margin-bottom: 8px;
        }
        .product h3 {
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 4px;
        }
        .product p {
            font-size: 0.75rem;
            color: #6b7280;
            margin-bottom: 4px;
        }
        .product .price {
            font-size: 1rem;
            font-weight: 600;
            color: #f97316;
            margin-bottom: 8px;
        }
        .product .discount {
            font-size: 0.75rem;
            color: #f97316;
            font-weight: 600;
        }
        .product .original-price {
            font-size: 0.75rem;
            color: #9ca3af;
            text-decoration: line-through;
            margin-left: 4px;
        }
        .product button {
            width: 100%;
            background-color: #ffffff;
            border: 1px solid #3b82f6;
            color: #3b82f6;
            padding: 8px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.875rem;
            font-weight: 600;
        }
        .product button i {
            margin-right: 4px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <h2>Promosi Minggu Ini</h2>
                <a href="#">Lihat Semua</a>
            </div>
            <div class="grid">
                <!-- Product 1 -->
                <div class="product">
                    <div class="relative">
                        <img src="https://storage.googleapis.com/a1aa/image/yovrLtQBt2ZEP1Fzpsw21GuUWqvQMGPxmoXrXoT2iaS4bs9E.jpg" alt="Sedaap Kecap Manis Special">
                   
                    </div>
                    <h3>Sedaap Kecap Manis Special...</h3>
                    <p><i class="fas fa-store"></i> Toko Indomaret</p>
                    <div class="flex items-center mb-1">
                        <span class="discount">21%</span>
                        <span class="original-price">Rp 23.400</span>
                    </div>
                    <p class="price">Rp 18.500</p>
                    <button><i class="fas fa-plus"></i> Keranjang</button>
                </div>
                <!-- Product 2 -->
                <div class="product">
                    <div class="relative">
                        <img src="https://storage.googleapis.com/a1aa/image/1TyCfOoslhXdCi5wicNjlLRlrGRVKP6yPnObspSY519z3Y7JA.jpg" alt="Pantene Conditioner Pro-V">
      
                    </div>
                    <h3>Pantene Conditioner Pro-V (New I) Hair...</h3>
                    <p><i class="fas fa-store"></i> Toko Indomaret</p>
                    <div class="flex items-center mb-1">
                        <span class="discount">37%</span>
                        <span class="original-price">Rp 31.500</span>
                    </div>
                    <p class="price">Rp 19.900</p>
                    <button><i class="fas fa-plus"></i> Keranjang</button>
                </div>
                <!-- Product 3 -->
                <div class="product">
                    <div class="relative">
                        <img src="https://storage.googleapis.com/a1aa/image/iChubALcmU4UHxl9KbB2SqfFee3rMYWnqqbyam0jyxp9eGbPB.jpg" alt="Indomilk Kental Manis Putih">

                    </div>
                    <h3>Indomilk Kental Manis Putih Pch...</h3>
                    <p><i class="fas fa-store"></i> Toko Indomaret</p>
                    <div class="flex items-center mb-1">
                        <span class="discount">22%</span>
                        <span class="original-price">Rp 17.800</span>
                    </div>
                    <p class="price">Rp 13.900</p>
                    <button><i class="fas fa-plus"></i> Keranjang</button>
                </div>
                <!-- Product 4 -->
                <div class="product">
                    <div class="relative">
                        <img src="https://storage.googleapis.com/a1aa/image/AckfCRAK3h2fkU4HjL04qEnhGpdSxKqVmEC85WkgSFfQfGbPB.jpg" alt="Nuvo Sabun Kesehatan Cair">
                 
                    </div>
                    <h3>Nuvo Sabun Kesehatan Cair...</h3>
                    <p><i class="fas fa-store"></i> Toko Indomaret</p>
                    <div class="flex items-center mb-1">
                        <span class="discount">35%</span>
                        <span class="original-price">Rp 39.900</span>
                    </div>
                    <p class="price">Rp 25.900</p>
                    <button><i class="fas fa-plus"></i> Keranjang</button>
                </div>
                <!-- Product 5 -->
                <div class="product">
                    <div class="relative">
                        <img src="https://storage.googleapis.com/a1aa/image/C5eyYXKGy9VsQyQqlgh5w49CdeAucWbY43ueXOPfPtMQeN2eE.jpg" alt="Filma Minyak Goreng Refill">
   
                    </div>
                    <h3>Filma Minyak Goreng Refill Pch...</h3>
                    <p><i class="fas fa-store"></i> Toko Indomaret</p>
                    <div class="flex items-center mb-1">
                        <span class="discount">4%</span>
                        <span class="original-price">Rp 37.500</span>
                    </div>
                    <p class="price">Rp 35.900</p>
                    <button><i class="fas fa-plus"></i> Keranjang</button>
                </div>
                <!-- Product 6 -->
                <div class="product">
                    <div class="relative">
                        <img src="https://storage.googleapis.com/a1aa/image/qlt2QftJJN2iGKoGjZ122hIqV05ToMpRufmIYTiJB0fHfGbPB.jpg" alt="Mamy Poko Pants Standar">
                   
                    </div>
                    <h3>Mamy Poko Pants Standar 32'S Pck...</h3>
                    <p><i class="fas fa-store"></i> Toko Indomaret</p>
                    <div class="flex items-center mb-1">
                        <span class="discount">19%</span>
                        <span class="original-price">Rp 66.950</span>
                    </div>
                    <p class="price">Rp 53.900</p>
                    <button><i class="fas fa-plus"></i> Keranjang</button>
                </div>
                <!-- Product 7 -->
                <div class="product">
                    <div class="relative">
                        <img src="https://storage.googleapis.com/a1aa/image/XGZLCh70qbZGORe4O6uieF4mXBjWmWfodPhzGg8k41we9GbPB.jpg" alt="Luwak Kopi Bubuk+Gula">
              
                    </div>
                    <h3>Luwak Kopi Bubuk+Gula Pck...</h3>
                    <p><i class="fas fa-store"></i> Toko Indomaret</p>
                    <div class="flex items-center mb-1">
                        <span class="discount">31%</span>
                        <span class="original-price">Rp 8.600</span>
                    </div>
                    <p class="price">Rp 5.900</p>
                    <button><i class="fas fa-plus"></i> Keranjang</button>
                </div>
                <!-- Product 8 -->
                <div class="product">
                    <div class="relative">
                        <img src="https://storage.googleapis.com/a1aa/image/SmVsBIpUV0IuPBAlH8sxKTALxXhTv3936U85RQxW60n5bs9E.jpg" alt="Rinso Detergent Cair + Molto">
            
                        
                    </div>
                    <h3>Rinso Detergent Cair + Molto...</h3>
                    <p><i class="fas fa-store"></i> Toko Indomaret</p>
                    <div class="flex items-center mb-1">
                        <span class="discount">34%</span>
                        <span class="original-price">Rp 14.900</span>
                    </div>
                    <p class="price">Rp 9.900</p>
                    <button><i class="fas fa-plus"></i> Keranjang</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}


@endsection

