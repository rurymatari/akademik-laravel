<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Informasi Akademik Jurusan TI">
    <title>@yield('title', 'Sistem Informasi Jurusan TI')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Custom Premium Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  </head>
  <body class="d-flex flex-column h-100">
      
      @include('layouts.header')    

      <!-- Begin page content -->
      <main class="flex-shrink-0">
          <div class="container">
              @yield('content')
          </div>
      </main>

      @include('layouts.footer')

      <!-- Bootstrap Bundle JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      <!-- SweetAlert2 JS -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <script>
          // SweetAlert2 Success Notification
          @if (session('success'))
              Swal.fire({
                  icon: 'success',
                  title: 'Berhasil!',
                  text: "{{ session('success') }}",
                  timer: 3000,
                  showConfirmButton: false,
                  timerProgressBar: true,
                  background: '#ffffff',
                  customClass: {
                      popup: 'rounded-4'
                  }
              });
          @endif

          // SweetAlert2 Global Delete Confirmation
          document.addEventListener('submit', function(e) {
              const form = e.target;
              const isDeleteForm = form.classList.contains('delete-form') || 
                                   (form.querySelector('input[name="_method"]') && 
                                    form.querySelector('input[name="_method"]').value === 'DELETE');
              
              if (isDeleteForm) {
                  e.preventDefault();
                  
                  Swal.fire({
                      title: 'Apakah Anda yakin?',
                      text: "Data yang dihapus tidak dapat dikembalikan!",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#ef4444', // Tailwind Slate/Red
                      cancelButtonColor: '#64748b',  // Slate 500
                      confirmButtonText: '<i class="bi bi-trash-fill me-1"></i> Ya, hapus!',
                      cancelButtonText: 'Batal',
                      reverseButtons: true,
                      background: '#ffffff',
                      customClass: {
                          popup: 'rounded-4',
                          confirmButton: 'btn btn-danger px-4 py-2 ms-2',
                          cancelButton: 'btn btn-secondary px-4 py-2'
                      },
                      buttonsStyling: false
                  }).then((result) => {
                      if (result.isConfirmed) {
                          form.submit();
                      }
                  });
              }
          });
      </script>
  </body>
</html>
