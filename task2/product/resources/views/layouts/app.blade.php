<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>
    <div class="container">
        <header class="row">
            @include('includes.header')
        </header>
        <div id="main" class="row">
            @yield('content')
        </div>
        <footer class="row">
            @include('includes.footer')
        </footer>
        <script>
            document.getElementById("add-variant").addEventListener("click", function() {
                const variantSection = document.getElementById("variants-section");
                const variantdata = document.createElement("div");
                variantdata.className = "eachvariant";
                variantdata.innerHTML = `<div class="row">
                    <div class="form-group col-md-3">
                    <label for="Size">Size</label>
                    <input type="text" class="form-control" name="variants[${variantSection.children.length}][size]" placeholder="Size" >
                    </div>
                <div class="form-group col-md-3">
                    <label for="Color">Color</label>
                <input type="text" class="form-control" name="variants[${variantSection.children.length}][color]" placeholder="Color" >
            </div>
            <div class="form-group col-md-3">
                    <label for="Price">Price</label>
             <input type="number" class="form-control" name="variants[${variantSection.children.length}][price]" placeholder="Price" >
            </div>
             <div class="form-group col-md-3">
                    <label for="Quantity">Quantity</label>
             <input type="number" class="form-control" name="variants[${variantSection.children.length}][quantity]" placeholder="Quantity" >
            </div>
             </div>
         `;
                variantSection.appendChild(variantdata);


            });
        </script>


    </div>
</body>

</html>
