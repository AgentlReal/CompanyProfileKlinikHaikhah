  <footer id="contact">
      <div class="container">
          <div class="footer-content">
              <div class="footer-col">
                  <h3>Tentang Klinik Pratama Haikhah</h3>
                  <p>
                      Klinik Pratama Haikhah berkomitmen memberikan layanan kesehatan yang
                      menyeluruh dengan fokus pada kenyamanan dan kesejahteraan pasien.
                      Kami berusaha memberikan perawatan berkualitas tinggi untuk
                      individu dan keluarga.
                  </p>
              </div>
              <div class="footer-col">
                  <h3>Quick Links</h3>
                  <ul class="footer-links">
                      <li><a href="{{ route('index') }}">Home</a></li>
                      <li><a href="{{ route('layanan') }}">Layanan</a></li>
                      <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
                      <li><a href="{{ route('tenaga-kesehatan') }}">Tenaga Kesehatan</a></li>
                      <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h3>Partnerships</h3>
                  <ul class="footer-partnerships">
                      <li>
                          <img src="{{ asset('images/partnership-1.png') }}" alt="" />
                      </li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h3>Contact Us</h3>
                  <div class="contact-info">
                      @foreach($kontak as $k)
                      <div>
                          <i class="fas fa-map-marker-alt"></i>
                          <p>{{ $k->alamat }}</p>
                      </div>
                      <div>
                          <i class="fas fa-phone-alt"></i>
                          <p>{{ $k->NoTlpn }}</p>
                      </div>
                      <div>
                          <i class="fas fa-envelope"></i>
                          <p>{{ $k->email }}</p>
                      </div>
                      <div>
                          <i class="fas fa-clock"></i>
                          <p>
                              {{ $k->Jam }}
                          </p>
                      </div>
                      @endforeach
                  </div>
              </div>
          </div>
          <div class="footer-bottom">
              <p>&copy; 2025 Klinik Pratama Haikhah. All Rights Reserved.</p>
          </div>
      </div>
  </footer>