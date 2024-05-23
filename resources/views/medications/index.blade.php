<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to my website!</h1>
        
        @section('content')
            <div class="container mx-auto p-4">
                @livewire('medication-list')
            </div>
        @endsection
    </div>
</body>
</html>
