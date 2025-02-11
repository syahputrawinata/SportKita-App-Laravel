@extends('layout.admin')

@section('content')
<div class="container mt-5" style="max-width: 600px;">
    <h2 class="text-center mb-4">Edit User</h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('adminuser.update', ['id' => $users->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="username" class="form-label">Nama User</label>
                    <input type="text" 
                           class="form-control form-control-sm" 
                           id="username" 
                           name="username" 
                           value="{{old('name', $users->username)}}"
                           placeholder="Masukkan nama user" 
                           required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" 
                           class="form-control form-control-sm" 
                           id="email" 
                           name="email" 
                           value="{{old('email', $users->email)}}"
                           placeholder="Masukkan email" 
                           required>
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select form-select-sm" id="role" name="role" required>
                        <option selected disabled>Pilih Role</option>
                        <option value="admin" <?= $users->role === 'Admin' ? 'selected' : '' ?>>Admin</option>
                        <option value="cashier" <?= $users->role === 'Cashier' ? 'selected' : '' ?>>Cashier</option>
                        <option value="user" <?= $users->role === 'user' ? 'selected' : '' ?>>User</option>
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-sm">Edit User</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
