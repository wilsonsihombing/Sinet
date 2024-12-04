    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-left ml-1">
                    <p class="footer-heading">THANK YOU FOR VISITING OUR WEBSITE</p>
                    <nav class="footer-nav">
                        <a href="{{ url('/') }}">Home</a> | <a href="{{ route('program.kesenian') }}">Program</a> |
                        <a href="{{ url('/moreEvents') }}">Events</a> | <a href="{{ url('/qna') }}">QnA</a> |
                        <a href="#">Karier</a>
                    </nav>
                    <p class="follow-us">FOLLOW US</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook"></i> Facebook</a> |
                        <a href="https://www.instagram.com/himsi.itdel_/"><i class="fab fa-instagram"></i> Instagram</a>
                        |
                        <a
                            href="https://www.linkedin.com/company/himpunan-mahasiswa-sistem-informasi-itdel/posts/?feedView=all"><i
                                class="fab fa-linkedin"></i> LinkedIn</a>
                    </div>
                </div>

                <div class="footer-right">
                    <p class="footer-contact-heading">CONTACT US</p>
                    <p>
                        <i class="fas fa-map-marker-alt"></i> Jl. Sitoluama, Laguboti,
                        Toba
                    </p>
                    <p><i class="fas fa-envelope"></i> himsi@gmail.com</p>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-logo-wrapper">
                <img src="{{ asset('frontend/images/lambang bagus.png') }}" alt="SI Logo" class="footer-logo" />
                </div>

                <div class="footer-title">
                    <p class="title">INFORMATION SYSTEMS</p>
                    <p class="subtitle">Del Institute of Technology</p>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <hr class="footer-line" />
            <p>Copyright &copy; 2024 HIMSI. All right reserved.</p>
        </div>

    </footer>
