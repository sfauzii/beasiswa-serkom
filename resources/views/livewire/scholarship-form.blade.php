<form wire:submit.prevent="submit">
    <div class="form-group">
        <!-- Nama field -->
        <label for="input-field">Masukkan Nama</label>
        <div class="input-container">
            <img src="frontend/images/profile.svg" alt="Icon" class="input-icon">
            <input type="text" wire:model="nama" id="nama" placeholder="Placeholder Text" class="form-input">
            @error('nama')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email field -->
        <label for="input-field">Masukkan Email</label>
        <div class="input-container">
            <img src="frontend/images/sms.svg" alt="Icon" class="input-icon">
            <input type="email" wire:model="email" id="email" placeholder="Placeholder Text" class="form-input">
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Nomor HP field -->
        <label for="input-field">Nomor HP</label>
        <div class="input-container">
            <img src="frontend/images/call.svg" alt="Icon" class="input-icon">
            <input type="number" wire:model="no_hp" min="0" id="no_hp" placeholder="Placeholder Text"
                class="form-input">
            @error('no_hp')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Semester field -->
        <label for="start-date">Semester saat ini</label>
        <div class="input-container">
            <img src="frontend/images/teacher.svg" alt="Icon" class="input-icon">
            <select wire:model.live="semester" id="semester" class="form-input">
                <option value="">Pilih Semester</option>
                @for ($i = 1; $i <= 8; $i++)
                    <option value="{{ $i }}">Semester {{ $i }}</option>
                @endfor
            </select>
            @error('semester')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- IPK field -->
        <label for="input-field">IPK Terakhir</label>
        <div class="input-container">
            <img src="frontend/images/medal-star.svg" alt="Icon" class="input-icon">
            <input type="text" wire:model="ipk" id="ipk" disabled style="opacity: 0.6; cursor: not-allowed;"
                placeholder="IPK Otomatis" class="form-input">
            @error('ipk')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Warning message for low IPK -->
        @if (!$isEligible && $ipk)
            <div class="alert alert-warning mt-2">
                IPK Anda ({{ $ipk }}) tidak memenuhi syarat minimal 3.0 untuk mendaftar beasiswa.
            </div>
        @endif

        <!-- Jenis Beasiswa field -->
        <label for="start-date">Pilihan Beasiswa</label>
        <div class="input-container">
            <img src="frontend/images/note-2.svg" alt="Icon" class="input-icon">
            <select wire:model="jenis_beasiswa" id="jenis_beasiswa" class="form-input"
                @if (!$isEligible) disabled style="opacity: 0.6; cursor: not-allowed;" @endif>
                <option value="">Pilih Beasiswa</option>
                <option value="akademik">Akademik</option>
                <option value="non-akademik">Non-Akademik</option>
                <option value="pelatihan">Pelatihan</option>
            </select>
            @error('jenis_beasiswa')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Upload Berkas field -->
        <label for="file-upload">Upload Berkas Syarat</label>
        <div class="input-container">
            <img src="frontend/images/folder.svg" alt="Icon" class="input-icon">
            <input type="file" wire:model="berkas" id="berkas" class="form-input"
                @if (!$isEligible) disabled style="opacity: 0.6; cursor: not-allowed;" @endif>
            @error('berkas')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Buttons -->
        <div class="buttons-container">
            <button type="submit" class="button__about btn-get-started daftar relative" wire:loading.attr="disabled"
                wire:target="submit"
                @if (!$isEligible) disabled style="opacity: 0.6; cursor: not-allowed;" @endif>
                <span wire:loading.remove wire:target="submit">
                    Daftar
                </span>
                <span wire:loading wire:target="submit" class="inline-flex items-center">
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    Memproses...
                </span>
            </button>
            <button type="button" class="button__about btn-learn-more daftar" wire:loading.attr="disabled"
                wire:target="submit">
                Cancel
            </button>
        </div>

        <!-- Flash Messages -->
        @if (session()->has('message'))
            <div class="alert alert-success mt-3">
                {{ session('message') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
        @endif
    </div>
</form>

<script>
    // Listen for the scholarship-disabled event
    Livewire.on('scholarship-disabled', data => {
        // You can add additional UI feedback here if needed
        console.log(data.message);
    });
</script>
