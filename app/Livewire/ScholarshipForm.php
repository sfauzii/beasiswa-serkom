<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Scholarship;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class ScholarshipForm extends Component
{

    use WithFileUploads, LivewireAlert;

    public $nama;
    public $email;
    public $no_hp;
    public $semester;
    public $ipk;
    public $jenis_beasiswa;
    public $berkas;
    public $isEligible = false;
    public $isLoading = false; // Add loading state property


    // Aturan nilai IPK per semester
    public $ipkValues = [
        1 => 2.8,
        2 => 2.9,
        3 => 3.0,
        4 => 3.1,
        5 => 3.2,
        6 => 3.3,
        7 => 3.4,
        8 => 3.5,
    ];

    protected $rules = [
        'nama' => 'required|string|min:3',
        'email' => 'required|email',
        'no_hp' => 'required|numeric',
        'semester' => 'required|integer|min:1|max:8',
        'ipk' => 'required|numeric|min:2.8|max:4.0',
        'jenis_beasiswa' => 'required_if:isEligible,true|string',
        'berkas' => 'required_if:isEligible,true|file|mimes:pdf,jpg,png,zip|max:2048',
    ];

    protected $messages = [
        'nama.required' => 'Nama wajib diisi.',
        'email.required' => 'Email wajib diisi.',
        'no_hp.required' => 'Nomor HP wajib diisi.',
        'semester.required' => 'Semester wajib dipilih.',
        'ipk.required' => 'IPK wajib diisi.',
        'jenis_beasiswa.required_if' => 'Jenis beasiswa wajib dipilih.',
        'berkas.required_if' => 'Berkas wajib diunggah.',
    ];

    // Mengatur IPK sesuai semester dan mengupdate eligibility
    public function updatedSemester($value)
    {
        if (array_key_exists($value, $this->ipkValues)) {
            $this->ipk = $this->ipkValues[$value];

            // Set eligibility based on IPK >= 3.0
            $this->isEligible = $this->ipk >= 3.0;

            // Reset form fields if not eligible
            if (!$this->isEligible) {
                $this->reset(['jenis_beasiswa', 'berkas']);
                $this->dispatch('scholarship-disabled', [
                    $this->alert('error', 'Maaf, IPK Anda tidak memenuhi syarat minimal (3.0) untuk mendaftar beasiswa.')
                ]);
            }
        } else {
            $this->ipk = null;
            $this->isEligible = false;
            $this->reset(['jenis_beasiswa', 'berkas']);
        }
    }

    public function submit()
    {
        // Double check eligibility before submission
        if (!$this->isEligible) {

            $this->alert('error', 'Maaf, IPK Anda tidak memenuhi syarat minimal (3.0) untuk mendaftar beasiswa.');
            return;
        }

        $this->validate();

        try {
            $this->isLoading = true; // Set loading state to true


            // Simpan data ke database
            Scholarship::create([
                'nama' => $this->nama,
                'email' => $this->email,
                'no_hp' => $this->no_hp,
                'semester' => $this->semester,
                'ipk' => $this->ipk,
                'jenis_beasiswa' => $this->jenis_beasiswa,
                'berkas' => $this->berkas->store('berkas', 'public'),
                'status_ajuan' => 'belum di verifikasi',
            ]);

            // Simpan alert ke dalam session
            session()->flash('success', 'Pendaftaran beasiswa berhasil!');

            $this->reset();

            // Redirect ke route 'hasil'
            return redirect()->route('hasil');
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        } finally {
            $this->isLoading = false; // Reset loading state
        }
    }



    public function render()
    {
        return view('livewire.scholarship-form');
    }
}
