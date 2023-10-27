<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="0;url={{ $pdfUrl }}" target="_blank">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Espera 3 segundos (3000 milisegundos) y luego redirige
        setTimeout(function() {
            window.location.href = "{{ route('shop') }}";
        }, 3000); // Cambia el valor de 3000 según sea necesario
    </script>
</head>
<body>
    
</body>
</html>