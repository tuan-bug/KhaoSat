<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phiếu Khảo Sát</title>
    <!-- Link CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="">BỘ NỘI VỤ</h3>
    <h3 class="mb-4 text-center">PHIẾU KHẢO SÁT</h3>
    <h5 class="text-center">Sự hài lòng của người dân đối với sự phục vụ của cơ quan hành chính nhà nước</h5>

    <div class="text-justify mt-5">
        <h4 class="text-center">GIỚI THIỆU KHẢO SÁT</h4>
        <p>
            Bộ Nội vụ là cơ quan Thường trực cải cách hành chính của Chính phủ, được Chính phủ giao hàng năm triển khai khảo sát đo lường sự hài lòng của người dân
            để hiểu được nhận định, đánh giá, mức độ hài lòng và nhu cầu,
            mong đợi của người dân đối với sự phục vụ của cơ quan hành chính nhà nước. Trên cơ sở đó, Bộ Nội vụ tham mưu
            cho Chính phủ chỉ đạo các cơ quan hành chính nhà nước thực hiện các giải pháp cần thiết để phục vụ người dân ngày càng tốt hơn, đáp ứng được nhu cầu,
            mong đợi của người dân.
        </p>
        <p>
            Bộ Nội vụ kính mong Ông/Bà tham gia trả lời phiếu khảo sát đo lường sự hài lòng của người dân một cách đầy đủ, chính xác, khách quan.
            Các thông tin mà Ông/Bà cung cấp trong phiếu khảo sát sẽ được bảo mật theo quy định.
        </p>
        <p>
            Kết quả đo lường đo lường sự hài lòng của người dân hàng năm sẽ được Bộ Nội vụ tổng hợp, phân tích, xây dựng thành Chỉ số hài lòng
            của người dân đối với sự phục vụ của cơ quan hành chính nhà nước để báo cáo Chính phủ và công bố công khai trong cả nước.
        </p>
    </div>
    <form method="POST" action="{{route('add_form')}}" class="mt-5">
        @csrf
        <div class="mb-3">
            <h4 class="text-center">PHẦN A: THÔNG TIN CÁ NHÂN NGƯỜI TRẢ LỜI KHẢO SÁT</h4>

        </div>
        <div class="mb-3">
            <label for="province"><b>Họ và tên:</b></label>
            <input type="text" class="form-control" id="province" name="name" required>
        </div>
        <div class="mb-3">
            <label for="province"><b>Email:</b></label>
            <input type="email" class="form-control" id="province" name="email" required>
        </div>
        <div class="mb-3">
            <label for="province"><b>Số điện thoại:</b></label>
            <input type="text" class="form-control" id="province" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="province"><b>Tỉnh/Thành phố:</b></label>
            <input type="text" class="form-control" id="province" name="city" required>
        </div>
        <div class="mb-3">
            <label for="province"><b>Huyện/Quận/Thị xã/Thành phố:</b></label>
            <input type="text" class="form-control" id="province" name="district" required>
        </div>
        <div class="mb-3">
            <label for="province"><b>Xã/Phường/Thị trấn:</b></label>
            <input type="text" class="form-control" id="province" name="commune" required>
        </div>
        <div class="mb-3">
            <label for="province"><b>Thôn, Tổ dân phố:</b></label>
            <input type="text" class="form-control" id="province" name="village" required>
        </div>
        <!-- Các trường khác -->
        <div class="mb-3">
            <label for="gender"><b>Giới tính:</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="1" required>
                <label class="form-check-label" for="male">Nam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="2" required>
                <label class="form-check-label" for="female">Nữ</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="age"><b>Độ tuổi:</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="age" id="male" value="1" required>
                <label class="form-check-label" for="male">18 - 25 tuổi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="age" id="female" value="2" required>
                <label class="form-check-label" for="female">25 - 34 tuổi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="age" id="male" value="3" required>
                <label class="form-check-label" for="male">35 - 49 tuổi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="age" id="female" value="4" required>
                <label class="form-check-label" for="female">50 - 60 tuổi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="age" id="male" value="5" required>
                <label class="form-check-label" for="male">Trên 60 tuổi</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="ethnicity"><b>Dân tộc:</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ethnicity" id="kinh" value="1" required>
                <label class="form-check-label" for="kinh">Kinh</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ethnicity" id="otherEthnicity" value="2" required>
                <label class="form-check-label" for="otherEthnicity">Khác</label>
            </div>
            <input type="text" class="form-control mt-2" id="province" name="other_ethnicity">
        </div>

        <div class="mb-3">
            <label for="age"><b>Trình độ học vấn:</b></label><br>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="literacy" id="male" value="1" required>
                <label class="form-check-label" for="male">Tiểu học (Cấp I)</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="literacy" id="female" value="2" required>
                <label class="form-check-label" for="female">Trung học cơ sở (Cấp II)</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="literacy" id="male" value="3" required>
                <label class="form-check-label" for="male">Trung học phổ thông (Cấp III)</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="literacy" id="female" value="4" required>
                <label class="form-check-label" for="female">Dạy nghề/ Trung cấp/ Cao đẳng</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="literacy" id="male" value="5" required>
                <label class="form-check-label" for="male">Đại học/ trên Đại học</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="literacy" id="male" value="6" required>
                <label class="form-check-label" for="male">Khác</label>
                <input type="text" class="form-control mt-2" id="province" name="other_literacy" >
            </div>
        </div>

        <div class="mb-3">
            <label for="age"><b>Nghề nghiệp:</b></label><br>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="occupation" id="male" value="1" required>
                <label class="form-check-label" for="male">Nghỉ hưu</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="occupation" id="female" value="2" required>
                <label class="form-check-label" for="female">Không đi làm (ở nhà)</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="occupation" id="male" value="3" required>
                <label class="form-check-label" for="male">Làm công việc tự do (không ký hợp đồng lao động))</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="occupation" id="female" value="4" required>
                <label class="form-check-label" for="female">Sinh viên</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="occupation" id="male" value="5" required>
                <label class="form-check-label" for="male">Làm việc tại tổ chức, doanh nghiệp trong lĩnh vực tư</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="occupation" id="male" value="6" required>
                <label class="form-check-label" for="male">Làm việc tại cơ quan, tổ chức, doanh nghiệp trong lĩnh vực công</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="occupation" id="male" value="7" required>
                <label class="form-check-label" for="male">Khác</label>
                <input type="text" class="form-control mt-2" id="province" name="other_occupation">
            </div>
        </div>

        <div class="mb-3">
            <label><b>Nơi sinh sống:</b></label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="residence_type" id="urban" value="urban" required>
                <label class="form-check-label" for="urban">Đô thị</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="residence_type" id="rural" value="rural" required>
                <label class="form-check-label" for="rural">Nông thôn</label>
            </div>
        </div>

        <div class="mb-3" id="specific_residence">
            <label><b>Nơi sinh sống cụ thể:</b></label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="specific_residence" id="urbanMountain" value="urbanMountain" required>
                <label class="form-check-label" for="urbanMountain">Miền núi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="specific_residence" id="urbanPlain" value="urbanPlain" required>
                <label class="form-check-label" for="urbanPlain">Đồng bằng</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="specific_residence" id="urbanIsland" value="urbanIsland" required>
                <label class="form-check-label" for="urbanIsland">Hải đảo</label>
            </div>
        </div>
        <!-- Thêm các trường radio button khác -->

        <h4 class="text-center">PHẦN B: CÂU HỎI KHẢO SÁT</h4>
        <div>
            <div class="form-check ms-3">
                <span><b>Câu 1. Xin Ông/Bà cho biết mức độ quan tâm của Ông/Bà đối với các chính sách của cơ quan nhà nước trong bảng dưới đây?</b></span>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th class="text-center" scope="col">Không Quan Tâm</th>
                        <th class="text-center" scope="col">Quan Tâm Một Chút</th>
                        <th class="text-center" scope="col">Rất Quan Tâm</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">1. Chính sách về phát triển kinh tế - xã hội</td>
                        <td class="text-center"><input type="radio" name="question1" value="khong_quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question1" value="quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question1" value="rat_quan_tam"></td>
                    </tr>
                    <tr>
                        <td scope="row">2. Chính sách về khám, chữa bệnh</td>
                        <td class="text-center"><input type="radio" name="question2" value="khong_quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question2" value="quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question2" value="rat_quan_tam"></td>
                    </tr>
                    <tr>
                        <td scope="row">3. Chính sách về giáo dục phổ thông</td>
                        <td class="text-center"><input type="radio" name="question3" value="khong_quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question3" value="quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question3" value="rat_quan_tam"></td>
                    </tr>
                    <tr>
                        <td scope="row">4. Chính sách về trật tự, an toàn xã hội</td>
                        <td class="text-center"><input type="radio" name="question4" value="khong_quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question4" value="quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question4" value="rat_quan_tam"></td>
                    </tr>
                    <tr>
                        <td scope="row">5. Chính sách về giao thông đường bộ</td>
                        <td class="text-center"><input type="radio" name="question5" value="khong_quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question5" value="quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question5" value="rat_quan_tam"></td>
                    </tr>
                    <tr>
                        <td scope="row">6. Chính sách về điện sinh hoạt</td>
                        <td class="text-center"><input type="radio" name="question6" value="khong_quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question6" value="quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question6" value="rat_quan_tam"></td>
                    </tr>
                    <tr>
                        <td scope="row">7. Chính sách về nước sinh hoạt</td>
                        <td class="text-center"><input type="radio" name="question7" value="khong_quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question7" value="quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question7" value="rat_quan_tam"></td>
                    </tr>
                    <tr>
                        <td scope="row">8. Chính sách về an sinh, xã hội</td>
                        <td class="text-center"><input type="radio" name="question8" value="khong_quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question8" value="quan_tam"></td>
                        <td class="text-center"><input type="radio" name="question8" value="rat_quan_tam"></td>
                    </tr>
                    <!-- Thêm các dòng câu hỏi khác vào đây -->
                    </tbody>
                </table>

            </div>

            <div class="mb-3">
                <label for="age"> <b>Câu 2. Ông/Bà sử dụng kênh thông tin nào để theo dõi các chính sách nêu ở câu 1?</b></label><br>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_two" id="male" value="1">
                    <label class="form-check-label" for="male">Qua loa phát thanh xã.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_two" id="female" value="2">
                    <label class="form-check-label" for="female">Qua họp, sinh hoạt, thông báo tại khu dân cư.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_two" id="male" value="2">
                    <label class="form-check-label" for="male">Qua cơ quan nhà nước, công chức.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_two" id="female" value="3">
                    <label class="form-check-label" for="female">Qua người thân, bạn bè.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_two" id="male" value="4">
                    <label class="form-check-label" for="male">Qua đài, ti vi, báo chí.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_two" id="female" value="5">
                    <label class="form-check-label" for="female">Qua mạng internet</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_two" id="male" value="6">
                    <label class="form-check-label" for="male">Qua hình thức khác (xin ghi cụ thể): <input type="text" class="form-control" name="other_1"> </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="age"><b>Câu 3. Khi cơ quan nhà nước tổ chức xin ý kiến người dân về chính sách nêu ở câu 1, Ông/Bà có thể tham gia góp ý kiến không?</b></label><br>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_three" id="male" value="1">
                    <label class="form-check-label" for="male">Không thể tham gia, vì không biết thông tin.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_three" id="female" value="2">
                    <label class="form-check-label" for="female">Không thể tham gia, vì bản thân không muốn</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_three" id="male" value="3">
                    <label class="form-check-label" for="male">Có thể tham gia, nếu được biết thông tin</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_three" id="female" value="4">
                    <label class="form-check-label" for="female">Có thể tham gia, nếu được tạo điều kiện thuận tiện.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_three" id="male" value="5">
                    <label class="form-check-label" for="male">Chắc chắn tham gia, vì bản thân mong muốn</label>
                </div>

            </div>

            <div  class="mb-3">
                <label for="age"><b>Câu 4. Ông/Bà có suy nghĩ như thế nào về tình trạng công chức gây phiền hà, sách nhiễu cho người dân hiện nay ở địa phương?</b></label><br>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_four" id="male" value="1">
                    <label class="form-check-label" for="male">Không có công chức nào gây phiền hà, sách nhiễu cho người dân.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_four" id="female" value="2">
                    <label class="form-check-label" for="female">Một số công chức gây phiền hà, sách nhiễu cho người dân.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_four" id="male" value="3">
                    <label class="form-check-label" for="male">Nhiều công chức gây phiền hà, sách nhiễu cho người dân</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="age"><b>Câu 5. Ông/Bà suy nghĩ gì về tình trạng người dân phải đưa tiền ngoài quy định cho công chức để công việc được giải quyết hiện nay ở địa phương?</b></label><br>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_five" id="male" value="1">
                    <label class="form-check-label" for="male">Qua loa phát thanh xã.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_five" id="female" value="2">
                    <label class="form-check-label" for="female">Không có người dân nào phải đưa tiền ngoài quy định cho công chức.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_five" id="male" value="3">
                    <label class="form-check-label" for="male">Một số người dân phải đưa tiền ngoài quy định cho công chứ.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_five" id="female" value="4">
                    <label class="form-check-label" for="female">Nhiều người dân phải đưa tiền ngoài quy định cho công chức.</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="age"><b>Câu 6. Xin Ông/Bà cho biết hình thức nộp hồ sơ và nhận kết quả giải quyết thủ tục hành chính phù hợp với Ông/Bà?</b></label><br>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_six" id="male" value="1">
                    <label class="form-check-label" for="male">Theo hình thức trực tiếp (tại cơ quan).</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_six" id="female" value="2">
                    <label class="form-check-label" for="female">Theo hình thức trực tuyến (qua mạng internet.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_six" id="male" value="3">
                    <label class="form-check-label" for="male">Theo cả hình thức trực tiếp và trực tuyến.</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="age"><b>Câu 7. Xin Ông/Bà cho biết hình thức cung cấp thông tin về chính sách phù hợp với Ông/Bà?</b></label><br>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_seven" id="male" value="1">
                    <label class="form-check-label" for="male">Theo hình thức trực tiếp (tại cơ quan).</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_seven" id="female" value="2">
                    <label class="form-check-label" for="female">Theo hình thức trực tuyến (qua mạng internet).</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_seven" id="male" value="3">
                    <label class="form-check-label" for="male">Theo hình thức trực tiếp và trực tuyến.</label>
                </div>
            </div>

            <div class="mb-3">
                <span class="mb-3"><b>Câu 8. Xin Ông/Bà cho biết trải nghiệm của bản thân Ông/Bà đối với các nội dung trong bảng dưới đây?</b></span>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Nội dung</th>
                        <th scope="col" class="text-center">Đã từng/ Có</th>
                        <th scope="col" class="text-center">Chưa từng/ Không có</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1. Có người thân đang đi học phổ thông</td>
                        <td class="text-center"><input type="radio" name="question81" value="co" required></td>
                        <td class="text-center"><input type="radio" name="question81" value="khong" required></td>
                    </tr>
                    <tr>
                        <td>2. Bản thân hoặc có người thân gần đây đi khám, chữa bệnh tại

                            bệnh viện, phòng khám đa khoa công lập, ở tuyến tỉnh, huyện,

                            trạm y tế ở xã, phường.</td>
                        <td class="text-center"><input type="radio" name="question82" value="co" required></td>
                        <td class="text-center"><input type="radio" name="question82" value="khong" required></td>

                    </tr>
                    <tr>
                        <td>3. Giải quyết công việc với cơ quan nhà nước (các cấp)</td>
                        <td class="text-center"><input type="radio" name="question83" required value="co"></td>
                        <td class="text-center"><input type="radio" name="question83" required value="khong"></td>
                    </tr>
                    <tr>
                        <td>4. Giải quyết thủ tục hành chính</td>
                        <td class="text-center"><input type="radio" name="question84" value="co" required></td>
                        <td class="text-center"><input type="radio" name="question84" value="khong" required></td>
                    </tr>
                    <tr>
                        <td>5. Phản ánh, kiến nghị với cơ quan nhà nước (các cấp)</td>
                        <td class="text-center"><input type="radio" name="question85" value="co" required></td>
                        <td class="text-center"><input type="radio" name="question85" value="khong" required></td>
                    </tr>
                    <tr>
                        <td>6. Góp ý kiến đối với cơ quan nhà nước (các cấp) về chính sách</td>
                        <td class="text-center"><input type="radio" name="question86" value="co" required></td>
                        <td class="text-center"><input type="radio" name="question86" value="khong" required></td>
                    </tr>
                    <tr>
                        <td>7. Phản hồi ý kiến đối với cơ quan nhà nước về kết quả thực hiện

                            chính sách, kết quả thực hiện giải quyết thủ tục hành chính

                            của các chính quyền</td>
                        <td class="text-center"><input type="radio" name="question87" value="co" required></td>
                        <td class="text-center"><input type="radio" name="question87" value="khong" required></td>
                    </tr>
                    <!-- Thêm các dòng câu hỏi khác vào đây -->
                    </tbody>
                </table>
            </div>

            <div class="mb-3">
                <span class="mb-3"><b>Câu 9. Xin Ông/Bà cho biết mức độ hài lòng của Ông/Bà về các nội dung trong bảng bên dưới đây.</b></span>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Nội dung</th>
                        <th scope="col" class="text-center">Rất không hài lòng</th>
                        <th scope="col" class="text-center">Không hài lòng</th>
                        <th scope="col" class="text-center">Bình thường</th>
                        <th scope="col" class="text-center">Hài lòng</th>
                        <th scope="col" class="text-center">Rất hài lòng</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th colspan="6">I. VIỆC BAN HÀNH, TỔ CHỨC THỰC HIỆN

                            CÁC CHÍNH SÁCH

                            (Các chính sách nêu ở câu số 1 ở trang 1)
                        </th>


                    </tr>
                    <tr>
                        <th colspan="6">A. Trách nhiệm giải trình của cơ quan</th>
                    </tr>
                    <tr>
                        <td>1. Cơ quan nhà nước cung cấp, giải thích thông tin về

                            các chính sách theo nhiều hình thức, giúp mọi người

                            dân dễ tìm, dễ thấy
                        </td>
                        <td class="text-center"><input type="radio" name="question91" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question91" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question91" value="binh_thuong" required ></td>
                        <td class="text-center"><input type="radio" name="question91" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question91" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">2. Cơ quan nhà nước cung cấp thông tin về các chính

                            sách đầy đủ, dễ hiểu đối với người dân
                        </td>
                        <td class="text-center"><input type="radio" name="question92" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question92" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question92" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question92" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question92" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <th colspan="6">B. Sự tham gia của người dân</th>
                    </tr>
                    <tr>
                        <td scope="row">3. Cơ quan nhà nước tổ chức xin ý kiến góp ý của người

                            dân đối với các chính sách theo nhiều hình thức, giúp

                            mọi người dân tham gia góp ý kiến dễ dàng
                        </td>
                        <td class="text-center"><input type="radio" name="question93" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question93" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question93" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question93" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question93" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">4. Cơ quan nhà nước tổ chức nhiều hình thức để người

                            dân phản hồi ý kiến về kết quả, tác động của các chính

                            sách, giúp người dân tham gia phản hồi ý kiến dễ dàng
                        </td>
                        <td class="text-center"><input type="radio" name="question94" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question94" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question94" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question94" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question94" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <th colspan="6">C. Chất lượng chính sách</th>
                    </tr>
                    <tr>
                        <td scope="row">5. Chính sách về phát triển kinh tế - xã hội ở địa phương

                            phù hợp .

                            (Gồm các quy định về thu hút đầu tư, kinh doanh, việc

                            làm, tín dụng…)
                        </td>
                        <td class="text-center"><input type="radio" name="question95" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question95" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question95" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question95" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question95" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">6. Chính sách về khám chữa bệnh phù hợp.

                            (Gồm các quy định về bệnh viện, phòng khám, trạm y

                            tế; việc khám, chữa bệnh; bảo hiểm y tế; về viện phí…

                            ở các bệnh viện công, phòng khám công, trạm y tế
                        </td>
                        <td class="text-center"><input type="radio" name="question96" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question96" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question96" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question96" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question96" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">7. Chính sách về giáo dục phổ thông phù hợp.

                            (Gồm các quy định về chương trình giảng dạy, sách

                            giáo khoa, trường học, lớp học, đánh giá học sinh, thủ

                            tục nhập học … ở các trường phổ thông công lập)
                        </td>
                        <td class="text-center"><input type="radio" name="question97" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question97" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question97" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question97" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question97" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">8. Chính sách trật tự, an toàn xã hội phù hợp.

                            (Gồm các quy định về quản lý dân cư, giữ gìn trật tự nơi

                            công cộng, quản lý an ninh mạng; phòng chống tội

                            phạm…)
                        </td>
                        <td class="text-center"><input type="radio" name="question98" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question98" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question98" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question98" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question98" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">9. Chính sách về giao thông đường bộ phù hợp.

                            (Gồm các quy định về xây dựng, phát triển đường bộ;

                            giao thông đường bộ; bảo đảm trật tự, an toàn giao

                            thông đường bộ …)
                        </td>
                        <td class="text-center"><input type="radio" name="question99" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question99" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question99" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question99" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question99" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">10. Chính sách về điện sinh hoạt phù hợp.

                            (Gồm các quy định về cung cấp, quản lý, phát triển

                            điện sinh hoạt; giá tiền, chất lượng điện sinh hoạt …)
                        </td>
                        <td class="text-center"><input type="radio" name="question901" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question901" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question901" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question901" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question901" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">11. Chính sách về nước sinh hoạt phù hợp.

                            (Gồm các quy định về cung cấp, quản lý, phát triển

                            nước sinh hoạt; giá tiền, chất lượng nước sinh hoạt …)
                        </td>
                        <td class="text-center"><input type="radio" name="question902" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question902" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question902" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question902" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question902" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">12. Chính sách về an sinh xã hội phù hợp.

                            (Gồm các quy định về bảo hiểm xã hội, bảo hiểm thất

                            nghiệp; hỗ trợ thường xuyên đối với người có công,

                            người nghèo, người tàn tật… và hỗ trợ đột xuất cho người dân khi gặp mất mùa, thiên tai …)
                        </td>
                        <td class="text-center"><input type="radio" name="question903" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question903" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question903" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question903" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question903" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <th colspan="6"><b>D. Kết quả, tác động của chính sách</b></th>
                    </tr>
                    <tr>
                        <td scope="row">13. Chính sách của địa phương đã góp phần giúp cho

                            kinh tế gia đình của người dân địa phương ngày càng tốt

                            hơn trong thời gian qua.
                        </td>
                        <td class="text-center"><input type="radio" name="question904" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question904" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question904" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question904" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question904" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">14. Chính sách của địa phương đã góp phần giúp cho

                            chất lượng cuộc sống của người dân địa phương ngày

                            càng tốt hơn trong thời gian qua.
                        </td>
                        <td class="text-center"><input type="radio" name="question905" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question905" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question905" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question905" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question905" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <th colspan="6"><b>II. VIỆC CUNG ỨNG DỊCH VỤ HÀNH CHÍNH CÔNG</b></th>
                    </tr>
                    <tr>
                        <th colspan="6"><b>I. Tiếp cận</b></th>
                    </tr>
                    <tr>
                        <td scope="row">15. Cơ quan cung cấp thông tin về việc giải quyết thủ

                            tục hành chính theo nhiều hình thức, dễ tiếp cận, dễ

                            hiểu đối với mọi người dân.
                        </td>
                        <td class="text-center"><input type="radio" name="question906" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question906" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question906" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question906" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question906" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">16. Trụ sở cơ quan tiếp nhận hồ sơ, trả kết quả giải quyết

                            thủ tục hành chính có biển hiệu, hướng dẫn rõ ràng, dễ

                            thấy.
                        </td>
                        <td class="text-center"><input type="radio" name="question907" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question907" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question907" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question907" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question907" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">17. Trụ sở cơ quan tiếp nhận hồ sơ, trả kết quả giải

                            quyết thủ tục hành chính sạch sẽ, văn minh.
                        </td>
                        <td class="text-center"><input type="radio" name="question908" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question908" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question908" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question908" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question908" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">18. Trang thiết bị phục vụ người dân đầy đủ, chất lượng

                            tốt, giúp người dân giải quyết công việc dễ dàng hơn.
                        </td>
                        <td class="text-center"><input type="radio" name="question909" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question909" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question909" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question909" value="hai_long" required> </td>
                        <td class="text-center"><input type="radio" name="question909" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <th colspan="6"><b>II. Thủ tục hành chính</b></th>
                    </tr>
                    <tr>
                        <td scope="row">19. Quy định thủ tục hành chính được niêm yết công

                            khai tại trụ sở cơ quan tiếp nhận hồ sơ, trả kết quả giải

                            quyết thủ tục hành chính dễ thấy, dễ hiểu.
                        </td>
                        <td class="text-center"><input type="radio" name="question910" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question910" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question910" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question910" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question910" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">20. Thành phần hồ sơ người dân phải nộp là đúng quy định</td>
                        <td class="text-center"><input type="radio" name="question911" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question911" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question911" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question911" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question911" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">21. Mức phí/lệ phí người dân phải nộp là đúng quy định.</td>
                        <td class="text-center"><input type="radio" name="question912" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question912" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question912" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question912" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question912" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">22. Thời hạn giải quyết thủ tục hành chính cho người

                            dân là đúng quy định.
                        </td>
                        <td class="text-center"><input type="radio" name="question913" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question913" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question913" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question913" value="hai_long" required> </td>
                        <td class="text-center"><input type="radio" name="question913" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <th colspan="6"><b>III. Công chức trực tiếp giải quyết công việc</b></th>
                    </tr>
                    <tr>
                        <td>23. Công chức có thái độ giao tiếp lịch sự, tôn trọng

                            đối với người dân.
                        </td>
                        <td class="text-center"><input type="radio" name="question914" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question914" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question914" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question914" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question914" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">24. Công chức cung cấp thông tin, trả lời kịp thời, đầy

                            đủ các câu hỏi, ý kiến của người dân.
                        </td>
                        <td class="text-center"><input type="radio" name="question915" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question915" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question915" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question915" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question915" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">25. Công chức hướng dẫn hồ sơ dễ hiểu, đảm bảo người

                            dân có thể hoàn thiện hồ sơ sau một lần hướng dẫn.
                        </td>
                        <td class="text-center"><input type="radio" name="question916" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question916" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question916" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question916" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question916" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">26. Công chức tuân thủ đúng quy định trong giải quyết

                            công việc cho người dân.
                        </td>
                        <td class="text-center"><input type="radio" name="question917" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question917" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question917" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question917" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question917" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">27. Công chức tận tình đối với người dân trong quá

                            trình giải quyết công việc.
                        </td>
                        <td class="text-center"><input type="radio" name="question918" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question918" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question918" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question918" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question918" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <th colspan="6">
                            <b>
                                IV. Kết quả (Có thể là được cấp giấy tờ hoặc bị từ

                                chối cấp giấy tờ)
                            </b>
                        </th>
                    </tr>
                    <tr>
                        <td scope="row">28. Kết quả giải quyết thủ tục hành chính cho người

                            dân được trả đúng hẹn.
                        </td>
                        <td class="text-center"><input type="radio" name="question919" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question919" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question919" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question919" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question919" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">29. Kết quả giải quyết thủ tục hành chính cho người

                            dân có thông tin đầy đủ, chính xác
                        </td>
                        <td class="text-center"><input type="radio" name="question920" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question920" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question920" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question920" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question920" value="rat_hai_long" required> </td>
                    </tr>
                    <tr>
                        <td scope="row">30. Kết quả giải quyết thủ tục hành chính cho người dân

                            đảm bảo tính công bằng.
                        </td>
                        <td class="text-center"><input type="radio" name="question921" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question921" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question921" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question921" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question921" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <th colspan="6">
                            <b>
                                V. Cơ quan nhà nước tiếp nhận, xử lý phản ánh,
                                kiến nghị của người dân
                            </b>
                        </th>
                    </tr>
                    <tr>
                        <td scope="row">31. Cơ quan có bố trí hình thức tiếp nhận phản ánh,

                            kiến nghị, giúp người dân phản ánh, kiến nghị dễ dàng
                        </td>
                        <td class="text-center"><input type="radio" name="question922" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question922" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question922" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question922" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question922" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">32. Cơ quan tiếp nhận, xử lý phản ánh, kiến nghị của

                            người dân đúng quy định.
                        </td>
                        <td class="text-center"><input type="radio" name="question923" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question923" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question923" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question923" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question923" value="rat_hai_long" required></td>
                    </tr>
                    <tr>
                        <td scope="row">33. Cơ quan thông báo kết quả xử lý phản ánh kiến nghị

                            cho người dân kịp thời.
                        </td>
                        <td class="text-center"><input type="radio" name="question924" value="rat_khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question924" value="khong_hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question924" value="binh_thuong" required></td>
                        <td class="text-center"><input type="radio" name="question924" value="hai_long" required></td>
                        <td class="text-center"><input type="radio" name="question924" value="rat_hai_long" required></td>
                    </tr>
                    </tbody>
                </table>
            </div>


            <div class="mb-3">
                <span class="mb-3"><b>Câu 10. Xin Ông/Bà cho biết mức độ Ông/Bà mong muốn cơ quan nhà nước tập trung ưu tiên nguồn lực để cải thiện chất lượng các vấn đề trong bảng dưới đây?</b></span>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Nội dung</th>
                        <th scope="col" class="text-center">Rất nhiều</th>
                        <th scope="col" class="text-center">Nhiều </th>
                        <th scope="col" class="text-center">Ít </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">1. Nâng cao hơn nữa chất lượng cung cấp thông tin cho người

                            dân
                        </td>
                        <td class="text-center"><input type="radio" name="question100" value="rat_nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question100" value="nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question100" value="it" required></td>
                    </tr>
                    <tr>
                        <td scope="row">2. Nâng cao hơn nữa chất lượng trụ sở, trang thiết bị phục vụ

                            giải quyết công việc cho người người dân.
                        </td>
                        <td class="text-center"><input type="radio" name="question101" value="rat_nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question101" value="nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question101" value="it" required></td>

                    </tr>
                    <tr>
                        <td scope="row">3. Nâng cao hơn nữa năng lực của cán bộ, công chức, viên

                            chức trong giải quyết công việc cho người dân.
                        </td>
                        <td class="text-center"><input type="radio" name="question102" value="rat_nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question102" value="nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question102" value="it" required></td>
                    </tr>
                    <tr>
                        <td scope="row">4. Nâng cao hơn nữa thái độ phục vụ của cán bộ, công chức,

                            viên chức đối với người dân.
                        </td>
                        <td class="text-center"><input type="radio" name="question103" value="rat_nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question103" value="nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question103" value="it" required></td>
                    </tr>
                    <tr>
                        <td scope="row">5. Tăng cường ứng dụng công nghệ thông tin, chuyển đổi số

                            trong giải quyết công việc cho người dân.
                        </td>
                        <td class="text-center"><input type="radio" name="question104" value="rat_nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question104" value="nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question104" value="it" required></td>
                    </tr>
                    <tr>
                        <td scope="row">6. Nâng cao hơn nữa sự quan tâm của cơ quan nhà nước đối

                            với nhu cầu, mong đợi của người dân.
                        </td>
                        <td class="text-center"><input type="radio" name="question105" value="rat_nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question105" value="nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question105" value="it" required></td>
                    </tr>
                    <tr>
                        <td scope="row">7. Nâng cao hơn nữa chất lượng tiếp nhận, giải quyết ý kiến

                            góp ý, phản ánh, kiến nghị của người dân.
                        </td>
                        <td class="text-center"><input type="radio" name="question106" value="rat_nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question106" value="nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question106" value="it" required></td>
                    </tr>
                    <tr>
                        <td scope="row">9. Nâng cao hơn nữa chất lượng các chính sách quan trọng đối

                            với đời sồng của người dân.
                        </td>
                        <td class="text-center"><input type="radio" name="question107" value="rat_nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question107" value="nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question107" value="it" required></td>
                    </tr>
                    <tr>
                        <td scope="row">10. Nâng cao hơn nữa chất lượng dịch vụ hành chính công

                            (việc giải quyết thủ tục hành chính).
                        </td>
                        <td class="text-center"><input type="radio" name="question108" value="rat_nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question108" value="nhieu" required></td>
                        <td class="text-center"><input type="radio" name="question108" value="it" required></td>
                    </tr>
                    <!-- Thêm các dòng câu hỏi khác vào đây -->
                    </tbody>
                </table>
            </div>
            <div class="mb-3">
                <div>
                    <label for="province"><b>Ý kiến khác (xin ghi cụ thể):</b></label>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" name="reviews" placeholder="Nhập ý kiến khác tại đây..." id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Ý kiến</label>
                </div>
            </div>
        </div>

        <div>
            <h4 class="text-center">XIN TRÂN TRỌNG CẢM ƠN ÔNG/BÀ!</h4>
        </div>
        <div class="text-center mt-4 mb-5">
            <button type="button" class="btn btn-primary btn-lg uppercase-text"><h4>GỬI</h4></button>

        </div>


    </form>
</div>

<!-- Link JS của Bootstrap (đặt trước thẻ đóng body) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // // Enable/disable text input when 'Khác' option is selected
    // const otherEthnicityRadio = document.getElementById('otherEthnicity');
    // const specificEthnicityInput = document.getElementById('specificEthnicity');
    //
    // otherEthnicityRadio.addEventListener('change', function() {
    //     if (this.checked) {
    //         specificEthnicityInput.disabled = false;
    //     } else {
    //         specificEthnicityInput.disabled = true;
    //         specificEthnicityInput.value = ''; // Clear the input when not selected
    //     }
    // });
</script>
</body>
</html>
