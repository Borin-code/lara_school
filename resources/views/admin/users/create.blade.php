@extends('layouts.auth_admin')

@section('title', 'បង្កើតអ្នកប្រើប្រាស់ថ្មី')

@push('custom_css')
<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush
<style>
    .image-container {
        text-align: center;
    }

    img {
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: all 0.3s ease;
        width: 200px;
        height: 200px;
        object-fit: cover;
        justify-content: center;
        align-items: center;
        display: flex;
        margin: 0 auto;
    }

    .image-container {
        width: 220px;
        height: 200px;
        overflow: hidden;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        margin-bottom: 10px;
        margin-top: 10px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.1);

    }

    img:hover {
        cursor: crosshair;
        transform: scale(1.1);
        /* box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.1); */
        transform: translateY(-10px) ;
        transition: all 0.5s ease-in-out;
    }

</style>
@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 style="font-family: 'Khmer Moul', cursive;
                    font-weight: 400;
                    color: darkblue;
                    background-color: lightblue;
                    padding-top:10px;
                    margin-left: 10px;
                    height: 50px;
                    text-align: center;
                    border-radius: 5px; width: 500px;" class="m-0">បង្កើត អ្នកប្រើប្រាស់</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item" style="font-family: 'Khmer Os SiemReap', cursive;">
                        <a style="color: green; margin-top: -8px;" href="index3.html" class="nav-link">ទំព័រដើម</a>
                    </li>
                    <li class="breadcrumb-item active" style="font-family: 'Khmer Os SiemReap', cursive; color: darkblue;">តារាងកែប្រែអ្នកប្រើប្រាស់</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-9">
            <div class="card" style="font-family: 'Khmer Os SiemReap', cursive; font-weight: 400; color: blue;">
                <div class="card-header">
                    <h3 class="card-title">បញ្ជី អ្នកប្រើប្រាស់</h3>
                </div>
                <div class="card-body">
                    <form id="userForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">ឈ្មោះ</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">អ៊ីមែល</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="username">ឈ្មោះអ្នកប្រើ</label>
                            <input type="text" name="username" class="form-control" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="telegram_id">Telegram ID</label>
                            <input type="text" name="telegram_id" class="form-control" id="telegram_id">
                        </div>
                        <div class="form-group">
                            <label for="password">លេខសំងាត់</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="form-group">
                            <label for="type">ប្រភេទ</label>
                            <select name="type" class="form-control" id="type">
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                                <option value="2">Super Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">លេខទូរស័ព្ទ</label>
                            <input type="text" name="phone" class="form-control" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="address">អាសយដ្ឋាន</label>
                            <input type="text" name="address" class="form-control" id="address">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="font-family: 'Khmer Os SiemReap', cursive; color: blue;">
                <div class="card-header p-1">
                    <label class="text-primary justify-content-center p-0 ml-3 mt-2" for="text-title">បញ្ចូលរូបភាព</label>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="avatar">រូបសញ្ញា</label>
                        <input type="file" id="fileInput" accept="image/*" style="display: none;">

                        <div class="image-container">
                            <img id="image" src="{{ asset('backend')}}/dist/img/add_img.png" alt="Add Image" width="300" class="image-fluid">
                        </div>

                            <img id="avatarPreview" src="#" alt="Avatar Preview" style="display: none; max-width: 200px; margin-top: 10px;" />

                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" name="status" class="form-check-input" id="status" value="1">
                            <label style="font-family: 'Khmer Os SiemReap', cursive;" class="form-check-label text-danger" for="status">ស្ថានភាព <span class="text-success">(Active)</span></label>
                        </div>
                    </div>
                    <button style="font-family: 'Khmer Os SiemReap', cursive;" type="button" class="btn btn-primary " id="updateUser">កែប្រែ</button>
                    <button style="font-family: 'Khmer Os SiemReap', cursive;" type="button" type="button" class="btn btn-warning text-white" id="updateUser">ត្រឡប់ក្រោយ</button>
                </div>
            </div>
            <button style="font-family: 'Khmer Os SiemReap', cursive; width: 100%;" type="button" class="btn btn-success text-white font-weight-bold " id="saveUser">រក្សាទុក</button>
        </div>
    </div>
</div>


@endsection

@push('custom_js')

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        // Avatar preview
        $('#avatar').change(function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#avatarPreview').attr('src', e.target.result).show();
            }
            reader.readAsDataURL(this.files[0]);
        });

        $('#saveUser').on('click', function() {
            var formData = new FormData($('#userForm')[0]);

            $.ajax({
                url: "{{ route('admin.users.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        toastr.success('User created successfully!');
                        setTimeout(function() {
                            window.location.href = "{{ route('admin.users.index') }}";
                        }, 2000);
                    } else {
                        toastr.error('Failed to create user.');
                    }
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    var errorMessages = '';
                    for (var key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            errorMessages += errors[key][0] + '\n';
                        }
                    }
                    toastr.error(errorMessages);
                }
            });
        });
    });


// code from chatgpt (double click to add image)

    // Get the image element and file input element
const image = document.getElementById('image');
const fileInput = document.getElementById('fileInput');

// Function to change the image source when a new file is selected
fileInput.addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            image.src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});

// Event listener for double-click on the image
image.addEventListener('dblclick', function() {
    fileInput.click();  // Trigger the file input click
});
</script>

@endpush
