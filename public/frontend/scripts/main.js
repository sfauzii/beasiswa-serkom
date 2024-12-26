const navbar = document.querySelector('.navbar')
let lastScrollTop = 0 // Variabel untuk menyimpan posisi scroll terakhir
const delta = 5 // Jumlah piksel untuk deteksi scroll

window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY

    // Menangani navbar blur saat di-scroll
    if (currentScroll > 50) {
        navbar.classList.add('scrolled')

        // Menyembunyikan navbar saat menggulir ke bawah
        if (Math.abs(currentScroll - lastScrollTop) >= delta) {
            if (currentScroll > lastScrollTop) {
                navbar.style.transform = 'translateY(-100%)' // Menyembunyikan navbar
            } else {
                navbar.style.transform = 'translateY(0)' // Menampilkan navbar
            }
        }
    } else {
        navbar.classList.remove('scrolled')
        navbar.style.transform = 'translateY(0)' // Pastikan navbar terlihat saat di atas
    }

    lastScrollTop = currentScroll // Update posisi scroll terakhir
})

document.addEventListener('DOMContentLoaded', function () {
    var faqCards = document.querySelectorAll('.faq-card')

    faqCards.forEach(function (card) {
        card.addEventListener('click', function () {
            var answer = this.querySelector('.faq-answer')

            if (this.classList.contains('active')) {
                this.classList.remove('active')
                answer.style.maxHeight = null
            } else {
                this.classList.add('active')
                answer.style.maxHeight = answer.scrollHeight + 'px'
            }
        })
    })
})

// scroll button details car
document.addEventListener('DOMContentLoaded', function () {
    const leftButton = document.querySelector('.scroll-button.left')
    const rightButton = document.querySelector('.scroll-button.right')
    const scrollContainer = document.querySelector('.grid-images')

    leftButton.addEventListener('click', function () {
        scrollContainer.scrollBy({
            left: -200 /* Adjust this value to control the scroll distance */,
            behavior: 'smooth'
        })
    })

    rightButton.addEventListener('click', function () {
        scrollContainer.scrollBy({
            left: 200 /* Adjust this value to control the scroll distance */,
            behavior: 'smooth'
        })
    })
})

// Define the content for each scholarship type
const scholarshipContent = {
    akademik: {
        title: 'Beasiswa Akademik',
        subtitle:
            'Program beasiswa untuk mahasiswa berprestasi di bidang akademik',
        content: `
          <p>
              Program beasiswa yang ditujukan untuk mahasiswa dengan prestasi akademik unggul. Memberikan dukungan finansial penuh untuk biaya kuliah dan tunjangan akademik selama satu semester.
          </p>
            <h4>Persyaratan Beasiswa Akademik:</h4>
            <ul>
                <li>IPK minimal 3.5</li>
                <li>Aktif dalam kegiatan akademik kampus</li>
                <li>Melampirkan transkrip nilai terakhir</li>
                <li>Surat rekomendasi dari dosen</li>
            </ul>
            <h4>Keuntungan:</h4>
            <ul>
                <li>Biaya kuliah penuh selama 1 semester</li>
                <li>Tunjangan buku dan penelitian</li>
                <li>Mentoring dengan dosen pembimbing</li>
            </ul>
        `
    },
    'non-akademik': {
        title: 'Beasiswa Non-Akademik',
        subtitle:
            'Program beasiswa untuk mahasiswa berprestasi di bidang non-akademik',
        content: `
            <p>
                Program beasiswa khusus bagi mahasiswa yang berprestasi di bidang non-akademik
                seperti olahraga, seni, atau organisasi. Menyediakan dukungan biaya kuliah 75% dan fasilitas
                pengembangan bakat.
            </p>

            <h4>Persyaratan Beasiswa Non-Akademik:</h4>
            <ul>
                <li>Memiliki prestasi di bidang olahraga/seni/organisasi</li>
                <li>IPK minimal 3.0</li>
                <li>Melampirkan portfolio prestasi</li>
                <li>Surat rekomendasi dari pembina/pelatih</li>
            </ul>
            <h4>Keuntungan:</h4>
            <ul>
                <li>Biaya kuliah 75% selama 1 semester</li>
                <li>Tunjangan kegiatan non-akademik</li>
                <li>Akses ke fasilitas latihan/berlatih</li>
            </ul>
        `
    },
    pelatihan: {
        title: 'Beasiswa Pelatihan',
        subtitle: 'Program beasiswa pelatihan khusus untuk pengembangan skill',
        content: `
            <p>
                Program pelatihan intensif dengan beasiswa penuh selama 3 bulan. Dilengkapi
                  dengan sertifikasi dan kesempatan magang di perusahaan partner untuk pengembangan karir.
            </p>

            <h4>Persyaratan Beasiswa Pelatihan:</h4>
            <ul>
                <li>Lulus seleksi administrasi</li>
                <li>Bersedia mengikuti pelatihan penuh waktu</li>
                <li>Melampirkan surat motivasi</li>
                <li>Lulus tes kemampuan dasar</li>
            </ul>
            <h4>Keuntungan:</h4>
            <ul>
                <li>Pelatihan intensif selama 3 bulan</li>
                <li>Sertifikat pelatihan</li>
                <li>Kesempatan magang di perusahaan partner</li>
            </ul>
        `
    }
}

// Add click event for all view details buttons
document.querySelectorAll('.view-details').forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.preventDefault()

        // Get the scholarship type from data attribute
        const scholarshipType = this.getAttribute('data-type')

        // Get the content for this scholarship type
        const content = scholarshipContent[scholarshipType]

        // Update popup content
        document.getElementById('popup-title').textContent = content.title
        document.getElementById('popup-subtitle').textContent = content.subtitle
        document.getElementById('popup-content').innerHTML = content.content

        // Show the popup
        document.getElementById('details-popup').style.display = 'flex'
    })
})

// Hide the popup if clicked outside of the card
window.addEventListener('click', function (event) {
    const popup = document.getElementById('details-popup')
    if (event.target === popup) {
        popup.style.display = 'none'
    }
})
