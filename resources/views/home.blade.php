@extends('layouts.main')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s" id="home">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12">
                    <h1 class="fw-bold mb-3 shadow-sm"><span class="text-primary mb-0 font-bold">SI</span><span
                            class="text-primary mb-0">KUMBANG
                            🐞</span></h1>
                    <h1 class="mb-5 display-1 text-white">Sistem Informasi Tumbuh Kembang</h1>
                    <a href="#kuisioner" class="btn btn-primary px-4 py-3 px-md-5  me-4 btn-border-radius">Mulai
                        Pantau</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5 about bg-light" id="about">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="video border">
                        <button type="button" class="btn btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/watch?v=AbNCCLZoaRY" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4
                        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                        Apa itu SIKUMBANG</h4>
                    <h1 class="text-dark mb-4 display-5">Sistem Informasi Tumbuh Kembang?
                    </h1>
                    <p class="text-dark mb-4">Pantau dan evaluasi tumbuh kembang anak dengan mudah dan akurat! 🎯✨
                        SIKUMBANG hadir sebagai solusi digital untuk mendukung pemantauan perkembangan anak berdasarkan
                        indikator kesehatan yang terpercaya.
                    </p>
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Cek tumbuh kembang anak</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Pantau
                                perkembangan secara real-time</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Mudah digunakan
                                oleh tenaga medis & orang tua
                            </h6>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    @if (session('success'))
        <div id="sessionSuccess" data-success="{{ session('success') }}"></div>
    @endif


    @if (session('children_id'))
        <!-- ketika sudah input data -->
        <div class="container-fluid service py-5" id="kuisioner">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4
                        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                        Kuesioner Tumbuh Kembang
                    </h4>
                </div>
                <div class="row justify-content-center g-6">
                    <div class="col-md-8 col-lg-6">
                        <div class="cards border-0">
                            <div class="cards-body">
                                @if (session('children_id'))
                                    <input type="hidden" id="children_id" value="{{ session('children_id') }}">
                                @endif

                                @if (session('quetions'))
                                    @php $quetions = session('quetions'); @endphp
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center align-middle">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th colspan="5" class="text-center">
                                                        Pertanyaan Kuesioner Anak Umur {{ session('categoryName') }} Bulan
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Pertanyaan</th>
                                                    <th>Deskripsi</th>
                                                    <th>Ya</th>
                                                    <th>Tidak</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($quetions as $index => $q)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td class="text-start">{{ $q->question }}</td>
                                                        <td class="text-start">{{ $q->description }}</td>
                                                        <td>
                                                            <input type="radio" name="answer[{{ $q->id }}]"
                                                                value="yes" class="form-check-input">
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="answer[{{ $q->id }}]"
                                                                value="no" class="form-check-input">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <button class="btn btn-primary mt-3" id="getSelectedData">Kirim Data</button>
                                @endif
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
    @else
        <!-- Service Start -->
        <div class="container-fluid service py-5" id="kuisioner">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4
                        class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                        Kuisioner Tumbuh Kembang</h4>
                    <h1 class="mb-5 display-6">Isi data anak untuk mengukur perkembangan</h1>
                </div>
                <div class="row justify-content-center g-6">
                    <div class="col-md-8 col-lg-6">
                        <div class="cards border-0">
                            <div class="cards-body">
                                <form action="{{ route('children.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="childName" class="form-label">Nama Anak *</label>
                                        <input type="text" class="form-control" name="name" id="childName"
                                            value="{{ old('name') }}" required placeholder="Masukkan nama anak">
                                    </div>

                                    <div class="mb-3">
                                        <label for="childName" class="form-label">Nama Orang Tua *</label>
                                        <input type="text" class="form-control" name="parent_name" id="childName"
                                            value="{{ old('parent_name') }}" required placeholder="Masukkan nama anak">
                                    </div>

                                    <div class="mb-3">
                                        <label for="birthDate" class="form-label">Tanggal Lahir Anak *</label>
                                        <input type="date" class="form-control" name="birth_date" id="birthDate"
                                            value="{{ old('birth_date') }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kelamin *</label>
                                        <div class="d-flex gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="male" value="Laki-laki" required>
                                                <label class="form-check-label" for="male">Laki-laki</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="female" value="Perempuan" required>
                                                <label class="form-check-label" for="female">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address" class="form-label">Alamat *</label>
                                        <textarea class="form-control" id="address" name="address" rows="2" required value="{{ old('address') }}"
                                            placeholder="Masukkan alamat"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Nomor Telepon *</label>
                                        <input type="tel" class="form-control" id="phone" name="phone_number"
                                            value="{{ old('phone_number') }}" required
                                            placeholder="Masukkan nomor telepon">
                                    </div>

                                    <div class="mb-3">
                                        <label for="weight" class="form-label">Berat Badan (Kg) *</label>
                                        <input type="number" class="form-control" id="weight" name="weight"
                                            value="{{ old('weight') }}" required min="0"
                                            placeholder="Masukkan berat badan">
                                    </div>

                                    <div class="mb-3">
                                        <label for="height" class="form-label">Tinggi Badan (cm) *</label>
                                        <input type="number" class="form-control" id="height" name="height"
                                            {{ old('height') }} required min="0"
                                            placeholder="Masukkan tinggi badan">
                                    </div>

                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Kirim Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
    @endif




    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5" id="testimonial">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    Testimoni Kami</h4>
                <h1 class="mb-5 display-3">Apa Kata Para Orang Tua Tentang Kami</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute"
                            style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="/assets/img/testimonial-1.jpg" class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Budi Santoso</h4>
                                <p class="m-0 pb-3">Orang Tua</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">"SIKUMBANG sangat membantu saya dalam memantau tumbuh kembang anak saya.
                                Fitur-fiturnya mudah digunakan dan sangat informatif."</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute"
                            style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="/assets/img/testimonial-2.jpg" class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Dr. Anisa Putri</h4>
                                <p class="m-0 pb-3">Dokter Anak</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">"Sebagai tenaga medis, saya sangat terbantu dengan sistem ini. Data
                                tumbuh kembang anak dapat diakses dengan mudah dan akurat."</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute"
                            style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="/assets/img/testimonial-3.jpg" class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Ahmad Faishal</h4>
                                <p class="m-0 pb-3">Orang Tua</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">"Aplikasi ini sangat bermanfaat untuk membantu saya memahami perkembangan
                                anak-anak di kelas. Sangat direkomendasikan!"</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection

@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            const session = $('#sessionSuccess').data('success');

            if (session) {
                Swal.fire({
                    title: "Good job!",
                    text: "Data added successfully!",
                    icon: "success"
                });
            }
            //test sweatalert

            $('#getSelectedData').on('click', function() {
                let answers = {};
                let allAnswered = true;
                let childId = $('#children_id').val() || null;
                let unansweredQuestions = [];

                // Periksa apakah setiap pertanyaan sudah dijawab
                $('table tbody tr').each(function() {
                    let questionId = $(this).find('input[type="radio"]').first().attr('name').match(
                        /\d+/)[0];
                    let selectedAnswer = $(this).find('input[type="radio"]:checked').val();

                    if (!selectedAnswer) {
                        allAnswered = false;
                        unansweredQuestions.push($(this).find('td:nth-child(2)').text().trim());
                        $(this).css('background-color',
                            '#ffcccc'); // Highlight baris yang belum diisi
                    } else {
                        $(this).css('background-color', ''); // Reset warna jika sudah diisi
                        answers[questionId] = selectedAnswer;
                    }
                });

                // Jika ada pertanyaan yang belum dijawab, tampilkan SweetAlert
                if (!allAnswered) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        html: '<b>Semua pertanyaan harus dijawab!</b><br>Berikut pertanyaan yang belum diisi:<br><ul style="text-align: left;">' +
                            unansweredQuestions.map(q => `<li>${q}</li>`).join('') +
                            '</ul>',
                        confirmButtonText: 'OK'
                    });
                    return;
                }

                // Konfirmasi pengiriman data
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Pastikan jawaban Anda sudah benar!",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Kirim!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Kirim data dengan AJAX
                        $.ajax({
                            url: "{{ route('answers.store') }}",
                            type: "POST",
                            data: {
                                child_id: childId,
                                answers: answers
                            },
                            success: function(response) {
                                console.log(response);
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil!',
                                    text: 'Data berhasil dikirim!',
                                    confirmButtonText: 'OK'
                                }).then(() => {

                                    if (response.data.total_yes >= 9) {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Sesuai umur',
                                            text: 'Selamat! Anak Anda berkembang dengan sangat baik sesuai usianya. Teruskan stimulasi yang sudah dilakukan agar perkembangannya semakin optimal. Jangan lupa untuk memberikan pujian dan kasih sayang agar anak semakin percaya diri. Jadwalkan pemeriksaan berikutnya sesuai anjuran ya, Bu/Pak!',
                                            confirmButtonText: 'OK'
                                        }).then(() => {
                                            history.replaceState(null,
                                                null, window
                                                .location.pathname);
                                            window.location.reload();
                                        })
                                    } else if (response.data.total_yes >= 6 &&
                                        response.data.total_yes < 9) {
                                        Swal.fire({
                                            icon: 'info',
                                            title: 'Meragukan',
                                            text: 'Perkembangan anak Anda sudah cukup baik, tapi masih ada beberapa hal yang perlu diperhatikan. Cobalah untuk lebih sering memberikan stimulasi dengan penuh kasih sayang agar perkembangannya semakin optimal. Kami akan mengajarkan beberapa cara sederhana untuk membantu anak belajar dan berkembang. Jangan lupa untuk kembali dalam 2 minggu untuk pemeriksaan ulang. Jika perkembangannya masih meragukan, kami akan membantu merujuk ke dokter spesialis agar anak mendapatkan perhatian lebih lanjut.',
                                            confirmButtonText: 'OK'
                                        }).then(() => {
                                            history.replaceState(null,
                                                null, window
                                                .location.pathname);
                                            window.location.reload();
                                        })
                                    } else {
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Ada kemungkinan penyimpangan!',
                                            text: 'Kami melihat bahwa perkembangan anak Anda membutuhkan perhatian lebih. Jangan khawatir, yang terpenting adalah memberikan dukungan dan stimulasi yang tepat. Kami menyarankan untuk segera berkonsultasi dengan dokter spesialis tumbuh kembang di rumah sakit rujukan agar anak mendapatkan penanganan terbaik sesuai kebutuhannya. Semakin cepat ditangani, semakin baik untuk perkembangan anak ke depannya.',
                                            confirmButtonText: 'OK'
                                        }).then(() => {
                                            history.replaceState(null,
                                                null, window
                                                .location.pathname);
                                            window.location.reload();
                                        })
                                    }

                                    //     location
                                    // .reload(); // Refresh halaman setelah sukses
                                });
                            },
                            error: function(xhr) {
                                let errorMessage =
                                    'Terjadi kesalahan saat mengirim data!';
                                if (xhr.responseJSON && xhr.responseJSON.message) {
                                    errorMessage = xhr.responseJSON.message;
                                }
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal!',
                                    text: errorMessage,
                                    confirmButtonText: 'Coba Lagi'
                                });
                            }
                        });
                    }
                });
            });

        })
    </script>
@endpush
