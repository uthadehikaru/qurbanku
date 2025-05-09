<div>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Masuk Sekarang!</h1>
                <p class="py-6">Selamat datang kembali! Silakan masukkan kredensial Anda untuk mengakses akun Anda.</p>
            </div>
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <form wire:submit.prevent="login" class="card-body">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" placeholder="Email" class="input input-bordered" wire:model="email" required />
                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Kata Sandi</span>
                        </label>
                        <input type="password" placeholder="Kata Sandi" class="input input-bordered" wire:model="password" required />
                        <label class="label">
                            <a href="#" class="label-text-alt link link-hover">Lupa kata sandi?</a>
                        </label>
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
