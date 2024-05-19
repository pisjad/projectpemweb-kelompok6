<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
        <title>UBMerch Admin</title>
    </head>
    <body>
        <div class="px-5">
            <h1 class="text-center py-4">UB Merch</h1>
            <div class="container px-4 py-5 text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div class="btn btn-primary p-3">List Stock</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-primary p-3">
                            Statistik Penjualan
                        </div>
                    </div>
                </div>
            </div>
            <form class="container" action="/student/search" method="GET">
                <div class="row">
                    <input
                        class="col mb-4"
                        type="text"
                        name="search"
                        placeholder="Cari data mahasiswa"
                        value="{{ old('search') }}"
                    />
                    <button
                        class="col btn btn-primary"
                        type="submit"
                        value="search"
                    >
                        Search
                    </button>
                </div>
            </form>
            <div class="bg-danger"><div>test</div></div>
        </div>
    </body>
</html>
