        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Liên Lạc</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>162 Đống Đa, Hải Châu, Đà Nẵng</p>
                                <p><i class="fa fa-envelope"></i>hoangminhcp10@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+941314137</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Theo Dõi</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Thông Tin Công Ty</h2>
                            <ul>
                                <li><a href="#">Về Chúng Tôi</a></li>
                                <li><a href="#">Chính Sách Bảo Mật</a></li>
                                <li><a href="#">Điều Khoản & Điều Kiện</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Thông Tin Mua Hàng</h2>
                            <ul>
                                <li><a href="#">Chính Sách Thanh Toán</a></li>
                                <li><a href="#">Chính Sách Giao Hàng</a></li>
                                <li><a href="#">Chính Sách Hoàn Trả</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>Thanh Toán Bằng:</h2>
                            <img src="/Gernetic/php-mvc/public/assets/frontend/img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Bảo Mật Bởi:</h2>
                            <img src="/Gernetic/php-mvc/public/assets/frontend/img/godaddy.svg" alt="Payment Security" />
                            <img src="/Gernetic/php-mvc/public/assets/frontend/img/norton.svg" alt="Payment Security" />
                            <img src="/Gernetic/php-mvc/public/assets/frontend/img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="/Gernetic/php-mvc/public/assets/frontend/lib/easing/easing.min.js"></script>
        <script src="/Gernetic/php-mvc/public/assets/frontend/lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="/Gernetic/php-mvc/public/assets/frontend/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript">
            function checkRadioButton()
            {
                var radio_color = document.getElementsByName('color');
                var radio_size = document.getElementsByName('size');
                var ischecked_method = false;
                var ischecked_size=false;
                for ( var i = 0; i < radio_color.length; i++) {
                    if(radio_color[i].checked) {
                        ischecked_method = true;
                        
                        break;
                    }
                }
                for ( var i = 0; i < radio_size.length; i++) {
                    if(radio_size[i].checked) {
                        ischecked_size = true;
                        break;
                    }
                }
                if(ischecked_method && ischecked_size)
                {
                    Swal.fire(
                        'Tuyệt Vời!',
                        'Thêm Vào Giỏ Hàng Thành Công!',
                        'success'
                        )
                }
                if(!ischecked_method || !ischecked_size)   { //payment method button is not checked
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi...',
                        text: 'Bạn chưa chọn Size và Màu sắc!',
                        timer: 3000
                    })
                }
            }
            
        </script>
    </body>
</html>
