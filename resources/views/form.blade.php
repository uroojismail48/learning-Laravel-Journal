<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <title>Form</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body style="background-color:black;">
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <!-- @if($errors->any())
           @foreach($errors->all() as $error)
           <div>
            {{$error}}
           </div>
           @endforeach
            @endif -->
            <form action="adduser" method="post">
                @csrf
            <div class="mb-3">
                <label for="" class="form-label">Email here:</label>
                <input
                    type="text"
                    class="form-control"
                     value="{{old('email')}}"
                    name="email"
                    id="email"
               
                    placeholder="Enter your email"
                />
                <span style="color:red;">@error('email'){{$message}}@enderror</span>
                <br>     
                <label for="" class="form-label">Name Here:</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    value="{{old('name')}}"
                    aria-describedby="emailHelpId"
                    placeholder="password"
                />
                 <span style="color:red;">@error('name'){{$message}}@enderror</span>
                 <br>
                        <label for="" class="form-label">Password here:</label>
                <input
                    type="password"
                    class="form-control"
                    name="password"
                     value="{{old('password')}}"
                    id="password"

                
                    aria-describedby="emailHelpId"
                    placeholder="Password here"
                />
                 <span style="color:red;"> @error('password'){{$message}}@enderror</span>
            </div>
            <button style="background-color:red; font-weight:bold; padding:5px 10px; border:white; color:white;">Submit</button>
            </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
